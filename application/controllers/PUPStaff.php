<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PUPStaff extends CI_Controller
{

  function __construct()
  {
    parent::__construct();

    if ($this->session->token == null) {
      redirect(base_url('auth/signin'));
    }

    if ($this->session->user_type != 'PUP Staff') {
      $this->session->user_type == 'Super Admin' ? redirect(base_url('admin')) : redirect(base_url('student'));
    }
  }

  public function index()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/pup-staff/topbar');
    $this->load->view('partials/pup-staff/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "Dashboard", "title" => "Dashboard"]);
    $this->load->view('pup-staff/dashboard');
    $this->load->view('partials/footer');
    $this->load->view('partials/foot-scripts');
    $this->load->view('pup-staff/scripts/dashboard-scripts');
  }

  public function profile()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/pup-staff/topbar');
    $this->load->view('partials/pup-staff/sidebar');
    $this->load->view('pup-staff/profile');
    $this->load->view('partials/footer');
    $this->load->view('partials/foot-scripts');
    $this->load->view('pup-staff/scripts/profile-scripts');
  }

  public function settings()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/pup-staff/topbar');
    $this->load->view('partials/pup-staff/sidebar');
    $this->load->view('pup-staff/settings');
    $this->load->view('partials/footer');
    $this->load->view('partials/foot-scripts');
    $this->load->view('pup-staff/scripts/settings-scripts');
  }

  public function documents()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/pup-staff/topbar');
    $this->load->view('partials/pup-staff/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "ODRS", "title" => "Documents"]);
    $this->load->view('pup-staff/odrs/documents');
    $this->load->view('partials/footer');
    $this->load->view('pup-staff/odrs/components/documents-modal');
    $this->load->view('partials/foot-scripts');
    $this->load->view('pup-staff/odrs/scripts/documents-scripts');
  }

  public function requests()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/pup-staff/topbar');
    $this->load->view('partials/pup-staff/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "ODRS", "title" => "Requests"]);
    $this->load->view('pup-staff/odrs/requests');
    $this->load->view('partials/footer');
    $this->load->view('pup-staff/odrs/components/requests-modal');
    $this->load->view('partials/foot-scripts');
    $this->load->view('pup-staff/odrs/scripts/requests-scripts');
  }

  public function history()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/pup-staff/topbar');
    $this->load->view('partials/pup-staff/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "ODRS", "title" => "History"]);
    $this->load->view('pup-staff/odrs/history');
    $this->load->view('partials/footer');
    $this->load->view('pup-staff/odrs/components/history-modal');
    $this->load->view('partials/foot-scripts');
    $this->load->view('pup-staff/odrs/scripts/history-scripts');
  }
  public function medical_requests()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/pup-staff/topbar');
    $this->load->view('partials/pup-staff/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "OMSSS", "title" => "Medical Requests"]);
    $this->load->view('pup-staff/omsss/medical-requests');
    $this->load->view('partials/footer');
    $this->load->view('pup-staff/omsss/components/medical-requests-modal');
    $this->load->view('partials/foot-scripts');
    $this->load->view('pup-staff/omsss/scripts/medical-requests-scripts');
  }
  public function medical_analytics()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/pup-staff/topbar');
    $this->load->view('partials/pup-staff/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "OMSSS", "title" => "Analytics and History"]);
    $this->load->view('pup-staff/omsss/medical-analytics');
    $this->load->view('partials/footer');
    $this->load->view('pup-staff/omsss/components/medical-analytics-modal');
    $this->load->view('partials/foot-scripts');
    $this->load->view('pup-staff/omsss/scripts/medical-analytics-scripts');
  }

  public function dental_requests()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/pup-staff/topbar');
    $this->load->view('partials/pup-staff/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "OMSSS", "title" => "Dental Requests"]);
    $this->load->view('pup-staff/omsss/dental-requests');
    $this->load->view('partials/footer');
    $this->load->view('pup-staff/omsss/components/dental-requests-modal');
    $this->load->view('partials/foot-scripts');
    $this->load->view('pup-staff/omsss/scripts/dental-requests-scripts');
  }

  public function dental_analytics()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/pup-staff/topbar');
    $this->load->view('partials/pup-staff/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "OMSSS", "title" => "Analytics and History"]);
    $this->load->view('pup-staff/omsss/dental-analytics');
    $this->load->view('partials/footer');
    $this->load->view('pup-staff/omsss/components/dental-analytics-modal');
    $this->load->view('partials/foot-scripts');
    $this->load->view('pup-staff/omsss/scripts/dental-analytics-scripts');
  }

  public function counsellor_requests()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/pup-staff/topbar');
    $this->load->view('partials/pup-staff/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "OMSSS", "title" => "Counsellor Requests"]);
    $this->load->view('pup-staff/omsss/counsellor-requests');
    $this->load->view('partials/footer');
    $this->load->view('pup-staff/omsss/components/counsellor-requests-modal');
    $this->load->view('partials/foot-scripts');
    $this->load->view('pup-staff/omsss/scripts/counsellor-requests-scripts');
  }

  public function counsellor_analytics()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/pup-staff/topbar');
    $this->load->view('partials/pup-staff/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "OMSSS", "title" => "Analytics and History"]);
    $this->load->view('pup-staff/omsss/counsellor-analytics');
    $this->load->view('partials/footer');
    $this->load->view('pup-staff/omsss/components/counsellor-analytics-modal');
    $this->load->view('partials/foot-scripts');
    $this->load->view('pup-staff/omsss/scripts/counsellor-analytics-scripts');
  }
}
