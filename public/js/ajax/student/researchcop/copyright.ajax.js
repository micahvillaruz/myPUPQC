$(function () {
	loadResearchCopyrightTable()

	const ResearchFileTypes = ['application/pdf']

	pondForCopyright= FilePond.create(document.querySelector('#copyright_pdf'), {
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

		const research_id = $('#research_id').val()

		uploadCopyrightAJAX(pondForCopyright, research_id)
	})

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
				url: apiURL + 'researchcop/my-submissions/allresearch',
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

                // Copyright Document Upload
				{
					data: null,
					width: '5%',
					class: 'text-center',
					render: (data) => {
						let UpResearchDocu = data.copyright_pdf
						if (data.copyright_pdf == null && data.research_pdf == null) {
							UpResearchDocu = `<span class="badge rounded-pill bg-danger">Upload Research First</span>`
						}
						else if (data.copyright_pdf == null && data.research_pdf != null) {
							UpResearchDocu = `<button type="button" class="btn btn-info btn-label waves-effect waves-light" onclick="viewResearchRecord('${data.research_id}')" data-bs-toggle="modal" data-bs-target="#uploadCopyrightModal"><i class="ri-upload-line label-icon align-middle fs-16 me-2"></i>Upload</button>`
						}
						else{
							UpResearchDocu = `<button type="button" class="btn btn-success btn-label waves-effect waves-light" onclick="viewCopyrightDocument('${data.research_id}')" data-bs-toggle="modal" data-bs-target="#copyright_document_preview"><i class="ri-file-line label-icon align-middle fs-16 me-2"></i>View</button>
							<button type="button" class="btn btn-danger btn-label waves-effect waves-light" onclick="deleteCopyrightDocument('${data.research_id}')"><i class="ri-delete-bin-line label-icon align-middle fs-16 me-2"></i>Delete</button>
											`
						}
						return `
    				<div class="dropdown d-inline-block">
					${UpResearchDocu}
					</div>
    					`
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


                // Research Status
				{
					data: null,
					width: '5%',
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

                // Copyright Status
				{
					data: null,
					width: '5%',
					class: 'text-center',
					render: (data) => {
						let copyrhtsts = data.copyright_status
						if (data.copyright_status === 'Approved'){
							copyrhtsts = `<span class="badge rounded-pill bg-success">Copyrighted</span>`
						}
                        else if (data.copyright_status === 'Reviewing'){
							copyrhtsts = `<span class="badge rounded-pill bg-warning">Reviewing</span>`
						}
                        else if (data.copyright_status === 'Rejected'){
							copyrhtsts = `<span class="badge rounded-pill bg-danger">Rejected</span>`
						}
						else{
							copyrhtsts = `<span class="badge rounded-pill bg-dark">No Upload</span>`
						}

						return `
						<div class="dropdown d-inline-block">
						${copyrhtsts}
						</div>
						`
					},
				},

				// Remarks
				{
					data: null,
					width: '5%',
					class: 'text-center',
					render: (data) => {
						return `
						<div class="dropdown d-inline-block">
						<button type="button" class="btn btn-success btn-icon waves-effect waves-light" onclick="viewCopyrightRemarks('${data.research_id}')" data-bs-toggle="modal" data-bs-target="#viewCopyrightRemarks"><i class="ri-question-fill fs-5"></i></button>
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

				$('#display_research_title').html(researchRecord.research_title)
				$('#research_id').val(researchRecord.research_id)
		},
	})
}

// View Copyright Remarks Agax
viewCopyrightRemarks = (research_id) => {
	$.ajax({
		type: 'GET',
		cache: false,
		url: apiURL + `researchcop/my-submissions/remarks/${research_id}`,
		headers: AJAX_HEADERS,
		dataType: 'json',
		success: (result) => {
			const researchRecord = result.data
				$('#view2_research_title').html(researchRecord.research_title)
				$('#view_research_checked_by').html(researchRecord.copyright_checked_by)
				$('#view_copyright_remarks').html(researchRecord.copyright_remarks)
		},
	})
}

uploadCopyrightAJAX = (pondForCopyright, research_id) => {
	if ($('#uploadCopyrightForm')[0]) {
		const form = new FormData($('#uploadCopyrightForm')[0])
		console.log(research_id)

		if (
			form.get('filepond') == '' ||
			Object.prototype.toString.call(form.get('filepond')) === '[object File]'
		) {
			form.delete('filepond')
		}

		pondFiles = pondForCopyright.getFiles()
		for (var i = 0; i < pondFiles.length; i++) {
			// append the blob file
			if (pondFiles[i].file != null) {
				form.append('copyright_pdf', pondFiles[i].file)
			}
		}

		for (var pair of form.entries()) {
			console.log(pair[0] + ': ' + pair[1])
		}

		$.ajax({
			url: apiURL + `researchcop/my-submissions/copyrightupload/${research_id}`,
			type: 'PUT',
			headers: AJAX_HEADERS,
			data: form,
			processData: false,
			contentType: false,
			success: (result) => {
				if (result) {
					Swal.fire({
						title: 'Success!',
						text: 'Successfully upload your Research Copyright Document',
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
				html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Something went Wrong!</h4><p class="text-muted mx-4 mb-0">There was an error while uploading your Copyright document. Please try again.</p></div></div>',
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

viewCopyrightDocument = (research_id) => {
	$.ajax({
		url: apiURL + `researchcop/my-submissions/${research_id}`,
		type: 'GET',
		headers: AJAX_HEADERS,
		success: (result) => {
			const data = result.data
			console.log(data)
			$('#hid_research_id').val(data.research_id)
			$('#hid_research_title').html(data.research_title)
			$('#document_preview').attr('src', data.copyright_pdf)
		},
	})
}

deleteCopyrightDocument = (research_id) => {
	// next update
	Swal.fire({
		title: 'Are you sure you want to delete your Copyright Document?',
		text: "By deleting your Copyright Document, PUP guarantees that your uploads are deleted immediately and your research will marked as 'Non-Copyrighted' Research.",
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
				url: apiURL + `researchcop/my-submissions/deletecopyrightupload/${research_id}`,
				type: 'DELETE',
				headers: AJAX_HEADERS,
				success: (result) => {
					if (result) {
						Swal.fire({
							html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Well done !</h4><p class="text-muted mx-4 mb-0">You have successfully deleted your Copyright Document!</p></div></div>',
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
					html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Something went Wrong !</h4><p class="text-muted mx-4 mb-0">There was an error while deleting your Copyright Document. Please try again.</p></div></div>',
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