<?php

if(mail($_GET['email'],$_GET['title'],$_GET['message'])) {
	$message = "Email was sent";
	header('location: index.php?alert=$message');
}
else {
	$message = "There was an error sending email!";
	header('location: index.php?alert=$message');
}

?>