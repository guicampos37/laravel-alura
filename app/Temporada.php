<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use App\Episodio;


class Temporada extends Model
{
    public $timestamps = false;
    protected $fillable = ['numero'];

    public function episodios() {

        // Essa temporada tem muitos episodios
        return $this->hasMany(Episodio::class);

    }

    public function serie() {

        // Essa temporada pertence a apenas uma serie (belongsTo)
        return $this->belongsTo(Serie::class);

    }

    public function getEpisodiosAssistidos() : Collection
    {
        return $this->episodios->filter(function(Episodio $episodio) {
            return $episodio->assistido;
        });
    }
}
