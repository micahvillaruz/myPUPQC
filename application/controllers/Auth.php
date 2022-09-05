<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
  // oAuth - For user authentication
  public function oAuth()
  {
    // Get url parameters
    $params = $this->input->get();

    // If user has valid token
    if ($_GET['token'] != null) {

      // Save parameter data to session
      $this->session->set_userdata([
        'token'     => $params['token'],
        'user_id'   => $params['user_id'],
        'user_type' => $params['user_type']
      ]);

      // check user type
      if ($this->session->has_userdata('user_type')) {
        $user_type = $this->session->user_type;

        // Redirect to page according to user_type
        if ($user_type === 'Super Admin')   redirect(base_url('admin/dashboard'));
        if ($user_type === 'Student')       redirect(base_url('student/dashboard'));
        if ($user_type === 'PUP Staff')     redirect(base_url('pup-staff/dashboard'));
      }
    } else {
      redirect(base_url('signin'));
    }
  }

  public function signin()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('access/signin');
    $this->load->view('partials/foot-scripts');
    $this->load->view('access/scripts/signin-scripts');
  }

  public function forgot_password()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('access/forgot-password');
    $this->load->view('partials/foot-scripts');
    $this->load->view('access/scripts/forgot-password-scripts');
  }

  public function logout()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('access/logout');
    $this->load->view('partials/foot-scripts');
    $this->load->view('access/scripts/logout-scripts');
  }
}
