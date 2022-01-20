<?php

namespace App\Services;
use App\Serie;
use Illuminate\Support\Facades\DB;

class CriadorDeSerie 
{
    public function criarSerie($nomeSerie, $qtdTemporadas, $epPorTemporada) : Serie 
    {
        DB::beginTransaction();
        $serie = Serie::create(['nome'  => $nomeSerie]);
        $this->criaTemporadas($qtdTemporadas, $epPorTemporada, $serie);
        DB::commit();

        return $serie;
    }

    private function criaTemporadas($qtdTemporadas, $epPorTemporada, $serie)
    {
        for ($i = 1; $i <= $qtdTemporadas; $i++) {
            $temporada = $serie->temporadas()->create(['numero' => $i]);
            $this->criaEpisodios($epPorTemporada, $temporada);
        }
    }

    private function criaEpisodios($epPorTemporada, $temporada) 
    {
        for ($j = 1; $j <= $epPorTemporada; $j++) {
            $temporada->episodios()->create(['numero' => $j]);
        }
    }
}