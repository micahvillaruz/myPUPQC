$(function () {
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

				// ! Add modal on href if possible
				const annnouncement_to_append = `
                <div class="d-flex text-reset notification-item d-block dropdown-item active">
                    <div class="flex-shrink-0 avatar-xs me-3">
                        <span class="avatar-title bg-soft-info text-info rounded-circle fs-16">
                            <i class="ri-checkbox-circle-fill"></i>
                        </span>
                    </div>
                    <a href="#">
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
				const title = item.event_title
				const organization_name = item.organization_name
				const time_from = item.time_from
				const time_to = item.time_to

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
							</div>
						</div>
						</div>
					</li>
				`)

				// Condition whether event is from an academic organization / non-academic organization / student government organization
				// or others

				let acad_orgs = ['COMMITS', 'DOMT.CS', 'FBTO', 'JMS', 'SPAS', 'YES']
				let nonacad_orgs = ['KATAGA', 'MUSA', 'PSC', 'Vox Nova', 'Other']
				let sgo_orgs = ['SSC', 'COL']

				if (acad_orgs.includes(organization_name)) {
					$('#organization').html(`
						<span class="badge badge-outline-info fw-bold mb-0">
						<i class="mdi mdi-book-open-page-variant me-1"></i>
							${organization_name}
						</span>
					`)
				} else if (nonacad_orgs.includes(organization_name)) {
					$('#organization').html(`
						<span class="badge badge-outline-danger fw-bold mb-0">
						<i class="mdi mdi-party-popper me-1"></i>
							${organization_name}
						</span>
					`)
				} else if (sgo_orgs.includes(organization_name)) {
					$('#organization').html(`
						<span class="badge badge-outline-dark fw-bold mb-0">
						<i class="mdi mdi-account-group me-1"></i>
							${organization_name}
						</span>
					`)
				}
			})
		},
	})
}
