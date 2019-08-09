<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		//SEO
		$data['meta_title'] = "Dashboard";

		$this->load->view('layout/header',$data);
		$this->load->view('public/dashboard');
		$this->load->view('layout/footer');
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
