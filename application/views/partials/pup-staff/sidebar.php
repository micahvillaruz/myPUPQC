    <!-- ========== App Menu ========== -->
    <div class="app-menu navbar-menu">
      <!-- LOGO -->
      <div class="navbar-brand-box">
        <!-- Light Logo-->
        <a href="<?= base_url() ?>pupstaff" class="logo logo-light">
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
              <a class="nav-link menu-link" href="<?= base_url() ?>pupstaff">
                <i class="ri-dashboard-2-line"></i>
                <span>Dashboard</span>
              </a>
            </li>

            <li class="menu-title">
              <i class="ri-more-fill"></i>
              <span>EVRSERS</span>
            </li>

            <li class="nav-item">
              <a class="nav-link menu-link" href="<?= base_url() ?>pupstaff/evrsers/organizer-management">
                <i class="ri-team-line"></i>
                <span>Organizer Management</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link menu-link" href="<?= base_url() ?>pupstaff/evrsers/manage-reservations">
                <i class="ri-reserved-line"></i>
                <span>Reservations</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link menu-link" href="<?= base_url() ?>pupstaff/evrsers/reservation-history">
                <i class="bx bx-history"></i>
                <span>Reservation History</span>
              </a>
            </li>


            <?php if (strpos($this->session->userdata('user_roles'), 'Student Records') !== false) { ?>
              <li class="menu-title">
                <i class="ri-more-fill"></i>
                <span>ODRTS</span>
              </li>

              <li class="nav-item">
                <a class="nav-link menu-link" href="<?= base_url() ?>pupstaff/odrs/documents">
                  <i class="ri-file-copy-2-line"></i>
                  <span>Documents</span>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link menu-link" href="<?= base_url() ?>pupstaff/odrs/requests">
                  <i class="ri-archive-line"></i>
                  <span>Requests</span>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link menu-link" href="<?= base_url() ?>pupstaff/odrs/history">
                  <i class="mdi mdi-history"></i>
                  <span>History</span>
                </a>
              </li>
            <?php } ?>

            <!--OMSS -->
            <li class="menu-title">
              <i class="ri-more-fill"></i>
              <span>OMSS - DOCTOR </span>
            </li>

            <li class="nav-item">
              <a class="nav-link menu-link" href="<?= base_url() ?>pupstaff/omsss/doctor/medical-requests">
                <i class="las la-clipboard-list"></i>
                <span>Medical Requests</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link menu-link" href="<?= base_url() ?>pupstaff/omsss/doctor/analytics-and-history">
                <i class="las la-history"></i>
                <span>Medical Request History</span>
              </a>
            </li>

            <li class="menu-title">
              <i class="ri-more-fill"></i>
              <span>OMSS - DENTIST </span>
            </li>

            <li class="nav-item">
              <a class="nav-link menu-link" href="<?= base_url() ?>pupstaff/omsss/dentist/dental-requests">
                <i class="las la-tooth"></i>
                <span>Dental Requests</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link menu-link" href="<?= base_url() ?>pupstaff/omsss/dentist/analytics-and-history">
                <i class="las la-history"></i>
                <span>Dental Request History</span>
              </a>
            </li>

            <li class="menu-title">
              <i class="ri-more-fill"></i>
              <span>OMSS - GUIDANCE COUNSELOR </span>
            </li>

            <li class="nav-item">
              <a class="nav-link menu-link" href="<?= base_url() ?>pupstaff/omsss/counsellor/counsel-requests">
                <i class="mdi mdi-brain me-1"></i>
                <span>Counseling Requests</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link menu-link" href="<?= base_url() ?>pupstaff/omsss/counsellor/analytics-and-history">
                <i class="las la-history"></i>
                <span>Counseling History</span>
              </a>
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
    <!-- imnport sidebar ajax -->
    <!-- <script src="<?= base_url() ?>public\js\ajax\pup-staff\sidebar.ajax.js"></script> -->