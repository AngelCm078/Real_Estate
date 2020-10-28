<?php

class Conection
{
    function __construct()
    {
        $this->user="root";
        $this->password="";
        $this->database="real_estate";
        $this->server="localhost";

        $this->conection=new mysqli($this->server,$this->user,$this->password, $this->database);

        if($this->conection->connect_errno){
            die("Error in dataBase");
            exit;
        }        
    }
}