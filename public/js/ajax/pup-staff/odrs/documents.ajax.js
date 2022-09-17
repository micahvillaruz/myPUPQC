$(function () {
	//loadDocumentsTable()
})

// Load Documents Table
loadDocumentsTable = () => {
	const dt = $('#documents-datatable')

	if (!dt.length) return

	dt.DataTable({
		bDestroy: true,
		ajax: {
			url: apiURL + 'odrs/student/view_documents',
			type: 'GET',
			headers: AJAX_HEADERS,
		},
		columns: [],
		order: [[0, 'asc']],
	})
}
