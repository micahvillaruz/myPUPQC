		<!--datatable js-->
		<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
		<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
		<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

		<script src="<?= base_url() ?>public/js/pages/datatables.init.js"></script>

		<!--select2 cdn-->
		<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

		<script src="<?= base_url() ?>public/js/pages/select2.init.js"></script>

		<!-- Sweet Alerts js -->
		<script src="<?= base_url() ?>public/libs/sweetalert2/sweetalert2.min.js"></script>

		<!-- Sweet alert init js-->
		<script src="<?= base_url() ?>public/js/pages/sweetalerts.init.js"></script>

		<!-- Documents ajax -->
		<script src="<?= base_url() ?>public/js/ajax/pup-staff/odrs/documents.ajax.js"></script>

		<!-- Custom Script -->
		<script>
			var count = 2

			function new_link() {
				count++
				var o = document.createElement('div'),
					e =
					'<div class="row"><div class="hstack gap-2 justify-content-end"><input type="text" name="document_requirement" class="form-control mb-2" placeholder="Enter one requirement of the Document"><a class="btn btn-primary" href="javascript:deleteEl(' +
					(o.id = count) +
					')">Delete</a></div></div>';
				(o.innerHTML = document.getElementById('newForm').innerHTML + e),
				document.getElementById('document_requirements_list').appendChild(o)
			}

			function deleteEl(o) {
				d = document
				o = d.getElementById(o)
				d.getElementById('document_requirements_list').removeChild(o)
			}
		</script>

		<!-- App js -->
		<script src="<?= base_url() ?>public/js/app.js"></script>
		</body>

		</html>