<?php

namespace App;

class Dependency
{
    public function __invoke(): \DateTime
    {
        return new \DateTime();
    }
}