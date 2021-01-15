<?php
$connection = require_once './CLASSESS/Connection.php';

$connection->addReceipt($_POST);

header('Location: addshopping.php');
