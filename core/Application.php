<?php

namespace core;

use Psr\Container\ContainerInterface;
use core\contracts\RunnableInterface;

class Application implements RunnableInterface, ContainerInterface
{
    public function run()
    {
        echo "Run Application";
    }

    public function get(string $id)
    {
        
    }

    public function has(string $id): bool
    {
        
    }
}
