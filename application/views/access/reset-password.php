<body>

  <div class="auth-page-wrapper pt-5">
    <!-- auth page bg -->
    <div class="auth-one-bg-position auth-one-bg" id="auth-particles">
      <div class="bg-overlay"></div>

      <div class="shape">
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1440 120">
          <path d="M 0,36 C 144,53.6 432,123.2 720,124 C 1008,124.8 1296,56.8 1440,40L1440 140L0 140z"></path>
        </svg>
      </div>
    </div>

    <!-- auth page content -->
    <div class="auth-page-content">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="text-center mt-sm-5 mb-4 text-white-50">
              <div>
                <a href="<?= base_url() ?>" class="d-inline-block auth-logo">
                  <img src="<?= base_url() ?>public/images/logo-light.png" alt="" height="60">
                </a>
              </div>
              <p class="mt-3 fs-15 fw-medium">A Student Self Service Portal</p>
            </div>
          </div>
        </div>
        <!-- end row -->

        <div class="row justify-content-center">
          <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="card mt-4">

              <div class="card-body p-4">
                <div class="text-center mt-2">
                  <h5 class="text-primary">Reset Password</h5>
                </div>

                <div class="p-1 password-form-body" id="<?php echo $token ?>">
                  <div class="alert alert-borderless alert-warning text-center mb-2 mx-2" role="alert">
                    Please enter your password immediately as you will be redirected back to the Forgot Password page after 5 minutes.
                  </div>
                  <div class="p-2">
                    <form id="resetPasswordForm" class="needs-validation" novalidate>
                      <div class="mb-4">
                        <label class="form-label">New Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter New Password" required>
                      </div>

                      <div class="mb-4">
                        <label class="form-label">Retype Password</label>
                        <input type="password" class="form-control" id="retype_password" name="retype_password" placeholder="Enter Retype Password" required>
                      </div>

                      <div class="mb-4" id="password_error">

                      </div>

                      <div class="text-center mt-4">
                        <button id="reset_password_button" class="btn btn-success w-100" type="submit">Reset Password</button>
                      </div>
                    </form><!-- end form -->
                  </div>
                </div>
              </div>
              <!-- end card body -->
            </div>
            <!-- end card -->

            <div class="mt-4 text-center">
              <p class="mb-0">Wait, I remember my password... <a href="<?= base_url() ?>signin" class="fw-semibold text-primary text-decoration-underline"> Signin </a> </p>
            </div>

          </div>
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </div>
    <!-- end auth page content -->

    <!-- footer -->
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="text-center">
              <p class="mb-0 ">&copy;
                <script>
                  document.write(new Date().getFullYear())
                </script> POLYTECHNIC UNIVERSITY OF THE PHILIPPINES - QUEZON CITY BRANCH

              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- end Footer -->
  </div>
  <!-- end auth-page-wrapper -->