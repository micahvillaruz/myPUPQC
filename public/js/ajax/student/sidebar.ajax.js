$(() => {
	checkPermissionODRS()
})

checkPermissionODRS = () => {
	$.ajax({
		type: 'GET',
		url: `${apiURL}odrs/student/view_request`,
		dataType: 'json',
		headers: AJAX_HEADERS,
		success: (result) => {
			const data = result.data

			if (data.length !== 0) {
				$('#new-request-sidebar')
					.html(`<a class="nav-link menu-link" href="${baseURL}student/odrs/request">
        <i class="ri-archive-line"></i>
        <span>Request</span>
        </a>`)
			} else {
				$('#request-sidebar')
					.html(`<a class="nav-link menu-link" href="${baseURL}student/odrs/new-request">
        <i class="ri-file-add-line"></i>
        <span>New Request</span>
        </a>`)
			}
		},
	})
}
