$(function () {
	$('#contact_form').on('submit', function (e) {
		e.preventDefault()

		if ($('#contact_form')[0].checkValidity()) {
			Swal.fire({
				html:
					'<div class="mt-3">' +
					'<lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>' +
					'<div class="mt-4 pt-2 fs-15">' +
					'<h4>Message sent successfully !</h4>' +
					`<p class="text-muted mx-4 mb-0">Name: ${$('#name').val()}</p>` +
					`<p class="text-muted mx-4 mb-0">Email: ${$('#email').val()}</p>` +
					`<p class="text-muted mx-4 mb-0">Subject: ${$('#subject').val()}</p>` +
					`<p class="text-muted mx-4 mb-0">Comments: ${$('#comments').val()}</p>` +
					'</div>' +
					'</div>',
				showCancelButton: true,
				showConfirmButton: false,
				cancelButtonClass: 'btn btn-success w-xs mb-1',
				cancelButtonText: 'Ok',
				buttonsStyling: false,
				showCloseButton: true,
			})
		}
	})
})
