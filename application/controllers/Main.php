<?php

class Main extends CI_Controller
{

	public function index()
	{
		// if($this->session->userdata('email'))
		// {
		// 	return redirect('Dashboard');
		// }
		// else
		// {
			$this->load->view("landingPage.php");
		// }
		
	}
	

}