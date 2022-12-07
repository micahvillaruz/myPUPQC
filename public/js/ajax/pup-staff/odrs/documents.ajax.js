$(function () {
	loadDocumentsTable()
	$('#addDocumentForm').on('submit', function (e) {
		e.preventDefault() // prevent page refresh
		addDocument()
	})
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

// Add Document
addDocument = () => {
	// Add Documents
	if (!$('#addDocumentForm')[0].checkValidity()) return ''

	const form = new FormData($('#addDocumentForm')[0])

	const data = {
		document_name: form.get('document_name'),
		document_details: form.get('document_details'),
		document_type: form.get('document_type'),
	}

	$.ajax({
		type: 'POST',
		url: apiURL + `odrs/pup_staff/upload_document`,
		headers: AJAX_HEADERS,
		data: data,
		dataType: 'json',
		success: (result) => {
			if (result) {
				Swal.fire({
					html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Well done !</h4><p class="text-muted mx-4 mb-0">You have successfully added a document!</p></div></div>',
					showCancelButton: !0,
					showConfirmButton: !1,
					cancelButtonClass: 'btn btn-success w-xs mb-1',
					cancelButtonText: 'Ok',
					buttonsStyling: !1,
					showCloseButton: !0,
				}).then(function () {
					$('#addDocumentModal').modal('hide')
					$('form#addDocumentForm')[0].reset()

					// Reload Document Datatable
					loadDocumentsTable()
				})
			}
		},
	}).fail(() => {
		Swal.fire({
			html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Something went Wrong !</h4><p class="text-muted mx-4 mb-0">There was an error while adding a document. Please try again.</p></div></div>',
			showCancelButton: !0,
			showConfirmButton: !1,
			cancelButtonClass: 'btn btn-danger w-xs mb-1',
			cancelButtonText: 'Dismiss',
			buttonsStyling: !1,
			showCloseButton: !0,
		})
	})
}
