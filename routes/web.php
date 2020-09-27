<?php

use Illuminate\Support\Facades\Route;


//inicio da aplicação mostra view login
Route::get('/', 'usuariosController@index')->name('inicio');

//Action de formulario login
Route::post('/logar_usuario', 'usuariosController@logar_usuario');

//apresenta view registro
Route::get('/resgistrar_usuarios', 'usuariosController@show_registro')->name('registar');

//Action de formulario cadastrar usuario
Route::post('/cadastrar_usuario', 'usuariosController@cadastrar_usuario');

//Apresenta a view de recuperação de senha
Route::get('/recuperar_senha', 'usuariosController@redefinir_senha')->name('redefinir');

//Action de recuperação de Senha
Route::post('/recuperar_senha', 'usuariosController@recuperar_senha');



