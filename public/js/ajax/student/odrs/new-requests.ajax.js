$(() => {
	loadEducProfile()
	loadDocuments()

	$('#createRequestForm').on('submit', function (e) {
		e.preventDefault() // prevent page refresh
		createRequest()
	})
})

// Load Educational Profile
loadEducProfile = () => {
	$.ajax({
		type: 'GET',
		url: apiURL + `odrs/student/view_educ_profile`,
		headers: AJAX_HEADERS,
		success: (result) => {
			const data = result.data

			$('#course').html(data.course_when_admitted)
			$('#educ_status').html(data.education_status)
		},
	})
}

// Load Documents
loadDocuments = () => {
	const typesID = [
		'documentsTOR',
		'documentsCert',
		'documentsUncl',
		'documentsCAV',
		'Transcript of Records',
		'Certifications',
		'Unclaimed',
		'CAV',
		'tor',
		'certificates',
		'unclaimed',
		'cav',
	]

	for (let i = 0; i < 4; i++) {
		const type = `#${typesID[i]}`
		const document_type = typesID[i + 4]

		$('#tabpanes').append(`
			<div class="tab-pane ${i === 0 ? 'active' : ''}" id="${typesID[i + 8]}" role="tabpanel">
				<table class="table dt-responsive align-middle" id="${typesID[i]}" style="width: 100%">
					<thead>
						<tr>
							<th data-ordering="false">Document</th>
							<th>Quantity</th>
						</tr>
					</thead>
					<tbody>
					</tbody>
				</table>
			</div>
		`)

		const dt = $(type)

		if (!dt.length) return

		dt.DataTable({
			bDestroy: true,
			ajax: {
				url: apiURL + 'odrs/student/view_documents/' + document_type,
				type: 'GET',
				ContentType: 'application/x-www-form-urlencoded',
				headers: AJAX_HEADERS,
			},
			dom: '',
			columns: [
				{
					data: null,
					render: (data) => {
						return `
						<div class="d-flex">
							<div class="form-check me-3">
								<input class="form-check-input fs-15" type="checkbox" name="checkAll" value="${data.document_id}" />
							</div>
							<div class="d-flex flex-column">
								${data.document_name}
								<small> ${data.document_requirements === null ? '' : data.document_requirements}</small>
								<div class="mt-1">
									<button type="button" class="btn btn-sm btn-info btn-label waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewDocumentDetails" onclick="loadDocumentInfo('${
										data.document_id
									}')">
										<i class="mdi mdi-eye label-icon align-middle fs-13 me-2"></i> 
										View Details
									</button>
								</div>
							</div>
						</div>`
					},
				},
				{
					data: null,
					class: 'text-end',
					render: (data) => {
						return `
						<div class="input-step step-primary">
							<button type="button" class="minus">–</button>
								<input type="number" class="product-quantity" id="${data.document_id}" value="1" min="1" max="100" readonly/>
							<button type="button" class="plus">+</button>
						</div>
            			`
					},
				},
			],
			order: [[0, 'asc']],
		})
	}
}

// Load Document Information
loadDocumentInfo = (document_id) => {
	$.ajax({
		type: 'GET',
		url: apiURL + `odrs/student/view_document/` + document_id,
		headers: AJAX_HEADERS,
		success: (result) => {
			const data = result.data

			$('#document_name').html(data.document_name)
			$('#document_details').html(data.document_details)
			$('#document_requirements').html(
				data.document_requirements === null ? 'None' : data.document_requirements,
			)
		},
	})
}

// Create Request
createRequest = () => {
	if (!$('#createRequestForm')[0].checkValidity()) return

	const datas = [
		{
			purpose_of_request: $('#purpose').val(),
		},
	]
	$('input:checkbox:checked').each(function () {
		const document_id = $(this).val()

		$('input[type=number]').each(function () {
			if (document_id !== $(this).attr('id')) return

			const quantity = $(this).val()

			datas.push({ document_id: document_id, quantity: quantity })
		})
	})

	$.ajax({
		url: apiURL + 'odrs/student/add_request',
		type: 'POST',
		data: { data: datas },
		headers: AJAX_HEADERS,
		dataType: 'json',
		success: (result) => {
			if (result) {
				Swal.fire({
					html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Well done !</h4><p class="text-muted mx-4 mb-0">You have successfully created a request!</p></div></div>',
					showCancelButton: !0,
					showConfirmButton: !1,
					cancelButtonClass: 'btn btn-primary w-xs mb-1',
					cancelButtonText: 'Ok',
					buttonsStyling: !1,
					showCloseButton: !0,
				}).then(function () {
					$('form#createRequestForm')[0].reset()

					window.location.href = `${baseURL}student/odrs/requests`
				})
			}
		},
	}).fail((xhr) => {
		Swal.fire({
			html: `<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Something went Wrong !</h4><p class="text-muted mx-4 mb-0">${
				JSON.parse(xhr.responseText).message
			}</p></div></div>`,
			showCancelButton: !0,
			showConfirmButton: !1,
			cancelButtonClass: 'btn btn-primary w-xs mb-1',
			cancelButtonText: 'Dismiss',
			buttonsStyling: !1,
			showCloseButton: !0,
		})
	})
}
