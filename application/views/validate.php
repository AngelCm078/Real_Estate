<?php

if(sizeof($_POST)>0){
    if($_POST['email']<>"" && $_POST['password_user']<>""){
        //print_r($_POST);
        session_start();

        $_SESSION['s_name']="";
        $_SESSION['s_email']="";
        $_SESSION['s_id']="";

        //Validar Usuarios

        include("Validate_user.php");

        $users= new Validate_user;
        $access=$users->validate_access();

        if(sizeof($access)>0){

            $_SESSION['s_name']=$access["name"];
            $_SESSION['s_email']=$access["email"];
            $_SESSION['s_id']=$access["id"];



            $redirect = base_url()."Principal";
            header("location: $redirect");

        }else{
            $redirect = base_url();
            header("location: $redirect");
        }       

    }else{
        $redirect = base_url();
        header("location: $redirect");
    }
}else{
    $redirect = base_url();
    header("location: $redirect");
}






?>