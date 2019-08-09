
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Whoisthewinnershowmetoit extends CI_Controller {

	
	public function index()
	{
	//	$data['meta_title'] = "Result";
		//$this->load->view('layout/header');
		//$this->load->view('public/whoisthewinnershowmetoit');
		//$this->load->view('layout/footer');	
		$this->load->view('layout/header');
		$this->load->view('public/whoisthewinnershowmetoit');
		$this->load->view('layout/footer');	
	}

	
}
