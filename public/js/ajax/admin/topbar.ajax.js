$(function () {
	loadTopBar()
})

loadTopBar = () => {
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
		url: apiURL + `super_admin/info`,
		dataType: 'json',
		success: (result) => {
			const data = result.data
			$('#full_name').html(data.full_name)
			$('#welcome').html(`Welcome ${data.first_name}!`)
		},
	})
}
