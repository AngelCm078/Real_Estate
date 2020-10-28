<?php

class Create_property_model extends CI_Model {

	public function create_property($propertyData){
		$this->db->insert('properties',$propertyData);
	}
}
?>