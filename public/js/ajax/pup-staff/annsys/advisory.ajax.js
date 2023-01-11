$(() => {
	loadAdvisoryTables()
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
						const advisoryLink = data.announcement_link
						const link = `<a href="${advisoryLink}">${advisoryTitle}</a>`
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
					width: '40%',
					class: 'text-wrap text-center',
					render: (data) => {
						const advisoryTitle = data.announcement_title
						const advisoryLink = data.announcement_link
						const link = `<a href="${advisoryLink}">${advisoryTitle}</a>`
						return `${link}`
					},
				},
				// * Advisory Description
				{
					data: null,
					width: '40%',
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
