<?php

namespace Framework\Controllers;

use Framework\Renderer;
use Http\Request;
use Http\Response;

class HomePage
{
    public function __construct(
        private Response $response,
        private Request  $request,
        private Renderer $renderer
    )
    {
    }

    public function show()
    {
        $html = $this->renderer->render('HomePage', [
            'name' => $this->request->getParameter('name', 'Unknown')
        ]);
        $this->response->setContent($html);
    }

}