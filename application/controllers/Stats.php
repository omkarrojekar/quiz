<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stats extends CI_Controller {

	
	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('stats/home');
		$this->load->view('layout/footer');		
	}

	
}
