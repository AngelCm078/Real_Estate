<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Create_user extends CI_Controller {

	public function index()
	{
		$this->load->view('layouts/header');
		$this->load->view('create_user');
		$this->load->view('layouts/footer');
	}

	



    public function create(){
        if($this->input->post('name') == null){
            echo "empty name field";
        }else if($this->input->post('lastname') == null){
			echo "empty lastname field";
		}else if($this->input->post('email') == null){
			echo "empty email field";
		}else if($this->input->post('identification') == null){
			echo "empty identification field";
		}else if($this->input->post('password_user') == null){
			echo "empty password field";
		}
        else{
			$name = $_POST['name'];
			$lastname = $_POST['lastname'];
			$email = $_POST['email'];
			$type_id = $_POST['type_id'];
			$identification = $_POST['identification'];
			$password_user = $_POST['password_user'];
			//Encriptacion semilla de password usuario
			if($password_user<>""){
				$password_user = password_hash($password_user,PASSWORD_DEFAULT);
			}
            $userData = array (
				'name' => $name,
				'lastname' => $lastname,
				'email' => $email,
				'type_id' => $type_id,
				'identification' => $identification,
				'password_user' => $password_user
                 
            );
			$this->Create_user_model->create($userData);
			$redirect = base_url();
            header("location: $redirect");
                
        }
        
	}	
	
}