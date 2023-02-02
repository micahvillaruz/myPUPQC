$(() => {
	loadAdvisoryTables()

	pond = FilePond.create(document.querySelector('#announcement_image'), {
		instantUpload: false,
		allowProcess: false,
	})

	$('#NewAdvisory').on('submit', function (e) {
		e.preventDefault() // prevent page refresh
		addAdvisory(pond)
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
				// * Status
				{
					data: null,
					render: (data) => {
						// * Has three status: Published, Hidden and Deleted
						const advisoryStatus = data.announcement_status
						if (advisoryStatus == 'Published') {
							return `<span class="badge rounded-pill bg-success">${advisoryStatus}</span>`
						} else {
							return `<span class="badge rounded-pill bg-danger">${advisoryStatus}</span>`
						}
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
				// * Status
				{
					data: null,
					render: (data) => {
						// * Has three status: Published, Hidden and Deleted
						const advisoryStatus = data.announcement_status
						if (advisoryStatus == 'Published') {
							return `<span class="badge rounded-pill bg-success">${advisoryStatus}</span>`
						} else {
							return `<span class="badge rounded-pill bg-danger">${advisoryStatus}</span>`
						}
					},
				},
				// * Action
				{
					data: null,
					render: (data) => {
						const buttonColor =
							data.announcement_status == 'Published' ? 'btn-danger' : 'btn-success'
						const buttonLogo =
							data.announcement_status == 'Published' ? 'ri-close-fill' : 'ri-check-fill'
						const viewButton = `
                        <button type="button" class="btn ${buttonColor} btn-icon waves-effect waves-light" onclick="changeAdvisoryStatus('${data.announcement_id}', '${data.announcement_status}')">
                            <i class="${buttonLogo}"></i>
                        </button>
                        `
						const editButton = `
                        <button type="button" class="btn btn-warning btn-icon waves-effect waves-light">
                            <i class="ri-edit-2-fill"></i>
                        </button>
                        `
						const deleteButton = `
                        <button type="button" class="btn btn-dark bg-gradient btn-icon waves-effect waves-light" onclick="deleteAdvisory('${data.announcement_id}')">
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

addAdvisory = (pond) => {
	if ($('#NewAdvisory')[0].checkValidity()) {
		// * No error in validation
		const form = new FormData($('#NewAdvisory')[0])
		form.set('announcement_type', 'Advisory')
		if (form.get('filepond').name != '') {
			form.delete('filepond')
		}

		pondFiles = pond.getFiles()
		for (var i = 0; i < pondFiles.length; i++) {
			// append the blob file
			form.append('announcement_image', pondFiles[i].file)
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

changeAdvisoryStatus = (announcement_id, announcement_status) => {
	let icon, title, text
	if (announcement_status == 'Published') {
		icon = `<lord-icon src="https://cdn.lordicon.com/nduddlov.json" trigger="loop" colors="outline:#f06548,primary:#ffffff,secondary:#f06548" style="width:100px;height:100px">
        </lord-icon>`
		title = `Are you sure you want to Hide this Advisory?`
		text = `By hiding this Advisory, the guests won't able to look for this Advisory.`
		confirmButtonColor = '#f06548'
		cancelButtonColor = '#6c757d'
		confirmButtonText = 'Deactivate'
	} else {
		icon = `<lord-icon src="https://cdn.lordicon.com/ivayzoru.json" trigger="loop" colors="outline:#ffffff,primary:#ffffff,secondary:#0ab39c" style="width:100px;height:100px">
        </lord-icon>`
		title = `Are you sure you want to Publish this Advisory?`
		text = `By publishing this Advisory, the guests will able to look for this Advisory.`
		confirmButtonColor = '#0ab39c'
		cancelButtonColor = '#6c757d'
		confirmButtonText = 'Activate'
	}
	Swal.fire({
		title: title,
		text: text,
		iconHtml: icon,
		customClass: {
			icon: 'border-white',
		},
		showCancelButton: true,
		confirmButtonColor: confirmButtonColor,
		cancelButtonColor: cancelButtonColor,
		confirmButtonText: confirmButtonText,
	}).then((result) => {
		if (result.isConfirmed) {
			$.ajax({
				url: apiURL + 'annsys/pup_staff/change_advisory_status/' + announcement_id,
				type: 'PUT',
				headers: AJAX_HEADERS,
				success: (response) => {
					if (result) {
						Swal.fire({
							html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Well done !</h4><p class="text-muted mx-4 mb-0">You have successfully changed the advisory status!</p></div></div>',
							showCancelButton: !0,
							showConfirmButton: !1,
							cancelButtonClass: 'btn btn-success w-xs mb-1',
							cancelButtonText: 'Ok',
							buttonsStyling: !1,
							showCloseButton: !0,
						}).then(function () {
							setTimeout(() => {
								location.reload()
							}, 1000)
						})
					}
				},
			})
		}
	})
}

deleteAdvisory = (announcement_id) => {
	Swal.fire({
		title: `Are you sure you want to delete this advisory?`,
		text: `By deleting this advisory, users won't able to see this advisory and in the table.`,
		iconHtml: `<lord-icon
        src="https://cdn.lordicon.com/gsqxdxog.json"
        trigger="loop"
        colors="primary:#121331,secondary:#c71f16"
        style="width:100px;height:100px">
    </lord-icon>`,
		customClass: {
			icon: 'border-white',
		},
		showCancelButton: true,
		confirmButtonColor: '#f06548',
		cancelButtonColor: '#6c757d',
		confirmButtonText: 'Delete',
	}).then((result) => {
		if (result.isConfirmed) {
			$.ajax({
				url: apiURL + 'annsys/pup_staff/delete_advisory/' + announcement_id,
				type: 'DELETE',
				headers: AJAX_HEADERS,
				success: (result) => {
					if (result) {
						Swal.fire({
							html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Well done !</h4><p class="text-muted mx-4 mb-0">You have successfully deleted an advisory!</p></div></div>',
							showCancelButton: !0,
							showConfirmButton: !1,
							cancelButtonClass: 'btn btn-success w-xs mb-1',
							cancelButtonText: 'Ok',
							buttonsStyling: !1,
							showCloseButton: !0,
						}).then(function () {
							// reload page
							refreshPage()
						})
					}
				},
			}).fail((xhr) => {
				Swal.fire({
					html: `<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Something went Wrong!</h4><p class="text-muted mx-4 mb-0">${xhr.responseJSON.message}</p></div></div>`,
					showCancelButton: !0,
					showConfirmButton: !1,
					cancelButtonClass: 'btn btn-danger w-xs mb-1',
					cancelButtonText: 'Dismiss',
					buttonsStyling: !1,
					showCloseButton: !0,
				})
			})
		}
	})
}
