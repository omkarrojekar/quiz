<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Result extends CI_Controller {

	public function index()
	{
		//SEO
		$data['meta_title'] = "Result";
		// $data['meta_description'] = "";
		// $data['meta_keywords'] = "";

		$this->load->view('layout/header',$data);
		$this->load->view('stats/result');
		$this->load->view('layout/footer');
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
