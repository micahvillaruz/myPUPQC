$(function () {
	$.ajax({
		type: 'GET',
		url: apiURL + 'student/view/dpa_agreement',
		headers: AJAX_HEADERS,
		success: (result) => {
			if (result.data.length == 0) {
				$('#dataPrivacy').modal('show')
			} else {
				const signedDate = moment(result.data.is_signed).format('MMMM D, YYYY h:mm A')
				$('#dataPrivacy').modal('hide')
				$('#checkDataPrivacy').html(`
                <div class="alert alert-success" role="alert">
                <h4 class="alert-heading"><i class="mdi mdi-checkbox-marked-circle-outline"></i> You are DPA Compliant!</h4>
                <p class="mb-0">You can able to access all systems for myPUPQC. You have signed the Data Collection Policy and Warranty for Reporting Agreement on:
                    <span class="text-primary" id="dpaSignedDate">${signedDate}</span>
                </p>
                </div>`)
			}
		},
	})

	$('#dpaDisagreeButton').click(function () {
		$('#checkDataPrivacy').html(`
        <div class="alert alert-info" role="alert">
            <h4 class="alert-heading"><i class="mdi mdi-information"></i> Data Privacy Agreement</h4>
            <p>To use all of the systems in myPUPQC, you must agree to the Data Collection Policy and Warranty for Reporting Agreement. If you are seeing this message, that means you haven't agreed to the form.</p>
            <hr>
            <p class="mb-0">To access the form again,
                <span class="text-primary" data-bs-toggle="modal" data-bs-target="#dataPrivacy" role="button">click here.</span>
            </p>
        </div>`)
	})

	$('#dpaAgreeButton').click(function () {
		$.ajax({
			type: 'POST',
			url: apiURL + 'student/submit/dpa_agreement',
			headers: AJAX_HEADERS,
			success: (result) => {
				if (result.data.is_signed) {
					location.reload()
				}
			},
		})
	})

	setInterval(updateClock, 1000)
	quoteAPI()
	loadAnnouncements()
	loadEvents()
})

// Analog Clock
function updateClock() {
	var now = moment(),
		second = moment().seconds() * 6,
		minute = moment().minutes() * 6 + second / 60,
		hour = ((moment().hours() % 12) / 12) * 360 + 90 + minute / 12

	$('#hour').css('transform', 'rotate(' + hour + 'deg)')
	$('#minute').css('transform', 'rotate(' + minute + 'deg)')
	$('#second').css('transform', 'rotate(' + second + 'deg)')
}

// Digital Clock
setInterval(() => {
	// Get clock containers
	var clockDate = $('#clockDate')
	var clockTime = $('#clockTime')
	var clockSession = $('#clockSession')

	// Get formatted date, time, and session values
	const clockDateVal = moment().format('dddd, MMMM D, YYYY')
	const clockTimeVal = moment().format('h:mm:ss')
	const clockSessionVal = moment().format('A')

	// Set or display formatted clock to the containers
	// Change only the content if not equal to the current content for better performance
	if (clockDate.html() != clockDateVal) clockDate.html(clockDateVal)
	if (clockTime.html() != clockTimeVal) clockTime.html(clockTimeVal)
	if (clockSession.html() != clockSessionVal) clockSession.html(clockSessionVal)
}, 1) // Digital Clock

quoteAPI = () => {
	$.ajax({
		type: 'GET',
		url: `https://quotes.rest/qod?category=inspire&language=en`,
		success: (result) => {
			let quote = result.contents.quotes[0].quote
			let author = result.contents.quotes[0].author

			$('#quote').html(quote)
			$('#author').html(author)
		},
	})
}

// Student Announcement Tracker
loadAnnouncements = () => {
	var now = moment()
	console.log('hi')
	$.ajaxSetup({
		headers: {
			Accept: 'application/json',
			Authorization: 'Bearer ' + TOKEN,
			ContentType: 'application/x-www-form-urlencoded',
		},
	})
	$.ajax({
		type: 'GET',
		url: apiURL + 'annsys/student/get_ten_announcements',
		dataType: 'json',
		cache: false,
		success: (result) => {
			const data = result.data
			data.forEach((item) => {
				const title = item.announcement_title
				const description = item.announcement_description
				const date = moment(item.created_at).from(now)
				const id = item.announcement_id

				// ! Add modal on href if possible
				const annnouncement_to_append = `
                <div class="d-flex text-reset notification-item d-block dropdown-item active">
                    <div class="flex-shrink-0 avatar-xs me-3">
                        <span class="avatar-title bg-soft-info text-info rounded-circle fs-16">
                            <i class="ri-checkbox-circle-fill"></i>
                        </span>
                    </div>
                    <a href="#" onclick="return loadSpecificAnnouncement(\'${id}\')">
                        <div class="flex-grow-1 text-muted">
                            <h6 class="mb-1 fs-14">${title}</h6>
                            <p class="mb-0">
                                ${description}
                            </p>
                        </div>
                    </a>
                    <div class="flex-shrink-0 ms-2">
                        <div class="fs-11 text-muted">
                            <i class="mdi mdi-clock-outline"></i> ${date}
                        </div>
                    </div>
                </div>
                `

				$('#announcements').append(annnouncement_to_append)
			})
		},
	})
	console.log('hello??')
}

// Load Specific Announcement
// parameter: id = Announcement id
loadSpecificAnnouncement = (id) => {
	var now = moment()
	$.ajaxSetup({
		headers: {
			Accept: 'application/json',
			Authorization: 'Bearer ' + TOKEN,
			ContentType: 'application/x-www-form-urlencoded',
		},
	})
	$.ajax({
		type: 'GET',
		url: apiURL + 'annsys/student/get_announcement/' + id, // api add author name in the response
		dataType: 'json',
		cache: false,
		success: (result) => {
			const data = result.data

			const id = data.announcement_id
			const title = data.announcement_title
			const description = data.announcement_description
			const content = data.announcement_content
			const date = moment(data.created_at).format('MMMM D, YYYY')

			$('#myAnnouncementTitle').html(title)
			$('#myAnnouncementAuthor').html('PUP Staff') // this will be replaced by the actual author name once API is ready.
			$('#myAnnouncementContent').html(content)
			$('#myAnnouncementDate').html(date)

			$('#myAnnouncementModalId').modal('show')
		},
	})
}

// Student EVRSERS Tracker
loadEvents = () => {
	$.ajaxSetup({
		headers: {
			Accept: 'application/json',
			Authorization: 'Bearer ' + TOKEN,
			ContentType: 'application/x-www-form-urlencoded',
		},
	})

	$.ajax({
		type: 'GET',
		cache: false,
		url: apiURL + `evrsers/student/view_approved_reservation`,
		dataType: 'json',
		success: (result) => {
			const data = result.data

			// create a list item for each result
			data.forEach((item) => {
				console.log(item)
				const title = item.event_title
				const organization_name = item.organization_assigned_to_reservations.display_name
				const time_from = item.time_from
				const time_to = item.time_to
				const pubmat_img = item.ReservationPubmats.pubmats_images

				const reserve_date = item.reserve_date
				// moment.js get month of reserve_date
				const month = moment(reserve_date).format('MMM')
				// moment.js get day of reserve_date
				const day = moment(reserve_date).format('D')

				$('#upcoming-events').append(`
					<li class="list-group-item ps-0">
						<div class="d-flex align-items-center g-3">
							<div class="flex-shrink-0 me-3 mini-stats-wid">
								<div class="avatar-sm p-1 py-2 h-auto bg-light rounded-3 mini-stat-icon bg-soft-success">
									<div class="text-center">
										<h5 class="mb-0">${day}</h5>
										<div class="text-muted">${month} </div>
									</div>
								</div>
						</div>
						<div class="flex-grow-1">
							<h5 class="text-muted mt-0 mb-1 fs-13">${time_from} - ${time_to}</h5>
							<a href="#" class="d-block text-reset fs-14 mb-0 fw-medium">${title} </a>
								<div id="organization" class="mt-0 fs-6">
									<span class="badge badge-outline-info fw-bold mb-0">
								<i class="mdi mdi-book-open-page-variant me-1"></i>
									${organization_name}
								</span>
								</div>
								</div>
								<a href="${pubmat_img}" class="d-flex">
								<img src="${pubmat_img}" class="avatar-sm img-fluid"></img>
								</a>
						</div>
						
					</li>
				`)
			})
		},
	})
}
