<?php

class ListPropertiesApiModel extends CI_Model {

	public function getproperties(){
		$response = $this->db->query("SELECT * FROM properties")->result();
		return $response;
       	
	}
}
?>