<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PUPStaff extends CI_Controller
{

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
}
