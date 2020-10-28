<?php

class UpdatePropertiesModel extends CI_Model {

	public function update($dataProperties){

		$response=$this->db->query("UPDATE properties 
        SET title='{$dataProperties['title']}',
            type='{$dataProperties['type']}',
            address='{$dataProperties['address']}',
            rooms='{$dataProperties['rooms']}',
            price='{$dataProperties['price']}',
            area='{$dataProperties['area']}'
        WHERE id='{$dataProperties['id']}'");  
	}
}