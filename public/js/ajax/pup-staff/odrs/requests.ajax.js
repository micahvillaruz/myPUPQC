$(function () {
	$('a[data-bs-toggle="tab"]').on('shown.bs.tab', function (e) {
		$('#pending-datatables').DataTable().columns.adjust().responsive.recalc()
		$('#approved-datatables').DataTable().columns.adjust().responsive.recalc()
	})

	$('#pending-datatables').DataTable().columns.adjust().responsive.recalc()
	$('#approved-datatables').DataTable().columns.adjust().responsive.recalc()
})

// Approve Request
approveRequest = () => {
	Swal.fire({
		html:
			'<div class="mt-3">' +
			'<lord-icon src="https://cdn.lordicon.com/nocovwne.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>' +
			'<div class="mt-4 pt-2 fs-15 mx-5">' +
			'<h4>Are you sure?</h4>' +
			'<p class="text-muted mx-4 mb-2">Do you want to approve this request?</p>' +
			'</div>' +
			'</div>',
		showCancelButton: true,
		confirmButtonClass: 'btn btn-success w-xs me-2 mb-1',
		confirmButtonText: 'Yes, Approve It!',
		cancelButtonClass: 'btn btn-ghost-success w-xs mb-1',
		cancelButtonText: 'Dismiss',
		buttonsStyling: false,
		showCloseButton: true,
	}).then(function (result) {
		if (result.value) {
			Swal.fire({
				html:
					'<div class="mt-3">' +
					'<div class="avatar-lg mx-auto">' +
					'<div class="avatar-title bg-light text-danger display-5 rounded-circle"><i class="mdi mdi-nfc-search-variant"></i></div>' +
					'</div>' +
					'<div class="mt-4 pt-2 fs-15">' +
					'<h4 class="fs-20 fw-semibold">For Clearance</h4>' +
					'<div class="mt-4"><label for="remarks" class="h5 form-label">Remarks</label><textarea class="form-control" id="remarks" name="remarks" rows="3" placeholder="Enter the Schedule of Visit and Requirements to be submitted by the student upon processing of documents at PUP QC."></textarea></div>' +
					'</div>' +
					'</div>',
				showCancelButton: true,
				confirmButtonClass: 'btn btn-danger w-xs me-2 mb-1',
				confirmButtonText: 'Submit',
				cancelButtonClass: 'btn btn-ghost-danger w-xs mb-1',
				cancelButtonText: 'Close',
				buttonsStyling: false,
				showCloseButton: true,
			}).then(function (result) {
				if (result.value) {
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
						cancelButtonClass: 'btn btn-primary w-xs mb-1',
						cancelButtonText: 'Back',
						buttonsStyling: !1,
						showCloseButton: !0,
					}).fail(() => {
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
							cancelButtonClass: 'btn btn-primary w-xs mb-1',
							cancelButtonText: 'Dismiss',
							buttonsStyling: !1,
							showCloseButton: !0,
						})
					})
				}
			})
		}
	})
}

// Cancel Request
cancelRequest = () => {
	Swal.fire({
		html:
			'<div class="mt-3">' +
			'<lord-icon src="https://cdn.lordicon.com/puvaffet.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>' +
			'<div class="mt-4 pt-2 fs-15 mx-5">' +
			'<h4>Are you sure?</h4>' +
			'<p class="text-muted mx-4 mb-0">Do you want to cancel this request?</p>' +
			'</div>' +
			'</div>',
		showCancelButton: true,
		confirmButtonClass: 'btn btn-danger w-xs me-2 mb-1',
		confirmButtonText: 'Yes, Cancel It!',
		cancelButtonClass: 'btn btn-ghost-danger w-xs mb-1',
		cancelButtonText: 'Dismiss',
		buttonsStyling: false,
		showCloseButton: true,
	}).then(function (result) {
		if (result.value) {
			Swal.fire({
				html:
					'<div class="mt-3">' +
					'<div class="avatar-lg mx-auto">' +
					'<div class="avatar-title bg-light text-danger display-5 rounded-circle"><i class="mdi mdi-cancel"></i></div>' +
					'</div>' +
					'<div class="mt-4 pt-2 fs-15">' +
					'<h4 class="fs-20 fw-semibold">Cancelled</h4>' +
					'<div class="mt-4"><label for="remarks" class="h5 form-label">Remarks</label><textarea class="form-control" id="remarks" name="remarks" rows="3" placeholder="Enter the reason why you are cancelling this request."></textarea></div>' +
					'</div>' +
					'</div>',
				showCancelButton: true,
				confirmButtonClass: 'btn btn-danger w-xs me-2 mb-1',
				confirmButtonText: 'Submit',
				cancelButtonClass: 'btn btn-ghost-danger w-xs mb-1',
				cancelButtonText: 'Close',
				buttonsStyling: false,
				showCloseButton: true,
			}).then(function (result) {
				if (result.value) {
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
						cancelButtonClass: 'btn btn-primary w-xs mb-1',
						cancelButtonText: 'Back',
						buttonsStyling: !1,
						showCloseButton: !0,
					}).fail(() => {
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
							cancelButtonClass: 'btn btn-primary w-xs mb-1',
							cancelButtonText: 'Dismiss',
							buttonsStyling: !1,
							showCloseButton: !0,
						})
					})
				}
			})
		}
	})
}

// For Evaluation / Processing
forEvaluation = () => {
	Swal.fire({
		html:
			'<div class="mt-3">' +
			'<lord-icon src="https://cdn.lordicon.com/tvyxmjyo.json" trigger="loop" colors="primary:#110a5c,secondary:#66a1ee" style="width:150px;height:150px"></lord-icon>' +
			'<div class="mt-1 fs-15 mx-5">' +
			'<h4>Are you sure?</h4>' +
			'<p class="text-muted mx-4 mb-2">Is this request already  <span class="fw-medium text-info" fw-bolder>PAID</span> by the student and now <span class="fw-medium text-info" fw-bolder>For Evaluation / Processing</span>?</p>' +
			'</div>' +
			'</div>',
		showCancelButton: true,
		confirmButtonClass: 'btn btn-info w-xs me-2 mb-1',
		confirmButtonText: 'Yes, It is!',
		cancelButtonClass: 'btn btn-ghost-info w-xs mb-1',
		cancelButtonText: 'Dismiss',
		buttonsStyling: false,
		showCloseButton: true,
	}).then(function (result) {
		if (result.value) {
			Swal.fire({
				html:
					'<div class="mt-3">' +
					'<div class="avatar-lg mx-auto">' +
					'<div class="avatar-title bg-light text-info display-5 rounded-circle"><i class="mdi mdi-file-sign"></i></div>' +
					'</div>' +
					'<div class="mt-4 pt-2 fs-15">' +
					'<h4 class="fs-20 fw-semibold">For Evaluation / Processing</h4>' +
					'<div class="mt-4"><label for="remarks" class="h5 form-label">Remarks</label><textarea class="form-control" id="remarks" name="remarks" rows="3" placeholder="Enter the signatories of the documents requested and expected number of working days in the processing of this request."></textarea></div>' +
					'</div>' +
					'</div>',
				showCancelButton: true,
				confirmButtonClass: 'btn btn-info w-xs me-2 mb-1',
				confirmButtonText: 'Submit',
				cancelButtonClass: 'btn btn-ghost-info w-xs mb-1',
				cancelButtonText: 'Close',
				buttonsStyling: false,
				showCloseButton: true,
			}).then(function (result) {
				if (result.value) {
					Swal.fire({
						html:
							'<div class="mt-3">' +
							'<lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>' +
							'<div class="mt-4 pt-2 fs-15">' +
							'<h4>Well done!</h4>' +
							'<p class="text-muted mx-4 mb-0">You have successfully updated the status of this request!</p>' +
							'</div>' +
							'</div>',
						showCancelButton: !0,
						showConfirmButton: !1,
						cancelButtonClass: 'btn btn-primary w-xs mb-1',
						cancelButtonText: 'Back',
						buttonsStyling: !1,
						showCloseButton: !0,
					}).fail(() => {
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
							cancelButtonClass: 'btn btn-primary w-xs mb-1',
							cancelButtonText: 'Dismiss',
							buttonsStyling: !1,
							showCloseButton: !0,
						})
					})
				}
			})
		}
	})
}

// Ready for Pickup
forPickup = () => {
	Swal.fire({
		html:
			'<div class="mt-3">' +
			'<lord-icon src="https://cdn.lordicon.com/fhtaantg.json" trigger="loop" colors="primary:#121331,secondary:#b4b4b4" style="width:150px;height:150px"></lord-icon>' +
			'<div class="mt-1 fs-15 mx-5">' +
			'<h4>Are you sure?</h4>' +
			'<p class="text-muted mx-4 mb-2">Is this request already processed and now <span class="fw-medium text-dark" fw-bolder>Ready for Pickup</span>?</p>' +
			'</div>' +
			'</div>',
		showCancelButton: true,
		confirmButtonClass: 'btn btn-dark w-xs me-2 mb-1',
		confirmButtonText: 'Yes, It is!',
		cancelButtonClass: 'btn btn-ghost-dark w-xs mb-1',
		cancelButtonText: 'Dismiss',
		buttonsStyling: false,
		showCloseButton: true,
	}).then(function (result) {
		if (result.value) {
			Swal.fire({
				html:
					'<div class="mt-3">' +
					'<div class="avatar-lg mx-auto">' +
					'<div class="avatar-title bg-light text-dark display-5 rounded-circle"><i class="ri-user-received-2-line"></i></div>' +
					'</div>' +
					'<div class="mt-4 pt-2 fs-15">' +
					'<h4 class="fs-20 fw-semibold">Ready for Pickup</h4>' +
					'<div class="mt-4"><label for="remarks" class="h5 form-label">Remarks</label><textarea class="form-control" id="remarks" name="remarks" rows="3" placeholder="Enter the Schedule of Pick-up and the Additional Requirements the student needs to bring upon claiming if necessary."></textarea></div>' +
					'</div>' +
					'</div>',
				showCancelButton: true,
				confirmButtonClass: 'btn btn-dark w-xs me-2 mb-1',
				confirmButtonText: 'Submit',
				cancelButtonClass: 'btn btn-ghost-dark w-xs mb-1',
				cancelButtonText: 'Close',
				buttonsStyling: false,
				showCloseButton: true,
			}).then(function (result) {
				if (result.value) {
					Swal.fire({
						html:
							'<div class="mt-3">' +
							'<lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>' +
							'<div class="mt-4 pt-2 fs-15">' +
							'<h4>Well done!</h4>' +
							'<p class="text-muted mx-4 mb-0">You have successfully updated the status of this request!</p>' +
							'</div>' +
							'</div>',
						showCancelButton: !0,
						showConfirmButton: !1,
						cancelButtonClass: 'btn btn-primary w-xs mb-1',
						cancelButtonText: 'Back',
						buttonsStyling: !1,
						showCloseButton: !0,
					}).fail(() => {
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
							cancelButtonClass: 'btn btn-primary w-xs mb-1',
							cancelButtonText: 'Dismiss',
							buttonsStyling: !1,
							showCloseButton: !0,
						})
					})
				}
			})
		}
	})
}

// Released
released = () => {
	Swal.fire({
		html:
			'<div class="mt-3">' +
			'<lord-icon src="https://cdn.lordicon.com/cjieiyzp.json" trigger="loop" colors="primary:#08a88a,secondary:#000000" style="width:150px;height:150px"></lord-icon>' +
			'<div class="mt-1 fs-15 mx-5">' +
			'<h4>Are you sure?</h4>' +
			'<p class="text-muted mx-4 mb-2">Is this request already received and now <span class="fw-medium text-success" fw-bolder>Released</span> to the student?</p>' +
			'</div>' +
			'</div>',
		showCancelButton: true,
		confirmButtonClass: 'btn btn-success w-xs me-2 mb-1',
		confirmButtonText: 'Yes, It is!',
		cancelButtonClass: 'btn btn-ghost-success w-xs mb-1',
		cancelButtonText: 'Dismiss',
		buttonsStyling: false,
		showCloseButton: true,
	}).then(function (result) {
		if (result.value) {
			Swal.fire({
				html:
					'<div class="mt-3">' +
					'<div class="avatar-lg mx-auto">' +
					'<div class="avatar-title bg-light text-success display-5 rounded-circle"><i class="ri-checkbox-circle-line"></i></div>' +
					'</div>' +
					'<div class="mt-4 pt-2 fs-15">' +
					'<h4 class="fs-20 fw-semibold">Released</h4>' +
					'<div class="mt-4"><label for="remarks" class="h5 form-label">Remarks</label><textarea class="form-control" id="remarks" name="remarks" rows="3" placeholder="Enter the name of the student who received the documents and the date and time when the request is claimed."></textarea></div>' +
					'</div>' +
					'</div>',
				showCancelButton: true,
				confirmButtonClass: 'btn btn-success w-xs me-2 mb-1',
				confirmButtonText: 'Submit',
				cancelButtonClass: 'btn btn-ghost-success w-xs mb-1',
				cancelButtonText: 'Close',
				buttonsStyling: false,
				showCloseButton: true,
			}).then(function (result) {
				if (result.value) {
					Swal.fire({
						html:
							'<div class="mt-3">' +
							'<lord-icon src="https://cdn.lordicon.com/lupuorrc.json" trigger="loop" colors="primary:#0ab39c,secondary:#405189" style="width:120px;height:120px"></lord-icon>' +
							'<div class="mt-4 pt-2 fs-15">' +
							'<h4>Well done!</h4>' +
							'<p class="text-muted mx-4 mb-0">You have successfully updated the status of this request!</p>' +
							'</div>' +
							'</div>',
						showCancelButton: !0,
						showConfirmButton: !1,
						cancelButtonClass: 'btn btn-primary w-xs mb-1',
						cancelButtonText: 'Back',
						buttonsStyling: !1,
						showCloseButton: !0,
					}).fail(() => {
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
							cancelButtonClass: 'btn btn-primary w-xs mb-1',
							cancelButtonText: 'Dismiss',
							buttonsStyling: !1,
							showCloseButton: !0,
						})
					})
				}
			})
		}
	})
}
