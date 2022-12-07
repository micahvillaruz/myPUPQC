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
					<button type="button" class="btn btn-info btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewDocumentModal" onclick="loadDocumentInfo('${data.document_id}')">
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

// Load Document Information
loadDocumentInfo = (document_id) => {
	$.ajax({
		type: 'GET',
		url: apiURL + `odrs/pup_staff/view_document/` + document_id,
		headers: AJAX_HEADERS,
		success: (result) => {
			const data = result.data
			console.log(data)

			$('#view_document_name').html(data.document_name)
			$('#view_document_details').html(data.document_details)
			$('#view_document_requirements').empty()
			if (data.document_requirements.length === 0) {
				$('#view_document_requirements').html('<i>No requirements are needed.</i>')
			} else {
				data.document_requirements.forEach((item) => {
					$('#view_document_requirements').append(`
						<li>${item.doc_req_name}</li>
					`)
				})
			}
		},
	})
}
