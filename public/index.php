<?php

use Shape\Action\LoginActionFactory;

use Zend\Diactoros\ServerRequestFactory;

chdir(dirname(__DIR__));
require 'vendor/autoload.php';

$applicationFactory = new LoginActionFactory();

$application = $applicationFactory();

$request = ServerRequestFactory::fromGlobals();

$application($request);
