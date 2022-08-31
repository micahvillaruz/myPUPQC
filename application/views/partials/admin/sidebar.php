    <!-- ========== App Menu ========== -->
    <div class="app-menu navbar-menu">
      <!-- LOGO -->
      <div class="navbar-brand-box">
        <!-- Light Logo-->
        <a href="<?= base_url() ?>admin" class="logo logo-light">
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
              <a class="nav-link menu-link" href="<?= base_url() ?>admin">
                <i class="ri-dashboard-2-line"></i>
                <span>Dashboard</span>
              </a>
            </li>

            <li class="menu-title">
              <i class="ri-more-fill"></i>
              <span>User Management</span>
            </li>

            <li class="nav-item">
              <a class="nav-link menu-link" href="<?= base_url() ?>admin/user-management/students">
                <i class="las la-user-graduate"></i>
                <span>Students</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link menu-link" href="<?= base_url() ?>admin/user-management/pup-staffs">
                <i class="las la-user-tie"></i>
                <span>PUP Staff</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link menu-link" href="<?= base_url() ?>admin/user-management/super-admins">
                <i class="las la-user-lock"></i>
                <span>Super Admin</span>
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