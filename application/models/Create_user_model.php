<?php

class create_user_model extends CI_Model {

	public function create($userData){
		$this->db->insert('users',$userData);
	}
}
?>