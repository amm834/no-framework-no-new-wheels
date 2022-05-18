<?php

namespace Framework;

interface Renderer
{
    public function render(string $template, array $data = []):string;
}