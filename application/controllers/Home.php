<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function index()
	{
		$this->load->view('partials/main');
		$this->load->view('partials/title-meta');
		$this->load->view('partials/head-css');
		$this->load->view('home/landing');
		$this->load->view('partials/foot-scripts');
		$this->load->view('home/scripts/landing-scripts');
	}
}
