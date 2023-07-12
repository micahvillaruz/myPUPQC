$(function () {
	getAuthor()

	$('#addResearchForm').on('submit', function (e) {
		e.preventDefault() // prevent page refresh
		addResearch()
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
