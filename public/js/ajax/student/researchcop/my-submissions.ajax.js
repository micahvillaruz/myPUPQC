$(function () {
	loadMySubmissionsTable()

	const ResearchFileTypes = ['application/pdf']

	pondForResearch = FilePond.create(document.querySelector('#research_pdf'), {
		instantUpload: false,
		allowProcess: false,
		acceptedFileTypes: ResearchFileTypes,
		// ! Minsan hindi talaga ChatGPT ang solution: ang Documentation.
		// ! https://pqina.nl/filepond/docs/api/instance/properties/
		beforeAddFile: (file) => {
			// Check if the file type is not accepted
			if (!ResearchFileTypes.includes(file.fileType)) {
				// Show an error message
				// * Sweetalert2 that will say: Only PDF, JPG, and PNG files are allowed
				Swal.fire({
					iconHtml: `<lord-icon src="https://cdn.lordicon.com/nduddlov.json" trigger="loop" colors="outline:#f06548,primary:#ffffff,secondary:#f06548" style="width:100px;height:100px"></lord-icon>`,
					customClass: {
						icon: 'border-white',
					},
					title: 'Something went wrong.',
					text: `Only PDF files are allowed! The one you are uploading is a: ${file.fileType}`,
					showCancelButton: !0,
					showConfirmButton: !1,
					cancelButtonClass: 'btn btn-danger w-xs mb-1',
					cancelButtonText: 'Dismiss',
					buttonsStyling: !1,
					showCloseButton: !0,
				})
				// Reject the file
				return false
			}
			// Continue with the file upload
			return true
		},
	})

	$('#upload_submit').on('click', function (e) {
		e.preventDefault() // prevent page refresh
		console.log('Uploading Research Document')

		const research_id = $('#research_id').val()

		uploadResearchAJAX(pondForResearch, research_id)
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

				// Research Upload
				{
					data: null,
					class: 'text-center',
					render: (data) => {
						let UpResearchDocu = data.research_pdf
						if (data.research_pdf == null) {
							UpResearchDocu = `<button type="button" class="btn btn-info btn-label waves-effect waves-light" onclick="viewResearchRecord('${data.research_id}')" data-bs-toggle="modal" data-bs-target="#uploadResearchModal"><i class="ri-file-upload-line label-icon align-middle fs-16 me-2"></i>Upload</button>`
						}
						else{
							UpResearchDocu = `<button type="button" class="btn btn-success btn-label waves-effect waves-light" onclick="viewResearchDocument('${data.research_id}')" data-bs-toggle="modal" data-bs-target="#research_document_preview"><i class="ri-file-line label-icon align-middle fs-16 me-2"></i>View</button>
							<button type="button" class="btn btn-danger btn-label waves-effect waves-light" onclick="deleteResearchDocument('${data.research_id}')"><i class="ri-delete-bin-line label-icon align-middle fs-16 me-2"></i>Delete</button>
											`
						}
						return `
    				<div class="dropdown d-inline-block">
					${UpResearchDocu}
					</div>
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

				// Research Document
				{
					data: null,
					class: 'text-center',
					render: (data) => {
						let ResearchDocu = data.research_pdf
						if (data.research_pdf == null) {
							ResearchDocu = `<span class="badge rounded-pill bg-danger">Not Available</span>`
						}
						else{
							ResearchDocu = `<span class="badge rounded-pill bg-success">Available</span>`
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
				$('#display_research_title').html(researchRecord.research_title)
				$('#research_id').val(researchRecord.research_id)
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

uploadResearchAJAX = (pondForResearch, research_id) => {
	if ($('#uploadResearchForm')[0]) {
		const form = new FormData($('#uploadResearchForm')[0])
		console.log(research_id)

		if (
			form.get('filepond') == '' ||
			Object.prototype.toString.call(form.get('filepond')) === '[object File]'
		) {
			form.delete('filepond')
		}

		pondFiles = pondForResearch.getFiles()
		for (var i = 0; i < pondFiles.length; i++) {
			// append the blob file
			if (pondFiles[i].file != null) {
				form.append('research_pdf', pondFiles[i].file)
			}
		}

		for (var pair of form.entries()) {
			console.log(pair[0] + ': ' + pair[1])
		}

		$.ajax({
			url: apiURL + `researchcop/my-submissions/upload/${research_id}`,
			type: 'PUT',
			headers: AJAX_HEADERS,
			data: form,
			processData: false,
			contentType: false,
			success: (result) => {
				if (result) {
					Swal.fire({
						title: 'Success!',
						text: 'Successfully upload your Research Document',
						icon: 'success',
						confirmButtonClass: 'btn btn-success w-xs mb-1',
						confirmButtonText: 'Okay',
						buttonsStyling: !1,
					}).then((result) => {
						if (result.isConfirmed) {
							window.location.reload()
						}
					})
				}
			},
		}).fail(() => {
			Swal.fire({
				html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Something went Wrong!</h4><p class="text-muted mx-4 mb-0">There was an error while uploading your Research document. Please try again.</p></div></div>',
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
		url: apiURL + `researchcop/my-submissions/${research_id}`,
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


deleteResearchDocument = (research_id) => {
	// next update
	Swal.fire({
		title: 'Are you sure you want to delete your Research Document?',
		text: "By deleting your Research Document, PUP guarantees that your uploads are deleted immediately in our databases and you won't be able to retrieve it.",
		iconHtml: `<lord-icon src="https://cdn.lordicon.com/nduddlov.json" trigger="loop" colors="outline:#f06548,primary:#ffffff,secondary:#f06548" style="width:100px;height:100px"></lord-icon>`,
		customClass: {
			icon: 'border-white',
		},
		showCancelButton: true,
		confirmButtonColor: '#f06548',
		cancelButtonColor: '#6c757d',
		confirmButtonText: 'Delete',
	}).then((result) => {
		if (result.isConfirmed) {
			$.ajax({
				url: apiURL + `researchcop/my-submissions/deleteupload/${research_id}`,
				type: 'DELETE',
				headers: AJAX_HEADERS,
				success: (result) => {
					if (result) {
						Swal.fire({
							html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Well done !</h4><p class="text-muted mx-4 mb-0">You have successfully deleted your Research Document!</p></div></div>',
							showCancelButton: !0,
							showConfirmButton: !1,
							cancelButtonClass: 'btn btn-success w-xs mb-1',
							cancelButtonText: 'Ok',
							buttonsStyling: !1,
							showCloseButton: !0,
						}).then(function () {
							setTimeout(() => {
								location.reload()
							}, 1000)
						})
					}
				},
			}).fail(() => {
				Swal.fire({
					html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Something went Wrong !</h4><p class="text-muted mx-4 mb-0">There was an error while deleting your Research Document. Please try again.</p></div></div>',
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