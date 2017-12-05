<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/model/Autoloader.php';
$Salons = new SalonsController();
$Salons->sendMessage($_POST);
//var_dump($_POST);
?>