<body>
  <!-- Begin page -->
  <div id="layout-wrapper">
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content ms-0 bg-light">
      <div class="page-content pt-4 m-0">
        <div class="container-boxed">
          <div class="profile-foreground position-relative mx-n4 mt-n4">
            <div class="profile-wid-bg">
              <img src="<?= base_url() ?>public/images/pupqc-bg.jpg" alt="" class="profile-wid-img" />
            </div>
          </div>
          <div class="pt-4 mb-4 mb-lg-3 pb-lg-4">
            <div class="row g-4">
              <div class="col-auto">
                <div class="avatar-lg">
                  <img src="<?= base_url() ?>public/images/pupqc-logo.png" class="img-thumbnail rounded-circle" />
                </div>
              </div>
              <!--end col-->
              <div class="col">
                <div class="p-2">
                  <h3 class="text-white mb-3">Polytechnic University of the Philippines</h3>
                  <h3 class="text-white">Quezon City Branch</h3>
                  <div class="hstack text-white-50 gap-1">
                    <div class="me-2">
                      <i class="ri-road-map-line me-1 text-white-75 fs-16 align-middle"></i>
                      <span class="ms-1">Don Fabian St., Commonwealth Quezon City</span>
                    </div>
                  </div>
                </div>
              </div>
              <!--end col-->
            </div>
            <!--end row-->
          </div>

          <div class="row">
            <div class="col-lg-12">
              <div>
                <div class="row pt-4 ">
                  <div class="col-xxl-9">
                    <div class="card">
                      <div class="card-body">
                        <h3 class="mb-3 text-primary">News</h3>
                        <p class="p-1 m-3">Here are some latest PUPQC University News:</p>
                        <div id="latest_three_news"></div>
                        <hr class="p-1 m-3" />
                        <p class="p-1 m-3">An RSS Feed is available for PUPQC Latest News</p>
                        <div class="d-flex flex-column align-items-center h-100">
                          <div class="flex-grow-1">
                            <div class="text-center d-flex flex-column">
                              <img src="<?= base_url() ?>public/images/mypupqc-logo.webp" alt="myPUPQC logo" height="60">

                              <div class="d-flex justify-content-center h-100">
                                <a href="<?= base_url() ?>news/rss/" target="_blank">
                                  <div class="d-flex align-items-center align-self-center justify-content-center">
                                    <img src="<?= base_url() ?>public/images/rss.png" alt="RSS Feed" width="30" height="30" class="mx-2">
                                    <h4 class="m-0"><strong class="text-primary">RSS Feed</strong></h4>
                                  </div>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!--end card-body-->
                    </div>
                  </div>
                  <!--end col-->
                  <div class="col-xxl-3">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex align-items-center mb-4">
                          <div class="flex-grow-1">
                            <h5 class="card-title mb-0 text-primary">Contents</h5>
                          </div>
                        </div>
                        <div>
                          <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                              <a class="" href="<?= base_url() ?>news">News</a>
                            </li>
                            <li class="list-group-item ">
                              <a class="" href="<?= base_url() ?>advisory">Advisories</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <!-- end card body -->
                    </div>
                    <!--end card-->
                  </div>
                  <!--end col-->
                </div>
                <!--end row-->
              </div>
            </div>
            <!--end col-->
          </div>
          <!--end row-->
        </div>
        <!-- container-fluid -->
      </div>
      <!-- End Page-content -->
    </div>
    <!-- end main content-->
  </div>
  <!-- END layout-wrapper -->