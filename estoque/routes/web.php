<?php

Route::get('/', function()
{
    return '<h1>Primeira lógica com Laravel</h1>';
});

# Testando ambiguidade 
Route::get('/', function()
{
    return '<h1>Segunda lógica com Laravel</h1>';
});

Route::get('/outra', function()
{
    return '<h1>Outra lógica com Laravel</h1>';
});
