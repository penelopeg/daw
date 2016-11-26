<?php

//session_start();
session_destroy();
$alert = "Goodbye!";
header("location: index.php?alert=$alert");

?>