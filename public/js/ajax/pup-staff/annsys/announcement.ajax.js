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
