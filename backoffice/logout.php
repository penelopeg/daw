<?php

//Destroy session
session_start(); 
session_destroy();
$_SESSION = array(); // Clears the $_SESSION variable
header('location: index.php');

?>