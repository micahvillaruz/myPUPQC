$(() => {
	document.getElementById('pay-warning') &&
		document.getElementById('pay-warning').addEventListener('click', () => {
			Swal.fire({
				html: '<div class="mt-3"><div class="avatar-lg mx-auto"><div class="avatar-title bg-light text-warning display-4 rounded-circle"><i class="mdi mdi-credit-card-search-outline"></i></div></div><div class="mt-4 pt-2 fs-15"><h4 class="fs-20 fw-semibold">Warning!</h4><p class="text-muted mb-0 mt-3 fs-13">If you made an online payment just minutes ago, we recommend that you <span class="fw-medium text-dark">check your ATM account</span> first if previous transaction was charged already. </p></div></div>',
				showCancelButton: !0,
				confirmButtonClass: 'btn btn-success w-xs me-2 mt-2',
				cancelButtonClass: 'btn btn-danger w-xs mt-2',
				confirmButtonText: 'Proceed',
				buttonsStyling: !1,
				showCloseButton: !0,
			}).then((result) => {
				if (result.value) {
					location.href = 'https://www.lbp-eservices.com/egps/portal/GFields.jsp'
				}
			})
		})

	document.getElementById('cancel-warning') &&
		document.getElementById('cancel-warning').addEventListener('click', function () {
			Swal.fire({
				title: 'Are you sure?',
				text: 'Are you sure you want to Cancel this Request?',
				icon: 'warning',
				showCancelButton: !0,
				confirmButtonClass: 'btn btn-success w-xs me-2 mt-2',
				cancelButtonClass: 'btn btn-danger w-xs mt-2',
				confirmButtonText: 'Yes, cancel it!',
				cancelButtonText: 'Close',
				buttonsStyling: !1,
				showCloseButton: !0,
			}).then(function (t) {
				t.value &&
					Swal.fire({
						title: 'Cancelled!',
						text: 'Your request has been cancelled.',
						icon: 'success',
						confirmButtonClass: 'btn btn-primary w-xs mt-2',
						buttonsStyling: !1,
					})
			})
		})
})
