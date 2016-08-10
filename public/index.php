<?php

chdir(dirname(__DIR__));
require_once 'vendor/autoload.php';

$bootstrap = new Eta\Core\Bootstrap();
$bootstrap
    ->getDispatcher()
    ->dispatch();