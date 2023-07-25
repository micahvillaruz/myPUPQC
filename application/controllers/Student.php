<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Student extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        if ($this->session->token == null) {
            redirect(base_url('auth/signin'));
        }

        if ($this->session->user_type != 'Student') {
            $this->session->user_type == 'Super Admin' ? redirect(base_url('admin')) : redirect(base_url('pupstaff'));
        }
    }

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

    public function profile()
    {
        $this->load->view('partials/main');
        $this->load->view('partials/title-meta');
        $this->load->view('partials/head-css');
        $this->load->view('partials/student/topbar');
        $this->load->view('partials/student/sidebar');
        $this->load->view('student/profile');
        $this->load->view('partials/footer');
        $this->load->view('partials/foot-scripts');
        $this->load->view('student/scripts/profile-scripts');
    }

    public function settings()
    {
        $this->load->view('partials/main');
        $this->load->view('partials/title-meta');
        $this->load->view('partials/head-css');
        $this->load->view('partials/student/topbar');
        $this->load->view('partials/student/sidebar');
        $this->load->view('student/settings');
        $this->load->view('partials/footer');
        $this->load->view('partials/foot-scripts');
        $this->load->view('student/scripts/settings-scripts');
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
        $this->load->view('student/odrs/footer');
        $this->load->view('student/odrs/components/new-request-modal');
        $this->load->view('partials/foot-scripts');
        $this->load->view('student/odrs/scripts/new-request-scripts');
    }

    public function request()
    {
        $this->load->view('partials/main');
        $this->load->view('partials/title-meta');
        $this->load->view('partials/head-css');
        $this->load->view('partials/student/topbar');
        $this->load->view('partials/student/sidebar');
        $this->load->view('partials/page-title', ["page_title" => "ODRS", "title" => "Request"]);
        $this->load->view('student/odrs/requests');
        $this->load->view('student/odrs/footer');
        $this->load->view('student/odrs/components/requests-modal');
        $this->load->view('partials/foot-scripts');
        $this->load->view('student/odrs/scripts/requests-scripts');
    }

    public function history()
    {
        $this->load->view('partials/main');
        $this->load->view('partials/title-meta');
        $this->load->view('partials/head-css');
        $this->load->view('partials/student/topbar');
        $this->load->view('partials/student/sidebar');
        $this->load->view('partials/page-title', ["page_title" => "ODRS", "title" => "History"]);
        $this->load->view('student/odrs/history');
        $this->load->view('student/odrs/footer');
        $this->load->view('student/odrs/components/history-modal');
        $this->load->view('partials/foot-scripts');
        $this->load->view('student/odrs/scripts/history-scripts');
    }

    public function patient_info()
    {
        $this->load->view('partials/main');
        $this->load->view('partials/title-meta');
        $this->load->view('partials/head-css');
        $this->load->view('partials/student/topbar');
        $this->load->view('partials/student/sidebar');
        $this->load->view('partials/page-title', ["page_title" => "Medical Services", "title" => "Patient Information"]);
        $this->load->view('student/omsss/health-information/patient-info');
        $this->load->view('student/omsss/footer');
        $this->load->view('student/omsss/components/patient-info-modal');
        $this->load->view('partials/foot-scripts');
        $this->load->view('student/omsss/health-information/scripts/patient-info-scripts');
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
        $this->load->view('student/omsss/footer');
        $this->load->view('partials/foot-scripts');
        $this->load->view('student/omsss/health-information/scripts/health-history-scripts');
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
        $this->load->view('student/omsss/footer');
        $this->load->view('student/omsss/components/medical-consultation-modal');
        $this->load->view('partials/foot-scripts');
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
        $this->load->view('student/omsss/footer');
        $this->load->view('student/omsss/components/dental-consultation-modal');
        $this->load->view('partials/foot-scripts');
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
        $this->load->view('student/omsss/footer');
        $this->load->view('student/omsss/components/guidance-consultation-modal');
        $this->load->view('partials/foot-scripts');
        $this->load->view('student/omsss/appointment/scripts/guidance-consultation-scripts');
    }

    public function medical_logs()
    {
        $this->load->view('partials/main');
        $this->load->view('partials/title-meta');
        $this->load->view('partials/head-css');
        $this->load->view('partials/student/topbar');
        $this->load->view('partials/student/sidebar');
        $this->load->view('partials/page-title', ["page_title" => "Medical Logs", "title" => "Medical Logs"]);
        $this->load->view('student/omsss/medical-logs');
        $this->load->view('student/omsss/footer');
        $this->load->view('student/omsss/components/medical-logs-modal');
        $this->load->view('partials/foot-scripts');
        $this->load->view('student/omsss/scripts/medical-logs-scripts');
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
        $this->load->view('student/evrsers/components/new-reservation-modal');
        $this->load->view('partials/foot-scripts');
        $this->load->view('student/evrsers/scripts/new-reservation-scripts');
    }

    public function view_reservation()
    {
        $this->load->view('partials/main');
        $this->load->view('partials/title-meta');
        $this->load->view('partials/head-css');
        $this->load->view('partials/student/topbar');
        $this->load->view('partials/student/sidebar');
        $this->load->view('partials/page-title', ["page_title" => "EVRSERS", "title" => "View Reservation"]);
        $this->load->view('student/evrsers/view-reservation');
        $this->load->view('partials/footer');
        $this->load->view('student/evrsers/components/new-reservation-modal');
        $this->load->view('student/evrsers/components/reservation-modal');
        $this->load->view('student/evrsers/components/add-pubmat-modal');
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
        $this->load->view('student/evrsers/reservation-history');
        $this->load->view('partials/footer');
        $this->load->view('student/evrsers/components/reservation-history-modal');
        $this->load->view('partials/foot-scripts');
        $this->load->view('student/evrsers/scripts/reservationhist-scripts');
    }

    public function new_event_reservation()
    {
        $this->load->view('partials/main');
        $this->load->view('partials/title-meta');
        $this->load->view('partials/head-css');
        $this->load->view('partials/student/topbar');
        $this->load->view('partials/student/sidebar');
        $this->load->view('partials/page-title', ["page_title" => "EMS", "title" => "New Reservation"]);
        $this->load->view('student/ems/new-event-reservation');
        $this->load->view('partials/footer');
        $this->load->view('student/ems/components/new-reservation-modal');
        $this->load->view('partials/foot-scripts');
        $this->load->view('student/ems/scripts/new-reservation-scripts');
    }

    public function view_event_reservation()
    {
        $this->load->view('partials/main');
        $this->load->view('partials/title-meta');
        $this->load->view('partials/head-css');
        $this->load->view('partials/student/topbar');
        $this->load->view('partials/student/sidebar');
        $this->load->view('partials/page-title', ["page_title" => "EMS", "title" => "View Events"]);
        $this->load->view('student/ems/view-event-reservation');
        $this->load->view('partials/footer');
        $this->load->view('student/ems/components/view-reservation-modal');
        $this->load->view('partials/foot-scripts');
        $this->load->view('student/ems/scripts/view-reservation-scripts');
    }

    public function reservationpolicy()
    {
        $this->load->view('partials/main-home');
        $this->load->view('partials/title-meta');
        $this->load->view('partials/head-css');
        $this->load->view('partials/home/home-header');
        $this->load->view('student/evrsers/reservationpolicy');
        $this->load->view('partials/home/home-footer');
        $this->load->view('partials/foot-scripts');
        $this->load->view('home/scripts/terms-scripts');
    }

    public function org_register()
    {
        $this->load->view('partials/main');
        $this->load->view('partials/title-meta');
        $this->load->view('partials/head-css');
        $this->load->view('partials/student/topbar');
        $this->load->view('partials/student/sidebar');
        $this->load->view('partials/page-title', ["page_title" => "ORGMS", "title" => "Organization Registration"]);
        $this->load->view('student/orgms/org-register');
        $this->load->view('partials/footer');
        $this->load->view('student/orgms/components/org-regis-modal');
        $this->load->view('partials/foot-scripts');
        $this->load->view('student/orgms/scripts/org-regis-script');
    }

    public function org_profile()
    {
        $this->load->view('partials/main');
        $this->load->view('partials/title-meta');
        $this->load->view('partials/head-css');
        $this->load->view('partials/student/topbar');
        $this->load->view('partials/student/sidebar');
        $this->load->view('partials/page-title', ["page_title" => "ORGMS", "title" => "Organization Profile"]);
        $this->load->view('student/orgms/org-profile');
        $this->load->view('partials/footer');
        $this->load->view('student/orgms/components/org-profile-modal');
        $this->load->view('partials/foot-scripts');
        $this->load->view('student/orgms/scripts/org-profile-script');
    }

    public function org_analytics()
    {
        $this->load->view('partials/main');
        $this->load->view('partials/title-meta');
        $this->load->view('partials/head-css');
        $this->load->view('partials/student/topbar');
        $this->load->view('partials/student/sidebar');
        $this->load->view('partials/page-title', ["page_title" => "ORGMS", "title" => "Organization Analytics"]);
        $this->load->view('student/orgms/org-dashboard');
        $this->load->view('partials/footer');
        $this->load->view('partials/foot-scripts');
        $this->load->view('student/orgms/scripts/org-dashboard-script');
    }

    public function org_events()
    {
        $this->load->view('partials/main');
        $this->load->view('partials/title-meta');
        $this->load->view('partials/head-css');
        $this->load->view('partials/student/topbar');
        $this->load->view('partials/student/sidebar');
        $this->load->view('partials/page-title', ["page_title" => "EMS", "title" => "View Organization Events"]);
        $this->load->view('student/ems/organization-events');
        $this->load->view('partials/footer');
        $this->load->view('student/ems/components/organization-events-modal');
        $this->load->view('partials/foot-scripts');
        $this->load->view('student/ems/scripts/organization-events-scripts');
    }

    public function new_facility_reservation()
    {
        $this->load->view('partials/main');
        $this->load->view('partials/title-meta');
        $this->load->view('partials/head-css');
        $this->load->view('partials/student/topbar');
        $this->load->view('partials/student/sidebar');
        $this->load->view('partials/page-title', ["page_title" => "FRS", "title" => "New Facility Reservation"]);
        $this->load->view('student/frs/new-reservation');
        $this->load->view('partials/footer');
        $this->load->view('student/frs/components/new-reservation-modal');
        $this->load->view('partials/foot-scripts');
        $this->load->view('student/frs/scripts/new-reservation-scripts');
    }

    public function view_facility_reservation()
    {
        $this->load->view('partials/main');
        $this->load->view('partials/title-meta');
        $this->load->view('partials/head-css');
        $this->load->view('partials/student/topbar');
        $this->load->view('partials/student/sidebar');
        $this->load->view('partials/page-title', ["page_title" => "FRS", "title" => "View Facility Reservation"]);
        $this->load->view('student/frs/view-facility-reservation');
        $this->load->view('partials/footer');
        $this->load->view('student/frs/components/view-reservation-modal');
        $this->load->view('partials/foot-scripts');
        $this->load->view('student/frs/scripts/view-reservation-scripts');
    }

    public function facility_reservation_history()
    {
        $this->load->view('partials/main');
        $this->load->view('partials/title-meta');
        $this->load->view('partials/head-css');
        $this->load->view('partials/student/topbar');
        $this->load->view('partials/student/sidebar');
        $this->load->view('partials/page-title', ["page_title" => "FRS", "title" => "Facility Reservation History"]);
        $this->load->view('student/frs/facility-reservation-history');
        $this->load->view('partials/footer');
        $this->load->view('student/frs/components/reservation-history-modal');
        $this->load->view('partials/foot-scripts');
        $this->load->view('student/frs/scripts/view-reservation-scripts');
    }

    public function researchcop_dashboard()
    {
        $this->load->view('partials/main');
        $this->load->view('partials/title-meta');
        $this->load->view('partials/head-css');
        $this->load->view('partials/student/topbar');
        $this->load->view('partials/student/sidebar');
        $this->load->view('partials/page-title', ["page_title" => "ResearchCop", "title" => "Dashboard"]);
        $this->load->view('student/researchcop/dashboard');
        $this->load->view('partials/footer');
        $this->load->view('partials/foot-scripts');
        $this->load->view('student/scripts/dashboard-scripts');
        $this->load->view('student/researchcop/scripts/dashboard-scripts');
    }

    public function researchcop_copyright()
    {
        $this->load->view('partials/main');
        $this->load->view('partials/title-meta');
        $this->load->view('partials/head-css');
        $this->load->view('partials/student/topbar');
        $this->load->view('partials/student/sidebar');
        $this->load->view('partials/page-title', ["page_title" => "ResearchCop", "title" => "Copyright Generator"]);
        $this->load->view('student/researchcop/copyright');
        $this->load->view('partials/footer');
        $this->load->view('student/researchcop/components/copyright-modal');
        $this->load->view('partials/foot-scripts');
        $this->load->view('student/scripts/dashboard-scripts');
        $this->load->view('student/researchcop/scripts/copyright-scripts');
    }

    public function researchcop_author()
    {
        $this->load->view('partials/main');
        $this->load->view('partials/title-meta');
        $this->load->view('partials/head-css');
        $this->load->view('partials/student/topbar');
        $this->load->view('partials/student/sidebar');
        $this->load->view('partials/page-title', ["page_title" => "ResearchCop", "title" => "Author"]);
        $this->load->view('student/researchcop/author');
        $this->load->view('partials/footer');
        $this->load->view('student/researchcop/components/author-modal');
        $this->load->view('partials/foot-scripts');
        $this->load->view('student/scripts/dashboard-scripts');
        $this->load->view('student/researchcop/scripts/author-scripts');
    }

    public function my_submissions()
    {
        $this->load->view('partials/main');
        $this->load->view('partials/title-meta');
        $this->load->view('partials/head-css');
        $this->load->view('partials/student/topbar');
        $this->load->view('partials/student/sidebar');
        $this->load->view('partials/page-title', ["page_title" => "ResearchCop", "title" => "My Submissions"]);
        $this->load->view('student/researchcop/my-submissions');
        $this->load->view('partials/footer');
        $this->load->view('student/researchcop/components/ms-modal');
        $this->load->view('partials/foot-scripts');
        $this->load->view('student/scripts/dashboard-scripts');
        $this->load->view('student/researchcop/scripts/ms-scripts');
    }

    public function add_research()
    {
        $this->load->view('partials/main');
        $this->load->view('partials/title-meta');
        $this->load->view('partials/head-css');
        $this->load->view('partials/student/topbar');
        $this->load->view('partials/student/sidebar');
        $this->load->view('partials/page-title', ["page_title" => "ResearchCop", "title" => "Add Research"]);
        $this->load->view('student/researchcop/add-research');
        $this->load->view('partials/footer');
        $this->load->view('student/researchcop/components/ms-modal');
        $this->load->view('partials/foot-scripts');
        $this->load->view('student/scripts/dashboard-scripts');
        $this->load->view('student/researchcop/scripts/add-research-scripts');
    }

    public function help_and_support()
    {
        $this->load->view('partials/main');
        $this->load->view('partials/title-meta');
        $this->load->view('partials/head-css');
        $this->load->view('partials/student/topbar');
        $this->load->view('partials/student/sidebar');
        $this->load->view('partials/page-title', ["page_title" => "ResearchCop", "title" => "Help and Support"]);
        $this->load->view('student/researchcop/help-and-support');
        $this->load->view('partials/footer');
        $this->load->view('partials/foot-scripts');
        $this->load->view('student/scripts/dashboard-scripts');
    }
}
