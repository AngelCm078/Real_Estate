<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

	public function listProperties(){
        $method = $_SERVER['REQUEST_METHOD'];
        if($method === 'GET'){
            $properti = $this->ListPropertiesApiModel->getproperties();
            $response = array('response' => 'ok', "data"=> $properti);
            echo json_encode ($response);
        }
        else{
            header('content-type: application/json');
            $response = array('response'=> 'bad request');
            echo json_encode($response);
        }
    }
}