<?php
use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');

$router->get('/add-vendedor', 'HomeController@adicionar');
$router->post('/add-vendedor', 'HomeController@addAction');

$router->get('/vendedor-detalhes/{id}', 'HomeController@vendedorDetalhes');

$router->get('/add-vendas', 'HomeController@addVendas');
$router->post('/add-vendas', 'HomeController@addActionVendas');

$router->get('/deletar-funcionario/{id}', 'HomeController@deletarFuncionario');