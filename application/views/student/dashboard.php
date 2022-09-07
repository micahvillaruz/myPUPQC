<div class="row">
  <div class="col-6">
    <div class="card card-animate">
      <div class="card-body p-0">
        <div class="alert alert-primary border-0 rounded-top rounded-0 m-0 d-flex align-items-center" role="alert">
          <i class="mdi mdi-clock-time-four-outline text-primary me-2 fs-20"></i>
          <span class="fw-medium">Digital Clock</span>
        </div>
        <div class="row align-items-end py-3">
          <div class="col-sm-4 p-3">
            <div class="circle">
              <div class="face">
                <div id="hour" class="hour"></div>
                <div id="minute" class="minute"></div>
                <div id="second" class="second"></div>
              </div>
            </div>
          </div>
          <div class="col-sm-5">
            <div class="p-3">
              <div class="d-flex align-items-center">
                <h1 id="clockTime" class="display-6 fw-medium"></h1>
                <span id="clockSession" class="ms-2 fs-3"></span>
              </div>
              <p id="clockDate" class="fs-4"></p>
              <span class="badge bg-primary fs-13">PHILIPPINE STANDARD TIME</span>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="px-3">
              <img src="<?= base_url() ?>public/images/user-illustarator-2.png" class="img-fluid" alt="" />
            </div>
          </div>
        </div>
      </div>
      <!-- end card-body-->
    </div>

    <blockquote class="blockquote custom-blockquote blockquote-outline blockquote-primary rounded">
      <div class="row g-0">
        <div class="col-md-4">
          <img id="background" class="rounded-start img-fluid h-100 object-cover" src="https://theysaidso.com/img/qod/qod-inspire.jpg" alt="Card image" />
        </div>
        <div class="col-md-8">
          <div class="card-header">
            <h5 class="card-title mb-0 fw-medium text-primary"> <i class="mdi mdi-clover text-primary me-2"></i> Quote of the Day !</h5>
          </div>
          <div class="card-body">
            <p class="card-text mb-3">
              <i class="bx bxs-quote-alt-left text-primary align-middle me-1"></i>
              <span id="quote">
              </span>
              <i class="bx bxs-quote-alt-right text-primary align-middle ms-1"></i>
            </p>
            <footer id="author" class="blockquote-footer mt-0 mb-0"></footer>
          </div>
        </div>
      </div>
    </blockquote>
    <div class="card">
      <div class="card-header">
        <h4 class="card-title mb-0 fw-medium text-primary">Announcements and Advisories</h4>
      </div><!-- end card header -->

      <div class="card-body">
        <div class="mx-n3">
          <div data-simplebar data-simplebar-auto-hide="false" data-simplebar-track="primary" style="max-height: 354px;">
            <a href="https://www.facebook.com/sscpupquezoncity/videos/1919189238471683/" class="text-reset notification-item d-block dropdown-item">
              <div class="d-flex align-items-start">
                <div class="flex-grow-1 overflow-hidden">
                  <h5 class="text-truncate fs-14 mb-1 text-primary">E-REPORT: Safe Space for PUPQC Students' Academic Issues & Concerns</h5>
                  <p class="text-truncate text-muted mb-0">Posted: <span class="fs-13">23 Nov, 2021,</span>
                    <small class="text-muted">02:21 AM</small>
                  </p>
                </div>
              </div>
            </a>
            <a href="https://www.facebook.com/sscpupquezoncity/posts/pfbid0pJgkKFiqPrTVLvev4KCJk894vhgzipEJ1tccAySHAGoiYbKW5RmBnwjkY1rf1bB7l" class="text-reset notification-item d-block dropdown-item active">
              <div class="d-flex align-items-start">
                <div class="flex-grow-1 overflow-hidden">
                  <h5 class="text-truncate fs-14 mb-1 text-primary">A Resolution Recognizing the Newly Established Student Commission on Election (COMELEC) in the Polytechnic University of the Philippines Quezon City Branch</h5>
                  <p class="text-truncate text-muted mb-0">Posted: <span class="fs-13">13 Aug, 2022,</span>
                    <small class="text-muted">02:36 PM</small>
                  </p>
                </div>
              </div>
            </a>
            <a href="https://www.facebook.com/sscpupquezoncity/posts/pfbid02wRAw94xJTYpbSXkT72qoTiqaCoyPUZ6xhRA8zjHqu742KjWCEYNe37Fpf2CWLBywl" class="text-reset notification-item d-block dropdown-item">
              <div class="d-flex align-items-start">
                <div class="flex-grow-1 overflow-hidden">
                  <h5 class="text-truncate fs-14 mb-1 text-primary">A Resolution Adopting the Amendments to the Constitution and By-Laws of the PUP Quezon City Supreme Student Council</h5>
                  <p class="text-truncate text-muted mb-0">Posted: <span class="fs-13">04 Apr, 2022,</span>
                    <small class="text-muted">02:21 AM</small>
                  </p>
                </div>
              </div>
            </a>
            <a href="https://www.facebook.com/ThePUPOfficial/posts/pfbid0EMX2xx6XxvW2JZ9Cf9rxDRoYsnVCVr5ACieVxtYsmFjSsZRViD7X4YUTTagRWcuXl" class="text-reset notification-item d-block dropdown-item">
              <div class="d-flex align-items-start">
                <div class="flex-grow-1 overflow-hidden">
                  <h5 class="text-truncate fs-14 mb-1 text-primary"> Printing of Certificate of Candidacy (COC) will end on August 15, 2022</h5>
                  <p class="text-truncate text-muted mb-0">Posted: <span class="fs-13">11 Aug, 2022,</span>
                    <small class="text-muted">10:52 AM</small>
                  </p>
                </div>
              </div>
            </a>
            <a href="https://www.facebook.com/ThePUPOfficial/posts/pfbid0riNCN2XSpZV67VN4ynkr6JvAPJLPShndGJmy8vQvXVCHdzBt9e9o9GAyfxjYWozul" class="text-reset notification-item d-block dropdown-item">
              <div class="d-flex align-items-start">
                <div class="flex-grow-1 overflow-hidden">
                  <h5 class="text-truncate fs-14 mb-1 text-primary">Freshmen Students, submission of credentials is extended until August 31, 2022.</h5>
                  <p class="text-truncate text-muted mb-0">Posted: <span class="fs-13">17 Aug, 2022,</span>
                    <small class="text-muted">02:43 PM</small>
                  </p>
                </div>
              </div>
            </a>
            <a href="https://www.facebook.com/voxnovapupqc/posts/pfbid02v1vGtiw7i41YvzqwqhhiVwzwkdmYbzvhY76TRni8v5QKBLy6VsHVoVLwTgtfiQmBl" class="text-reset notification-item d-block dropdown-item">
              <div class="d-flex align-items-start">
                <div class="flex-grow-1 overflow-hidden">
                  <h5 class="text-truncate fs-14 mb-1 text-primary">BREAKING: CAEPUPQC RESULTS SET TO RELEASE TODAY THROUGH iAPPLY</h5>
                  <p class="text-truncate text-muted mb-0">Posted: <span class="fs-13">24 Jun, 2022,</span>
                    <small class="text-muted">05:18 PM</small>
                  </p>
                </div>
              </div>
            </a>
            <a href="https://www.facebook.com/ThePUPOfficial/posts/pfbid02GuwAAiNxECZY5orgSMBcHBLjmbqJxk4U2qUAmxDmyRaxATWi1q7n9nqx15Je8XFrl" class="text-reset notification-item d-block dropdown-item">
              <div class="d-flex align-items-start">
                <div class="flex-grow-1 overflow-hidden">
                  <h5 class="text-truncate fs-14 mb-1 text-primary">Re-opening of the Application for Year-End Graduation AY 2021-2022 for the Main Campus and Branches and Campuses</h5>
                  <p class="text-truncate text-muted mb-0">Posted: <span class="fs-13">08 Jun, 2022,</span>
                    <small class="text-muted">03:19 PM</small>
                  </p>
                </div>
              </div>
            </a>
            <a href="https://www.facebook.com/sscpupquezoncity/posts/pfbid02SCZLiiEYuLVwMz3pRe6yPd66H88DsW8uoVWPXqKtbXZtYgFdLqrEggD1NSmqJP5Pl" class="text-reset notification-item d-block dropdown-item">
              <div class="d-flex align-items-start">
                <div class="flex-grow-1 overflow-hidden">
                  <h5 class="text-truncate fs-14 mb-1 text-primary">The application for graduation is extended until June 15, 2022 as per Ms. Cherrylyn Esparagoza of Admission Office.</h5>
                  <p class="text-truncate text-muted mb-0">Posted: <span class="fs-13">02 Jun, 2022,</span>
                    <small class="text-muted">03:35 PM</small>
                  </p>
                </div>
              </div>
            </a>
            <a href="https://www.facebook.com/voxnovapupqc/posts/pfbid0QYZehnipJMkCkhBT7eVr2zgxCe3nmdTBLq19cdGJxia8uh5xYwDieAuehqPTeV6nl" class="text-reset notification-item d-block dropdown-item">
              <div class="d-flex align-items-start">
                <div class="flex-grow-1 overflow-hidden">
                  <h5 class="text-truncate fs-14 mb-1 text-primary">F2F Graduation in PUPQC for Academic Year 2021-2022 in Talks</h5>
                  <p class="text-truncate text-muted mb-0">Posted: <span class="fs-13">19 May, 2022,</span>
                    <small class="text-muted">12:35 PM</small>
                  </p>
                </div>
              </div>
            </a>
            <a href="https://www.facebook.com/voxnovapupqc/posts/pfbid0Rm1E452K9BacxHKmUrBkPoBUvvQYxeDb9bj2mCQJtBVFgCCaz3S2JssVsjiXx9kml" class="text-reset notification-item d-block dropdown-item">
              <div class="d-flex align-items-start">
                <div class="flex-grow-1 overflow-hidden">
                  <h5 class="text-truncate fs-14 mb-1 text-primary">PUPQC Admin Releases Graduating Students' Schedule for Second Semester</h5>
                  <p class="text-truncate text-muted mb-0">Posted: <span class="fs-13">05 May, 2022,</span>
                    <small class="text-muted">02:18 PM</small>
                  </p>
                </div>
              </div>
            </a>
            <div class="text-center my-2">
              <a href="javascript:void(0);" class="text-success"><i class="mdi mdi-loading mdi-spin fs-20 align-middle me-2"></i> Load more </a>
            </div>
          </div>
        </div>
      </div><!-- end card-body -->
    </div><!-- end card -->
  </div>
  <div class="col-6">
    <div class="card">
      <div class="card-header border-0">
        <h4 class="card-title mb-0">Upcoming Events</h4>
      </div>
      <!-- end cardheader -->
      <div class="card-body pt-0">
        <div class="mini-stats-wid d-flex align-items-center mt-3">
          <div class="flex-shrink-0 avatar-sm">
            <span class="mini-stat-icon avatar-title rounded-circle text-success bg-soft-success fs-4">
              10
            </span>
          </div>
          <div class="flex-grow-1 ms-3">
            <h6 class="mb-1">Ligma Webinar</h6>
            <p class="text-muted mb-0">PUP QC Medical Services</p>
          </div>
          <div class="flex-shrink-0">
            <p class="text-muted mb-0"><span class="text-uppercase">Sept. 10, 2022</span></p>
          </div>
        </div>
        <!-- end -->
        <div class="mini-stats-wid d-flex align-items-center mt-3">
          <div class="flex-shrink-0 avatar-sm">
            <span class="mini-stat-icon avatar-title rounded-circle text-success bg-soft-success fs-4">
              15
            </span>
          </div>
          <div class="flex-grow-1 ms-3">
            <h6 class="mb-1">Mental Health Webinar</h6>
            <p class="text-muted mb-0">PUP QC Medical Services</p>
          </div>
          <div class="flex-shrink-0">
            <p class="text-muted mb-0"><span class="text-uppercase">Sept. 15, 2022</span></p>
          </div>
        </div>
        <!-- end -->
        <div class="mini-stats-wid d-flex align-items-center mt-3">
          <div class="flex-shrink-0 avatar-sm">
            <span class="mini-stat-icon avatar-title rounded-circle text-success bg-soft-success fs-4">
              15
            </span>
          </div>
          <div class="flex-grow-1 ms-3">
            <h6 class="mb-1">Blockchain Expo</h6>
            <p class="text-muted mb-0">CommITS</p>
          </div>
          <div class="flex-shrink-0">
            <p class="text-muted mb-0"><span class="text-uppercase">Sept. 15, 2022</span></p>
          </div>
        </div>
        <!-- end -->
        <div class="mini-stats-wid d-flex align-items-center mt-3">
          <div class="flex-shrink-0 avatar-sm">
            <span class="mini-stat-icon avatar-title rounded-circle text-success bg-soft-success fs-4">
              16
            </span>
          </div>
          <div class="flex-grow-1 ms-3">
            <h6 class="mb-1">Extension Project Opening</h6>
            <p class="text-muted mb-0">Extension Management Office</p>
          </div>
          <div class="flex-shrink-0">
            <p class="text-muted mb-0"><span class="text-uppercase">Sept. 16, 2022</span></p>
          </div>
        </div>
        <!-- end -->
        <div class="mini-stats-wid d-flex align-items-center mt-3">
          <div class="flex-shrink-0 avatar-sm">
            <span class="mini-stat-icon avatar-title rounded-circle text-success bg-soft-success fs-4">
              25
            </span>
          </div>
          <div class="flex-grow-1 ms-3">
            <h6 class="mb-1">Fact Check: Improve Research Writing</h6>
            <p class="text-muted mb-0">PUPQC SSC</p>
          </div>
          <div class="flex-shrink-0">
            <p class="text-muted mb-0"><span class="text-uppercase">Sept. 25, 2022</span></p>
          </div>
        </div>
        <!-- end -->

      </div>
      <!-- end cardbody -->
    </div>
    <!-- end card -->
    <div class="card bg-soft-primary">
      <div class="card-body">
        <div class="d-flex align-items-center">
          <div class="flex-shrink-0">
            <img src="https://i.pinimg.com/originals/17/6d/f3/176df359257c366af89e949710d5a572.gif" alt="" class="avatar-md rounded-circle" />
          </div>
          <div class="flex-grow-1 ms-3">
            <p class="card-text">
            <h5 class="fw-medium">Feeling Unwell?</h5> Go to the Medical Appointment Page by clicking here.
            </p>
          </div>
        </div>
      </div>
      <div class="card-footer bg-primary">
        <div class="text-center">
          <a href="javascript:void(0);" class="text-white">Click Here <i class="ri-arrow-right-s-line align-middle lh-1"></i></a>
        </div>
      </div>
    </div>
    <div class="card bg-soft-primary">
      <div class="card-body">
        <div class="d-flex align-items-center">
          <div class="flex-shrink-0">
            <img src="https://cdn.dribbble.com/users/1623522/screenshots/4212950/comp-1.gif" alt="" class="avatar-md rounded-circle" />
          </div>
          <div class="flex-grow-1 ms-3">
            <p class="card-text">
            <h5 class="fw-medium">Tooth Problems?</h5> Go to the Dental Appointment Page by clicking here.
            </p>
          </div>
        </div>
      </div>
      <div class="card-footer bg-primary">
        <div class="text-center">
          <a href="javascript:void(0);" class="text-white">Click Here <i class="ri-arrow-right-s-line align-middle lh-1"></i></a>
        </div>
      </div>
    </div>
    <div class="card bg-soft-primary">
      <div class="card-body">
        <div class="d-flex align-items-center">
          <div class="flex-shrink-0">
            <img src="https://c.tenor.com/YNqzKzPOLTsAAAAM/emote.gif" alt="" class="avatar-md rounded-circle" />
          </div>
          <div class="flex-grow-1 ms-3">
            <p class="card-text">
            <h5 class="fw-medium">Want to let your thoughts out?</h5> Go to the Guidance Appointment Page by clicking here.
            </p>
          </div>
        </div>
      </div>
      <div class="card-footer bg-primary">
        <div class="text-center">
          <a href="javascript:void(0);" class="text-white">Click Here <i class="ri-arrow-right-s-line align-middle lh-1"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end row -->