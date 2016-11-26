<?php

$smarty->assign('redirect', $redirect);
$smarty->assign('field2',array('name'=> "Sign Up", 'href' => 'index.php?page=register'));
$smarty->display('login.tpl');
?>