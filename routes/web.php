<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::post('/cadastrar-usuario', 'UsuarioController@cadastraUsuario');
Route::get('/listar-usuarios', 'UsuarioController@listaUsuarios');
Route::get('/form-cadastro', 'UsuarioController@formCadastro');


Route::get('/', function () {
    return view('help');
});

Route::get('/cadastro', function () {
    return view('usuarios.cadastro');
});

Route::get('/guia', function () {
    return view('guia');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
