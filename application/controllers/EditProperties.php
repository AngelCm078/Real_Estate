<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EditProperties extends CI_Controller {

	
	public function index()
	{         
        $this->load->view('layouts/header_login');
        $this->load->view('editProperties'); 
        $this->load->view('layouts/footer');          
    }     

    public function edit(){
        $id=$this->input->get('id');
        $properties = array('dataProperties'=> $this->EditPropertiesModel->Edit($id));
        $this->load->view('layouts/header_login');
        $this->load->view('editProperties', $properties);
        $this->load->view('layouts/footer'); 
    }
}