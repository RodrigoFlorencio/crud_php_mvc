<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');

$router->get('/add-vendedor', 'HomeController@adicionar');
$router->post('/add-vendedor', 'HomeController@addAction');

$router->get('/vendedor-detalhes/{idVendedor}', 'HomeController@vendedorDetalhes');

$router->get('/deletar-funcionario/{idFuncionario}', 'HomeController@deletarFuncionario');