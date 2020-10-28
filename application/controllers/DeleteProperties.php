
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DeleteProperties extends CI_Controller {

	
	public function index()
	{ 
        /*       
        $patients = $this->DeletePatientsModel->Delete();
        $deletePatients = array ('patients' => $patients);*/
        $this->load->view('deleteProperties');         
    }     

    public function delete()
    {   
            $id = $this->input->get('id');
            $this->DeletePropertiesModel->Delete($id);
            
            $redirect = base_url().'Principal';
            header("location: $redirect");
    }
}