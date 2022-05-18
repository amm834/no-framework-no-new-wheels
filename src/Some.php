<?php

namespace Framework;


use Exception;

class Some
{
    public function __invoke()
    {
        throw new \Exception("hey");
    }
}
