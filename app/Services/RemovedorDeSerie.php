<?php 

namespace App\Services;
use App\Serie;
use Illuminate\Support\Facades\DB;

class RemovedorDeSerie
{
    public function removerSerie($serieId) : string 
    {
        $nomeSerie = '';
        // Definimos o nomeSerie como vazio fora da function e 
        // que dentro dela essa variável alteraria o valor

        DB::transaction(function() use($serieId, &$nomeSerie) {
            $serie = Serie::find($serieId);
            $nomeSerie = $serie->nome;

            $this->removerTemporadas($serie);
            $serie->delete();
        });

        return $nomeSerie;
    }

    private function removerTemporadas($serie)
    {
        $serie->temporadas->each(function ($temporada) 
        {
            $this->removerEpisodios($temporada);
            $temporada->delete();
        });
    }

    private function removerEpisodios($temporada)
    {
        $temporada->episodios->each(function ($episodio) 
        {
            $episodio->delete();
        });
    }

}