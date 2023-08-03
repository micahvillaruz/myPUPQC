$(function () {
	loadResearchTable()

	$('#editCoAuthorsForm').on('submit', function (e) {
		e.preventDefault() // prevent page refresh
		const research_id = $('#re_id').val()
		editCoAuthorsAJAX(research_id)
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
loadResearchTable = () => {
	const dt = $('#research-author-datatable')

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
				url: apiURL + 'researchcop/author/allresearch',
				type: 'GET',
				ContentType: 'application/x-www-form-urlencoded',
			},
			columns: [
				// Title
				{
					data: null,
					width: '40%',
					class: 'text-center',
					render: (data) => {
						const rTitle = data.research_title
						return `${rTitle}`
					},
				},

                // Author
				{
					data: null,
                    width: '10%',
					class: 'text-center',
                    render: (data) => {
                    const rAuthor = data.research_author
                    return `<span class="badge rounded-pill bg-primary">${rAuthor}</span>`
                    },
				},

				// Co-Author
				{
					data: null,
					class: 'text-center',
					render: (data) => {
					const rCoAuthor = data.research_co_author
					return `${rCoAuthor}`
					},
				},


                // Actions
				{
					data: null,
					class: 'text-center',
					render: (data) => {
                        return `
                          <div class="dropdown d-inline-block">
                              <button type="button" class="btn btn-warning btn-icon waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#editCoAuthorModal" onclick="editCoAuthors('${data.research_id}')"><i class="ri-pencil-fill fs-5"></i></button> 
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
				// For edit/resubmit
				$('#re_id').val(researchRecord.research_id)
				$('#re_title').val(researchRecord.research_title)
				$('#re_title').prop('disabled', true)
				$('#re_author').val(researchRecord.research_author)
				$('#re_author').prop('disabled', true)
				$('#re_co_author').val(researchRecord.research_co_author)
		},
	})

}

editCoAuthors = (research_id) => viewResearchRecord(research_id)

editCoAuthorsAJAX = (research_id) => {
	// Enroll Student
	if ($('#editCoAuthorsForm')[0].checkValidity()) {
		// no validation error
		const form = new FormData($('#editCoAuthorsForm')[0])

		data = {
			research_co_author: form.get('re_co_author'),
		}

		$.ajax({
			url: apiURL + `researchcop/author/editcoauthors/${research_id}`,
			type: 'PUT',
			data: data,
			dataType: 'json',
			headers: AJAX_HEADERS,
			success: (result) => {
				if (result) {
					Toast.fire({
						icon: 'success',
						title: 'Updated Co-Authors Successfully!',
					}).then(function () {
						// Hide the update student details modal
						$('form#editCoAuthorsForm')[0].reset()
						$('#editCoAuthorModal').modal('hide')

						// Reload Student Datatable
						loadResearchTable()
					})
				}
			},
		}).fail(() => {
			Swal.fire({
				html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Something went Wrong !</h4><p class="text-muted mx-4 mb-0">There was an error while updating Co-authors. Please try again.</p></div></div>',
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