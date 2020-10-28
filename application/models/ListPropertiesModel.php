<?php
session_start();

class ListPropertiesModel extends CI_Model
{

    public function ListProperties($id_user)
    {

        $properties = $this->db->query("SELECT * FROM properties WHERE id_user= $id_user")->result();

        foreach ($properties as $properti) {
            return $properties;
        }
    }
    
    public function ListPropertiesAllUsers()
    {
        $order = "DESC";

        $users = $this->db->query("SELECT * FROM properties p INNER JOIN users u ON u.id=p.id_user ORDER BY p.price $order")->result();

        foreach ($users as $user) {
            return $users;
        }
    }

    public function getSortedProperties()
    {  

        $users = $this->db->query("SELECT * FROM properties p INNER JOIN users u ON u.id=p.id_user")->result();

        foreach ($users as $user) {
            return $users;
        }
    }
}
