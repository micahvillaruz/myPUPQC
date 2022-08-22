<body>
  <!-- Begin page -->
  <div id="layout-wrapper">
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content ms-0 bg-light">
      <div class="page-content pt-4">
        <div class="container-fluid">
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
                <div class="row pt-4 text-muted">
                  <div class="col-xxl-9">
                    <div class="card">
                      <div class="card-body">
                        <h3 class="mb-3 text-primary">Calendar</h3>
                        <div class="row">
                          <div class="col-12">
                            <div class="row">
                              <div class="col-xl-3">
                                <div class="card card-h-100">
                                  <div class="card-body">
                                    <button class="btn btn-primary w-100" id="btn-new-event">
                                      <i class="mdi mdi-plus"></i> Create New Event
                                    </button>

                                    <div id="external-events">
                                      <br />
                                      <p class="text-muted">
                                        Drag and drop your event or click in the calendar
                                      </p>
                                      <div class="external-event fc-event bg-soft-success text-success" data-class="bg-soft-success">
                                        <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>New Event
                                        Planning
                                      </div>
                                      <div class="external-event fc-event bg-soft-info text-info" data-class="bg-soft-info">
                                        <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>Meeting
                                      </div>
                                      <div class="external-event fc-event bg-soft-warning text-warning" data-class="bg-soft-warning">
                                        <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>Generating Reports
                                      </div>
                                      <div class="external-event fc-event bg-soft-danger text-danger" data-class="bg-soft-danger">
                                        <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>Create
                                        New theme
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div>
                                  <h5 class="mb-1">Upcoming Events</h5>
                                  <p class="text-muted">Don't miss scheduled events</p>
                                  <div class="pe-2 me-n1 mb-3" data-simplebar style="height: 400px">
                                    <div id="upcoming-event-list"></div>
                                  </div>
                                </div>

                                <div class="card">
                                  <div class="card-body bg-soft-info">
                                    <div class="d-flex">
                                      <div class="flex-shrink-0">
                                        <i data-feather="calendar" class="text-info icon-dual-info"></i>
                                      </div>
                                      <div class="flex-grow-1 ms-3">
                                        <h6 class="fs-15">Welcome to your Calendar!</h6>
                                        <p class="text-muted mb-0">
                                          Event that applications book will appear here. Click on an event to
                                          see the details and manage applicants event.
                                        </p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <!--end card-->
                              </div>
                              <!-- end col-->

                              <div class="col-xl-9">
                                <div class="card card-h-100">
                                  <div class="card-body">
                                    <div id="calendar"></div>
                                  </div>
                                </div>
                              </div>
                              <!-- end col -->
                            </div>
                            <!--end row-->

                            <div style="clear: both"></div>

                            <!-- Add New Event MODAL -->
                            <div class="modal fade" id="event-modal" tabindex="-1">
                              <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content border-0">
                                  <div class="modal-header p-3 bg-soft-info">
                                    <h5 class="modal-title" id="modal-title">Event</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                                  </div>
                                  <div class="modal-body p-4">
                                    <form class="needs-validation" name="event-form" id="form-event" novalidate>
                                      <div class="text-end">
                                        <a href="#" class="btn btn-sm btn-soft-primary" id="edit-event-btn" data-id="edit-event" onclick="editEvent(this)" role="button">Edit</a>
                                      </div>
                                      <div class="event-details">
                                        <div class="d-flex mb-2">
                                          <div class="flex-grow-1 d-flex align-items-center">
                                            <div class="flex-shrink-0 me-3">
                                              <i class="ri-calendar-event-line text-muted fs-16"></i>
                                            </div>
                                            <div class="flex-grow-1">
                                              <h6 class="d-block fw-semibold mb-0" id="event-start-date-tag"></h6>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="d-flex align-items-center mb-2">
                                          <div class="flex-shrink-0 me-3">
                                            <i class="ri-time-line text-muted fs-16"></i>
                                          </div>
                                          <div class="flex-grow-1">
                                            <h6 class="d-block fw-semibold mb-0">
                                              <span id="event-timepicker1-tag"></span> -
                                              <span id="event-timepicker2-tag"></span>
                                            </h6>
                                          </div>
                                        </div>
                                        <div class="d-flex align-items-center mb-2">
                                          <div class="flex-shrink-0 me-3">
                                            <i class="ri-map-pin-line text-muted fs-16"></i>
                                          </div>
                                          <div class="flex-grow-1">
                                            <h6 class="d-block fw-semibold mb-0">
                                              <span id="event-location-tag"></span>
                                            </h6>
                                          </div>
                                        </div>
                                        <div class="d-flex mb-3">
                                          <div class="flex-shrink-0 me-3">
                                            <i class="ri-discuss-line text-muted fs-16"></i>
                                          </div>
                                          <div class="flex-grow-1">
                                            <p class="d-block text-muted mb-0" id="event-description-tag"></p>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="row event-form">
                                        <div class="col-12">
                                          <div class="mb-3">
                                            <label class="form-label">Type</label>
                                            <select class="form-select d-none" name="category" id="event-category" required>
                                              <option value="bg-soft-danger">Danger</option>
                                              <option value="bg-soft-success">Success</option>
                                              <option value="bg-soft-primary">Primary</option>
                                              <option value="bg-soft-info">Info</option>
                                              <option value="bg-soft-dark">Dark</option>
                                              <option value="bg-soft-warning">Warning</option>
                                            </select>
                                            <div class="invalid-feedback">
                                              Please select a valid event category
                                            </div>
                                          </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-12">
                                          <div class="mb-3">
                                            <label class="form-label">Event Name</label>
                                            <input class="form-control d-none" placeholder="Enter event name" type="text" name="title" id="event-title" required value="" />
                                            <div class="invalid-feedback">
                                              Please provide a valid event name
                                            </div>
                                          </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-12">
                                          <div class="mb-3">
                                            <label>Event Date</label>
                                            <div class="input-group d-none">
                                              <input type="text" id="event-start-date" class="form-control flatpickr flatpickr-input" placeholder="Select date" readonly required />
                                              <span class="input-group-text"><i class="ri-calendar-event-line"></i></span>
                                            </div>
                                          </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-12" id="event-time">
                                          <div class="row">
                                            <div class="col-6">
                                              <div class="mb-3">
                                                <label class="form-label">Start Time</label>
                                                <div class="input-group d-none">
                                                  <input id="timepicker1" type="text" class="form-control flatpickr flatpickr-input" placeholder="Select start time" readonly />
                                                  <span class="input-group-text"><i class="ri-time-line"></i></span>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-6">
                                              <div class="mb-3">
                                                <label class="form-label">End Time</label>
                                                <div class="input-group d-none">
                                                  <input id="timepicker2" type="text" class="form-control flatpickr flatpickr-input" placeholder="Select end time" readonly />
                                                  <span class="input-group-text"><i class="ri-time-line"></i></span>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                        <!--end col-->
                                        <div class="col-12">
                                          <div class="mb-3">
                                            <label for="event-location">Location</label>
                                            <div>
                                              <input type="text" class="form-control d-none" name="event-location" id="event-location" placeholder="Event location" />
                                            </div>
                                          </div>
                                        </div>
                                        <!--end col-->
                                        <input type="hidden" id="eventid" name="eventid" value="" />
                                        <div class="col-12">
                                          <div class="mb-3">
                                            <label class="form-label">Description</label>
                                            <textarea class="form-control d-none" id="event-description" placeholder="Enter a description" rows="3" spellcheck="false"></textarea>
                                          </div>
                                        </div>
                                        <!--end col-->
                                      </div>
                                      <!--end row-->
                                      <div class="hstack gap-2 justify-content-end">
                                        <button type="button" class="btn btn-soft-danger" id="btn-delete-event">
                                          <i class="ri-close-line align-bottom"></i> Delete
                                        </button>
                                        <button type="submit" class="btn btn-success" id="btn-save-event">
                                          Add Event
                                        </button>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                                <!-- end modal-content-->
                              </div>
                              <!-- end modal dialog-->
                            </div>
                            <!-- end modal-->


                          </div>
                          <!--end card-body-->
                        </div>
                        <!-- end card -->
                      </div>
                      <!--end col-->
                    </div>
                    <!--end card -->
                  </div>
                  <!-- end col -->
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
                              <a class="text-muted" href="<?= base_url() ?>about">University Profile</a>
                            </li>
                            <li class="list-group-item text-muted">
                              <a class="text-muted" href="<?= base_url() ?>about/vm">Vision and Mission</a>
                            </li>
                            <li class="list-group-item">
                              <a class="text-muted" href="<?= base_url() ?>about/history">History</a>
                            </li>
                            <li class="list-group-item">
                              <a class="text-muted" href="<?= base_url() ?>about/logo-and-symbols">Logo and Symbols</a>
                            </li>
                            <li class="list-group-item">
                              <a class="text-muted" href="<?= base_url() ?>about/hymn">Hymn</a>
                            </li>
                            <li class="list-group-item">
                              <a class="text-muted" href="<?= base_url() ?>about/annual-reports">Annual Reports</a>
                            </li>
                            <li class="list-group-item">
                              <a class="text-muted" href="<?= base_url() ?>about/contact-us">Contact us</a>
                            </li>
                            <li class="list-group-item">
                              <a class="text-muted" href="<?= base_url() ?>about/maps">Maps</a>
                            </li>
                            <li class="list-group-item">
                              <a class="text-muted" href="<?= base_url() ?>about/code">University Code</a>
                            </li>
                            <li class="list-group-item">
                              <a class="text-muted" href="<?= base_url() ?>about/memorandum-orders">Memorandum Orders</a>
                            </li>
                            <li class="list-group-item">
                              <a class="text-muted" href="<?= base_url() ?>about/executive-orders">Executive Orders</a>
                            </li>
                            <li class="list-group-item">
                              <a class="text-muted" href="<?= base_url() ?>about/codi-manual">CODI Manual</a>
                            </li>
                            <li class="list-group-item">
                              <a class="text-muted" href="<?= base_url() ?>about/citizens-charter">Citizens Charter</a>
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