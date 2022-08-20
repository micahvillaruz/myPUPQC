<body data-bs-spy="scroll" data-bs-target="#navbar-example">
  <!-- Begin page -->
  <div class="layout-wrapper landing">
    <nav class="navbar navbar-expand-lg navbar-landing" id="navbar">
      <div class="container">
        <a class="navbar-brand" href="<?= base_url() ?>">
          <img src="<?= base_url() ?>public/images/mypupqc-logo.png" class="card-logo card-logo-dark" alt="myPUPQC logo" height="25">
          <img src="<?= base_url() ?>public/images/mypupqc-logo.png" class="card-logo card-logo-light" alt="myPUPQC logo" height="25">
        </a>
        <button class="navbar-toggler py-0 fs-20 text-body" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="mdi mdi-menu"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto mt-2 mt-lg-0 dropdown" id="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="<?= base_url() ?>">Home</a>
            </li>
            <li class="nav-item">
              <div class="dropdown">
                <a class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                  About PUP
                </a>
                <ul class="list-group-flush dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <li class="list-group-item dropdown-item">
                    <a class="" href="<?= base_url() ?>about">University Profile</a>
                  </li>
                  <li class="list-group-item dropdown-item">
                    <a class="" href="<?= base_url() ?>about/vm">Vision and Mission</a>
                  </li>
                  <li class="list-group-item dropdown-item">
                    <a class="" href="<?= base_url() ?>about/history">History</a>
                  </li>
                  <li class="list-group-item dropdown-item">
                    <a class="" href="<?= base_url() ?>about/logo-and-symbols">Logo and Symbols</a>
                  </li>
                  <li class="list-group-item dropdown-item">
                    <a class="" href="<?= base_url() ?>about/hymn">Hymn</a>
                  </li>
                  <li class="list-group-item dropdown-item">
                    <a class="" href="<?= base_url() ?>about/annual-reports">Annual Reports</a>
                  </li>
                  <li class="list-group-item dropdown-item">
                    <a class="" href="<?= base_url() ?>about/contact-us">Contact us</a>
                  </li>
                  <li class="list-group-item dropdown-item">
                    <a class="" href="<?= base_url() ?>about/maps">Maps</a>
                  </li>
                  <li class="list-group-item dropdown-item">
                    <a class="" href="<?= base_url() ?>about/code">University Code</a>
                  </li>
                  <li class="list-group-item dropdown-item">
                    <a class="" href="<?= base_url() ?>about/memorandum-orders">Memorandum Orders</a>
                  </li>
                  <li class="list-group-item dropdown-item">
                    <a class="" href="<?= base_url() ?>about/executive-orders">Executive Orders</a>
                  </li>
                  <li class="list-group-item dropdown-item">
                    <a class="" href="<?= base_url() ?>about/codi-manual">CODI Manual</a>
                  </li>
                  <li class="list-group-item dropdown-item">
                    <a class="" href="<?= base_url() ?>about/citizens-charter">Citizens Charter</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <div class="dropdown">
                <a class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                  Academic
                </a>
                <ul class="list-group-flush dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <li class="list-group-item dropdown-item">
                    <a class="" href="<?= base_url() ?>academic/programs">Academic Programs</a>
                  </li>
                  <li class="list-group-item dropdown-item">
                    <a class="" href="<?= base_url() ?>academic/ous">Open University System</a>
                  </li>
                  <li class="list-group-item dropdown-item">
                    <a class="" href="<?= base_url() ?>academic/library">Library Services</a>
                  </li>
                  <li class="list-group-item dropdown-item">
                    <a class="" href="<?= base_url() ?>academic/ovpaa">OVPAA Advisories</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <div class="dropdown">
                <a class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                  Students
                </a>
                <ul class="list-group-flush dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <li class="list-group-item dropdown-item">
                    <a class="" href="<?= base_url() ?>student/services">Student Services</a>
                  </li>
                  <li class="list-group-item dropdown-item">
                    <a class="" href="<?= base_url() ?>student/organizations">Student Organizations</a>
                  </li>
                  <li class="list-group-item dropdown-item">
                    <a class="" href="<?= base_url() ?>student/publications">Student Publications</a>
                  </li>
                  <li class="list-group-item dropdown-item">
                    <a class="" href="<?= base_url() ?>student/council">Student Council</a>
                  </li>
                  <li class="list-group-item dropdown-item">
                    <a class="" href="<?= base_url() ?>student/handbook">Student Handbook</a>
                  </li>
                  <li class="list-group-item dropdown-item">
                    <a class="" href="https://sisstudents.pup.edu.ph/">PUP Student Information System</a>
                  </li>
                  <li class="list-group-item dropdown-item">
                    <a class="" href="https://odrs.pup.edu.ph/">PUP Online Document Request System</a>
                  </li>
                  <li class="list-group-item dropdown-item">
                    <a class="" href="https://apps.pup.edu.ph/books/">PUP Bookstore</a>
                  </li>
                  <li class="list-group-item dropdown-item">
                    <a class="" href="<?= base_url() ?>student/downloads">Downloadable Forms</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <div class="dropdown">
                <a class="nav-link dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                  Research
                </a>
                <ul class="list-group-flush dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <li class="list-group-item dropdown-item">
                    <a class="" href="<?= base_url() ?>research/researches">Researches</a>
                  </li>
                  <li class="list-group-item dropdown-item">
                    <a class="" href="<?= base_url() ?>research/extensions">Extensions</a>
                  </li>
                  <li class="list-group-item dropdown-item">
                    <a class="" href="<?= base_url() ?>research/intellectual-property">Intellectual Property</a>
                  </li>
                  <li class="list-group-item dropdown-item">
                    <a class="" href="https://apps.pup.edu.ph/ojs/">PUP Online Journal System</a>
                  </li>
                  <li class="list-group-item dropdown-item">
                    <a class="" href="https://drive.google.com/open?id=0B1BuDAuN0r8SMFpBYWNGckhUWkE">University Thesis and Dissertation Manual</a>
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