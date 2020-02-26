<?php

namespace framework\Command;

class RegisterRoutesCommand
{
    private $containerBuilder;

    public function __construct($containerBuilder)
    {
        $this->containerBuilder = $containerBuilder;
    }

    public function execute()
    {
        $this->routeCollection = require __DIR__ . DIRECTORY_SEPARATOR . DIRECTORY_SEPARATOR . 
        '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'routing.php';
        $this->containerBuilder->set('route_collection', $this->routeCollection);
        return $this->routeCollection;
    }
}