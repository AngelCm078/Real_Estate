<?php

class EditPropertiesModel extends CI_Model {

	public function Edit($id){
		$response = $this->db->query("SELECT * FROM properties WHERE id=$id")->result();
		return $response[0];
	}
}
?>