$(function () {
	setInterval(updateClock, 1000)
	quoteAPI()
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

// const quoteAPI = async () => {
// 	const response = await fetch('https://quotes.rest/qod?category=inspire&language=en')
// 	const quote = await response.json()
// 	const content = quote['content']
// 	const author = quote['author']
// 	document.getElementById(
// 		'quotes',
// 	).innerHTML = `<span class="text-primary">${content}</span> \n - ${author}`
// }

quoteAPI = () => {
	$.ajax({
		type: 'GET',
		url: `https://quotes.rest/qod?category=inspire&language=en`,
		success: (result) => {
			console.log(result)
			let quote = result.contents.quotes[0].quote
			let author = result.contents.quotes[0].author

			$('#quote').html(quote)
			$('#author').html(author)
		},
	})
}
