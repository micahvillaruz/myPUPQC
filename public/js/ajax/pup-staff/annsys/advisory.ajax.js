$(() => {
	loadAdvisoryTables()

	$('#NewAdvisory').on('submit', function (e) {
		e.preventDefault() // prevent page refresh
		addAdvisory()
	})
})

loadAdvisoryTables = () => {
	// * Phase 1: Populate all_advisories_table (except user's own advisory)
	const all_advisories_dt = $('#all_advisories_table')

	$.ajaxSetup({
		headers: AJAX_HEADERS,
	})

	if (all_advisories_dt.length) {
		all_advisories_dt.DataTable({
			bDestroy: true,
			ajax: {
				url: apiURL + 'annsys/pup_staff/get_all_advisory',
				type: 'GET',
			},
			columns: [
				// * Advisory Title
				{
					data: null,
					width: '30%',
					class: 'text-wrap text-center',
					render: (data) => {
						const advisoryTitle = data.announcement_title
						const advisoryLink =
							baseURL == 'http://localhost/myPUPQC/'
								? baseURL + `advisory/${data.reference_id}`
								: data.announcement_link
						const link = `<a href="${advisoryLink}" target="_blank">${advisoryTitle}</a>`
						return `${link}`
					},
				},
				// * Advisory Description
				{
					data: null,
					width: '60%',
					class: 'text-wrap',
					render: (data) => {
						const advisoryDescription = data.announcement_description
						return `${advisoryDescription}`
					},
				},
				// * Created By
				{
					data: null,
					render: (data) => {
						// * lagyan sana ng picture dito kagaya sa requests...
						const advisoryAuthor = data.announcement_assigned_to_user.user_profiles[0].full_name
						return `${advisoryAuthor}`
					},
				},
				// * Create Date
				{
					data: null,
					render: (data) => {
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
						return `${article_date}<br/>${article_time}`
					},
				},
				// * Action
				{
					data: null,
					class: 'text-center',
					render: (data) => {
						const viewButton = `
                        <button type="button" class="btn btn-info btn-icon waves-effect waves-light">
                                                <i class="ri-eye-fill"></i>
                                            </button>
                                            `
						return viewButton
					},
				},
			],
			order: [[0, 'asc']],
		})
	}

	// * Phase 2: Populate my_advisories_table (user's own advisory)
	const my_advisories_dt = $('#my_advisories_table')

	if (my_advisories_dt.length) {
		my_advisories_dt.DataTable({
			bDestroy: true,
			ajax: {
				url: apiURL + 'annsys/pup_staff/get_advisory_from_user',
				type: 'GET',
				headers: AJAX_HEADERS,
			},
			columns: [
				// * Advisory Title
				{
					data: null,
					width: '30%',
					class: 'text-wrap text-center',
					render: (data) => {
						const advisoryTitle = data.announcement_title
						const advisoryLink =
							baseURL == 'http://localhost/myPUPQC/'
								? baseURL + `advisory/${data.reference_id}`
								: data.announcement_link
						const link = `<a href="${advisoryLink}" target="_blank">${advisoryTitle}</a>`
						return `${link}`
					},
				},
				// * Advisory Description
				{
					data: null,
					width: '60%',
					class: 'text-wrap',
					render: (data) => {
						const advisoryDescription = data.announcement_description
						return `${advisoryDescription}`
					},
				},
				// * Create Date
				{
					data: null,
					render: (data) => {
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
						return `${article_date}<br/>${article_time}`
					},
				},
				// * Action
				{
					data: null,
					render: (data) => {
						const viewButton = `
                        <button type="button" class="btn btn-info btn-icon waves-effect waves-light">
                            <i class="ri-eye-fill"></i>
                        </button>
                        `
						const editButton = `
                        <button type="button" class="btn btn-warning btn-icon waves-effect waves-light">
                            <i class="ri-edit-2-fill"></i>
                        </button>
                        `
						const deleteButton = `
                        <button type="button" class="btn btn-danger btn-icon waves-effect waves-light">
                            <i class="ri-delete-bin-fill"></i>
                        </button>
                        `
						return `<div class="text-center">
                        ${viewButton} ${editButton} ${deleteButton}
                        </div>
                        `
					},
				},
			],
			order: [[0, 'asc']],
		})
	}
}

addAdvisory = () => {
	if ($('#NewAdvisory')[0].checkValidity()) {
		// * No error in validation
		const form = new FormData($('#NewAdvisory')[0])
		form.set('announcement_type', 'Advisory')
		if (form.get('announcement_image').name == '') {
			form.delete('announcement_image')
		}
		for (var pair of form.entries()) {
			console.log(pair[0] + ': ' + pair[1])
		}

		$.ajax({
			url: apiURL + 'annsys/pup_staff/add_advisory',
			type: 'POST',
			headers: AJAX_HEADERS,
			data: form,
			processData: false,
			contentType: false,
			success: (result) => {
				if (result) {
					Swal.fire({
						html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Well done !</h4><p class="text-muted mx-4 mb-0">You have successfully added an advisory!</p></div></div>',
						showCancelButton: !0,
						showConfirmButton: !1,
						cancelButtonClass: 'btn btn-success w-xs mb-1',
						cancelButtonText: 'Ok',
						buttonsStyling: !1,
						showCloseButton: !0,
					}).then(function () {
						// reload Pending Reservations table
						refreshPage()
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
	}
}
