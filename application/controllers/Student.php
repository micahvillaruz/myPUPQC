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
    $this->load->view('student/odrs/new-request');
    $this->load->view('partials/footer');
    $this->load->view('partials/foot-scripts');
    $this->load->view('student/odrs/scripts/new-request-scripts');
  }

  public function requests()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/student/topbar');
    $this->load->view('partials/student/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "ODRS", "title" => "Requests"]);
    $this->load->view('student/odrs/requests');
    $this->load->view('partials/footer');
    $this->load->view('student/odrs/components/view-request-details');
    $this->load->view('student/odrs/components/view-requirements');
    $this->load->view('student/odrs/components/view-payment-options');
    $this->load->view('partials/foot-scripts');
    $this->load->view('student/odrs/scripts/requests-scripts');
  }

  public function transactions()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/student/topbar');
    $this->load->view('partials/student/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "ODRS", "title" => "Transactions"]);
    $this->load->view('student/odrs/transactions');
    $this->load->view('partials/footer');
    $this->load->view('student/odrs/components/view-transaction-details');
    $this->load->view('student/odrs/components/view-schedule');
    $this->load->view('student/odrs/components/view-status-flow');
    $this->load->view('partials/foot-scripts');
    $this->load->view('student/odrs/scripts/transactions-scripts');
  }

  public function personal_information()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/student/topbar');
    $this->load->view('partials/student/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "Medical Services", "title" => "Personal Information"]);
    $this->load->view('student/omsss/health-information/personal-information');
    $this->load->view('student/omsss/health-information/footer/health-information-footer');
    $this->load->view('partials/foot-scripts');
    $this->load->view('student/omsss/health-information/scripts/personal-information-scripts');
  }

  public function health_history()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/student/topbar');
    $this->load->view('partials/student/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "Medical Services", "title" => "Health History"]);
    $this->load->view('student/omsss/health-information/health-history');
    $this->load->view('student/omsss/health-information/footer/health-history-footer');
    $this->load->view('partials/foot-scripts');
    $this->load->view('student/omsss/health-information/scripts/health-history-scripts');
  }

  public function immunization()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/student/topbar');
    $this->load->view('partials/student/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "Medical Services", "title" => "Immunization: Protect against viruses"]);
    $this->load->view('student/omsss/health-information/immunization');
    $this->load->view('student/omsss/health-information/footer/immunization-footer');
    $this->load->view('partials/foot-scripts');
    $this->load->view('student/omsss/components/modals/immunization-modal');
    $this->load->view('student/omsss/health-information/scripts/immunization-scripts');
  }

  public function medical_consultation()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/student/topbar');
    $this->load->view('partials/student/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "Medical Services", "title" => "Medical Consultation"]);
    $this->load->view('student/omsss/appointment/medical-consultation');
    $this->load->view('student/omsss/appointment/footer/medical-consultation-footer');
    $this->load->view('partials/foot-scripts');
    $this->load->view('student/omsss/components/modals/medical-consultation-modal');
    $this->load->view('student/omsss/appointment/scripts/medical-consultation-scripts');
  }

  public function dental_consultation()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/student/topbar');
    $this->load->view('partials/student/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "Dental Services", "title" => "Dental Consultation"]);
    $this->load->view('student/omsss/appointment/dental-consultation');
    $this->load->view('student/omsss/appointment/footer/dental-consulation-footer');
    $this->load->view('partials/foot-scripts');
    $this->load->view('student/omsss/components/modals/dental-consultation-modal');
    $this->load->view('student/omsss/appointment/scripts/dental-consultation-scripts');
  }

  public function guidance_consultation()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/student/topbar');
    $this->load->view('partials/student/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "Guidance Services", "title" => "Guidance Consultation"]);
    $this->load->view('student/omsss/appointment/guidance-consultation');
    $this->load->view('student/omsss/appointment/footer/guidance-consultation-footer');
    $this->load->view('partials/foot-scripts');
    $this->load->view('student/omsss/components/modals/guidance-consultation-modal');
    $this->load->view('student/omsss/components/modals/guidance-consultation-view-modal');
    $this->load->view('student/omsss/appointment/scripts/guidance-consultation-scripts');
  }

  public function medical_prescription()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/student/topbar');
    $this->load->view('partials/student/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "Medical Prescription", "title" => "Prescription"]);
    $this->load->view('student/omsss/appointment/medical_prescription');
    $this->load->view('student/omsss/appointment/medical-prescription-footer');
    $this->load->view('partials/foot-scripts');
    $this->load->view('student/omsss/appointment/scripts/medical-prescription-scripts');
  }

  public function medical_logs()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/student/topbar');
    $this->load->view('partials/student/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "Medical Logs", "title" => "Medical Logs"]);
    $this->load->view('student/omsss/log-and-contact-omsss/medical-logs');
    $this->load->view('student/omsss/log-and-contact-omsss/footer/log-and-contact-omsss-footer');
    $this->load->view('partials/foot-scripts');
    $this->load->view('student/omsss/log-and-contact-omsss/scripts/medical-logs-scripts');
  }

  public function contact_omsss()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/student/topbar');
    $this->load->view('partials/student/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "Contact Us", "title" => "Contact OMSSS"]);
    $this->load->view('student/omsss/log-and-contact-omsss/contact-omsss');
    $this->load->view('partials/footer');
    $this->load->view('partials/foot-scripts');
    $this->load->view('student/omsss/components/modals/contact-omsss-modal');
    $this->load->view('student/omsss/log-and-contact-omsss/scripts/contact-omsss-scripts');
  }

  public function new_reservation()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/student/topbar');
    $this->load->view('partials/student/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "EVRSERS", "title" => "New Reservation"]);
    $this->load->view('student/evrsers/new-reservation');
    $this->load->view('partials/footer');
    $this->load->view('partials/foot-scripts');
    $this->load->view('student/evrsers/scripts/new-reservation-scripts');
  }

  public function view_reservations()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/student/topbar');
    $this->load->view('partials/student/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "EVRSERS", "title" => "View Reservations"]);
    $this->load->view('student/evrsers/view-reservations');
    $this->load->view('partials/footer');
    $this->load->view('partials/foot-scripts');
    $this->load->view('student/evrsers/scripts/reservations-scripts');
  }

  public function reservation_history()
  {
    $this->load->view('partials/main');
    $this->load->view('partials/title-meta');
    $this->load->view('partials/head-css');
    $this->load->view('partials/student/topbar');
    $this->load->view('partials/student/sidebar');
    $this->load->view('partials/page-title', ["page_title" => "EVRSERS", "title" => "View Reservation History"]);
    $this->load->view('student/evrsers/view-reservations');
    $this->load->view('partials/footer');
    $this->load->view('partials/foot-scripts');
    $this->load->view('student/evrsers/scripts/reservations-scripts');
  }
}
