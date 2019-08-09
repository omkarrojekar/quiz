<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Winner extends CI_Controller {

	
	public function index()
	{
		$this->load->model('Quiz');
		$data['members'] = $this->Quiz->get_winner();
		$this->load->view('stats/winner', $data);	
	}

	
}
