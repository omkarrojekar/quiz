<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Questions extends CI_Controller {

	
	public function question1()
	{
		//checkSession();
		if(!$this->session->userdata('userID'))
			return redirect('home');
		$this->load->view('layout/header');
		$this->load->view('questions/question1');
		$this->load->view('layout/footer');		
	}
	public function question2()
	{
		if(!$this->session->userdata('userID'))
			return redirect('home');
		$this->load->view('layout/header');
		$this->load->view('questions/question2');
		$this->load->view('layout/footer');		
	}

	public function question3()
	{
		if(!$this->session->userdata('userID'))
			return redirect('home');
		$this->load->view('layout/header');
		$this->load->view('questions/question3');
		$this->load->view('layout/footer');		
	}
	public function question4()
	{
		if(!$this->session->userdata('userID'))
			return redirect('home');
		$this->load->view('layout/header');
		$this->load->view('questions/question4');
		$this->load->view('layout/footer');		
	}
	public function question5()
	{
		if(!$this->session->userdata('userID'))
			return redirect('home');
		$this->load->view('layout/header');
		$this->load->view('questions/question5');
		$this->load->view('layout/footer');		
	}
	public function question6()
	{
		if(!$this->session->userdata('userID'))
			return redirect('home');
		$this->load->view('layout/header');
		$this->load->view('questions/question6');
		$this->load->view('layout/footer');		
	}
	public function question7()
	{
		if(!$this->session->userdata('userID'))
			return redirect('home');
		$this->load->view('layout/header');
		$this->load->view('questions/question7');
		$this->load->view('layout/footer');		
	}
	public function question8()
	{
		if(!$this->session->userdata('userID'))
			return redirect('home');
		$this->load->view('layout/header');
		$this->load->view('questions/question8');
		$this->load->view('layout/footer');		
	}
	public function question9()
	{
		if(!$this->session->userdata('userID'))
			return redirect('home');
		$this->load->view('layout/header');
		$this->load->view('questions/question9');
		$this->load->view('layout/footer');		
	}
	public function question10()
	{
		if(!$this->session->userdata('userID'))
			return redirect('home');
		$this->load->view('layout/header');
		$this->load->view('questions/question10');
		$this->load->view('layout/footer');		
	}
	public function question11()
	{
		if(!$this->session->userdata('userID'))
			return redirect('home');
		$this->load->view('layout/header');
		$this->load->view('questions/question11');
		$this->load->view('layout/footer');		
	}
	public function question12()
	{
		if(!$this->session->userdata('userID'))
			return redirect('home');
		$this->load->view('layout/header');
		$this->load->view('questions/question12');
		$this->load->view('layout/footer');		
	}
	public function question13()
	{
		if(!$this->session->userdata('userID'))
			return redirect('home');
		$this->load->view('layout/header');
		$this->load->view('questions/question13');
		$this->load->view('layout/footer');		
	}
	public function question14()
	{
		if(!$this->session->userdata('userID'))
			return redirect('home');
		$this->load->view('layout/header');
		$this->load->view('questions/question14');
		$this->load->view('layout/footer');		
	}
	public function question15()
	{
		if(!$this->session->userdata('userID'))
			return redirect('home');
		$this->load->view('layout/header');
		$this->load->view('questions/question15');
		$this->load->view('layout/footer');		
	}
	public function question16()
	{
		if(!$this->session->userdata('userID'))
			return redirect('home');
		$this->load->view('layout/header');
		$this->load->view('questions/question16');
		$this->load->view('layout/footer');		
	}
	public function question17()
	{
		if(!$this->session->userdata('userID'))
			return redirect('home');
		$this->load->view('layout/header');
		$this->load->view('questions/question17');
		$this->load->view('layout/footer');		
	}
	public function question18()
	{
		if(!$this->session->userdata('userID'))
			return redirect('home');
		$this->load->view('layout/header');
		$this->load->view('questions/question18');
		$this->load->view('layout/footer');		
	}
	public function question19()
	{
		if(!$this->session->userdata('userID'))
			return redirect('home');
		$this->load->view('layout/header');
		$this->load->view('questions/question19');
		$this->load->view('layout/footer');		
	}
	public function question20()
	{
		if(!$this->session->userdata('userID'))
			return redirect('home');
		$this->load->view('layout/header');
		$this->load->view('questions/question20');
		$this->load->view('layout/footer');		
	}



}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
