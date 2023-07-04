$(function () {
	loadMySubmissionsTable()
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
loadMySubmissionsTable = () => {
	const dt = $('#my-submissions-datatable')

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
				url: apiURL + 'researchcop/my-submissions/',
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

				// Research Information
				{
					data: null,
					class: 'text-center',
					render: (data) => {
						return `
    <div class="dropdown d-inline-block">
    <button type="button" class="btn btn-info btn-icon waves-effect waves-light" onclick="viewResearchRecord('${data.research_id}')" data-bs-toggle="modal" data-bs-target="#viewResearchRecord"><i class="ri-eye-fill fs-5"></i></button>
	</div>
    `
					},
				},

                // Status
				{
					data: null,
					class: 'text-center',
					render: (data) => {
						let activationBtn = data.research_status
						if (data.research_status === 'Approved') {
							activationBtn = `<span class="badge rounded-pill bg-success">Approved</span>`
						}
						else if (data.research_status === 'Pending') {
							activationBtn = `<span class="badge rounded-pill bg-warning">Pending</span>`
						}
						else if (data.research_status === 'Rejected') {
							activationBtn = `<span class="badge rounded-pill bg-danger">Rejected</span>`
						}
						else{
							activationBtn = `<span class="badge rounded-pill bg-dark">Archived</span>`
						}

						let copyrht = data.research_type
						if (data.research_type === 'Copyrighted'){
							copyrht = `<span class="badge rounded-pill bg-success">Copyrighted</span>`
						}
						else{
							copyrht = `<span class="badge rounded-pill bg-danger">Non-Copyrighted</span>`
						}

						return `
						<div class="dropdown d-inline-block">
						${activationBtn}
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
						let reSubmitBtn = data.research_status
						if (data.research_status === 'Rejected') {
							reSubmitBtn = `<div class="dropdown d-inline-block">
							<button type="button" class="btn btn-warning btn-icon waves-effect waves-light" onclick="viewResearchAbstract('${data.research_id}')" data-bs-toggle="modal" data-bs-target="#viewResearchAbstract"><i class="ri-edit-fill fs-5"></i></button>
											</div>`
						}
						else if (data.research_status === 'Approved') {
							reSubmitBtn = ``
						}
						else if (data.research_status === 'Pending') {
							reSubmitBtn = ``
						}
						else if (data.research_status === 'Archived') {
							reSubmitBtn = ``
						}

						let cpyform = data.research_type
						if (data.research_type === 'Non-Copyrighted'){
							cpyform = `<a href="copyright"><button type="button" class="btn btn-primary btn-icon waves-effect waves-light"><i class="ri-copyright-fill fs-5"></i></button></a>`
						}
						else {
							cpyform = ``
						}
						return `
						${reSubmitBtn}
						${cpyform}
    					`
					},
				},

				// Remarks
				{
					data: null,
					class: 'text-center',
					render: (data) => {
						return `
						<div class="dropdown d-inline-block">
						<button type="button" class="btn btn-success btn-icon waves-effect waves-light" onclick="viewResearchRemarks('${data.research_id}')" data-bs-toggle="modal" data-bs-target="#viewResearchRemarks"><i class="ri-question-fill fs-5"></i></button>
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
		url: apiURL + `researchcop/my-submissions/${research_id}`,
		headers: AJAX_HEADERS,
		dataType: 'json',
		success: (result) => {
			const researchRecord = result.data
				$('#view_research_title').html(researchRecord.research_title)
				$('#view_research_author').html(researchRecord.research_author)
				$('#view_research_date_accomplished').html(researchRecord.research_date_accomplished)
                $('#view_research_adviser').html(researchRecord.research_adviser)
				$('#view_research_program').html(researchRecord.research_program)
				$('#view_research_type').html(researchRecord.research_type)
				$('#view_research_abstract').html(researchRecord.research_abstract)
		},
	})
}


// View Research Record Modal
viewResearchRemarks = (research_id) => {
	$.ajax({
		type: 'GET',
		cache: false,
		url: apiURL + `researchcop/my-submissions/remarks/${research_id}`,
		headers: AJAX_HEADERS,
		dataType: 'json',
		success: (result) => {
			const researchRecord = result.data
				$('#view2_research_title').html(researchRecord.research_title)
				$('#view_research_checked_by').html(researchRecord.research_checked_by)
				$('#view_research_remarks').html(researchRecord.research_remarks)
		},
	})
}