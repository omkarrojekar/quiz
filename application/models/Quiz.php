<?php
class Quiz extends CI_Model
{
		public function index()
		{

		}

		public function store($userDetails,$startTime)
		{
			$starttime = $startTime;
			$id = rand('1111','9999'); 
			$firstName = $userDetails['firstName'];
			$lastName = $userDetails['lastName'];
			$email = $userDetails['email'];
			$run = $this->db->insert('user_answers2',['id'=>$id,'firstName'=>$firstName,'lastName'=>$lastName,'email'=>$email,'question1'=>'NULL','question2'=>'NULL','question3'=>'NULL','question4'=>'NULL','question5'=>'NULL','question6'=>'NULL','question7'=>'NULL','question8'=>'NULL','question9'=>'NULL','question10'=>'NULL','question11'=>'NULL','question12'=>'NULL','question13'=>'NULL','question14'=>'NULL','question15'=>'NULL','question16'=>'NULL','question17'=>'NULL','question18'=>'NULL','question19'=>'NULL','question20'=>'NULL','counter'=>0,'intime'=>'CURRENT_TIMESTAMP','status'=>1,'outtime'=>'CURRENT_TIMESTAMP','quizstartime'=>$starttime,'quizendtime'=>0,'timetaken'=>0,'marks'=>0]);
				//$run1 = $this->db->insert('user_session',['session'=>$id]);
				if($this->db->affected_rows()===1)
				{
					return $id;
				}
		}

		public function loadprogress($post, $currentUserId)
		{
				$userID = $currentUserId;
				$answer = "Not Attempted";
		//print_r($answer); exit();
				$question = $post['question'];
			if($question == 'question1')
			{
				if(isset($post['q1']))
				{
					$answer = $post['q1'];
				}
				$counter = 1;
				$this->db->set('question1', $answer); //value that used to update column  
				$this->db->set('counter', $counter); //value that used to update column  
				$this->db->where('id', $userID); //which row want to upgrade  
				$this->db->update('user_answers2');  //table name
				return $counter;
			}


			if($question == 'question2')
			{
				if(isset($post['q2']))
				{
					$answer = $post['q2'];
				}
				$counter = 2;
				$this->db->set('question2', $answer); //value that used to update column  
				$this->db->set('counter', $counter); //value that used to update column  
				$this->db->where('id', $userID); //which row want to upgrade  
				$this->db->update('user_answers2');  //table name
				return $counter;
			}
			if($question == 'question3')
			{
				if(isset($post['q3']))
				{
					$answer = $post['q3'];
				}
				$counter = 3;
				$this->db->set('question3', $answer); //value that used to update column  
				$this->db->set('counter', $counter); //value that used to update column  
				$this->db->where('id', $userID); //which row want to upgrade  
				$this->db->update('user_answers2');  //table name
				return $counter;
			}
			if($question == 'question4')
			{
				if(isset($post['q4']))
				{	
					$answer = $post['q4'];
				}
				$counter = 4;
				$this->db->set('question4', $answer); //value that used to update column  
				$this->db->set('counter', $counter); //value that used to update column  
				$this->db->where('id', $userID); //which row want to upgrade  
				$this->db->update('user_answers2');  //table name
				return $counter;
			}
			if($question == 'question5')
			{
				if(isset($post['q5']))
				{
					$answer = $post['q5'];
				}
				$counter = 5;
				$this->db->set('question5', $answer); //value that used to update column 
				$this->db->set('counter', $counter); //value that used to update column   
				$this->db->where('id', $userID); //which row want to upgrade  
				$this->db->update('user_answers2');  //table name
				return $counter;
			}
			if($question == 'question6')
			{
				if(isset($post['q6']))
				{
					$answer = $post['q6'];
				}
				$counter = 6;
				$this->db->set('question6', $answer); //value that used to update column  
				$this->db->set('counter', $counter); //value that used to update column  
				$this->db->where('id', $userID); //which row want to upgrade  
				$this->db->update('user_answers2');  //table name
				return $counter;
			}
			if($question == 'question7')
			{
				if(isset($post['q7']))
				{
					$answer = $post['q7'];
				}
				$counter = 7;
				$this->db->set('question7', $answer); //value that used to update column  
				$this->db->set('counter', $counter); //value that used to update column  
				$this->db->where('id', $userID); //which row want to upgrade  
				$this->db->update('user_answers2');  //table name
				return $counter;
			}
			if($question == 'question8')
			{
				if(isset($post['q8']))
				{
					$answer = $post['q8'];
				}
				$counter = 8;
				$this->db->set('question8', $answer); //value that used to update column  
				$this->db->set('counter', $counter); //value that used to update column  
				$this->db->where('id', $userID); //which row want to upgrade  
				$this->db->update('user_answers2');  //table name
				return $counter;
			}
			if($question == 'question9')
			{
				if(isset($post['q9']))
				{
					$answer = $post['q9'];
				}
				$counter = 9;
				$this->db->set('question9', $answer); //value that used to update column  
				$this->db->set('counter', $counter); //value that used to update column  
				$this->db->where('id', $userID); //which row want to upgrade  
				$this->db->update('user_answers2');  //table name
				return $counter;
			}
			if($question == 'question10')
			{
				if(isset($post['q10']))
				{
					$answer = $post['q10'];
				}
				$counter = 10;
				$this->db->set('question10', $answer); //value that used to update column  
				$this->db->set('counter', $counter); //value that used to update column  
				$this->db->where('id', $userID); //which row want to upgrade  
				$this->db->update('user_answers2');  //table name
				return $counter;
			}
			if($question == 'question11')
			{
				if(isset($post['q11']))
				{
					$answer = $post['q11'];
				}
				$counter = 11;
				$this->db->set('question11', $answer); //value that used to update column  
				$this->db->set('counter', $counter); //value that used to update column  
				$this->db->where('id', $userID); //which row want to upgrade  
				$this->db->update('user_answers2');  //table name
				return $counter;
			}
			if($question == 'question12')
			{
				if(isset($post['q12']))
				{
					$answer = $post['q12'];
				}
				$counter = 12;
				$this->db->set('question12', $answer); //value that used to update column  
				$this->db->set('counter', $counter); //value that used to update column  
				$this->db->where('id', $userID); //which row want to upgrade  
				$this->db->update('user_answers2');  //table name
				return $counter;
			}
			if($question == 'question13')
			{
				if(isset($post['q13']))
				{
					$answer = $post['q13'];
				}
				$counter = 13;
				$this->db->set('question13', $answer); //value that used to update column  
				$this->db->set('counter', $counter); //value that used to update column  
				$this->db->where('id', $userID); //which row want to upgrade  
				$this->db->update('user_answers2');  //table name
				return $counter;
			}
			if($question == 'question14')
			{
				if(isset($post['q14']))
				{
					$answer = $post['q14'];
				}
				$counter = 14;
				$this->db->set('question14', $answer); //value that used to update column  
				$this->db->set('counter', $counter); //value that used to update column  
				$this->db->where('id', $userID); //which row want to upgrade  
				$this->db->update('user_answers2');  //table name
				return $counter;
			}
			if($question == 'question15')
			{
				if(isset($post['q15']))
				{
					$answer = $post['q15'];
				}
				$counter = 15;
				$this->db->set('question15', $answer); //value that used to update column  
				$this->db->set('counter', $counter); //value that used to update column  
				$this->db->where('id', $userID); //which row want to upgrade  
				$this->db->update('user_answers2');  //table name
				return $counter;
			}
			if($question == 'question16')
			{
				if(isset($post['q16']))
				{
					$answer = $post['q16'];
				}
				$counter = 16;
				$this->db->set('question16', $answer); //value that used to update column  
				$this->db->set('counter', $counter); //value that used to update column  
				$this->db->where('id', $userID); //which row want to upgrade  
				$this->db->update('user_answers2');  //table name
				return $counter;
			}
			if($question == 'question17')
			{
				if(isset($post['q17']))
				{
					$answer = $post['q17'];
				}
				$counter = 17;
				$this->db->set('question17', $answer); //value that used to update column  
				$this->db->set('counter', $counter); //value that used to update column  
				$this->db->where('id', $userID); //which row want to upgrade  
				$this->db->update('user_answers2');  //table name
				return $counter;
			}
			if($question == 'question18')
			{
				if(isset($post['q18']))
				{
					$answer = $post['q18'];
				}
				$counter = 18;
				$this->db->set('question18', $answer); //value that used to update column  
				$this->db->set('counter', $counter); //value that used to update column  
				$this->db->where('id', $userID); //which row want to upgrade  
				$this->db->update('user_answers2');  //table name
				return $counter;
			}
			if($question == 'question19')
			{
				if(isset($post['q19']))
				{
					$answer = $post['q19'];
				}
				$counter = 19;
				$this->db->set('question19', $answer); //value that used to update column  
				$this->db->set('counter', $counter); //value that used to update column  
				$this->db->where('id', $userID); //which row want to upgrade  
				$this->db->update('user_answers2');  //table name
				return $counter;
			}
			if($question == 'question20')
			{
				if(isset($post['q20']))
				{
					$answer = $post['q20'];
				}
				$counter = 20;
				$this->db->set('question20', $answer); //value that used to update column  
				$this->db->set('counter', $counter); //value that used to update column  
				$this->db->where('id', $userID); //which row want to upgrade  
				$this->db->update('user_answers2');  //table name
				return $counter;
			}
		}
		public function showresult($id)
		{

			$userID = $id;
			//print_r($userID); exit();
			//$startTime = $this->session->startTime;
			//$endtime = $endTime;
			//$this->db->set('quizendtime', $endtime); //value that used to update column  
			//$this->db->set('timetaken', $endtime-$startTime); //value that used to update column  
			//$this->db->set('outtime', 'CURRENT_TIMESTAMP'); //value that used to update column  
			//$this->db->where('id', $userID); //which row want to upgrade  
			//$this->db->update('user_answers2');  //table name
			//print_r("time taken in seconds :".($endtime-$startTime));

			// All Answers From Answer Table
			$sql = "SELECT * FROM `ansers` WHERE 1 ";
			$result = $this->db->query($sql);
			$row = $result->row();
			$counter = 0;

			 //All Answers Given By User
			$sql2 = "SELECT * FROM `user_answers2` WHERE id = '$userID' ";
			$result2 = $this->db->query($sql2);
			$row2 = $result2->row();

				//print_r($row2->id); exit();
				if($row->question1 == $row2->question1)
				{
					$counter = $counter + 1;
				}
				if($row->question2 == $row2->question2)
				{
					$counter = $counter + 1;
				}
				if($row->question3 == $row2->question3)
				{
					$counter = $counter + 1;
				}
				if($row->question4 == $row2->question4)
				{
					$counter = $counter + 1;
				}
				if($row->question5 == $row2->question5)
				{
					$counter = $counter + 1;
				}
				if($row->question6 == $row2->question6)
				{
					$counter = $counter + 1;
				}
				if($row->question7 == $row2->question7)
				{
					$counter = $counter + 1;
				}
				if($row->question8 == $row2->question8)
				{
					$counter = $counter + 1;
				}
				if($row->question9 == $row2->question9)
				{
					$counter = $counter + 1;
				}
				if($row->question10 == $row2->question10)
				{
					$counter = $counter + 1;
				}
			
				if($row->question11 == $row2->question11)
				{
					$counter = $counter + 1;
				}
				if($row->question12 == $row2->question12)
				{
					$counter = $counter + 1;
				}
				if($row->question13 == $row2->question13)
				{
					$counter = $counter + 1;
				}
				if($row->question14 == $row2->question14)
				{
					$counter = $counter + 1;
				}
				if($row->question15 == $row2->question15)
				{
					$counter = $counter + 1;
				}
				if($row->question16 == $row2->question16)
				{
					$counter = $counter + 1;
				}
				if($row->question17 == $row2->question17)
				{
					$counter = $counter + 1;
				}
				if($row->question18 == $row2->question18)
				{
					$counter = $counter + 1;
				}
				if($row->question19 == $row2->question19)
				{
					$counter = $counter + 1;
				}
				if($row->question20 == $row2->question20)
				{
					$counter = $counter + 1;
				}
				print_r($counter); exit();
				//$this->db->set('marks', $counter); //value that used to update column  
				//$this->db->where('id', $userID); //which row want to upgrade  
				//$this->db->update('user_answers2');  //table name

				$data  = array();
				$data['question1'] = $row2->question1;
				$data['question2'] = $row2->question2;
				$data['question3'] = $row2->question3;
				$data['question4'] = $row2->question4;
				$data['question5'] = $row2->question5;
				$data['question6'] = $row2->question6;
				$data['question7'] = $row2->question7;
				$data['question8'] = $row2->question8;
				$data['question9'] = $row2->question9;
				$data['question10'] = $row2->question10;
				$data['question11'] = $row2->question11;
				$data['question12'] = $row2->question12;
				$data['question13'] = $row2->question13;
				$data['question14'] = $row2->question14;
				$data['question15'] = $row2->question15;
				$data['question16'] = $row2->question16;
				$data['question17'] = $row2->question17;
				$data['question18'] = $row2->question18;
				$data['question19'] = $row2->question19;
				$data['question20'] = $row2->question20;



				$data['ansQuestion1'] = $row->question1;
				$data['ansQuestion2'] = $row->question2;
				$data['ansQuestion3'] = $row->question3;
				$data['ansQuestion4'] = $row->question4;
				$data['ansQuestion5'] = $row->question5;
				$data['ansQuestion6'] = $row->question6;
				$data['ansQuestion7'] = $row->question7;
				$data['ansQuestion8'] = $row->question8;
				$data['ansQuestion9'] = $row->question9;
				$data['ansQuestion10'] = $row->question10;
				$data['ansQuestion11'] = $row->question11;
				$data['ansQuestion12'] = $row->question12;
				$data['ansQuestion13'] = $row->question13;
				$data['ansQuestion14'] = $row->question14;
				$data['ansQuestion15'] = $row->question15;
				$data['ansQuestion16'] = $row->question16;
				$data['ansQuestion17'] = $row->question17;
				$data['ansQuestion18'] = $row->question18;
				$data['ansQuestion19'] = $row->question19;
				$data['ansQuestion20'] = $row->question20;

				$data['marks'] = $counter;
				$data['id']	 = $userID;
				$data['firstName'] = $row2->firstName;
				$data['lastName'] = $row2->lastName;
				$data['UserName'] = $row2->email;
				$data['timetaken'] = $endtime-$startTime;
				return $data;

		}


	//Get total numbers of Members Who are solving Quiz fast	
	public function get_members()
	{
		$query = $this->db->order_by('counter', 'desc')
						  ->get_where('user_answers2', array('counter=MAX(counter)','counter<' => 20), 10);
        return $query->result_array();
	}


	//Get First 3 Winners
	public function get_winner()
	{
		$query = $this->db->order_by('timetaken', 'asc')
						  ->get_where('user_answers2', array('marks=MAX(marks)'), 3);
        return $query->result_array();
	}
	//Get Overall Result of employees
	public function get_members_result()
	{
		$query = $this->db->order_by('marks', 'desc')
						  ->get('user_answers2');
        return $query->result_array();	
	}
}
