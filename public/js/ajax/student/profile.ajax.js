$(function () {
	loadProfile()
})

loadProfile = () => {
	$.ajax({
		type: 'GET',
		url: apiURL + `student/info`,
		headers: AJAX_HEADERS,
		success: (result) => {
			const data = result.data

			//Load Topbar
			$('#full_name').html(data.full_name)
			$('#welcome').html(`Welcome ${data.first_name}!`)

			// Load User Profile
			$('#view_user_no').html(data.user_profile.user_no)
			$('#view_full_name').html(data.full_name)
			$('#view_name').html(data.full_name)
			$('#view_contact').html(data.contact_number)
			const birth_date = data.birth_date
			let birthDateFormatted = `${moment(birth_date).format('LL')}`
			$('#view_bday').html(birthDateFormatted)
			$('#view_gender').html(data.gender)
			$('#view_full_address').html(data.full_address)
		},
	})
}
