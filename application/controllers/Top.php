<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Top extends CI_Controller {

	
	public function index()
	{

		$this->load->model('Quiz');
		$data['members'] = $this->Quiz->get_members();
		$this->load->view('stats/top', $data);
	}

	
}
