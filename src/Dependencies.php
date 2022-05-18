<?php declare(strict_types=1);

use Auryn\Injector;
use Framework\MustacheRenderer;
use Framework\Renderer;
use Http\HttpRequest;
use Http\HttpResponse;
use Http\Request;
use Http\Response;

$injector = new Injector;

$injector->alias(Request::class, HttpRequest::class);
$injector->share(HttpRequest::class);

$injector->define(HttpRequest::class, [
    ':get' => $_GET,
    ':post' => $_POST,
    ':cookies' => $_COOKIE,
    ':files' => $_FILES,
    ':server' => $_SERVER,
]);

$injector->alias(Response::class, HttpResponse::class);
$injector->share(HttpResponse::class);

$injector->alias(Renderer::class, MustacheRenderer::class);
$injector->define('Mustache_Engine', [
    ':options' => [
        'loader' => new Mustache_Loader_FilesystemLoader(dirname(__DIR__) . '/templates', [
            'extension' => '.html',
        ]),
    ],
]);


return $injector;