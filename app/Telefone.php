<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    protected $fillable = ['titulo', 'telefone'];

    public function cliente()
    {
        // modo de fazer relação entre a tabela telefone e cliente
        return $this->belongsTo('App\Cliente');
    }
}
