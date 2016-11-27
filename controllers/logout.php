<?php

//Destroy client session
session_destroy();
$alert = "Goodbye!";
header("location: index.php?alert=$alert");

?>