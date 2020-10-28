<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UpdateProperties extends CI_Controller {

	
	public function index()
	{         
        $this->load->view('layouts/header_login');
        $this->load->view('updateProperties');          
    }     

    public function update(){

        $id=$this->input->get('id');        
        $title=$this->input->post('title');
        $type=$this->input->post('type');
        $address=$this->input->post('address');
        $rooms=$this->input->post('rooms');
        $price=$this->input->post('price');
        $area=$this->input->post('area');
        
        $dataProperties = array( 
            'id' => $id,           
            'title' => $title, 
            'type' => $type,
            'address' => $address,
            'rooms' => $rooms,
            'price' => $price,
            'area' => $area);

            $this->UpdatePropertiesModel->update($dataProperties); 

            $redirect = base_url().'Principal';
            header("location: $redirect");
    }
}