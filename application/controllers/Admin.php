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

  public function dentist_appointment()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/admin/topbar');
    $this->load->view('partials/admin/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "Health and Well-Being", "title" => "Dental Appointment"]);
    $this->load->view('admin/omsss/dentist-appointment/dentist-appointment');
    $this->load->view('partials/footer');
    $this->load->view('admin/omsss/components/dentist-appointment-modal');
    $this->load->view('partials/foot-scripts');
    $this->load->view('admin/omsss/dentist-appointment/scripts/dentist-appointment-scripts');
  }

  public function guidance_appointment()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/admin/topbar');
    $this->load->view('partials/admin/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "Health and Well-Being", "title" => "Guidance Appointment"]);
    $this->load->view('admin/omsss/guidance-appointment/guidance-appointment');
    $this->load->view('partials/footer');
    $this->load->view('admin/omsss/components/guidance-appointment-modal');
    $this->load->view('partials/foot-scripts');
    $this->load->view('admin/omsss/guidance-appointment/scripts/guidance-appointment-scripts');
  }

  public function all_prescription()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/admin/topbar');
    $this->load->view('partials/admin/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "Health and Well-Being", "title" => "All Prescriptions"]);
    $this->load->view('admin/omsss/medical-prescription/all-prescription');
    $this->load->view('partials/footer');
    $this->load->view('admin/omsss/components/all-prescription-modal');
    $this->load->view('partials/foot-scripts');
    $this->load->view('admin/omsss/medical-prescription/scripts/all-prescription-scripts');
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
    $this->load->view('admin/evrsers/components/reservation-modal');
    $this->load->view('partials/foot-scripts');
    $this->load->view('admin/evrsers/scripts/reservations-scripts');
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
    $this->load->view('partials/page-title', ["page_title" => "EVRSERS", "title" => "Reservation History"]);
    $this->load->view('admin/evrsers/reservation-history');
    $this->load->view('partials/footer');
    $this->load->view('partials/foot-scripts');
    $this->load->view('admin/evrsers/scripts/reservations-scripts');
  }
}
