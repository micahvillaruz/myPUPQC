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

    public function approvals()
    {
        $this->load->view('partials/main');
        $this->load->view('partials/title-meta');
        $this->load->view('partials/head-css');
        $this->load->view('partials/pup-staff/topbar');
        $this->load->view('partials/pup-staff/sidebar');
        $this->load->view('partials/page-title', ["page_title" => "ODRS", "title" => "Approvals"]);
        $this->load->view('pup-staff/odrs/approvals');
        $this->load->view('partials/footer');
        $this->load->view('pup-staff/odrs/components/approvals-modal');
        $this->load->view('partials/foot-scripts');
        $this->load->view('pup-staff/odrs/scripts/approvals-scripts');
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
        $this->load->view('partials/page-title', ["page_title" => "OMSSS", "title" => "Counseling Requests"]);
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

    public function organizer_management()
    {
        $this->load->view('partials/main');
        $this->load->view('partials/title-meta');
        $this->load->view('partials/head-css');
        $this->load->view('partials/pup-staff/topbar');
        $this->load->view('partials/pup-staff/sidebar');
        $this->load->view('partials/page-title', ["page_title" => "EVRSERS", "title" => "Organizer Management"]);
        $this->load->view('pup-staff/evrsers/organizer-management');
        $this->load->view('partials/footer');
        $this->load->view('pup-staff/evrsers/components/organizer-management-modal');
        $this->load->view('partials/foot-scripts');
        $this->load->view('pup-staff/evrsers/scripts/organizer-management-scripts');
    }

    public function manage_reservations()
    {
        $this->load->view('partials/main');
        $this->load->view('partials/title-meta');
        $this->load->view('partials/head-css');
        $this->load->view('partials/pup-staff/topbar');
        $this->load->view('partials/pup-staff/sidebar');
        $this->load->view('partials/page-title', ["page_title" => "EVRSERS", "title" => "Manage Reservations"]);
        $this->load->view('pup-staff/evrsers/view-reservations');
        $this->load->view('partials/footer');
        $this->load->view('pup-staff/evrsers/components/reservation-modal');
        $this->load->view('partials/foot-scripts');
        $this->load->view('pup-staff/evrsers/scripts/view-reservations-scripts');
    }

    public function reservation_history()
    {
        $this->load->view('partials/main');
        $this->load->view('partials/title-meta');
        $this->load->view('partials/head-css');
        $this->load->view('partials/pup-staff/topbar');
        $this->load->view('partials/pup-staff/sidebar');
        $this->load->view('partials/page-title', ["page_title" => "EVRSERS", "title" => "Reservation History"]);
        $this->load->view('pup-staff/evrsers/reservation-history');
        $this->load->view('partials/footer');
        $this->load->view('pup-staff/evrsers/components/reservation-history-modal');
        $this->load->view('partials/foot-scripts');
        $this->load->view('pup-staff/evrsers/scripts/reservationhist-scripts');
    }

    public function event_approvals()
    {
        $this->load->view('partials/main');
        $this->load->view('partials/title-meta');
        $this->load->view('partials/head-css');
        $this->load->view('partials/pup-staff/topbar');
        $this->load->view('partials/pup-staff/sidebar');
        $this->load->view('partials/page-title', ["page_title" => "EVRSERS", "title" => "Signatory Approvals"]);
        $this->load->view('pup-staff/evrsers/reservation-approval');
        $this->load->view('partials/footer');
        $this->load->view('pup-staff/evrsers/components/reservation-approval-modal');
        $this->load->view('partials/foot-scripts');
        $this->load->view('pup-staff/evrsers/scripts/reservation-approval-scripts');
    }

    public function advisory()
    {
        $this->load->view('partials/main');
        $this->load->view('partials/title-meta');
        $this->load->view('partials/head-css');
        $this->load->view('partials/pup-staff/topbar');
        $this->load->view('partials/pup-staff/sidebar');
        $this->load->view('partials/page-title', ["page_title" => "ANNOUNCEMENT", "title" => "Advisory"]);
        $this->load->view('pup-staff/announcement/advisory');
        $this->load->view('partials/footer');
        $this->load->view('pup-staff/announcement/components/announcement-modal');
        $this->load->view('partials/foot-scripts');
        $this->load->view('pup-staff/announcement/scripts/announcement-scripts');
    }

    public function announcement()
    {
        $this->load->view('partials/main');
        $this->load->view('partials/title-meta');
        $this->load->view('partials/head-css');
        $this->load->view('partials/pup-staff/topbar');
        $this->load->view('partials/pup-staff/sidebar');
        $this->load->view('partials/page-title', ["page_title" => "ANNOUNCEMENT", "title" => "Announcement"]);
        $this->load->view('pup-staff/announcement/announcement');
        $this->load->view('partials/footer');
        $this->load->view('pup-staff/announcement/components/announcement-modal');
        $this->load->view('partials/foot-scripts');
        $this->load->view('pup-staff/announcement/scripts/announcement-scripts');
    }

    public function news()
    {
        $this->load->view('partials/main');
        $this->load->view('partials/title-meta');
        $this->load->view('partials/head-css');
        $this->load->view('partials/pup-staff/topbar');
        $this->load->view('partials/pup-staff/sidebar');
        $this->load->view('partials/page-title', ["page_title" => "ANNOUNCEMENT", "title" => "News"]);
        $this->load->view('pup-staff/announcement/news');
        $this->load->view('partials/footer');
        $this->load->view('pup-staff/announcement/components/announcement-modal');
        $this->load->view('partials/foot-scripts');
        $this->load->view('pup-staff/announcement/scripts/announcement-scripts');
    }

    public function omsss_evaluation()
    {
        $this->load->view('partials/main');
        $this->load->view('partials/title-meta');
        $this->load->view('partials/head-css');
        $this->load->view('partials/pup-staff/topbar');
        $this->load->view('partials/pup-staff/sidebar');
        $this->load->view('partials/page-title', ["page_title" => "OMSSS", "title" => "Evaluation"]);
        $this->load->view('pup-staff/omsss/evaluation');
        $this->load->view('partials/footer');
        $this->load->view('pup-staff/omsss/components/evaluation-modal');
        $this->load->view('partials/foot-scripts');
        $this->load->view('pup-staff/omsss/scripts/evaluation-scripts');
    }

    public function odrs_evaluation()
    {
        $this->load->view('partials/main');
        $this->load->view('partials/title-meta');
        $this->load->view('partials/head-css');
        $this->load->view('partials/pup-staff/topbar');
        $this->load->view('partials/pup-staff/sidebar');
        $this->load->view('partials/page-title', ["page_title" => "ODRTS", "title" => "Evaluation"]);
        $this->load->view('pup-staff/odrs/evaluation');
        $this->load->view('partials/footer');
        $this->load->view('partials/foot-scripts');
        $this->load->view('pup-staff/odrs/scripts/evaluation-scripts');
    }
}
