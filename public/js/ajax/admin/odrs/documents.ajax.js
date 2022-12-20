// Delete Document
deleteDocument = () => {
	$.ajaxSetup({
		headers: {
			Accept: 'application/json',
			Authorization: 'Bearer ' + TOKEN,
			ContentType: 'application/x-www-form-urlencoded',
		},
	})

	Swal.fire({
		html: `
                <div class="mt-3">
                    <lord-icon src="https://cdn.lordicon.com/exkbusmy.json" trigger="loop" colors="outline:#121331,primary:#646e78,secondary:#f06548,tertiary:#ebe6ef" style="width:100px;height:100px"></lord-icon>
                    <div class="mt-4 fs-13">
                        <h4 class="mb-3 fw-semibold">Delete this Document?</h4>
                        <div class="alert alert-warning alert-border-left alert-dismissible fade show" style="padding-right: 16px;" role="alert">
                            <div class="mb-2 d-flex align-items-center justify-content-center">
                                <i class="ri-alert-line me-2 align-middle fs-6"></i> <strong>WARNING</strong>
                            </div>
                            <span>
                                Deleting this document means that the document will not be visible to the Student and the PUP staff. <br><span class="fw-medium">You also cannot restore a deleted document</span>.
                            </span>
                        </div>
                    </div>
                </div>
            `,
		showCancelButton: true,
		confirmButtonClass: 'btn btn-danger fw-medium waves-effect waves-light me-2',
		confirmButtonText: 'Yes, Delete It!',
		cancelButtonClass: 'btn btn-light fw-medium waves-effect waves-light',
		buttonsStyling: false,
		showCloseButton: true,
	}).then(function (result) {
		if (result.value) {
			$.ajax({
				success: (result) => {
					if (result) {
						Swal.fire({
							html:
								'<div class="mt-3">' +
								'<lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>' +
								'<div class="mt-4 pt-2 fs-15">' +
								'<h4>Well done!</h4>' +
								'<p class="text-muted mx-4 mb-0">You have successfully deleted a document!</p>' +
								'</div>' +
								'</div>',
							showCancelButton: !0,
							showConfirmButton: !1,
							cancelButtonClass: 'btn btn-success fw-medium waves-effect waves-light',
							cancelButtonText: 'Dismiss',
							buttonsStyling: !1,
							showCloseButton: !0,
						})
					}
				},
			}).fail(() => {
				Swal.fire({
					html:
						'<div class="mt-3">' +
						'<lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon>' +
						'<div class="mt-4 pt-2 fs-15">' +
						'<h4>Something went Wrong!</h4>' +
						'<p class="text-muted mx-4 mb-0">There was an error while deleting a document. Please try again.</p>' +
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
