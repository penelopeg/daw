<?php

$smarty->assign('firstname', $firstname);
$smarty->assign('lastname', $lastname);
$smarty->assign('email', $email);
$smarty->display('register.tpl');
?>