<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Config\Conexao;

require __DIR__ . '/vendor/autoload.php';

$app = AppFactory::create();

$conn = new Conexao();

$app->get('/', function (Request $request, Response $response, array $args) {
    $response->getBody()->write("Hello World with bd");
    return $response;
});

$app->run();