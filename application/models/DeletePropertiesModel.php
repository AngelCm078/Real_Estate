<?php

class DeletePropertiesModel extends CI_Model {	

	public function Delete($id){
	$response = $this->db->query("DELETE FROM properties WHERE id={$id}");
	}	
}
?>