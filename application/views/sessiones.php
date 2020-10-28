<?php
// script que contiene 
// la validacion de acceso al app
session_start();
//if(!$_SESSION['s_nombre'] && $_SESSION['s_nombre']=="") {
if(!isset($_SESSION['s_name'])) {
	$redirect = base_url();
    header("location: $redirect"); 
}