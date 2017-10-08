<?php

class Signup extends CI_Controller
{
	public function index()
	{
		$this->load->view('signup');
		
	}

	public function add()
	{
		$data = $this->input->post();
		unset($data['submit']);
		$email = $data['email'];
		$this->load->model('Signupmodel','Signup');
		$res = $this->Signup->check_email_existance($email);
		if($res) 
		{
			echo json_encode(100);
		}
		else
		{
			if( $this->Signup->Sign_Up($data) )
			{
				echo json_encode(1);	
			}
			else{
				echo json_encode(0);
			}
		}
	}




	public function __construct()
	{
		parent::__construct();
		$this->load->helper('html');
		$this->load->helper('form');
		$this->load->helper('url');
		
	}
}