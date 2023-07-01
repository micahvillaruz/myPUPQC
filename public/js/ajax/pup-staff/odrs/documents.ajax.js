$(function () {
	loadDocumentsTable()
	populateSelect()

	$('#document_type').select2({
		dropdownParent: $('#addDocumentModal'),
		minimumResultsForSearch: Infinity,
	})

	$('#addDocumentForm').on('submit', function (e) {
		e.preventDefault() // prevent page refresh
		addDocument()
	})
	$('#editDocumentForm').on('submit', function (e) {
		e.preventDefault() // prevent page refresh
		updateDocument($('#edit_document_id').val())
	})
})
var editCount = 0
let addCounter = 0
let signatoriesList = []
let filteredSignatoriesList = []

const Toast = Swal.mixin({
	toast: true,
	position: 'top-end',
	showConfirmButton: false,
	timer: 2000,
	timerProgressBar: true,
	didOpen: (toast) => {
		toast.addEventListener('mouseenter', Swal.stopTimer)
		toast.addEventListener('mouseleave', Swal.resumeTimer)
	},
})

// Load Documents Table
loadDocumentsTable = () => {
	const dt = $('#documents-datatable')

	if (!dt.length) return

	dt.DataTable({
		dom: 'Bfrtip',
		buttons: ['print'],
		bDestroy: true,
		ajax: {
			url: apiURL + 'odrs/pup_staff/view_documents',
			type: 'GET',
			headers: AJAX_HEADERS,
		},
		//No Sort Function
		"aoColumnDefs": [
			{ 'bSortable': false, 'aTargets': ['no-sort'] }
		],
		columns: [
			{
				data: null,
				width: '70%',
				render: (data) => {
					return `<a href="#!" class="fw-medium">${data.document_name}</a><br><small>${data.document_details == null ? '' : data.document_details
						}</small>`
				},
			},
			{
				data: null,
				width: '20%',
				render: (data) => {
					if (data.document_type === 'CAV') {
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
					} else if (data.document_type === 'Transcript of Records') {
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
				width: '10%',
				render: (data) => {
					return `<div class="d-flex gap-2 justify-content-center">
					<button type="button" class="btn btn-info btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#viewDocumentModal" onclick="loadDocumentInfo('${data.document_id}')">
						<i class="ri-eye-fill fs-5"></i>
					</button>
					<button type="button" class="btn btn-warning btn-icon waves-effect waves-light" data-bs-toggle="modal" onclick="getDocumentInfo('${data.document_id}')" data-bs-target="#updateDocumentModal">
						<i class="ri-edit-2-fill fs-5"></i>
					</button>
				</div>`
				},
			},
		],
		order: [[0, 'asc']],
	})
}

let isPopulateSelectRunning = false

populateSelect = (signatoriesList = []) => {
	if (isPopulateSelectRunning) return
	isPopulateSelectRunning = true
	const selectSignatories = $('#select_signatories')
	selectSignatories.find('option').not(':disabled').remove()
	selectSignatories.find('option:disabled').prop('selected', true)
	$.ajax({
		type: 'GET',
		url: apiURL + 'odrs/pup_staff/view_signatory_users',
		headers: AJAX_HEADERS,
		success: (result) => {
			const signatories = result.data
			const options = signatories
				.filter((signatory) => !signatoriesList.includes(signatory.user_id))
				.map(
					(signatory) =>
						new Option(
							signatory.user_assigned_to_role.user_profiles[0].full_name,
							signatory.user_id,
						),
				)
			selectSignatories.append(options)
			isPopulateSelectRunning = false
			$('#select_signatories').select2({
				dropdownParent: $('#addDocumentModal'),
				minimumResultsForSearch: Infinity,
			})
		},
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

			$('#view_document_type').html(
				data.document_type === 'CAV' ? 'CAV (CHED/DFA/WES/CES)' : data.document_type,
			)
			$('#view_document_name').html(data.document_name)
			$('#view_document_details').html(data.document_details)
			$('#view_document_signatories').empty()
			data.document_signatories.forEach((signatory) => {
				$('#view_document_signatories').append(`
					<li>${signatory.signatory_for_user.user_profiles[0].full_name}</li>
				`)
			})
			$('#view_document_requirements').empty()
			if (data.document_requirements.length === 0) {
				$('#view_document_requirements').html('<i>No requirements are needed.</i>')
			} else {
				data.document_requirements.forEach((requirement) => {
					$('#view_document_requirements').append(`
						<li>${requirement.doc_req_name}</li>
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

	let numSignatories = 0
	numSignatories = $('#display_list').find('li').length
	if (numSignatories == 0) {
		Swal.fire({
			html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Fix Signatory Input!</h4><p class="text-muted mx-4 mb-0">You must click the button beside the Document Signatory to add them on the Approval Workflow.</p></div></div>',
			showCancelButton: !0,
			showConfirmButton: !1,
			cancelButtonClass: 'btn btn-danger w-xs mb-1',
			cancelButtonText: 'Dismiss',
			buttonsStyling: !1,
			showCloseButton: !0,
		})
		return ''
	}

	const form = new FormData($('#addDocumentForm')[0])

	var values = $("input[name='add_document_requirement']")
		.map(function () {
			return $(this).val()
		})
		.get()

	const data = {
		document_name: form.get('document_name'),
		document_details: form.get('document_details'),
		document_type: form.get('document_type'),
		document_requirements: values.map((item) => {
			return { doc_req_name: item }
		}),
		document_signatories: signatoriesList.map((element, index) => {
			return { user_id: element, hierarchy_number: index + 1 }
		}),
	}

	$.ajax({
		type: 'POST',
		url: apiURL + `odrs/pup_staff/upload_document`,
		headers: AJAX_HEADERS,
		data: data,
		dataType: 'json',
		success: (result) => {
			if (result) {
				$('#addDocumentModal').modal('hide');
				Toast.fire({
					icon: 'success',
					title: 'Added Document Successfully!',
				}).then(function () {
					$('#addDocumentModal').modal('hide')
					$('form#addDocumentForm')[0].reset()
					$('#document_requirements_list').empty()
					$('#display_list').empty()
					$('.signatories_div').removeClass('d-none')
					$('#select_signatories').attr('required', 'required')
					populateSelect()
					signatoriesList.length = 0
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

// Update Document
updateDocument = (document_id) => {
	if (!$('#editDocumentForm')[0].checkValidity()) return ''

	let numSignatories = 0
	numSignatories = $('#signatories_list').find('li').length
	if (numSignatories == 0) {
		Swal.fire({
			html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Fix Signatory Input!</h4><p class="text-muted mx-4 mb-0">You must click the button beside the Document Signatory to add them on the Approval Workflow.</p></div></div>',
			showCancelButton: !0,
			showConfirmButton: !1,
			cancelButtonClass: 'btn btn-danger w-xs mb-1',
			cancelButtonText: 'Dismiss',
			buttonsStyling: !1,
			showCloseButton: !0,
		})
		return ''
	}

	const form = new FormData($('#editDocumentForm')[0])
	var values = $("input[name='edit_document_requirement']")
		.map(function () {
			return $(this).val()
		})
		.get()
	const data = {
		document_name: form.get('document_name'),
		document_details: form.get('document_details'),
		document_type: form.get('document_type'),

		document_requirements: values.map((item) => {
			return { doc_req_name: item }
		}),
		document_signatories: filteredSignatoriesList.map((element, index) => {
			return { user_id: element, hierarchy_number: index + 1 }
		}),
	}

	$.ajax({
		type: 'PUT',
		url: apiURL + `odrs/pup_staff/edit_document/${document_id}`,
		headers: AJAX_HEADERS,
		data: data,
		dataType: 'json',
		success: (result) => {
			if (result) {
				Toast.fire({
					icon: 'success',
					title: 'Updated Document Successfully!',
				}).then(function () {
					$('#updateDocumentModal').modal('hide')
					$('form#editDocumentForm')[0].reset()
					$('#document_requirements_list').empty()
					editCount = 0
					// Reload Document Datatable
					loadDocumentsTable()
				})
			}
		},
	}).fail(() => {
		Swal.fire({
			html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Something went Wrong !</h4><p class="text-muted mx-4 mb-0">There was an error while editing a document. Please try again.</p></div></div>',
			showCancelButton: !0,
			showConfirmButton: !1,
			cancelButtonClass: 'btn btn-danger w-xs mb-1',
			cancelButtonText: 'Dismiss',
			buttonsStyling: !1,
			showCloseButton: !0,
		})
	})
}

// get document info
getDocumentInfo = (document_id) => {
	$.ajax({
		type: 'GET',
		url: apiURL + `odrs/pup_staff/view_document/${document_id}`,
		headers: AJAX_HEADERS,
		dataType: 'json',
		success: (result) => {
			if (result) {
				$('#edit_document_id').empty().val(result.data.document_id)
				$('#edit_document_name').empty().val(result.data.document_name)
				$('#edit_document_details').empty().html(result.data.document_details)
				$('#edit_document_type').val(result.data.document_type)

				const document_signatories = result.data.document_signatories
				$('#signatories_list').empty()
				document_signatories.forEach((signatory) => {
					$('#signatories_list').append(`
					<li id="${signatory.user_id}" class="d-flex align-items-center justify-content-between mb-2">
						<div class="d-flex align-items-center">
							<i class="me-3 glowing-circle"></i>
							<span class="fw-bold">${signatory.signatory_for_user.user_profiles[0].full_name}</span>
						</div>
						<a class="link-delete fs-15">
							<i class="ri-delete-bin-7-fill text-danger"></i>
						</a>
					</li>
				`)
				})

				filteredSignatoriesList = document_signatories.map((signatory) => signatory.user_id)
				filterSelect(filteredSignatoriesList)

				const document_requirements = result.data.document_requirements
				$('#edit_document_requirements_list').empty()
				editCount = document_requirements.length
				document_requirements.forEach((item, i) => {
					$('#edit_document_requirements_list').append(`
					<div id=${i + 1}>
					<div class="row"><div class="hstack gap-2 justify-content-end mb-3"><input type="text" name="edit_document_requirement" class="form-control" value="${item.doc_req_name
						}" required><a class="btn btn-danger rounded-pill" href="javascript:deleteEl(${i + 1
						}, 'edit')">Delete</a></div><div class="invalid-feedback">Please select the Document Requirement.</div></div></div>
					`)
				})
			}
		},
	}).fail(() => {
		Swal.fire({
			html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Something went Wrong !</h4><p class="text-muted mx-4 mb-0">There was an error while getting document information. Please try again.</p></div></div>',
			showCancelButton: !0,
			showConfirmButton: !1,
			cancelButtonClass: 'btn btn-danger w-xs mb-1',
			cancelButtonText: 'Dismiss',
			buttonsStyling: !1,
			showCloseButton: !0,
		})
	})
}

function checkSignatoryStatus() {
	if ($('#display_list').find('li').length == 0) {
		// No li elements found inside the ul tag with the id of display_list
		$('#select_signatories').prop('required', true)
	} else {
		$('#select_signatories').removeAttr('required')
	}
}

function print_signatory() {
	const selectedOption = $('#select_signatories option:selected')
	const selectedOptionID = selectedOption.val()

	if (selectedOptionID) {
		if (!signatoriesList.includes(selectedOptionID)) {
			signatoriesList.push(selectedOptionID)
			$('#display_list').append(`
				<li id="${selectedOptionID}" class="d-flex align-items-center justify-content-between mb-2">
					<div class="d-flex align-items-center">
						<i class="me-3 glowing-circle"></i>
						<span class="fw-bold">${selectedOption.text()}</span>
					</div>
					<a class="link-delete fs-15">
						<i class="ri-delete-bin-7-fill text-danger"></i>
					</a>
				</li>
			`)
			selectedOption.remove()
			$('#select_signatories').find('option:disabled').prop('selected', true)

			if ($('#select_signatories option').length === 1) {
				$('.signatories_div').addClass('d-none')
			} else {
				$('.signatories_div').removeClass('d-none')
			}
		}
	}

	checkSignatoryStatus()
}

$('#display_list').on('click', '.link-delete', function () {
	const removedOptionID = $(this).parent().attr('id')
	signatoriesList = signatoriesList.filter((value) => value !== removedOptionID)
	$(this).parent().remove()
	populateSelect(signatoriesList)

	checkSignatoryStatus()
})

filterSelect = (filteredSignatories) => {
	const selectSignatories = $('#edit_signatories')
	selectSignatories.find('option').not(':disabled').remove()
	selectSignatories.find('option:disabled').prop('selected', true)

	$.ajax({
		type: 'GET',
		url: apiURL + 'odrs/pup_staff/view_signatory_users',
		headers: AJAX_HEADERS,
		success: (result) => {
			const signatories = result.data
			const options = signatories
				.filter((signatory) => !filteredSignatories.includes(signatory.user_id))
				.map(
					(signatory) =>
						new Option(
							signatory.user_assigned_to_role.user_profiles[0].full_name,
							signatory.user_id,
						),
				)
			selectSignatories.append(options)
			if (selectSignatories.find('option').length > 1) {
				$('.signatories_div').removeClass('d-none')
			} else {
				$('.signatories_div').addClass('d-none')
			}
			selectSignatories.val(null).trigger('change')
			selectSignatories.select2({
				dropdownParent: $('#updateDocumentModal'),
				minimumResultsForSearch: Infinity,
			})
		},
	})
}

function validationChecker() {
	if ($('#signatories_list').find('li').length === 0) {
		// No li elements found inside the ul tag with the id of display_list
		$('#edit_signatories').prop('required', true)
	} else {
		$('#edit_signatories').removeAttr('required')
	}
}

function edit_signatory() {
	const selectedOption = $('#edit_signatories option:selected')
	const selectedOptionID = selectedOption.val()

	if (selectedOptionID) {
		if (!signatoriesList.includes(selectedOptionID)) {
			filteredSignatoriesList.push(selectedOptionID)
			$('#signatories_list').append(`
				<li id="${selectedOptionID}" class="d-flex align-items-center justify-content-between mb-2">
					<div class="d-flex align-items-center">
						<i class="me-3 glowing-circle"></i>
						<span class="fw-bold">${selectedOption.text()}</span>
					</div>
					<a class="link-delete fs-15">
						<i class="ri-delete-bin-7-fill text-danger"></i>
					</a>
				</li>
			`)
			selectedOption.remove()
			$('#edit_signatories').find('option:disabled').prop('selected', true)

			if ($('#select_signatories option').length > 1) {
				$('.signatories_div').removeClass('d-none')
			}
		}
	}

	validationChecker()
}

$('#signatories_list').on('click', '.link-delete', function () {
	const removedOptionID = $(this).parent().attr('id')
	filteredSignatoriesList = filteredSignatoriesList.filter((value) => value !== removedOptionID)
	$(this).parent().remove()
	filterSelect(filteredSignatoriesList)

	validationChecker()
})

function edit_new_link() {
	editCount++
	let o = document.createElement('div'),
		e = `<div class="row"><div class="hstack gap-2 justify-content-end mb-3"><input type="text" name="edit_document_requirement" class="form-control" placeholder="Enter a requirement for this Document" required><a class="btn btn-danger rounded-pill" href="javascript:deleteEl(${(o.id =
			editCount)}, 'edit')">Delete</a></div><div class="invalid-feedback">Please select the Document Requirement.</div></div>`
		; (o.innerHTML = document.getElementById('edit_newForm').innerHTML + e),
			document.getElementById('edit_document_requirements_list').appendChild(o)
}

function deleteEl(o, val) {
	d = document
	o = d.getElementById(o)
	d.getElementById(`${val}_document_requirements_list`).removeChild(o)
}

document.getElementById('addDocReq').addEventListener('click', function () {
	const container = document.getElementById('add_doc_req_container')

	const div = document.createElement('div')
	div.classList.add('hstack', 'gap-2', 'justify-content-end', 'mb-3')

	const textField = document.createElement('input')
	textField.type = 'text'
	textField.id = `textField-${addCounter}`
	textField.classList.add('form-control')
	textField.placeholder = 'Enter a requirement for this Document'
	textField.required = true
	textField.name = 'add_document_requirement'

	const deleteBtn = document.createElement('button')
	deleteBtn.innerHTML = 'Delete'
	deleteBtn.id = `deleteBtn-${addCounter}`
	deleteBtn.classList.add('btn', 'btn-danger', 'rounded-pill')

	deleteBtn.addEventListener('click', function () {
		container.removeChild(div)
	})

	div.appendChild(textField)
	div.appendChild(deleteBtn)
	container.appendChild(div)

	addCounter++
})
