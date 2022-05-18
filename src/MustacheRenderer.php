<?php

namespace Framework;

use Mustache_Engine;

class MustacheRenderer implements Renderer
{
    public function __construct(
        private Mustache_Engine $engine
    )
    {
    }

    public function render(string $template, array $data = []): string
    {
        return $this->engine->render($template, $data);
    }
}