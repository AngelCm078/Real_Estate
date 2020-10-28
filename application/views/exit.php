<?php

session_start();
unset($_SESSION);
session_destroy();

$redirect = base_url();
header("location: $redirect");

?>
