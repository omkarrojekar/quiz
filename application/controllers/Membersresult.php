<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Membersresult extends CI_Controller {

	
	public function index()
	{

		$this->load->model('Quiz');
		$data['members'] = $this->Quiz->get_members_result();
		$this->load->view('stats/membersresult', $data);
	}

	
}
