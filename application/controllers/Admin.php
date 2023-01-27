<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

  function __construct()
  {
    parent::__construct();

    if ($this->session->token == null) {
      redirect(base_url('auth/signin'));
    }

    if ($this->session->user_type != 'Super Admin') {
      $this->session->user_type == 'Student' ? redirect(base_url('student')) : redirect(base_url('pupstaff'));
    }
  }

  public function index()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/admin/topbar');
    $this->load->view('partials/admin/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "Dashboard", "title" => "Dashboard"]);
    $this->load->view('admin/dashboard');
    $this->load->view('partials/footer');
    $this->load->view('partials/foot-scripts');
    $this->load->view('admin/scripts/dashboard-scripts');
  }

  public function profile()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/admin/topbar');
    $this->load->view('partials/admin/sidebar');
    $this->load->view('admin/profile');
    $this->load->view('partials/footer');
    $this->load->view('partials/foot-scripts');
    $this->load->view('admin/scripts/profile-scripts');
  }

  public function settings()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/admin/topbar');
    $this->load->view('partials/admin/sidebar');
    $this->load->view('admin/settings');
    $this->load->view('partials/footer');
    $this->load->view('partials/foot-scripts');
    $this->load->view('admin/scripts/settings-scripts');
  }

  public function user_students()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/admin/topbar');
    $this->load->view('partials/admin/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "User Management", "title" => "Students"]);
    $this->load->view('admin/user-management/students');
    $this->load->view('partials/footer');
    $this->load->view('admin/user-management/components/students-modal');
    $this->load->view('partials/foot-scripts');
    $this->load->view('admin/user-management/scripts/students-scripts');
  }

  public function roles()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/admin/topbar');
    $this->load->view('partials/admin/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "Role Management", "title" => "Roles"]);
    $this->load->view('admin/role-management/roles');
    $this->load->view('partials/footer');
    $this->load->view('partials/foot-scripts');
    $this->load->view('admin/role-management/scripts/roles-scripts');
  }

  public function user_roles_student()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/admin/topbar');
    $this->load->view('partials/admin/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "User Role Management", "title" => "Assign Roles to Student"]);
    $this->load->view('admin/user-role-management/ur-student');
    $this->load->view('partials/footer');
    $this->load->view('admin/user-role-management/components/user-roles-modal');
    $this->load->view('partials/foot-scripts');
    $this->load->view('admin/user-role-management/scripts/ur-student-scripts');
  }

  public function user_roles_staff()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/admin/topbar');
    $this->load->view('partials/admin/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "User Role Management", "title" => "Assign Roles to PUP Staff"]);
    $this->load->view('admin/user-role-management/ur-staff');
    $this->load->view('partials/footer');
    $this->load->view('admin/user-role-management/components/user-roles-modal');
    $this->load->view('partials/foot-scripts');
    $this->load->view('admin/user-role-management/scripts/ur-staff-scripts');
  }


  public function user_pup_staffs()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/admin/topbar');
    $this->load->view('partials/admin/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "User Management", "title" => "PUP Staffs"]);
    $this->load->view('admin/user-management/pup-staffs');
    $this->load->view('partials/footer');
    $this->load->view('admin/user-management/components/pup-staffs-modal');
    $this->load->view('partials/foot-scripts');
    $this->load->view('admin/user-management/scripts/pup-staffs-scripts');
  }

  public function documents()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/admin/topbar');
    $this->load->view('partials/admin/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "ODRS", "title" => "Documents"]);
    $this->load->view('admin/odrs/documents');
    $this->load->view('partials/footer');
    $this->load->view('admin/odrs/components/documents-modal');
    $this->load->view('partials/foot-scripts');
    $this->load->view('admin/odrs/scripts/documents-scripts');
  }

  public function requests()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/admin/topbar');
    $this->load->view('partials/admin/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "ODRS", "title" => "Requests"]);
    $this->load->view('admin/odrs/requests');
    $this->load->view('partials/footer');
    $this->load->view('admin/odrs/components/requests-modal');
    $this->load->view('partials/foot-scripts');
    $this->load->view('admin/odrs/scripts/requests-scripts');
  }

  public function history()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/admin/topbar');
    $this->load->view('partials/admin/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "ODRS", "title" => "History"]);
    $this->load->view('admin/odrs/history');
    $this->load->view('partials/footer');
    $this->load->view('admin/odrs/components/history-modal');
    $this->load->view('partials/foot-scripts');
    $this->load->view('admin/odrs/scripts/history-scripts');
  }


  public function all_appointment()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/admin/topbar');
    $this->load->view('partials/admin/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "Health and Well-Being", "title" => "All Appointments"]);
    $this->load->view('admin/omsss/all-appointment/all-appointment');
    $this->load->view('partials/footer');
    $this->load->view('admin/omsss/components/all-appointment-modal');
    $this->load->view('partials/foot-scripts');
    $this->load->view('admin/omsss/all-appointment/scripts/all-appointment-scripts');
  }
  public function appointment_history()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/admin/topbar');
    $this->load->view('partials/admin/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "Health and Well-Being", "title" => "Appointment History"]);
    $this->load->view('admin/omsss/appointment-history/appointment-history');
    $this->load->view('partials/footer');
    $this->load->view('admin/omsss/components/appointment-history-modal');
    $this->load->view('partials/foot-scripts');
    $this->load->view('admin/omsss/appointment-history/scripts/appointment-history-scripts');
  }

  public function facilities()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/admin/topbar');
    $this->load->view('partials/admin/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "EVRSERS", "title" => "Manage Facilities"]);
    $this->load->view('admin/evrsers/facilities');
    $this->load->view('partials/footer');
    $this->load->view('admin/evrsers/components/facility-modal');
    $this->load->view('partials/foot-scripts');
    $this->load->view('admin/evrsers/scripts/facilities-scripts');
  }

  public function manage_reservations()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/admin/topbar');
    $this->load->view('partials/admin/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "EVRSERS", "title" => "Manage Reservations"]);
    $this->load->view('admin/evrsers/manage-reservations');
    $this->load->view('partials/footer');
    $this->load->view('admin/evrsers/components/reservation-modal');
    $this->load->view('partials/foot-scripts');
    $this->load->view('admin/evrsers/scripts/reservations-scripts');
  }

  public function reservation_history()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/admin/topbar');
    $this->load->view('partials/admin/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "EVRSERS", "title" => "Reservation History and Analytics"]);
    $this->load->view('admin/evrsers/reservation-history');
    $this->load->view('partials/footer');
    $this->load->view('admin/evrsers/components/reservation-history-modal');
    $this->load->view('partials/foot-scripts');
    $this->load->view('admin/evrsers/scripts/reservation-history-scripts');
  }

  public function holiday()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/admin/topbar');
    $this->load->view('partials/admin/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "Holiday", "title" => "Holiday Management"]);
    $this->load->view('admin/holiday/holiday');
    $this->load->view('partials/footer');
    $this->load->view('partials/foot-scripts');
    $this->load->view('admin/holiday/scripts/holiday-scripts');
  }

  public function organization()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/admin/topbar');
    $this->load->view('partials/admin/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "Organizations", "title" => "Organization Management"]);
    $this->load->view('admin/organization/organization');
    $this->load->view('partials/footer');
    $this->load->view('partials/foot-scripts');
    $this->load->view('admin/organization/scripts/org-scripts');
  }
}
