    <!-- ========== App Menu ========== -->
    <div class="app-menu navbar-menu">
      <!-- LOGO -->
      <div class="navbar-brand-box">
        <!-- Light Logo-->
        <a href="index.html" class="logo logo-light">
          <span class="logo-sm">
            <img src="<?= base_url() ?>public/images/logo-sm.png" alt="" height="75" />
          </span>
          <span class="logo-lg">
            <img src="<?= base_url() ?>public/images/logo-light.png" alt="" height="40" />
          </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
          <i class="ri-record-circle-line"></i>
        </button>
      </div>

      <div id="scrollbar">
        <div class="container-fluid">
          <div id="two-column-menu"></div>
          <ul class="navbar-nav" id="navbar-nav">
            <li class="menu-title"><span data-key="t-menu">Menu</span></li>
            <li class="nav-item">
              <a class="nav-link menu-link">
                <i class="ri-dashboard-2-line"></i>
                <span>Dashboard</span>
              </a>
            </li>
            <!-- end Dashboard Menu -->
            <li class="nav-item">
              <a class="nav-link menu-link">
                <i class="ri-calendar-todo-fill"></i>
                <span>Calendar</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link menu-link">
                <i class="ri-customer-service-2-fill"></i>
                <span>Announcements</span>
              </a>
            </li>
            <!-- end Dashboard Menu -->

            <li class="menu-title">
              <i class="ri-more-fill"></i>
              <span>Academic</span>
            </li>

            <li class="nav-item">
              <a class="nav-link menu-link" href="#sidebarAuth" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAuth">
                <i class="bx bxs-graduation"></i>
                <span>Enrollment</span>
              </a>
              <div class="collapse menu-dropdown" id="sidebarAuth">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a class="nav-link">
                      Enroll Now
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#sidebarSignUp" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSignUp">
                      Change of Enrollment
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarSignUp">
                      <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                          <a href="auth-signup-basic.html" class="nav-link">
                            Add Subject
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="auth-signup-cover.html" class="nav-link">
                            Change Subject / Section
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link">
                            Drop Subject
                          </a>
                        </li>
                      </ul>
                    </div>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link">
                      Request for Petition Subject
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link">
                      Course Offering
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link">
                      Registration Certificate
                    </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link">
                      Opt-Out Waiver
                    </a>
                  </li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link menu-link">
                <i class="ri-file-list-3-line"></i>
                <span>Statement of Accounts</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link menu-link">
                <i class="bx bx-book-bookmark"></i>
                <span>Schedule</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link menu-link">
                <i class="mdi mdi-format-annotation-plus"></i>
                <span>Grades</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link menu-link">
                <i class="ri-survey-line"></i>
                <span>Forms</span>
              </a>
            </li>

            <li class="menu-title">
              <i class="ri-more-fill"></i>
              <span>Online Services</span>
            </li>

            <li class="nav-item">
              <a class="nav-link menu-link" href="#sidebarUI" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarUI">
                <i class="mdi mdi-book-search-outline"></i>
                <span>Appointments</span>
              </a>
              <div class="collapse menu-dropdown mega-dropdown-menu" id="sidebarUI">
                <div class="row">
                  <div class="col-lg-4">
                    <ul class="nav nav-sm flex-column">
                      <li class="nav-item">
                        <a href="<?= base_url() ?>student/appointments/medical-appointment" class="nav-link" class="nav-link">Medical Consultation</a>
                      </li>
                      <li class="nav-item">
                        <a href="<?= base_url() ?>student/appointments/dental-appointment" class="nav-link">Dental Consultation</a>
                      </li>
                      <li class="nav-item">
                        <a href="<?= base_url() ?>student/appointments/guidance-appointment" class="nav-link">Guidance Counseling Consultation</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link menu-link">
                <i class="ri-honour-line"></i>
                <span>Scholarships</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link menu-link" href="widgets.html">
                <i class="ri-hand-coin-line"></i>
                <span>Financial Assistance</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link menu-link" href="#sidebarForms" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarForms">
                <i class="ri-book-read-fill"></i>
                <span>Library</span>
              </a>
              <div class="collapse menu-dropdown" id="sidebarForms">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="forms-elements.html" class="nav-link">Browse E-Resources</a>
                  </li>
                  <li class="nav-item">
                    <a href="forms-select.html" class="nav-link">
                      Transactions
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="forms-pickers.html" class="nav-link">
                      Chat with Librarian
                    </a>
                  </li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link menu-link" href="widgets.html">
                <i class="mdi mdi-flask"></i>
                <span>Facilities</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link menu-link" href="widgets.html">
                <i class="mdi mdi-office-building-cog-outline"></i>
                <span>Venues</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link menu-link" href="widgets.html">
                <i class="mdi mdi-account-group-outline"></i>
                <span>Organizations</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link menu-link" href="#sidebarMaps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMaps">
                <i class="ri-briefcase-5-line"></i>
                <span>Legal Counsel</span>
              </a>
              <div class="collapse menu-dropdown" id="sidebarMaps">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="maps-google.html" class="nav-link"> File a Complaint </a>
                  </li>
                  <li class="nav-item">
                    <a href="maps-vector.html" class="nav-link"> Request of Legal Advice / Opinion </a>
                  </li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link menu-link">
                <i class="ri-question-answer-line"></i>
                <span>HelpDesk</span>
              </a>
            </li>

            <li class="menu-title">
              <i class="ri-more-fill"></i>
              <span>Document Request</span>
            </li>

            <li class="nav-item">
              <a class="nav-link menu-link" href="<?= base_url() ?>student/odrs/new-request">
                <i class="ri-file-add-line"></i>
                <span>New Request</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link menu-link" href="<?= base_url() ?>student/odrs/requests">
                <i class="ri-file-copy-2-line"></i>
                <span>Requests</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link menu-link" href="<?= base_url() ?>student/odrs/transactions">
                <i class="mdi mdi-archive-clock-outline"></i>
                <span>Transactions</span>
              </a>
            </li>

            <li class="menu-title">
              <i class="ri-more-fill"></i>
              <span>Health and Well-Being</span>
            </li>

            <li class="nav-item">
              <a class="nav-link menu-link" href="#sidebarMedical" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMedical">
                <i class="ri-survey-line"></i>
                <span>Health Information</span>
              </a>
              <div class="collapse menu-dropdown" id="sidebarMedical">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="<?= base_url() ?>student/omsss/medical-services/personal-info" class="nav-link"> Personal Information </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url() ?>student/omsss/medical-services/health-history" class="nav-link"> Health History </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url() ?>student/omsss/medical-services/immunization" class="nav-link"> Immunization </a>
                  </li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link menu-link" href="#sidebarAppointment" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAppointment">
                <i class="ri-calendar-event-line"></i>
                <span>Appointment</span>
              </a>
              <div class="collapse menu-dropdown" id="sidebarAppointment">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="<?= base_url() ?>student/omsss/medical-services/medical-consultation" class="nav-link"> Medical Consultation </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url() ?>student/omsss/dentist-services" class="nav-link"> Dental Consultation</a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url() ?>student/omsss/guidance-services" class="nav-link"> Guidance Consultation </a>
                  </li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link menu-link" href="#sidebarMedical" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMedical">
                <i class=" ri-refresh-line"></i>
                <span>  Log and Contact OMSSS </span>
              </a>
              <div class="collapse menu-dropdown" id="sidebarMedical">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="<?= base_url() ?>student/omsss/medical-logs" class="nav-link">Medical Logs </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?= base_url() ?>student/omsss/contact-omsss" class="nav-link"> Contact OMSS</a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
        <!-- Sidebar -->
      </div>

      <div class="sidebar-background"></div>
    </div>
    <!-- Left Sidebar End -->
    <!-- Vertical Overlay-->
    <div class="vertical-overlay"></div>