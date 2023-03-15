<?php

namespace App;

use \App\Dependency;

class Service
{
    public function __construct(Dependency $dependency)
    {
        $this->dependency = $dependency;
    }

    public function work(): string
    {
        $result = ($this->dependency)(); // Here's the issue!
        $result->format
        return $result->format('U'); // format() is shown as unknown method.
    }
}