<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resposta extends Model
{
    protected $fillable = ['aluno_id', 'prova_id', 'alternativa_id', 'correta'];

    public function questao() {
        return $this->belongsTo('App/Questao');
    }

    public function alternativas() {
        return $this->hasMany('App/Alternativa');
    }
}
