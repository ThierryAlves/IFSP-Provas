<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resposta extends Model
{
    protected $fillable = ['aluno_id', 'alternativa_id', 'correta'];
}
