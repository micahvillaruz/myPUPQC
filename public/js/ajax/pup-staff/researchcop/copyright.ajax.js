$(function () {
	loadResearchCopyrightTable()
	loadCapstoneCopyrightTable()

    $('#rejectCopyrightForm').on('submit', function (e) {
		e.preventDefault() // prevent page refresh
		rejectCopyrightRecordAJAX($('#edit_research_id').val())
	})
})


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


// Load  research datatables
loadResearchCopyrightTable = () => {
	const dt = $('#research-copyright-management-datatable')

	$.ajaxSetup({
		headers: AJAX_HEADERS,
	})

	if (dt.length) {
		dt.DataTable({
			dom:
				"<'row'<'col-xl-12 mb-2'B>>" +
				"<'row'<'col-sm-12 col-md-6'l><'col-sm-12 col-md-6'f>>" +
				"<'row'<'col-sm-12'tr>>" +
				"<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
			buttons: [
				
			],
			bDestroy: true,
			ajax: {
				url: apiURL + 'researchcop/copyright-submissions/research',
				type: 'GET',
				ContentType: 'application/x-www-form-urlencoded',
			},
			columns: [
				// Title
				{
					data: null,
					class: 'text-center',
					render: (data) => {
						const rTitle = data.research_title
						return `${rTitle}`
					},
				},

                // Copyright Document Upload
				{
					data: null,
					class: 'text-center',
					render: (data) => {
						let UpResearchDocu = data.copyright_pdf
						if (data.copyright_pdf == null) {
							UpResearchDocu = `<span class="badge rounded-pill bg-danger">Not Available</span>`
						}
						else{
							UpResearchDocu = `<button type="button" class="btn btn-success btn-label waves-effect waves-light" onclick="viewCopyrightDocument('${data.research_id}')" data-bs-toggle="modal" data-bs-target="#copyright_document_preview"><i class="ri-file-line label-icon align-middle fs-16 me-2"></i>View</button>
											`
						}
						return `
    				<div class="dropdown d-inline-block">
					${UpResearchDocu}
					</div>
    					`
					},
				},


                // Research Status
				{
					data: null,
					class: 'text-center',
					render: (data) => {
						let copyrht = data.research_type
						if (data.research_type === 'Copyrighted'){
							copyrht = `<span class="badge rounded-pill bg-success">Copyrighted</span>`
						}
						else{
							copyrht = `<span class="badge rounded-pill bg-danger">Non-Copyrighted</span>`
						}

						return `
						<div class="dropdown d-inline-block">
						${copyrht}
						</div>
						`
					},
				},

                //Action
				{
					data: null,
					class: 'text-center',
					render: (data) => {
						return `
                        <div class="dropdown d-inline-block">
	                    <button type="button" class="btn btn-success btn-icon waves-effect waves-light" onclick="approveCopyrightRecord('${data.research_id}')"><i class="ri-check-line"></i></button>
	                    <button type="button" class="btn btn-danger btn-icon waves-effect waves-light" onclick="rejectCopyrightRecord('${data.research_id}')" data-bs-toggle="modal" data-bs-target="#rejectCopyrightModal"><i class="ri-close-line"></i></button>
                        </div>`
					},
				},
				
			],
			order: [[0, 'asc']],
		})
	}
}

// Load  research datatables
loadCapstoneCopyrightTable = () => {
	const dt = $('#capstone-copyright-management-datatable')

	$.ajaxSetup({
		headers: AJAX_HEADERS,
	})

	if (dt.length) {
		dt.DataTable({
			dom:
				"<'row'<'col-xl-12 mb-2'B>>" +
				"<'row'<'col-sm-12 col-md-6'l><'col-sm-12 col-md-6'f>>" +
				"<'row'<'col-sm-12'tr>>" +
				"<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
			buttons: [
				
			],
			bDestroy: true,
			ajax: {
				url: apiURL + 'researchcop/copyright-submissions/capstone',
				type: 'GET',
				ContentType: 'application/x-www-form-urlencoded',
			},
			columns: [
				// Title
				{
					data: null,
					class: 'text-center',
					render: (data) => {
						const rTitle = data.research_title
						return `${rTitle}`
					},
				},

                // Copyright Document Upload
				{
					data: null,
					class: 'text-center',
					render: (data) => {
						let UpResearchDocu = data.copyright_pdf
						if (data.copyright_pdf == null) {
							UpResearchDocu = `<span class="badge rounded-pill bg-danger">Not Available</span>`
						}
						else{
							UpResearchDocu = `<button type="button" class="btn btn-success btn-label waves-effect waves-light" onclick="viewCopyrightDocument('${data.research_id}')" data-bs-toggle="modal" data-bs-target="#copyright_document_preview"><i class="ri-file-line label-icon align-middle fs-16 me-2"></i>View</button>
											`
						}
						return `
    				<div class="dropdown d-inline-block">
					${UpResearchDocu}
					</div>
    					`
					},
				},


                // Research Status
				{
					data: null,
					class: 'text-center',
					render: (data) => {
						let copyrht = data.research_type
						if (data.research_type === 'Copyrighted'){
							copyrht = `<span class="badge rounded-pill bg-success">Copyrighted</span>`
						}
						else{
							copyrht = `<span class="badge rounded-pill bg-danger">Non-Copyrighted</span>`
						}

						return `
						<div class="dropdown d-inline-block">
						${copyrht}
						</div>
						`
					},
				},

                //Action
				{
					data: null,
					class: 'text-center',
					render: (data) => {
						return `
                        <div class="dropdown d-inline-block">
	                    <button type="button" class="btn btn-success btn-icon waves-effect waves-light" onclick="approveCopyrightRecord('${data.research_id}')"><i class="ri-check-line"></i></button>
	                    <button type="button" class="btn btn-danger btn-icon waves-effect waves-light" onclick="rejectCopyrightRecord('${data.research_id}')" data-bs-toggle="modal" data-bs-target="#rejectCopyrightModal"><i class="ri-close-line"></i></button>
                        </div>`
					},
				},
				
			],
			order: [[0, 'asc']],
		})
	}
}

viewCopyrightDocument = (research_id) => {
	$.ajax({
		url: apiURL + `researchcop/copyright-submissions/${research_id}`,
		type: 'GET',
		headers: AJAX_HEADERS,
		success: (result) => {
			const data = result.data
			console.log(data)
			$('#hid_research_id').val(data.research_id)
			$('#hid_research_title').html(data.research_title)
			$('#document_preview').attr('src', data.copyright_pdf)

            $('#edit_research_id').val(data.research_id)
			$('#r_title2').html(data.research_title)
		},
	})
}

// Get Admin
getAdmin = (user_id) => {
	$.ajax({
		url: apiURL + `researchcop/research-pending/info/${user_id}`,
        type: 'GET',
		headers: AJAX_HEADERS,
		success: (result) => {
            if (result) {
			const data = result.data
            
			$('#r_checked_by2').html(data.full_name)
			$('#r_checked_by').val(data.full_name)
            }
		},
	}).fail(() => console.error('There was an error in retrieving admin data'))
}

rejectCopyrightRecord = (research_id) => viewCopyrightDocument(research_id), getAdmin()

rejectCopyrightRecordAJAX = (research_id) => {
	// Reject Copyright Document
	if ($('#rejectCopyrightForm')[0].checkValidity()) {
		// no validation error
		const form = new FormData($('#rejectCopyrightForm')[0])

		data = {
			copyright_remarks: form.get('r_remarks'),
			copyright_checked_by: form.get('r_checked_by'),
		}

		$.ajax({
			url: apiURL + `researchcop/copyright-submissions/rejectCopyright/${research_id}`,
			type: 'DELETE',
			data: data,
			dataType: 'json',
			headers: AJAX_HEADERS,
			success: (result) => {
				if (result) {
					Toast.fire({
						icon: 'success',
						title: 'Reject Research Successfully!',
					}).then(function () {
						$('#rejectCopyrightModal').modal('hide')
						$('form#rejectCopyrightForm')[0].reset()

						// Reload My Submissions Datatable
						loadCopyrightTable()
					})
				}
			},
		}).fail(() => {
			Swal.fire({
				html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Something went Wrong !</h4><p class="text-muted mx-4 mb-0">There was an error while rejecting a copyright document. Please try again.</p></div></div>',
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

// Approve Research
approveCopyrightRecord = (research_id) => {

	var checkname =  $('#r_checked_by').val();

	data = {
		copyright_checked_by: checkname
	}
	
	$.ajaxSetup({
		headers: {
			Accept: 'application/json',
			Authorization: 'Bearer ' + TOKEN,
			ContentType: 'application/x-www-form-urlencoded',
		},
	})

	Swal.fire({
		html:
			'<div class="mt-3">' +
			'<lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>' +
			'<div class="mt-4 pt-2 fs-15 mx-5">' +
			'<h4>Are you Sure ?</h4>' +
			'<p class="text-muted mx-4 mb-0">Do you want to approve this copyright document ?</p>' +
			'</div>' +
			'</div>',
		showCancelButton: true,
		confirmButtonClass: 'btn btn-success w-xs me-2 mb-1',
		confirmButtonText: 'Approve',
		cancelButtonClass: 'btn btn-light w-xs mb-1',
		buttonsStyling: false,
		showCloseButton: true,
	}).then(function (result) {
		if (result.value) {
			$.ajax({
				url: apiURL + 'researchcop/copyright-submissions/approvedCopyright/' + research_id,
				data: data,
				type: 'PUT',
				dataType: 'json',
				success: (result) => {
					if (result) {
						Toast.fire({
							icon: 'success',
							title: 'Approve Copyright Successfully!',
						}).then(function () {
							// Reload Research Records Datatable
							loadCopyrightTable()
						})
					}
				},
			}).fail(() => {
				Swal.fire({
					html:
						'<div class="mt-3">' +
						'<lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon>' +
						'<div class="mt-4 pt-2 fs-15">' +
						'<h4>Something went Wrong !</h4>' +
						'<p class="text-muted mx-4 mb-0">There was an error while Approving Copyright Document. Please try again.</p>' +
						'</div>' +
						'</div>',
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