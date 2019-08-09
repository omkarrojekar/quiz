<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Show extends CI_Controller {

	public function index()
	{
		//SEO
		//$data['meta_title'] = "Result";
		// $data['meta_description'] = "";
		// $data['meta_keywords'] = "";

		//$this->load->view('layout/header',$data);
		//$this->load->view('stats/show');
		//$this->load->view('layout/footer');
		
		$id = 1116;
		$this->load->model('Quiz');
		$this->Quiz->showresult($id);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
