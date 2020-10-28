<?php

include("Conection.php");

class Validate_user extends Conection{

    function __construct()
    {
        parent:: __construct();

		$this->table="users";
        
    }

    public function validate_access()
	{
        $email=$_POST['email'];
        $password_user=$_POST['password_user'];        

        $sql="select * from ".$this->table." where email='".$email."'";

        $registry=array();

        $result= $this->conection->query($sql);

        if($result->num_rows>0)
        {
            $data = $result->fetch_array();

            $compare_key = $data["password_user"];

            $compare=password_verify($password_user, $compare_key);

            if($compare)
            {
                $registry= $data;
            }

        }
        return $registry;
    }    
}   