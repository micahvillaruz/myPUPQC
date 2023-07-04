$(function () {
	getAuthor()

	$('#addResearchForm').on('submit', function (e) {
		e.preventDefault() // prevent page refresh
		addResearch()
	})

	const ResearchFileTypes = ['application/pdf']

	pondForVaxCard = FilePond.create(document.querySelector('#research_pdf'), {
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

// Get Author
getAuthor = (user_id) => {
	$.ajax({
		url: apiURL + `researchcop/my-submissions/info/${user_id}`,
        type: 'GET',
		headers: AJAX_HEADERS,
		success: (result) => {
            if (result) {
			const data = result.data
            
			$('#fkr_author').val(data.full_name)
			$('#r_author').val(data.full_name)
            }
		},
	}).fail(() => console.error('There was an error in retrieving student full name data'))
}


// Add Research
addResearch = () => {
	// Add Research
	if ($('#addResearchForm')[0].checkValidity()) {
		// no validation error
		const form = new FormData($('#addResearchForm')[0])

		//comparing authors
		var authorname =  $('#fkr_author').val();
		var researchauthor = $('#r_author').val();

		data = {
			research_title: form.get('r_title'),
			user_full_name: form.get('fkr_author'),
			research_author: form.get('r_author'),
			research_abstract: form.get('r_abstract'),
			research_date_accomplished: form.get('r_date_accomplished'),
			research_adviser: form.get('r_adviser'),
			research_program: form.get('r_program'),
			research_type: form.get('r_type'),
		}

		if(authorname != researchauthor){
			Swal.fire({
				html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Something went Wrong !</h4><p class="text-muted mx-4 mb-0">Your Full Name and Author Name does not match. Please try again.</p></div></div>',
				showCancelButton: !0,
				showConfirmButton: !1,
				cancelButtonClass: 'btn btn-danger w-xs mb-1',
				cancelButtonText: 'Dismiss',
				buttonsStyling: !1,
				showCloseButton: !0,
			})

		}

		else{

		$.ajax({
			url: apiURL + 'researchcop/my-submissions/add',
			type: 'POST',
			data: data,
			dataType: 'json',
			headers: AJAX_HEADERS,
			success: (result) => {
				if (result) {
					Toast.fire({
						icon: 'success',
						title: 'Add Research Successfully!',
					}).then(function () {
						$('form#addResearchForm')[0].reset()
						window.location.href = `${baseURL}student/researchcop/my-submissions`
					})
				}
			},
		}).fail(() => {
			Swal.fire({
				html: '<div class="mt-3"><lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon><div class="mt-4 pt-2 fs-15"><h4>Something went Wrong !</h4><p class="text-muted mx-4 mb-0">There was an error while adding a research. Please try again.</p></div></div>',
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
}
