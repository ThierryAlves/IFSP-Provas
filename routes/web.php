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

//Rota inicial
Route::get('/', function (){
   return view('welcome');
});

//Rotas do professor
Route::group(['prefix' => 'professor'], function () {

    Route::get('/', function () {
        return view('controle-acesso.login');
    })->name('login');

    Route::get('/cadastrar', function () {
        return view('controle-acesso.cadastrar');
    })->name('cadastrar');

    Route::post('/autenticar', 'ProfessorController@login')->name('autenticar');
    Route::post('/inserir', 'ProfessorController@inserir');

    //Rotas autenticadas do professor
    Route::group(['middleware' => 'autenticarProfessor'], function() {

        Route::get('/provas', 'ProvaController@index')->name('provas');
        Route::get('/cadastrar-provas', function () {
            return view('professor.cadastrar-provas');
        });

        //Questões
        Route::group(['prefix' => 'questao'], function (){
            Route::get('/adicionar/{id}', 'ProvaController@find');
            Route::get('/visualizar/{id}', 'QuestaoController@index');
            Route::post('/salvar/{id}', 'QuestaoController@inserir');
        });

        Route::post('/provas/inserir', 'ProvaController@inserir');
    });
});

