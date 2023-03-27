<?php

use App\Orcamento\Repository\OrcamentoRepository;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Config\Conexao;

require __DIR__ . '/vendor/autoload.php';

$app = AppFactory::create();

 

$app->get('/', function (Request $request, Response $response, array $args) {
    $conexao = new Conexao();

    $orcamento = new OrcamentoRepository($conexao->exec());
    $orcamento->listaDados();

    $response->getBody()->write("hello with bd");
    return $response;
});

$app->run();