<?php

$smarty->assign('firstname', $firstname);
$smarty->assign('lastname', $lastname);
$smarty->assign('email', $email);
$smarty->assign('message', $message);
$smarty->display('register.tpl');
?>