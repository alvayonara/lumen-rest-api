<?php

$router->post('/produk', 'ProdukController@create');
$router->get('/produk', 'ProdukController@index');
$router->get('/produk/{id}', 'ProdukController@show');
$router->put('/produk/{id}', 'ProdukController@update');
$router->delete('/produk/{id}', 'ProdukController@destroy');

$router->post('/register', 'UserController@register');
$router->post('/login', 'UserController@login');
