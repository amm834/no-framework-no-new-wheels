<?php

namespace Framework\Controllers;

use Http\Request;
use Http\Response;

class HomePage
{
    public function __construct(
        private Response $response,
        private Request  $request
    )
    {
    }

    public function show()
    {
        $content = '<h1>Hello World</h1>';
        $content .= 'Hello ' . $this->request->getParameter('name', 'stranger');
        $this->response->setContent($content);
    }
}