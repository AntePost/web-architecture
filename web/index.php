<?php

use Framework\Registry;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpFoundation\Request;
use Framework\Command\RegisterConfigCommand;
use Framework\Command\RegisterRoutesCommand;

require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR .
    'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

$request = Request::createFromGlobals();
$containerBuilder = new ContainerBuilder();
$registerConfigCommand = new RegisterConfigCommand($containerBuilder);
$registerRoutesCommand = new RegisterRoutesCommand($containerBuilder);

Registry::addContainer($containerBuilder);

$response = (new Kernel($containerBuilder, $registerConfigCommand, $registerRoutesCommand))->handle($request);
$response->send();
