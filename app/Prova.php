<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prova extends Model
{
    protected $fillable = ['descricao', 'data_inicio', 'data_final', 'professor_id'];

    public function questoes()
    {
        return $this->hasMany('App\Questao');
    }

    public function respostas()
    {
        return $this->hasMany('App\Resposta');
    }

    public function resultados()
    {
        return $this->hasMany('App\Resultado');
    }
}
