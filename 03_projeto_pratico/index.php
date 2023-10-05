<?php
session_start();
require('vendor/autoload.php'); //Padrao PSR-4
$app = new RedeSocial\Application();

$app->run();
