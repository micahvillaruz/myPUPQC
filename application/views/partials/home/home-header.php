<body>
  <!-- Begin page -->
  <div class="layout-wrapper landing">
    <nav class="navbar navbar-expand-lg navbar-landing" id="navbar">
      <div class="container">
        <a class="navbar-brand" href="<?= base_url() ?>">
          <img src="<?= base_url() ?>public/images/mypupqc-logo.webp" class="card-logo card-logo-dark" alt="myPUPQC logo" height="25">
          <img src="<?= base_url() ?>public/images/mypupqc-logo.webp" class="card-logo card-logo-light" alt="myPUPQC logo" height="25">
        </a>
        <button class="navbar-toggler py-0 fs-20 text-body" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="mdi mdi-menu"></i>
        </button>

        <div class="collapse navbar-collapse align-middle" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto mt-2 mt-lg-0 text-primary" id="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" aria-expanded="false" href="<?= base_url() ?>"><i class="bx bxs-home me-2"></i><span>Home</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link menu-link collapsed" href="#navAboutPUP" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="navAboutPUP">
                <i class=" bx bxs-school me-2"></i><span>About PUP</span>
              </a>
              <div id="navAboutPUP" class="nav-links collapse menu-dropdown">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>about"><i class="ri-arrow-right-s-line"></i> University Profile</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>about/vm"><i class="ri-arrow-right-s-line"></i> Vision and Mission</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>about/history"><i class="ri-arrow-right-s-line"></i> History</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>about/logo-and-symbols"><i class="ri-arrow-right-s-line"></i> Logo and Symbols</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>about/hymn"><i class="ri-arrow-right-s-line"></i> Hymn</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>about/annual-reports"><i class="ri-arrow-right-s-line"></i> Annual Reports</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>about/contact-us"><i class="ri-arrow-right-s-line"></i> Contact us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>about/maps"><i class="ri-arrow-right-s-line"></i> Maps</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>about/code"><i class="ri-arrow-right-s-line"></i> University Code</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>about/memorandum-orders"><i class="ri-arrow-right-s-line"></i> Memorandum Orders</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>about/executive-orders"><i class="ri-arrow-right-s-line"></i> Executive Orders</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>about/codi-manual"><i class="ri-arrow-right-s-line"></i> CODI Manual</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>about/citizens-charter"><i class="ri-arrow-right-s-line"></i> Citizens Charter</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link menu-link collapsed" href="#navAcademic" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="navAcademic">
                <i class="bx bxs-book me-2"></i><span>Academic</span>
              </a>
              <div id="navAcademic" class="nav-links collapse menu-dropdown">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>academic/programs"><i class="ri-arrow-right-s-line"></i> Academic Programs</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>academic/ous"><i class="ri-arrow-right-s-line"></i> Open University System</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="https://www.pup.edu.ph/nallrc/" target="_blank"><i class="ri-arrow-right-s-line"></i> Library Services</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>academic/ovpaa"><i class="ri-arrow-right-s-line"></i> OVPAA Advisories</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link menu-link collapsed" href="#navStudents" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="navStudents">
                <i class="bx bxs-graduation me-2"></i><span>Students</span>
              </a>
              <div id="navStudents" class="nav-links collapse menu-dropdown">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>#student-services"><i class="ri-arrow-right-s-line"></i> Student Services</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>student/organizations"><i class="ri-arrow-right-s-line"></i> Student Organizations</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>student/council"><i class="ri-arrow-right-s-line"></i> Student Council</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>student/handbook"><i class="ri-arrow-right-s-line"></i> Student Handbook</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="https://sisstudents.pup.edu.ph/"><i class="ri-arrow-right-s-line"></i> PUP Student Information System</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="https://odrs.pup.edu.ph/"><i class="ri-arrow-right-s-line"></i> PUP Online Document Request System</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="https://apps.pup.edu.ph/books/"><i class="ri-arrow-right-s-line"></i> PUP Bookstore</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>student/downloads"><i class="ri-arrow-right-s-line"></i> Downloadable Forms</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link menu-link collapsed" href="#navResearch" data-bs-toggle="collapse" role="button" aria-expanded="true" aria-controls="navResearch">
                <i class="bx bxs-search me-2"></i><span>Research</span>
              </a>
              <div id="navResearch" class="nav-links collapse menu-dropdown">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>research/researches"><i class="ri-arrow-right-s-line"></i> Researches</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>research/extensions"><i class="ri-arrow-right-s-line"></i> Extensions</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>research/research-ethics"><i class="ri-arrow-right-s-line"></i> Research Ethics</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>research/intellectual-property"><i class="ri-arrow-right-s-line"></i> Intellectual Property</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="https://apps.pup.edu.ph/ojs/"><i class="ri-arrow-right-s-line"></i> PUP Online Journal System</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="https://drive.google.com/open?id=0B1BuDAuN0r8SMFpBYWNGckhUWkE"><i class="ri-arrow-right-s-line"></i> University Thesis and Dissertation Manual</a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
          <div class="">
            <a href="<?= base_url() ?>signin" class="btn btn-primary">Log In</a>
          </div>
        </div>

      </div>
    </nav>
    <!-- end navbar -->