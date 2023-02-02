$(() => {
	loadAnnouncementTables()

	$('#NewAnnouncement').on('submit', function (e) {
		e.preventDefault() // prevent page refresh
		addAnnouncement()
	})
})

loadAnnouncementTables = () => {
	// * Phase 1: Populate all_announcements_table (except user's own announcement)
	const all_announcements_dt = $('#all_announcements_table')

	$.ajaxSetup({
		headers: AJAX_HEADERS,
	})

	if (all_announcements_dt.length) {
		all_announcements_dt.DataTable({
			bDestroy: true,
			ajax: {
				url: apiURL + 'annsys/pup_staff/get_all_announcement',
				type: 'GET',
			},
			columns: [
				// * Announcement Title
				{
					data: null,
					width: '30%',
					class: 'text-wrap text-center',
					render: (data) => {
						const announcementTitle = data.announcement_title
						// ! Modal na magpapakita ng announcement so ipupull ang announcement_content instead of announcement_link
						return `${announcementTitle}`
					},
				},
				// * Announcement Description
				{
					data: null,
					width: '60%',
					class: 'text-wrap',
					render: (data) => {
						const announcementDescription = data.announcement_description
						return `${announcementDescription}`
					},
				},
				// * Created By
				{
					data: null,
					render: (data) => {
						// * lagyan sana ng picture dito kagaya sa requests...
						const announcementAuthor = data.announcement_assigned_to_user.user_profiles[0].full_name
						return `${announcementAuthor}`
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

	// * Phase 2: Populate my_advisories_table (user's own announcement)
	const my_announcements_dt = $('#my_announcements_table')

	if (my_announcements_dt.length) {
		my_announcements_dt.DataTable({
			bDestroy: true,
			ajax: {
				url: apiURL + 'annsys/pup_staff/get_announcement_from_user',
				type: 'GET',
				headers: AJAX_HEADERS,
			},
			columns: [
				// * Announcement Title
				{
					data: null,
					width: '30%',
					class: 'text-wrap text-center',
					render: (data) => {
						const announcementTitle = data.announcement_title
						// ! Modal na magpapakita ng announcement so ipupull ang announcement_content instead of announcement_link
						return `${announcementTitle}`
					},
				},
				// * Announcement Description
				{
					data: null,
					width: '60%',
					class: 'text-wrap',
					render: (data) => {
						const announcementDescription = data.announcement_description
						return `${announcementDescription}`
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
                        <button type="button" class="btn ${buttonColor} btn-icon waves-effect waves-light" onclick="changeAnnouncementStatus('${data.announcement_id}', '${data.announcement_status}')">
                            <i class="${buttonLogo}"></i>
                        </button>
                        `
						const editButton = `
                        <button type="button" class="btn btn-warning btn-icon waves-effect waves-light">
                            <i class="ri-edit-2-fill"></i>
                        </button>
                        `
						const deleteButton = `
                        <button type="button" class="btn btn-dark bg-gradient btn-icon waves-effect waves-light" onclick="deleteAnnouncement('${data.announcement_id}')">
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

addAnnouncement = () => {
	if ($('#NewAnnouncement')[0].checkValidity()) {
		// * No error in validation
		const form = new FormData($('#NewAnnouncement')[0])
		form.set('announcement_type', 'Announcement')
		for (var pair of form.entries()) {
			console.log(pair[0] + ': ' + pair[1])
		}

		const data = {
			announcement_title: form.get('announcement_title'),
			announcement_description: form.get('announcement_description'),
			announcement_type: form.get('announcement_type'),
			announcement_content: form.get('announcement_content'),
		}

		$.ajax({
			url: apiURL + 'annsys/pup_staff/add_announcement',
			type: 'POST',
			headers: AJAX_HEADERS,
			data: data,
			dataType: 'json',
			success: (result) => {
				if (result) {
					Swal.fire({
						html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Well done !</h4><p class="text-muted mx-4 mb-0">You have successfully added an announcement!</p></div></div>',
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

changeAnnouncementStatus = (announcement_id, announcement_status) => {
	let icon, title, text
	if (announcement_status == 'Published') {
		icon = `<lord-icon src="https://cdn.lordicon.com/nduddlov.json" trigger="loop" colors="outline:#f06548,primary:#ffffff,secondary:#f06548" style="width:100px;height:100px">
        </lord-icon>`
		title = `Are you sure you want to Hide this Announcement?`
		text = `By hiding this Announcement, the guests won't able to look for this Announcement.`
		confirmButtonColor = '#f06548'
		cancelButtonColor = '#6c757d'
		confirmButtonText = 'Deactivate'
	} else {
		icon = `<lord-icon src="https://cdn.lordicon.com/ivayzoru.json" trigger="loop" colors="outline:#ffffff,primary:#ffffff,secondary:#0ab39c" style="width:100px;height:100px">
        </lord-icon>`
		title = `Are you sure you want to Publish this Announcement?`
		text = `By publishing this Announcement, the guests will able to look for this Announcement.`
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
				url: apiURL + 'annsys/pup_staff/change_announcement_status/' + announcement_id,
				type: 'PUT',
				headers: AJAX_HEADERS,
				success: (response) => {
					if (result) {
						Swal.fire({
							html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Well done !</h4><p class="text-muted mx-4 mb-0">You have successfully changed the announcement status!</p></div></div>',
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

deleteAnnouncement = (announcement_id) => {
	Swal.fire({
		title: `Are you sure you want to delete this announcement?`,
		text: `By deleting this advisory, users won't able to see this announcement and in the table.`,
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
				url: apiURL + 'annsys/pup_staff/delete_announcement/' + announcement_id,
				type: 'DELETE',
				headers: AJAX_HEADERS,
				success: (result) => {
					if (result) {
						Swal.fire({
							html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Well done !</h4><p class="text-muted mx-4 mb-0">You have successfully deleted an announcement!</p></div></div>',
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
