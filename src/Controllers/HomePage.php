<?php

namespace Framework\Controllers;

use Http\Response;

class HomePage
{
    public function __construct(
        private Response $response
    )
    {
    }

    public function show()
    {
        $this->response->setContent("Hello World");
    }
}