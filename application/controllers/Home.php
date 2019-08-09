<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		if($this->session->userdata('userID'))
		{
			return redirect('questions/question1');
		}
		else
		{
			$data['meta_title'] = "Quiz";
		// $data['meta_description'] = "";
		// $data['meta_keywords'] = "";

			$this->load->view('layout/header',$data);
			$this->load->view('public/home');
			$this->load->view('layout/footer');
		}
		
			
	}
	public function storeuserdetails()
		{
				//print_r("hola"); exit();
				$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');
				$this->form_validation->set_rules('firstName','First Name','required');
				$this->form_validation->set_rules('lastName','Last Name','required');
				$this->form_validation->set_rules('email','Email Address','required|valid_email|is_unique[user_answers2.email]');
				if($this->form_validation->run())
				{

						$userDetails = $this->input->post();
						$time = getdate();
						$hh = $time['hours'];
						$mm = $time['minutes'];
						$ss = $time['seconds'];
						$startTime = (($hh*60*60)+($mm*60)+$ss);
						//$email = $post['email'];
						$this->load->model('Quiz');
						$session = $this->Quiz->store($userDetails,$startTime);
						//print_r($data); exit();
						if($session !=1)
						{
							$this->session->set_userdata('userID',$session);
							$this->session->set_userdata('startTime',$startTime);
							if(!$this->session->userdata('userID'))
							return redirect('home');
							$this->load->view('layout/header');
							$this->load->view('questions/question1');
							$this->load->view('layout/footer');		
						}
						else
					{	
						echo "error";
					}		
				}
				else
				{
					$this->load->view('layout/header');
					$this->load->view('public/home');
					$this->load->view('layout/footer');
				}
			
				//print_r($post);	
		}

		public function storeanswers()
		{
			$post = $this->input->post();
			//print_r($post); exit();
			$currentUserId = $this->session->userID;
			$this->load->model('Quiz');
			$questionNumber = $this->Quiz->loadprogress($post, $currentUserId);
			if($questionNumber == 1)
			{
				$this->load->view('layout/header');
				$this->load->view('questions/question2');
				$this->load->view('layout/footer');		
			}
			elseif($questionNumber == 2)
			{
				$this->load->view('layout/header');
				$this->load->view('questions/question3');
				$this->load->view('layout/footer');		
			}
			elseif($questionNumber == 3)
			{
				$this->load->view('layout/header');
				$this->load->view('questions/question4');
				$this->load->view('layout/footer');		
			}
			elseif($questionNumber == 4)
			{
				$this->load->view('layout/header');
				$this->load->view('questions/question5');
				$this->load->view('layout/footer');		
			}
			elseif($questionNumber == 5)
			{
				$this->load->view('layout/header');
				$this->load->view('questions/question6');
				$this->load->view('layout/footer');		
			}
			elseif($questionNumber == 6)
			{
				$this->load->view('layout/header');
				$this->load->view('questions/question7');
				$this->load->view('layout/footer');		
			}
			elseif($questionNumber == 7)
			{
				$this->load->view('layout/header');
				$this->load->view('questions/question8');
				$this->load->view('layout/footer');		
			}
			elseif($questionNumber == 8)
			{
				$this->load->view('layout/header');
				$this->load->view('questions/question9');
				$this->load->view('layout/footer');		
			}
			elseif($questionNumber == 9)
			{
				$this->load->view('layout/header');
				$this->load->view('questions/question10');
				$this->load->view('layout/footer');		
			}
		
			elseif($questionNumber == 10)
			{
				$this->load->view('layout/header');
				$this->load->view('questions/question11');
				$this->load->view('layout/footer');		
			}
			elseif($questionNumber == 11)
			{
				$this->load->view('layout/header');
				$this->load->view('questions/question12');
				$this->load->view('layout/footer');		
			}
			elseif($questionNumber == 12)
			{
				$this->load->view('layout/header');
				$this->load->view('questions/question13');
				$this->load->view('layout/footer');		
			}elseif($questionNumber == 13)
			{
				$this->load->view('layout/header');
				$this->load->view('questions/question14');
				$this->load->view('layout/footer');		
			}elseif($questionNumber == 14)
			{
				$this->load->view('layout/header');
				$this->load->view('questions/question15');
				$this->load->view('layout/footer');		
			}elseif($questionNumber == 15)
			{
				$this->load->view('layout/header');
				$this->load->view('questions/question16');
				$this->load->view('layout/footer');		
			}elseif($questionNumber == 16)
			{
				$this->load->view('layout/header');
				$this->load->view('questions/question17');
				$this->load->view('layout/footer');		
			}elseif($questionNumber == 17)
			{
				$this->load->view('layout/header');
				$this->load->view('questions/question18');
				$this->load->view('layout/footer');		
			}elseif($questionNumber == 18)
			{
				$this->load->view('layout/header');
				$this->load->view('questions/question19');
				$this->load->view('layout/footer');		
			}elseif($questionNumber == 19)
			{
				$this->load->view('layout/header');
				$this->load->view('questions/question20');
				$this->load->view('layout/footer');		
			}
			else
			{
				$time = getdate();
				//print_r($time); exit();
				$hh = $time['hours'];
				$mm = $time['minutes'];
				$ss = $time['seconds'];
				$endTime = (($hh*60*60)+($mm*60)+$ss);
				//$result = $this->Quiz->showresult($currentUserId,$endTime);
				//if(!$this->session->userdata('userID'))
			//	return redirect('home');
				
					$this->session->unset_userdata('userID');
					$this->load->view('layout/header');
				//$this->load->view('stats/result',$result);
					$this->load->view('public/thankyou');
					$this->load->view('layout/footer');			
			
				
			}
		}
		public function exitpage()
		{
		
			//	if(!$this->session->userdata('userID'))
				//return redirect('home');
				$this->session->unset_userdata('userID');
				$this->load->view('layout/header');
				$this->load->view('public/thankyou');
				$this->load->view('layout/footer');
				 //echo "<script>window.close();</script>";
		}
}
/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
