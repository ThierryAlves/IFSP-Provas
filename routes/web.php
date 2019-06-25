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
        Route::get('/provas/{id}/resultado/', 'ResultadoController@getResultado');
        Route::get('graficos/visualizar/{id}', 'ResultadoCOntroller@find');

        Route::get('/cadastrar-provas', function () {
            return view('professor.cadastrar-provas');
        });

        Route::get('/cadastrar-aluno', function () {
            return view('professor.cadastrar-alunos');
        });
        Route::post('aluno/salvar', 'AlunoController@inserir');

        //Questões
        Route::group(['prefix' => 'questao'], function (){
            Route::get('/adicionar/{id}', 'ProvaController@find');
            Route::get('/visualizar/{id}', 'QuestaoController@index');
            Route::post('/salvar/{id}', 'QuestaoController@inserir');
        });

        //Alternativas
        Route::group(['prefix' => 'alternativa'], function (){
            Route::get('/adicionar/{id}', 'QuestaoController@find');
            Route::get('/visualizar/{id}', 'AlternativaController@index');
            Route::post('/salvar/{id}', 'AlternativaController@inserir');
        });

        Route::post('/provas/inserir', 'ProvaController@inserir');
    });
});



//Rotas do aluno
Route::group(['prefix' => 'aluno'], function(){
    Route::get('/', function () {
        return view('controle-acesso.login-aluno');
    })->name('acesso-aluno');

    Route::post('/autenticar', 'AlunoController@login');

    Route::group(['prefix' => 'provas', 'middleware' => 'autenticarAluno'], function() {
        Route::get('/', 'ProvaController@getprovasAluno')->name('provas');
        Route::get('/responder/{id}', 'ProvaController@getProvaResponder');
        Route::post('/salvar-resposta/', 'RespostaController@salvarResposta');
    });
});
