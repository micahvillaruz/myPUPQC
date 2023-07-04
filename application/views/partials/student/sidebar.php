<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Light Logo-->
        <a href="<?= base_url() ?>student" class="logo logo-light">
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
                    <a class="nav-link menu-link" href="<?= base_url() ?>student">
                        <i class="ri-dashboard-2-line"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="menu-title">
                    <i class="ri-more-fill"></i>
                    <span>Online Services</span>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#" onclick="logout('sis')">
                        <i class="bx bxs-graduation"></i>
                        <span>PUP SIS</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#" onclick="logout('vass')">
                        <i class="bx bx-notepad"></i>
                        <span>VASS</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#" onclick="logout('osssac')">
                        <i class=" ri-question-answer-line"></i>
                        <span>HelpDesk</span>
                    </a>
                </li>
                <?php if (strpos($this->session->userdata('user_roles'), 'Organizer') !== false) { ?>
                    <li class="menu-title">
                        <i class="ri-more-fill"></i>
                        <span>Venue Management System</span>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="<?= base_url() ?>student/evrsers/new-reservation" class="nav-link">
                            <i class=" ri-add-box-line"></i>
                            <span>New Reservation</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="<?= base_url() ?>student/evrsers/view-reservation" class="nav-link">
                            <i class="ri-reserved-line"></i>
                            <span>View Reservation</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="<?= base_url() ?>student/evrsers/reservation-history" class="nav-link">
                            <i class="bx bx-history"></i>
                            <span>Reservation History</span>
                        </a>
                    </li>

                <li class="menu-title">
                    <i class="ri-more-fill"></i>
                    <span>Facility Reservation</span>
                </li>
                    
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="<?= base_url() ?>student/evrsers/add-reservation" class="nav-link">
                            <i class=" bx bx-buildings"></i>
                            <span>Add Reservation</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="<?= base_url() ?>student/evrsers/view-facility-reservation" class="nav-link">
                            <i class="ri-reserved-line"></i>
                            <span>View Facility Reservation</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="<?= base_url() ?>student/evrsers/facility-history" class="nav-link">
                            <i class="bx bx-history"></i>
                            <span>Facility History</span>
                        </a>
                    </li>

                <?php } ?>
                <li class="menu-title">
                    <i class="ri-more-fill"></i>
                    <span>Document Request</span>
                </li>

                <li id="new-request-sidebar" class="nav-item">
                </li>

                <li id="request-sidebar" class="nav-item">
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="<?= base_url() ?>student/odrs/history">
                        <i class="mdi mdi-history"></i>
                        <span>History</span>
                    </a>
                </li>

                <li class="menu-title">
                    <i class="ri-more-fill"></i>
                    <span>Health and Well-Being</span>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarHealthInfo" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarHealthInfo">
                        <i class="ri-survey-line"></i>
                        <span>Health Information</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarHealthInfo">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="<?= base_url() ?>student/omsss/medical-services/patient-info" class="nav-link"> Patient Information </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url() ?>student/omsss/medical-services/health-history" class="nav-link"> Health History </a>
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
                    <a class="nav-link menu-link" href="<?= base_url() ?>student/omsss/medical-logs">
                        <i class="ri-refresh-line"></i>
                        <span>Medical Logs</span>
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
<script src="<?= base_url() ?>public\js\ajax\student\sidebar.ajax.js"></script>