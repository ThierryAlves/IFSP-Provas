<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resultado extends Model
{
    protected $fillable = ['aluno_id', 'prova_id', 'questoes_corretas'];


    public function aluno() {
        return $this->belongsTo('App\Aluno');
    }

    public function prova() {
        return $this->belongsTo('App\Prova');
    }
}
