$(function () {
	let reference_id = $('.news-body').attr('id')
	fetchSpecificNews(reference_id)

	fetchThreeNews()
	generateRSSFeed()
})

generateRSSFeed = () => {
	$('body').append('<style>body {background-color: #121212 !important; color: white;}</style>')
	$.ajax({
		url: apiURL + 'news',
		type: 'GET',
		dataType: 'json',
		success: (result) => {
			let data = result.data
			let rssFeed = `<?xml version='1.0' encoding='utf-8'?>\n<rss version="2.0" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:mypupqc="https://mypupqc.live" xmlns:atom="http://www.w3.org/2005/Atom">\n\t<channel>\n\t\t<title>MyPUPQC News</title>
                <link>https://mypupqc.live/news</link>
                <description>MyPUPQC News</description>
                <atom:link rel="self" href="https://mypupqc.live/news/rss/" type="application/rss+xml"/>
                <mypupqc:logo>https://mypupqc.live/public/images/mypupqc-logo.webp</mypupqc:logo>
                <mypupqc:icon>https://mypupqc.live/public/images/favicon.ico</mypupqc:icon>
            `

			data.forEach((item) => {
				let date = new Date(item.created_at)
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
				const full_date = article_date + ' ' + article_time
				rssFeed += `
                <item>
                    <title>${item.announcement_title}</title>
                    <description>${item.announcement_description}</description>
                    <link>${item.announcement_link}</link>
                    <content><![CDATA[ ${item.announcement_content} ]]></content>
                    <pubDate>${full_date}</pubDate>
                </item>
                `
			})

			//<content><![CDATA[ ${item.announcement_content}]]</content>
			rssFeed += `\n\t</channel>\n</rss>`

			$('pre').text(rssFeed)
		},
	})
}

fetchThreeNews = () => {
	$.ajax({
		url: apiURL + 'news',
		type: 'GET',
		dataType: 'json',
		success: (result) => {
			// * fetch three news only
			let data = result.data.slice(0, 3)
			data.forEach((news) => {
				let title = news.announcement_title
				let description = news.announcement_description
				let date = new Date(news.created_at)
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

				let author = news.announcement_assigned_to_user.user_profiles[0].full_name
				let link = news.announcement_link
				let htmlContent = `
                    <div class="card ribbon-box border shadow-none overflow-hidden p-3 m-3">
                        <div class="card-body text-muted">
                            <div class="ribbon ribbon-info ribbon-shape trending-ribbon">
                                <span class="trending-ribbon-text">Latest News</span> <i class="ri-flashlight-fill text-white align-bottom float-end ms-1"></i>
                            </div>
                            <h5 class="fs-14 text-end mb-1"><a href="${link}">${title}</a></h5>
                            <h6 class="fs-14 text-end mb-3">by ${author} (${article_date} ${article_time})</h6>
                            <p class="mb-0">${description}</p>
                        </div>
                    </div>
                `
				$('#latest_three_news').append(htmlContent)
			})
		},
	})
}

fetchSpecificNews = (reference_id) => {
	$.ajax({
		url: apiURL + `news/${reference_id}`,
		type: 'GET',
		dataType: 'json',
		success: function (result) {
			if (result.data.length === 0) {
				// ! Shane or Micah pakilagyan ng Error 404, paki-append yung 404 here
				$('.news-body').append('<h1 class="text-center">No News Found</h1>')
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
			let imageToShow = data.announcement_image
				? data.announcement_image
				: 'https://upload.wikimedia.org/wikipedia/commons/b/b1/Loading_icon.gif?20151024034921'
			let htmlContent = `
            <h1 class="mb-1 text-primary text-center">${title}</h1>
            <p class="text-center">Posted by ${author} on ${article_date} at ${article_time}</p>
            <div class="mx-3">
                <div class="mb-3 d-flex justify-content-center">
                    <img src="${imageToShow}" alt="news_image" class="img-fluid" width="50%">
                </div>
                ${content}
            </div>
            `
			$('.news-body').append(htmlContent)
		},
		error: function (error) {
			console.log(error)
		},
	})
}
