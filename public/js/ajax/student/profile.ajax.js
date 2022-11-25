$(function () {
	loadPersonalInfo()
	loadEducationalInfo()
})

loadPersonalInfo = () => {
	$.ajax({
		type: 'GET',
		url: apiURL + `student/info`,
		headers: AJAX_HEADERS,
		success: (result) => {
			const data = result.data

			//Load Topbar
			$('#full_name').html(data.full_name)
			$('#welcome').html(`Welcome ${data.first_name}!`)
			$('#view_full_name').html(data.full_name)
			$('#view_studno').html(data.user_profile.user_no)
			$('#location').html(data.barangay + ', ' + data.municipality + ', ' + data.province)

			// Load User Personal Information
			$('#view_last').html(data.last_name)
			$('#view_first').html(data.first_name)
			$('#view_middle').html(data.middle_name)
			$('#view_gender').html(data.gender)
			const birth_date = data.birth_date
			let birthDateFormatted = `${moment(birth_date).format('LL')}`
			$('#view_bday').html(birthDateFormatted)
			$('#view_full_address').html(data.full_address)
			$('#view_contact').html(data.contact_number)
			$('#view_email').html(data.email_address)
			$('#view_civil').html(data.civil_status)
			$('#view_citizenship').html(data.citizenship)
			$('#view_religion').html(data.religion)
		},
	})
}

loadEducationalInfo = () => {
	$.ajax({
		type: 'GET',
		url: apiURL + `student/educ_profile`,
		headers: AJAX_HEADERS,
		success: (result) => {
			const data = result.data

			// Load Top Bar
			$('#course').html(data.course_when_admitted)

			// Load User Educational Information
			$('#view_status').html(data.education_status)
			$('#view_schoolyr').html(data.school_year_admitted)
			$('#view_course').html(data.course_when_admitted)
			$('#view_hs').html(data.high_school_graduated)
			$('#view_hsyear').html(data.high_school_graduated_year)
			$('#view_elem').html(data.elementary_graduated)
			$('#view_elemyear').html(data.elementary_graduated_year)
		},
	})
}
