<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Create_propertie extends CI_Controller{

	public function index()
	{		
        $this->load->view('layouts/header_login');	
		$this->load->view('create_propertie');
		$this->load->view('layouts/footer');
	}
	
	
	public function create_property()
	{
		//$userPost = $_SESSION['s_id'];

		if($this->input->post('title') == null){
            echo "error";
		}
		else{
			$title = $_POST['title'];
			$type = $_POST['type'];
			$address = $_POST['address'];
			$rooms = $_POST['rooms'];
			$price = $_POST['price'];
			$area = $_POST['area'];
			$user = $_POST['user'];
		}
		$propertyData = array(
			'title' => $title,
			'type' => $type,
			'address' => $address,
			'rooms' => $rooms,
			'price' => $price,
			'area' => $area,
			'id_user' => $user
		);

		$this->Create_property_model->create_property($propertyData);
		$redirect = base_url().'Principal';
		header("location: $redirect");
		
	}
}