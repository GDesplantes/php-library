<?php

use Gdesplantes\PhpLibrary\Db\DbConnect;

require '../../vendor/autoload.php';

DbConnect::setConfiguration('./config.php');

$pdo = DbConnect::getInstance();

var_dump($pdo); 