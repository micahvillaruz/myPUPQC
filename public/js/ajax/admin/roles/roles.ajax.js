$(function () {
	studentNoOrganizer()

	viewStudentOrganizerStaff()
})

viewStudentDetails = (user_id) => {
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
		url: apiURL + `evrsers//pup_staff/view_student/${user_id}`,
		dataType: 'json',
		success: (result) => {
			const userData = result.data
			const userProfile = userData.user_profiles[0]

			// change student profile pic id source to userProfile.image
			if (userProfile.image != null && userProfile.image.length != 0) {
				$('#student-profile-pic').attr('src', userProfile.image)
			}

			$('#student-num').html(userData.user_no)
			$('#student-name').html(userProfile.full_name)
			$('#address').html(userProfile.full_address)
			$('#contact-num').html(userProfile.contact_number)
			$('#email').html(userProfile.email_address)
			$('#gender').html(userProfile.gender)
			$('#religion').html(userProfile.religion)
			$('#civil-status').html(userProfile.civil_status)
			// convert birthdate using moment.js in MM/DD/YYYY format
			const birthdate = moment(userProfile.birth_date).format('L')
			$('#birthday').html(birthdate)

			// Compute age using moment.js
			const age = moment().diff(userProfile.birth_date, 'years')
			$('#age').html(age)
		},
	})
}

// Load datatables
viewStudentOrganizerStaff = () => {
	const dt = $('#students-no-organizer-table')

	$.ajaxSetup({
		headers: {
			Accept: 'application/json',
			Authorization: 'Bearer ' + TOKEN,
			'Content-Type': 'application/x-www-form-urlencoded',
		},
	})

	if (dt.length) {
		dt.DataTable({
			bDestroy: true,
			ajax: {
				url: apiURL + 'evrsers/pup_staff/view_organizers/',
				type: 'GET',
				ContentType: 'application/x-www-form-urlencoded',
			},
			columns: [
				// Student No.
				{
					data: null,
					render: (data) => {
						const userNo = data.user_assigned_to_role.user_no
						return `${userNo}`
					},
				},

				// Full Name
				{
					data: null,
					render: (data) => {
						const fullName = data.user_assigned_to_role.user_profiles[0].full_name
						return `${fullName}`
					},
				},

				// Status
				{
					data: null,
					render: (data) => {
						return data.is_blacklist
							? `<span class="badge rounded-pill bg-danger">Inactive</span>`
							: `<span class="badge rounded-pill bg-success">Active</span>`
					},
				},

				//Action
				{
					data: null,
					class: 'text-center',
					render: (data) => {
						console.log(data)
						return `
                          <div class="dropdown d-inline-block">
                              <button type="button" class="btn btn-info btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewStudentInfoModal" onclick="viewStudentDetails('${data.user_id}')"><i class="ri-eye-fill fs-5"></i></button>
                              <button type="button" class="btn btn-danger btn-icon waves-effect waves-light" onclick="removeStudentOrganizer('${data.user_id}')"><i class="ri-close-fill fs-5"></i></button> 
                          </div>
                              `
					},
				},
			],
			order: [[0, 'asc']],
		})
	}
}

// Populate select2 option with id student-no-organizer names of the students
studentNoOrganizer = () => {
	$.ajaxSetup({
		headers: {
			Accept: 'application/json',
			Authorization: 'Bearer ' + TOKEN,
			'Content-Type': 'application/x-www-form-urlencoded',
		},
	})

	$.ajax({
		url: apiURL + 'evrsers/pup_staff/view_student_no_organizer/',
		type: 'GET',
		ContentType: 'application/x-www-form-urlencoded',
		success: (data) => {
			const students = data.data
			const select2 = $('#student-no-organizer')
			students.forEach((student) => {
				// console.log(student)
				const userNo = student.user_no
				const fullName = student.user_profiles[0].full_name
				const option = new Option(`${userNo} - ${fullName}`, student.user_no, false, false)
				select2.append(option)
			})

			// if option is selected and add-student-organizer button is clicked, get student.user_id
			// and pass it to addStudentOrganizer function and prevent page from reloading
			$('#add-student-organizer').on('click', function (e) {
				// get selected option user_id
				const selectedOption = select2.find(':selected')
				const student = students.find((student) => student.user_no === selectedOption.val())
				// prevent page from reloading
				e.preventDefault()
				addStudentOrganizer(student.user_id)
			})
		},
	})
}

addStudentOrganizer = (user_id) => {
	$('#addStudentOrganizerModal').modal('show')
	$('#add-organizer').on('click', function () {
		$.ajaxSetup({
			headers: {
				Accept: 'application/json',
				Authorization: 'Bearer ' + TOKEN,
				ContentType: 'application/x-www-form-urlencoded',
			},
		})
		$.ajax({
			url: apiURL + `evrsers/pup_staff/set_organizer_role/${user_id}`,
			type: 'PUT',
			ContentType: 'application/x-www-form-urlencoded',
			success: (result) => {
				$('#addStudentOrganizerModal').modal('hide')
				if (result) {
					Swal.fire({
						html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Well done !</h4><p class="text-muted mx-4 mb-0">You have successfully added an organizer!</p></div></div>',
						showCancelButton: !0,
						showConfirmButton: !1,
						cancelButtonClass: 'btn btn-success w-xs mb-1',
						cancelButtonText: 'Ok',
						buttonsStyling: !1,
						showCloseButton: !0,
					}).then(function () {
						// reload viewStudentOrganizer table
						viewStudentOrganizerStaff()
					})
				}
			},
		}).fail((xhr) => {
			Swal.fire({
				html: `<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Something went Wrong!</h4><p class="text-muted mx-4 mb-0">${
					JSON.parse(xhr.responseText).message
				}</p></div></div>`,
				showCancelButton: !0,
				showConfirmButton: !1,
				cancelButtonClass: 'btn btn-danger w-xs mb-1',
				cancelButtonText: 'Dismiss',
				buttonsStyling: !1,
				showCloseButton: !0,
			})
		})
	})
}

removeStudentOrganizer = (user_id) => {
	$('#removeStudentOrganizerModal').modal('show')
	$('#remove-organizer').on('click', function () {
		$.ajaxSetup({
			headers: {
				Accept: 'application/json',
				Authorization: 'Bearer ' + TOKEN,
				ContentType: 'application/x-www-form-urlencoded',
			},
		})
		$.ajax({
			url: apiURL + `evrsers/pup_staff/set_organizer_role/${user_id}`,
			type: 'PUT',
			ContentType: 'application/x-www-form-urlencoded',
			success: (result) => {
				$('#removeStudentOrganizerModal').modal('hide')
				if (result) {
					Swal.fire({
						html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Well done !</h4><p class="text-muted mx-4 mb-0">You have successfully removed an organizer!</p></div></div>',
						showCancelButton: !0,
						showConfirmButton: !1,
						cancelButtonClass: 'btn btn-success w-xs mb-1',
						cancelButtonText: 'Ok',
						buttonsStyling: !1,
						showCloseButton: !0,
					}).then(function () {
						// reload viewStudentOrganizer table
						viewStudentOrganizerStaff()
					})
				}
			},
		}).fail((xhr) => {
			Swal.fire({
				html: `<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Something went Wrong!</h4><p class="text-muted mx-4 mb-0">${
					JSON.parse(xhr.responseText).message
				}</p></div></div>`,
				showCancelButton: !0,
				showConfirmButton: !1,
				cancelButtonClass: 'btn btn-danger w-xs mb-1',
				cancelButtonText: 'Dismiss',
				buttonsStyling: !1,
				showCloseButton: !0,
			})
		})
	})
}
