<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prova extends Model
{
    protected $fillable = ['descricao', 'data_inicio', 'data_final', 'professor_id'];
}
