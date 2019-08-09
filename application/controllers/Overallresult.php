
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Overallresult extends CI_Controller {

	public function index()
	{
		//SEO
		//$data['meta_title'] = "Overallresult";
		// $data['meta_description'] = "";
		// $data['meta_keywords'] = "";

		$this->load->view('layout/header');
		$this->load->view('public/overallresult');
		$this->load->view('layout/footer');

		//$this->load->model('Quiz');
		//$data['members'] = $this->Quiz->get_members_result();
		//$this->load->view('stats/membersresult', $data);	
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
