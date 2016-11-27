<?php

//Include and require important files
// Init db connection
include('db.php');

//Get pdo wrapper functions for classes
include('functions.php');

//Get smarty lib
require('libs/Smarty.class.php');

//Get models
require('models/class.product.php');
require('models/class.client.php');
require('models/class.order.php');

?>