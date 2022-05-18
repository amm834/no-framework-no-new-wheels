<?php declare(strict_types=1);

use Http\HttpResponse;
use Http\Response;
use Http\HttpRequest;
use Http\Request;
use Auryn\Injector;

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

return $injector;