<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temporada extends Model
{
    public function episodios() {

        // Essa temporada tem muitos episodios
        return $this->hasMany(Episodio::class);

    }

    public function serie() {

        // Essa temporada pertence a apenas uma serie (belongsTo)
        return $this->belongsTo(Serie::class);

    }
}
