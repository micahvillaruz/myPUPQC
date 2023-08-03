$(function () {
	loadResearchRecordsTable()


	$('#deleteResearchForm').on('submit', function (e) {
		e.preventDefault() // prevent page refresh
		deleteResearchRecordAJAX($('#edit_research_id').val())
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
loadResearchRecordsTable = () => {
	const dt = $('#research-records-datatable')

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
				{
					extend: 'print',
					text: '<i class="ri-printer-fill"></i> Print',
					exportOptions: {
						columns: [0, 1, 2, 3, 4],
					},
				},
			],
			bDestroy: true,
			ajax: {
				url: apiURL + 'researchcop/research-records/allresearch',
				type: 'GET',
				ContentType: 'application/x-www-form-urlencoded',
			},
			columns: [
				// Title
				{
					data: null,
					width: '20%',
					class: 'text-center',
					render: (data) => {
						const rTitle = data.research_title
						return `${rTitle}`
					},
				},

				// Author name
				{
					data: null,
					width: '5%',
					class: 'text-center',
					render: (data) => {
						const rAuthor = data.research_author
						return `${rAuthor}`
					},
				},

				// Program
				{
					data: null,
					width: '40%',
					class: 'text-center',
					render: (data) => {
						const rProgram = data.research_program
						return `${rProgram}`
					},
				},

				// Type
				{
					data: null,
					width: '5%',
					class: 'text-center',
					render: (data) => {
						let rType = data.research_type
						if (data.research_type === 'Copyrighted'){
							rType = `<span class="badge rounded-pill bg-success">Copyrighted</span>`
						}
						else{
							rType = `<span class="badge rounded-pill bg-danger">Non-Copyrighted</span>`
						}
						return `${rType}`
					},
				},

               	// Research Category
				{
					data: null,
					width: '5%',
					class: 'text-center',
					render: (data) => {
						let categ = data.research_category
						if (data.research_category === 'Research'){
							categ = `<span class="badge rounded-pill bg-success">Research</span>`
						}
						else{
							categ = `<span class="badge rounded-pill bg-info">Capstone</span>`
						}

						return `
						<div class="dropdown d-inline-block">
						${categ}
						</div>
						`
					},
				},

				//Action
				{
					data: null,
					width: '5%',
					class: 'text-center',
					render: (data) => {
						return `
    <div class="dropdown d-inline-block">
    <button type="button" class="btn btn-info btn-icon waves-effect waves-light" onclick="viewResearchRecord('${data.research_id}')" data-bs-toggle="modal" data-bs-target="#viewResearchRecord"><i class="ri-eye-fill fs-5"></i></button>
	<button type="button" class="btn btn-danger btn-icon waves-effect waves-light" onclick="deleteResearchRecord('${data.research_id}')" data-bs-toggle="modal" data-bs-target="#deleteResearchModal"><i class="ri-delete-bin-fill"></i></button>
	</div>
    `
					},
				},

				// Research Document
				{
					data: null,
					width: '5%',
					class: 'text-center',
					render: (data) => {
						let ResearchDocu = data.research_pdf
						if (data.research_pdf == null) {
							ResearchDocu = `<span class="badge rounded-pill bg-danger">Not Available</span>`
						}
						else{
							ResearchDocu = `<button type="button" class="btn btn-success btn-label waves-effect waves-light" onclick="viewResearchDocument('${data.research_id}')" data-bs-toggle="modal" data-bs-target="#research_document_preview"><i class="ri-file-line label-icon align-middle fs-16 me-2"></i>View</button>`
						}

						return `
						<div class="dropdown d-inline-block">
						${ResearchDocu}
						</div>
						`
					},
				},
			],
			order: [[0, 'asc']],
		})
	}
}


// View Research Record Modal
viewResearchRecord = (research_id) => {
	$.ajax({
		type: 'GET',
		cache: false,
		url: apiURL + `researchcop/research-records/${research_id}`,
		headers: AJAX_HEADERS,
		dataType: 'json',
		success: (result) => {
			const researchRecord = result.data

				$('#view_research_title').html(researchRecord.research_title)
				$('#view_research_co_author').html(researchRecord.research_co_author)
                $('#view_research_adviser').html(researchRecord.research_adviser)
				$('#view_research_date_accomplished').html(researchRecord.research_date_accomplished)
				$('#view_research_status').html(researchRecord.research_status)
                $('#view_research_abstract').html(researchRecord.research_abstract)
				$('#view_research_category').html(researchRecord.research_category)
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

getResearchApprove = (research_id) => {
	$.ajax({
		type: 'GET',
		cache: false,
		url: apiURL + `researchcop/research-records/${research_id}`,
		headers: AJAX_HEADERS,
		dataType: 'json',
		success: (result) => {
			if (result) {
			const researchRecord = result.data
				$('#edit_research_id').val(researchRecord.research_id)
				$('#r_title2').html(researchRecord.research_title)
			}
		},
	})
}

deleteResearchRecord = (research_id) => getResearchApprove(research_id), getAdmin()

deleteResearchRecordAJAX = (research_id) => {
	// Reject Research
	if ($('#deleteResearchForm')[0].checkValidity()) {
		// no validation error
		const form = new FormData($('#deleteResearchForm')[0])

		data = {
			research_remarks: form.get('r_remarks'),
			research_checked_by: form.get('r_checked_by'),
		}

		$.ajax({
			url: apiURL + `researchcop/research-records/deleteResearch/${research_id}`,
			type: 'DELETE',
			data: data,
			dataType: 'json',
			headers: AJAX_HEADERS,
			success: (result) => {
				if (result) {
					Toast.fire({
						icon: 'success',
						title: 'Research move to Archives Successfully!',
					}).then(function () {
						$('#deleteResearchModal').modal('hide')
						$('form#deleteResearchForm')[0].reset()

						// Reload My Submissions Datatable
						loadResearchRecordsTable()

					})
				}
			},
		}).fail(() => {
			Swal.fire({
				html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Something went Wrong !</h4><p class="text-muted mx-4 mb-0">There was an error while archiving a research. Please try again.</p></div></div>',
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


viewResearchDocument = (research_id) => {
	$.ajax({
		url: apiURL + `researchcop/research-records/${research_id}`,
		type: 'GET',
		headers: AJAX_HEADERS,
		success: (result) => {
			const data = result.data
			console.log(data)
			$('#hid_research_id').val(data.research_id)
			$('#hid_research_title').html(data.research_title)
			$('#document_preview').attr('src', data.research_pdf)
		},
	})
}
