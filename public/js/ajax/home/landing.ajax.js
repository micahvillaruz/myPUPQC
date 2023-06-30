$(function () {
	$('#contact_form').on('submit', function (e) {
		e.preventDefault()
		if ($('#contact_form')[0].checkValidity()) {
			sendMessageToAdmin()
		}
	})
	fetchNews()
	fetchAdvisory()
})

sendMessageToAdmin = () => {
	const formData = new FormData($('#contact_form')[0])
	const data = {}
	// loop through form data and its values using .entries()
	for (const [key, value] of formData.entries()) {
		data[key] = value
	}

	$.ajax({
		url: apiURL + 'get-in-touch',
		type: 'POST',
		data: data,
		dataType: 'json',
		success: (result) => {
			console.log(result)
			if (result) {
				$('#contact_form')[0].reset()
				$('#contact_form').removeClass('was-validated')
				$('#contact_form').find('.invalid-feedback').remove()
				$('#contact_form').find('.is-invalid').removeClass('is-invalid')
				Swal.fire({
					html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Message sent successfully!</h4><p class="text-muted mx-4 mb-0">You have successfully sent your message!</p></div></div>',
					showCancelButton: !0,
					showConfirmButton: !1,
					cancelButtonClass: 'btn btn-success w-xs mb-1',
					cancelButtonText: 'Ok',
					buttonsStyling: !1,
					showCloseButton: !0,
				}).then(() => {
					refreshPage()
				})
			} else {
				Swal.fire({
					icon: 'error',
					title: 'Oops...',
					text: 'Something went wrong!',
				})
			}
		},
	}).fail(() => {
		Swal.fire({
			html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Something went Wrong!</h4><p class="text-muted mx-4 mb-0">There was an error while sending your message. Please try again.</p></div></div>',
			showCancelButton: !0,
			showConfirmButton: !1,
			cancelButtonClass: 'btn btn-danger w-xs mb-1',
			cancelButtonText: 'Dismiss',
			buttonsStyling: !1,
			showCloseButton: !0,
		})
	})
}

fetchNews = () => {
	$.ajax({
		url: apiURL + 'news',
		type: 'GET',
		dataType: 'json',
		success: (result) => {
			const newsInArray = result.data

			// check if there's a news
			if (newsInArray.length > 0){
				let slider = $('#news_slider')
				newsInArray.forEach((news) => {
					const date = new Date(news.created_at)
					const link =
						baseURL == 'http://localhost/myPUPQC/'
							? baseURL + `news/${news.reference_id}`
							: news.announcement_link
					const article_date = date.toLocaleDateString('en-US', {
						year: 'numeric',
						month: 'long',
						day: 'numeric',
					})
					const article_time = date.toLocaleTimeString('en-US', {
						hour: 'numeric',
						minute: 'numeric',
						hour12: true,
					})
					// albert palitan mo ito in the future
					let imageToShow = news.announcement_image
						? news.announcement_image
						: 'https://upload.wikimedia.org/wikipedia/commons/b/b1/Loading_icon.gif?20151024034921'

					let newsOnSlider = `
					<div class="swiper-slide">
						<a href="${link}">
							<img src="${imageToShow}" class="img-fluid news-img" />
							<h5 class="text-wrap mb-3 mt-4 text-primary">${news.announcement_title}</h5>
						</a>
						<span class="h5 fw-light">Posted: ${article_date}</span>
						<small class="text-muted">${article_time}</small>
					</div>
					`
					slider.append(newsOnSlider)
				})

				let mySwiper = new Swiper('.pagination-dynamic-swiper', {
					// Swiper configuration options
					loop: true,
					autoplay: {
						delay: 3000,
					},
				})

				$('#newsBody').hide();
			}else{
				// no news
				$('#swiperDiv').hide();
				$('#newsBody').show();
				
			}
		},
	})
}

fetchAdvisory = () => {
	$.ajax({
		url: apiURL + 'advisory',
		type: 'GET',
		dataType: 'json',
		success: (result) => {
			const advisoryInArray = result.data
			let slider = $('#advisory_slider')

			if (advisoryInArray.length > 0){
				advisoryInArray.forEach((advisory) => {
					const date = new Date(advisory.created_at)
					const link =
						baseURL == 'http://localhost/myPUPQC/'
							? baseURL + `advisory/${advisory.reference_id}`
							: advisory.announcement_link
					const article_date = date.toLocaleDateString('en-US', {
						year: 'numeric',
						month: 'long',
						day: 'numeric',
					})
					const article_time = date.toLocaleTimeString('en-US', {
						hour: 'numeric',
						minute: 'numeric',
						hour12: true,
					})
	
					let advisoryOnSlider = `
					<a href="${link}" class="text-reset notification-item d-block dropdown-item list-group-item py-4">
						<div class="d-flex align-items-start">
							<div class="flex-grow-1 overflow-hidden">
								<h5 class="fw-normal mb-1 text-primary">${advisory.announcement_title}</h5>
								<p class="mb-0 fs-6">Posted: <span>${article_date}</span>
									<small>${article_time}</small>
								</p>
							</div>
						</div>
					</a>
					`
					slider.append(advisoryOnSlider)
				})
	
				let mySwiper = new Swiper('.pagination-dynamic-swiper', {
					// Swiper configuration options
					loop: true,
					autoplay: {
						delay: 3000,
					},
				})

				$('#advisoriesBody').hide();
			}else{
				$('#advisoryDiv').hide();
				$('#advisoriesBody').show();
			}
			
		},
	})
}
