<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

// $app = new \Slim\App; // USE IN PRODUCTION 

// !!! REMOVE IN PRODUCTION
$app = new \Slim\App([
  "settings" => [
    "displayErrorDetails" => true
  ]
]);
// \ !!! REMOVE IN PRODUCTION

require_once('routes/index.php');

$app->run();