<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Student extends CI_Controller
{

  public function index()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/student/topbar');
    $this->load->view('partials/student/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "Student", "title" => "Dashboard"]);
    $this->load->view('student/dashboard');
    $this->load->view('partials/footer');
    $this->load->view('partials/foot-scripts');
    $this->load->view('student/scripts/dashboard-scripts');
  }

  public function new_request()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/student/topbar');
    $this->load->view('partials/student/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "ODRS", "title" => "New Request"]);
    $this->load->view('student/new-request');
    $this->load->view('partials/footer');
    $this->load->view('partials/foot-scripts');
    $this->load->view('student/scripts/new-request-scripts');
  }

  public function requests()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/student/topbar');
    $this->load->view('partials/student/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "ODRS", "title" => "Requests"]);
    $this->load->view('student/requests');
    $this->load->view('partials/footer');
    $this->load->view('partials/foot-scripts');
    $this->load->view('student/scripts/requests-scripts');
  }

  public function transactions()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/student/topbar');
    $this->load->view('partials/student/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "ODRS", "title" => "Transactions"]);
    $this->load->view('student/transactions');
    $this->load->view('partials/footer');
    $this->load->view('partials/foot-scripts');
    $this->load->view('student/scripts/transactions-scripts');
  }

  public function personal_information()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/student/topbar');
    $this->load->view('partials/student/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "Medical Services", "title" => "Personal Information"]);
    $this->load->view('student/personal-information');
    $this->load->view('partials/footer');
    $this->load->view('partials/foot-scripts');
    $this->load->view('student/scripts/personal-information-scripts');
  }

  public function health_history()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/student/topbar');
    $this->load->view('partials/student/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "Medical Services", "title" => "Health History"]);
    $this->load->view('student/health-history');
    $this->load->view('partials/footer');
    $this->load->view('partials/foot-scripts');
    $this->load->view('student/scripts/health-history-scripts');
  }

  public function immunization()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/student/topbar');
    $this->load->view('partials/student/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "Medical Services", "title" => "Immunization: Protect against viruses"]);
    $this->load->view('student/immunization');
    $this->load->view('partials/footer');
    $this->load->view('partials/foot-scripts');
    $this->load->view('student/components/immunization-modal');
    $this->load->view('student/scripts/immunization-scripts');
  }

  public function medical_consultation()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/student/topbar');
    $this->load->view('partials/student/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "Medical Services", "title" => "Medical Consultation"]);
    $this->load->view('student/medical-consultation');
    $this->load->view('partials/footer');
    $this->load->view('partials/foot-scripts');
    $this->load->view('student/scripts/medical-consultation-scripts');
  }

  public function dental_consultation()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/student/topbar');
    $this->load->view('partials/student/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "Dental Services", "title" => "Dental Consultation"]);
    $this->load->view('student/dental-consultation');
    $this->load->view('partials/footer');
    $this->load->view('partials/foot-scripts');
    $this->load->view('student/scripts/dental-consultation-scripts');
  }

  public function guidance_consultation()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/student/topbar');
    $this->load->view('partials/student/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "Guidance Services", "title" => "Guidance Consultation"]);
    $this->load->view('student/guidance-consultation');
    $this->load->view('partials/footer');
    $this->load->view('partials/foot-scripts');
    $this->load->view('student/scripts/guidance-consultation-scripts');
  }

  public function medical_logs()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/student/topbar');
    $this->load->view('partials/student/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "Medical Logs", "title" => "Medical Logs"]);
    $this->load->view('student/medical-logs');
    $this->load->view('partials/footer');
    $this->load->view('partials/foot-scripts');
    $this->load->view('student/scripts/medical-logs-scripts');
  }
  public function medical_appointment()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/student/topbar');
    $this->load->view('partials/student/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "Medical Consultation", "title" => " Medical Appointment"]);
    $this->load->view('student/medical-appointment');
    $this->load->view('partials/footer');
    $this->load->view('partials/foot-scripts');
    $this->load->view('student/scripts/medical-appointment-scripts');
  }
  public function dental_appointment()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/student/topbar');
    $this->load->view('partials/student/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "Dental Consultation", "title" => "Dental Appointment"]);
    $this->load->view('student/dental-appointment');
    $this->load->view('partials/footer');
    $this->load->view('partials/foot-scripts');
    $this->load->view('student/scripts/dental-appointment-scripts');
  }
  public function guidance_appointment()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/student/topbar');
    $this->load->view('partials/student/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "Guidance Consultation", "title" => "Guidance Appointments"]);
    $this->load->view('student/guidance-appointment');
    $this->load->view('partials/footer');
    $this->load->view('partials/foot-scripts');
    $this->load->view('student/scripts/guidance-appointment-scripts');
  }
  public function contact_omsss()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/student/topbar');
    $this->load->view('partials/student/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "Contact Us", "title" => "Contact OMSSS"]);
    $this->load->view('student/contact-omsss');
    $this->load->view('partials/footer');
    $this->load->view('partials/foot-scripts');
    $this->load->view('student/scripts/contact-omsss-scripts');
  }
}
