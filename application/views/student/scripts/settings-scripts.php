		<!-- profile-setting init js -->
		<script src="<?= base_url() ?>public/js/pages/profile-setting.init.js"></script>

		<!--select2 cdn-->
		<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

		<script src="<?= base_url() ?>public/js/pages/select2.init.js"></script>

		<script src="<?= base_url() ?>public/js/pages/form-validation.init.js"></script>

		<script src="<?= base_url() ?>public/js/pages/passowrd-create.init.js"></script>

		<!-- Sweet alert init js-->
		<script src="<?= base_url() ?>public/js/pages/sweetalerts.init.js"></script>

		<!-- Settings ajax -->
		<script src="<?= base_url() ?>public/js/ajax/student/settings.ajax.js"></script>

		<!-- App js -->
		<script src="<?= base_url() ?>public/js/app.js"></script>

		<script>
			$(function() {
				// Javascript to enable link to tab
				var hash = location.hash.replace(/^#/, ''); // ^ means starting, meaning only match the first hash
				if (hash) {
					$('.nav-tabs-custom a[href="#' + hash + '"]').tab('show');
				}

				// Change hash for page-reload
				$('.nav-tabs-custom a').on('shown.bs.tab', function(e) {
					window.location.hash = e.target.hash;
				})
			})
		</script>

		</body>

		</html>