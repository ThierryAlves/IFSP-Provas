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

Route::get('/', function () {
    return view('controle-acesso.login');
})->name('login');

Route::get('/cadastrar', function () {
    return view('controle-acesso.cadastrar');
})->name('cadastrar');

Route::post('/autenticar', 'ProfessorController@login')->name('autenticar');
Route::post('/cadastrar', 'ProfessorController@inserir')->name('cadastrar');
