$(function () {
	charts()
})

charts = () => {
	chartOne()
	chartTwo()
	chartThree()
	chartFour()
	chartFive()
	chartSix()

}

chartOne = () => {
	var chartNumberOne = document.getElementById('chartOne')

	$.ajax({
		type: 'GET',
		cache: false,
		url: apiURL + 'researchcop/researchcharts',
		dataType: 'json',
		headers: AJAX_HEADERS,
	}).then((result) => {
		const data = result.data.research_count.researchUpload

		const researchCount = parseInt(data)
		const htmlContent = `<h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value">${researchCount}</span></h2>`

		chartNumberOne.innerHTML = htmlContent
	})
}

chartTwo = () => {
	var chartNumberTwo = document.getElementById('chartTwo')

	$.ajax({
		type: 'GET',
		cache: false,
		url: apiURL + 'researchcop/researchcharts',
		dataType: 'json',
		headers: AJAX_HEADERS,
	}).then((result) => {
		const data = result.data.research_count.researchApproved

		const researchCount = parseInt(data)
		const htmlContent = `<h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value">${researchCount}</span></h2>`

		chartNumberTwo.innerHTML = htmlContent
	})
}

chartThree = () => {
	var chartNumberThree = document.getElementById('chartThree')

	$.ajax({
		type: 'GET',
		cache: false,
		url: apiURL + 'researchcop/researchcharts',
		dataType: 'json',
		headers: AJAX_HEADERS,
	}).then((result) => {
		const data = result.data.research_count.researchRejected

		const researchCount = parseInt(data)
		const htmlContent = `<h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value">${researchCount}</span></h2>`

		chartNumberThree.innerHTML = htmlContent
	})
}

chartFour = () => {
	var chartNumberFour = document.getElementById('chartFour')

	$.ajax({
		type: 'GET',
		cache: false,
		url: apiURL + 'researchcop/researchcharts',
		dataType: 'json',
		headers: AJAX_HEADERS,
	}).then((result) => {
		const data = result.data.research_count.researchPending

		const researchCount = parseInt(data)
		const htmlContent = `<h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value">${researchCount}</span></h2>`

		chartNumberFour.innerHTML = htmlContent
	})
}

chartFive = () => {
	var chartNumberFive = document.getElementById('chartFive')

	$.ajax({
		type: 'GET',
		cache: false,
		url: apiURL + 'researchcop/copyrightcharts',
		dataType: 'json',
		headers: AJAX_HEADERS,
	}).then((result) => {
		const data = result.data.copyright_count.copyrightReview

		const researchCount = parseInt(data)
		const htmlContent = `<h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value">${researchCount}</span></h2>`

		chartNumberFive.innerHTML = htmlContent
	})
}

chartSix = () => {
	var chartNumberSix = document.getElementById('chartSix')

	$.ajax({
		type: 'GET',
		cache: false,
		url: apiURL + 'researchcop/copyrightcharts',
		dataType: 'json',
		headers: AJAX_HEADERS,
	}).then((result) => {
		const data = result.data.copyright_count.copyrightApproved

		const researchCount = parseInt(data)
		const htmlContent = `<h2 class="mt-4 ff-secondary fw-semibold"><span class="counter-value">${researchCount}</span></h2>`

		chartNumberSix.innerHTML = htmlContent
	})
}