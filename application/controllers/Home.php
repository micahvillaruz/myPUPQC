<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function index()
	{
		$this->load->view('partials/main-home');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('home/landing');
		$this->load->view('partials/foot-scripts');
		$this->load->view('partials/home/home-footer');
		$this->load->view('home/scripts/landing-scripts');
	}

	public function about()
	{
		$this->load->view('partials/main-home');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/home/home-header');
		$this->load->view('home/about');
		$this->load->view('partials/home/home-footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('home/scripts/about-scripts');
	}

	public function vm()
	{
		$this->load->view('partials/main-home');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/home/home-header');
		$this->load->view('home/about/vm');
		$this->load->view('partials/home/home-footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('home/scripts/vm-scripts');
	}

	public function history()
	{
		$this->load->view('partials/main-home');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/home/home-header');
		$this->load->view('home/about/history');
		$this->load->view('partials/home/home-footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('home/scripts/history-scripts');
	}

	public function facilities()
	{
		$this->load->view('partials/main-home');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/home/home-header');
		$this->load->view('home/about/facilities');
		$this->load->view('partials/home/home-footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('home/scripts/facilities-scripts');
	}

	public function offices()
	{
		$this->load->view('partials/main-home');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/home/home-header');
		$this->load->view('home/about/offices');
		$this->load->view('partials/home/home-footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('home/scripts/offices-scripts');
	}

	public function personnel()
	{
		$this->load->view('partials/main-home');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/home/home-header');
		$this->load->view('home/about/personnel');
		$this->load->view('partials/home/home-footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('home/scripts/personnel-scripts');
	}

	public function faculty()
	{
		$this->load->view('partials/main-home');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/home/home-header');
		$this->load->view('home/about/faculty');
		$this->load->view('partials/home/home-footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('home/scripts/faculty-scripts');
	}

	public function logo_symbols()
	{
		$this->load->view('partials/main-home');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/home/home-header');
		$this->load->view('home/about/logo-symbols');
		$this->load->view('partials/home/home-footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('home/scripts/logo-symbols-scripts');
	}

	public function hymn()
	{
		$this->load->view('partials/main-home');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/home/home-header');
		$this->load->view('home/about/hymn');
		$this->load->view('partials/home/home-footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('home/scripts/hymn-scripts');
	}

	public function annual_reports()
	{
		$this->load->view('partials/main-home');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/home/home-header');
		$this->load->view('home/about/annual-reports');
		$this->load->view('partials/home/home-footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('home/scripts/annual-reports-scripts');
	}

	public function contact_us()
	{
		$this->load->view('partials/main-home');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/home/home-header');
		$this->load->view('home/about/contact-us');
		$this->load->view('partials/home/home-footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('home/scripts/contact-us-scripts');
	}

	public function maps()
	{
		$this->load->view('partials/main-home');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/home/home-header');
		$this->load->view('home/about/maps');
		$this->load->view('partials/home/home-footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('home/scripts/maps-scripts');
	}

	public function code()
	{
		$this->load->view('partials/main-home');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/home/home-header');
		$this->load->view('home/about/code');
		$this->load->view('partials/home/home-footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('home/scripts/code-scripts');
	}

	public function memorandum_orders()
	{
		$this->load->view('partials/main-home');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/home/home-header');
		$this->load->view('home/about/memorandum-orders');
		$this->load->view('partials/home/home-footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('home/scripts/memorandum-orders-scripts');
	}

	public function executive_orders()
	{
		$this->load->view('partials/main-home');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/home/home-header');
		$this->load->view('home/about/executive-orders');
		$this->load->view('partials/home/home-footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('home/scripts/executive-orders-scripts');
	}

	public function codi_manual()
	{
		$this->load->view('partials/main-home');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/home/home-header');
		$this->load->view('home/about/codi-manual');
		$this->load->view('partials/home/home-footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('home/scripts/codi-manual-scripts');
	}

	public function citizens_charter()
	{
		$this->load->view('partials/main-home');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/home/home-header');
		$this->load->view('home/about/citizens-charter');
		$this->load->view('partials/home/home-footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('home/scripts/citizens-charter-scripts');
	}

	public function programs()
	{
		$this->load->view('partials/main-home');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/home/home-header');
		$this->load->view('home/academic/programs');
		$this->load->view('partials/home/home-footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('home/scripts/programs-scripts');
	}

	public function ous()
	{
		$this->load->view('partials/main-home');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/home/home-header');
		$this->load->view('home/academic/ous');
		$this->load->view('partials/home/home-footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('home/scripts/ous-scripts');
	}

	public function library()
	{
		$this->load->view('partials/main-home');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/home/home-header');
		$this->load->view('home/academic/library');
		$this->load->view('partials/home/home-footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('home/scripts/library-scripts');
	}

	public function ovpaa()
	{
		$this->load->view('partials/main-home');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/home/home-header');
		$this->load->view('home/academic/ovpaa');
		$this->load->view('partials/home/home-footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('home/scripts/ovpaa-scripts');
	}

	public function student_services()
	{
		$this->load->view('partials/main-home');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/home/home-header');
		$this->load->view('home/student/services');
		$this->load->view('partials/home/home-footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('home/scripts/student-services-scripts');
	}

	public function organizations()
	{
		$this->load->view('partials/main-home');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/home/home-header');
		$this->load->view('home/student/organizations');
		$this->load->view('partials/home/home-footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('home/scripts/organizations-scripts');
	}

	public function student_council()
	{
		$this->load->view('partials/main-home');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/home/home-header');
		$this->load->view('home/student/council');
		$this->load->view('partials/home/home-footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('home/scripts/student-council-scripts');
	}

	public function student_handbook()
	{
		$this->load->view('partials/main-home');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/home/home-header');
		$this->load->view('home/student/handbook');
		$this->load->view('partials/home/home-footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('home/scripts/student-handbook-scripts');
	}

	public function downloads()
	{
		$this->load->view('partials/main-home');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/home/home-header');
		$this->load->view('home/student/downloads');
		$this->load->view('partials/home/home-footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('home/scripts/downloads-scripts');
	}

	public function researches()
	{
		$this->load->view('partials/main-home');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/home/home-header');
		$this->load->view('home/research/researches');
		$this->load->view('partials/home/home-footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('home/scripts/researches-scripts');
	}

	public function extensions()
	{
		$this->load->view('partials/main-home');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/home/home-header');
		$this->load->view('home/research/extensions');
		$this->load->view('partials/home/home-footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('home/scripts/extensions-scripts');
	}

	public function objectives()
	{
		$this->load->view('partials/main-home');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/home/home-header');
		$this->load->view('home/research/objectives');
		$this->load->view('partials/home/home-footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('home/scripts/objectives-scripts');
	}

	public function services()
	{
		$this->load->view('partials/main-home');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/home/home-header');
		$this->load->view('home/research/services');
		$this->load->view('partials/home/home-footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('home/scripts/services-scripts');
	}

	public function intellectual_property()
	{
		$this->load->view('partials/main-home');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/home/home-header');
		$this->load->view('home/research/intellectual-property');
		$this->load->view('partials/home/home-footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('home/scripts/ip-scripts');
	}

	public function research_ethics()
	{
		$this->load->view('partials/main-home');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/home/home-header');
		$this->load->view('home/research/research-ethics');
		$this->load->view('partials/home/home-footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('home/scripts/ip-scripts');
	}

	public function applicants()
	{
		$this->load->view('partials/main-home');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/home/home-header');
		$this->load->view('home/applicants');
		$this->load->view('partials/home/home-footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('home/scripts/applicants-scripts');
	}

	public function events()
	{
		$this->load->view('partials/main-home');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/home/home-header');
		$this->load->view('home/events');
		$this->load->view('partials/home/home-footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('home/scripts/events-scripts');
	}

	public function documents()
	{
		$this->load->view('partials/main-home');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/home/home-header');
		$this->load->view('home/documents');
		$this->load->view('partials/home/home-footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('home/scripts/documents-scripts');
	}

	public function scholarships()
	{
		$this->load->view('partials/main-home');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/home/home-header');
		$this->load->view('home/scholarships');
		$this->load->view('partials/home/home-footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('home/scripts/scholarships-scripts');
	}

	public function calendar()
	{
		$this->load->view('partials/main-home');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/home/home-header');
		$this->load->view('home/calendar');
		$this->load->view('partials/home/home-footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('home/scripts/calendar-scripts');
	}

	public function admission()
	{
		$this->load->view('partials/main-home');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/home/home-header');
		$this->load->view('home/admission');
		$this->load->view('partials/home/home-footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('home/scripts/admission-scripts');
	}

	public function terms()
	{
		$this->load->view('partials/main-home');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/home/home-header');
		$this->load->view('home/terms');
		$this->load->view('partials/home/home-footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('home/scripts/terms-scripts');
	}

	public function privacy()
	{
		$this->load->view('partials/main-home');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/home/home-header');
		$this->load->view('home/privacy');
		$this->load->view('partials/home/home-footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('home/scripts/privacy-scripts');
	}

    public function news($go = NULL)
    {
        $data['go'] = $go;
        $this->load->view('partials/main-home');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('partials/home/home-header');
		if(!$go){
            $this->load->view('home/news');
        }
        else{
            $this->load->view('home/specific-news', $data);
        }
		$this->load->view('partials/home/home-footer');
		$this->load->view('partials/foot-scripts');
		$this->load->view('home/scripts/news-scripts');
    }
}
