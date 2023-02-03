$(function () {
	let reference_id = $('.advisory-body').attr('id')
	fetchSpecificAdvisory(reference_id)

	fetchThreeAdvisory()
})

fetchThreeAdvisory = () => {
	$.ajax({
		url: apiURL + 'advisory',
		type: 'GET',
		dataType: 'json',
		success: (result) => {
			// * fetch three advisory only
			let data = result.data.slice(0, 3)
			data.forEach((advisory) => {
				let title = advisory.announcement_title
				let description = advisory.announcement_description
				let date = new Date(advisory.created_at)
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

				let author = advisory.announcement_assigned_to_user.user_profiles[0].full_name
				let link = advisory.announcement_link
				let htmlContent = `
                    <div class="card ribbon-box border shadow-none overflow-hidden p-3 m-3">
                        <div class="card-body text-muted">
                            <div class="ribbon ribbon-info ribbon-shape trending-ribbon">
                                <span class="trending-ribbon-text">Latest Advisory</span> <i class="ri-flashlight-fill text-white align-bottom float-end ms-1"></i>
                            </div>
                            <h5 class="fs-14 text-end mb-1"><a href="${link}">${title}</a></h5>
                            <h6 class="fs-14 text-end mb-3">by ${author} (${article_date} ${article_time})</h6>
                            <p class="mb-0">${description}</p>
                        </div>
                    </div>
                `
				$('#latest_three_advisories').append(htmlContent)
			})
		},
	})
}

fetchSpecificAdvisory = (reference_id) => {
	$.ajax({
		url: apiURL + `advisory/${reference_id}`,
		type: 'GET',
		dataType: 'json',
		success: (result) => {
			if (result.data.length === 0) {
				// ! Shane or Micah pakilagyan ng Error 404, paki-append yung 404 here
				$('.advisory-body').append('<h1 class="text-center">No Advisory Found</h1>')
				return
			}
			let data = result.data
			let title = data.announcement_title
			let content = data.announcement_content
			let date = new Date(data.created_at)
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
			let author = data.announcement_assigned_to_user.user_profiles[0].full_name
			let imageToShow = data.announcement_image ? data.announcement_image : null
			let htmlContent = `
                <h1 class="mb-1 text-primary text-center">${title}</h1>
                <p class="text-center">Posted by ${author} on ${article_date} at ${article_time}</p>
                <div class="mx-3">
                    <div class="mb-3 d-flex justify-content-center">
                        ${
													imageToShow == null
														? ''
														: `<img src="${imageToShow}" alt="news_image" class="img-fluid" width="50%">`
												}
                    </div>
                    ${content}
                </div>
            `
			$('.advisory-body').append(htmlContent)
		},
		error: (error) => {
			console.log(error)
		},
	})
}
