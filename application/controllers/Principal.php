<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller{

	public function index()
	{
		$_SESSION['s_id'];

		$id_user=$_SESSION['s_id'];

		$properties = $this->ListPropertiesModel->ListProperties($id_user);
		$principal = array ('properties'=>$properties);

		$this->load->view('layouts/header_login');
		$this->load->view('principal', $principal);
		$this->load->view('layouts/footer');
		
	}
}	
		
	


