<?php


namespace App;

use Illuminate\Database\Eloquent\Model;

class Questao extends Model
{
    protected $table = 'questoes';
    protected $fillable = ['prova_id', 'descricao'];


    public function prova()
    {
        return $this->belongsTo('App\Prova');
    }

}
