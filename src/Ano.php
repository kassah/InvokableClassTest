<?php

namespace App;

class Ano
{
    public Inv $inv;

    function test(): void {
        $param1 = "blah";
        $param2 = "blah";
        ($this->inv)($param1, $param2);
    }
}