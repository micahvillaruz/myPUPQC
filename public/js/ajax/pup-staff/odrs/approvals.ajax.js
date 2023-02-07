$('a[data-bs-toggle="tab"]').on('shown.bs.tab', function (e) {
	$('#for-approval-requests-sign').DataTable().columns.adjust().responsive.recalc()
	$('#approved-requests-sign').DataTable().columns.adjust().responsive.recalc()
	$('#onhold-requests-sign').DataTable().columns.adjust().responsive.recalc()
})
