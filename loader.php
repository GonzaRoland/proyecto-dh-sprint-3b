<?php

require_once 'Classes/MySQLDB.php';
require_once 'Classes/User.php';
require_once 'Classes/Product.php';
require_once 'Classes/Validator.php';
require_once 'Classes/Auth.php';
require_once 'Classes/PDOConnector.php';


$pdo = Connector::make(); 

$db = new MySQLDB($pdo);
//$productsDb = new MySQLDB("products.json");
$validator = new Validator();
$auth = new Auth();