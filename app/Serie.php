<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//Tabela series

class Serie extends Model 
{ 
    public $timestamps = false;
    protected $fillable = ['nome'];

    public function temporadas() {
        // Informamos que essa Model Serie contém várias temporadas (hasMany)
        return $this->hasMany(Temporada::class);

    }
}