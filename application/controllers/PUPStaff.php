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
}
