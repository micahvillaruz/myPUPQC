$(function () {
	$('a[data-bs-toggle="tab"]').on('shown.bs.tab', function (e) {
		$('#pending-datatables').DataTable().columns.adjust().responsive.recalc()
		$('#approved-datatables').DataTable().columns.adjust().responsive.recalc()
	})

	$('#pending-datatables').DataTable().columns.adjust().responsive.recalc()
	$('#approved-datatables').DataTable().columns.adjust().responsive.recalc()

	$('#approveRequestForm').on('submit', function (e) {
		e.preventDefault() // prevent page refresh
		approveRequest()
	})

	$('#cancelRequestForm').on('submit', function (e) {
		e.preventDefault() // prevent page refresh
		cancelRequest()
	})

	$('#forProcessingRequestForm').on('submit', function (e) {
		e.preventDefault() // prevent page refresh
		forProcessingRequest()
	})

	$('#readyForPickupRequestForm').on('submit', function (e) {
		e.preventDefault() // prevent page refresh
		readyforPickupRequest()
	})

	$('#releasedRequestForm').on('submit', function (e) {
		e.preventDefault() // prevent page refresh
		releasedRequest()
	})
})

// Approve Request
approveRequest = () => {
	if (!$('#approveRequestForm')[0].checkValidity()) return

	Swal.fire({
		html:
			'<div class="mt-3">' +
			'<lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>' +
			'<div class="mt-4 pt-2 fs-15">' +
			'<h4>Well done!</h4>' +
			'<p class="text-muted mx-4 mb-0">You have successfully approved this request!</p>' +
			'</div>' +
			'</div>',
		showCancelButton: !0,
		showConfirmButton: !1,
		cancelButtonClass: 'btn btn-success w-xs mb-1',
		cancelButtonText: 'Ok',
		buttonsStyling: !1,
		showCloseButton: !0,
	})
		.then(function () {
			$('#approveRequestModal').modal('hide')
			$('form#approveRequestForm')[0].reset()
		})
		.fail(() => {
			Swal.fire({
				html:
					'<div class="mt-3">' +
					'<lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon>' +
					'<div class="mt-4 pt-2 fs-15">' +
					'<h4>Something went Wrong!</h4>' +
					'<p class="text-muted mx-4 mb-0">There was an error while updating the status of this request. Please try again.</p>' +
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

// Cancel Request
cancelRequest = () => {
	if (!$('#cancelRequestForm')[0].checkValidity()) return

	Swal.fire({
		html:
			'<div class="mt-3">' +
			'<lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>' +
			'<div class="mt-4 pt-2 fs-15">' +
			'<h4>Well done!</h4>' +
			'<p class="text-muted mx-4 mb-0">You have successfully cancelled this request!</p>' +
			'</div>' +
			'</div>',
		showCancelButton: !0,
		showConfirmButton: !1,
		cancelButtonClass: 'btn btn-success w-xs mb-1',
		cancelButtonText: 'Ok',
		buttonsStyling: !1,
		showCloseButton: !0,
	})
		.then(function () {
			$('#cancelRequestModal').modal('hide')
			$('form#cancelRequestForm')[0].reset()
		})
		.fail(() => {
			Swal.fire({
				html:
					'<div class="mt-3">' +
					'<lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon>' +
					'<div class="mt-4 pt-2 fs-15">' +
					'<h4>Something went Wrong!</h4>' +
					'<p class="text-muted mx-4 mb-0">There was an error while updating the status of this request. Please try again.</p>' +
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

// for Evaluation / Processing
forProcessingRequest = () => {
	if (!$('#forProcessingRequestForm')[0].checkValidity()) return

	Swal.fire({
		html:
			'<div class="mt-3">' +
			'<lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>' +
			'<div class="mt-4 pt-2 fs-15">' +
			'<h4>Well done!</h4>' +
			'<p class="text-muted mx-4 mb-0">You have successfully set the status of this request to For Evaluation/Processing!</p>' +
			'</div>' +
			'</div>',
		showCancelButton: !0,
		showConfirmButton: !1,
		cancelButtonClass: 'btn btn-success w-xs mb-1',
		cancelButtonText: 'Ok',
		buttonsStyling: !1,
		showCloseButton: !0,
	})
		.then(function () {
			$('#forProcessingModal').modal('hide')
			$('form#forProcessingRequestForm')[0].reset()
		})
		.fail(() => {
			Swal.fire({
				html:
					'<div class="mt-3">' +
					'<lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon>' +
					'<div class="mt-4 pt-2 fs-15">' +
					'<h4>Something went Wrong!</h4>' +
					'<p class="text-muted mx-4 mb-0">There was an error while updating the status of this request. Please try again.</p>' +
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

// Ready for Pickup
readyforPickupRequest = () => {
	if (!$('#readyForPickupRequestForm')[0].checkValidity()) return

	Swal.fire({
		html:
			'<div class="mt-3">' +
			'<lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>' +
			'<div class="mt-4 pt-2 fs-15">' +
			'<h4>Well done!</h4>' +
			'<p class="text-muted mx-4 mb-0">You have successfully set the status of this request to Ready for Pickup!</p>' +
			'</div>' +
			'</div>',
		showCancelButton: !0,
		showConfirmButton: !1,
		cancelButtonClass: 'btn btn-success w-xs mb-1',
		cancelButtonText: 'Ok',
		buttonsStyling: !1,
		showCloseButton: !0,
	})
		.then(function () {
			$('#readyforPickupModal').modal('hide')
			$('form#readyForPickupRequestForm')[0].reset()
		})
		.fail(() => {
			Swal.fire({
				html:
					'<div class="mt-3">' +
					'<lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon>' +
					'<div class="mt-4 pt-2 fs-15">' +
					'<h4>Something went Wrong!</h4>' +
					'<p class="text-muted mx-4 mb-0">There was an error while updating the status of this request. Please try again.</p>' +
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

// Released
releasedRequest = () => {
	if (!$('#releasedRequestForm')[0].checkValidity()) return

	Swal.fire({
		html:
			'<div class="mt-3">' +
			'<lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>' +
			'<div class="mt-4 pt-2 fs-15">' +
			'<h4>Well done!</h4>' +
			'<p class="text-muted mx-4 mb-0">You have successfully set the status of this request to Released!</p>' +
			'</div>' +
			'</div>',
		showCancelButton: !0,
		showConfirmButton: !1,
		cancelButtonClass: 'btn btn-success w-xs mb-1',
		cancelButtonText: 'Ok',
		buttonsStyling: !1,
		showCloseButton: !0,
	})
		.then(function () {
			$('#releasedModal').modal('hide')
			$('form#releasedRequestForm')[0].reset()
		})
		.fail(() => {
			Swal.fire({
				html:
					'<div class="mt-3">' +
					'<lord-icon src="https://cdn.lordicon.com/tdrtiskw.json" trigger="loop" colors="primary:#f06548,secondary:#f7b84b" style="width:120px;height:120px"></lord-icon>' +
					'<div class="mt-4 pt-2 fs-15">' +
					'<h4>Something went Wrong!</h4>' +
					'<p class="text-muted mx-4 mb-0">There was an error while updating the status of this request. Please try again.</p>' +
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
