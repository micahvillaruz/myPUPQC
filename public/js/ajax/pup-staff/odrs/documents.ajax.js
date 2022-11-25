$(function () {
	loadDocumentsTable()
})

// Load Documents Table
loadDocumentsTable = () => {
	const dt = $('#documents-datatable')

	if (!dt.length) return

	dt.DataTable({
		bDestroy: true,
		ajax: {
			url: apiURL + 'odrs/pup_staff/view_documents',
			type: 'GET',
			headers: AJAX_HEADERS,
		},
		columns: [
			{
				data: null,
				render: (data) => {
					return `<a href="#!">${data.document_name}</a><br><small>${
						data.document_requirements == null ? '' : data.document_requirements
					}</small>`
				},
			},
			{
				data: null,
				render: (data) => {
					if (data.document_type === 'Transcript of Records') {
						return `<div class="d-block badge badge-soft-dark align-items-center">
						<i class="me-2 bx bxs-institution fs-13"></i>
						<span class="text-uppercase">CAV (CHED/DFA/WES/CES)</span>
					</div>`
					} else if (data.document_type === 'Certifications') {
						return `<div class="d-block badge badge-soft-success align-items-center">
						<i class="me-2 mdi mdi-certificate fs-13"></i>
						<span class="text-uppercase">Certifications</span>
					</div>`
					} else if (data.document_type === 'Unclaimed') {
						return `<div class="d-block badge badge-soft-danger align-items-center">
						<i class="me-2 mdi mdi-package-variant fs-13"></i>
						<span class="text-uppercase">Unclaimed</span>
					</div>`
					} else if (data.document_type === 'CAV') {
						return `<div class="d-block badge badge-soft-primary align-items-center">
						<i class="me-2 mdi mdi-format-annotation-plus fs-13"></i>
						<span class="text-uppercase">Transcript of Records</span>
					</div>`
					} else {
						return ''
					}
				},
			},
			{
				data: null,
				render: (data) => {
					return `<div class="d-flex gap-1 justify-content-center">
					<button type="button" class="btn btn-info btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewDocumentModal">
						<i class="ri-eye-fill fs-5"></i>
					</button>
					<button type="button" class="btn btn-warning btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#updateDocumentModal">
						<i class="ri-edit-2-fill fs-5"></i>
					</button>
				</div>`
				},
			},
		],
		order: [[0, 'asc']],
	})
}
