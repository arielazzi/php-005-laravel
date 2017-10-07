<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

# Criando uma nova rota
Route::get('/', function()
{
	return '<h1>Primeira Lógica com laravel</h1>';
});

# Testando ambiguidade de rotas
Route::get('/', function()
{
	return '<h1>Segunda Rota</h1>';
});

# Testando mais uma rota
Route::get('/outra', function()
{
	return 'teste';
});