<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$users= $this->ListPropertiesModel->ListPropertiesAllUsers();
		$homeUsers = array ('users'=>$users);

		$this->load->view('layouts/header');
		$this->load->view('home', $homeUsers);
		$this->load->view('layouts/footer');
	}
}