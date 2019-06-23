<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alternativa extends Model
{
    protected $fillable = ['questao_id', 'descricao', 'correta'];

    public function respostas() {
        return $this->hasMany('App\Resposta');
    }
}
