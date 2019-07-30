<?php

namespace App\Http\Controllers;

use App\filme;
use App\genero;
Use DB;
use Illuminate\Http\Request;

class MoviesController extends Controller
{

    public function showAllMovies()
    {
        $movies = DB::select("SELECT filmes.id,filmes.titulo, generos.titulo_genero AS genero,filmes.ano,filmes.data_lancamento,filmes.duracao,filmes.direcao,filmes.elenco,filmes.sinopse FROM filmes INNER JOIN generos  ON filmes.id_genero = generos.id");	
	return response()->json($movies);
    }

    public function showOneMovie($id)
    {
       
	/** Fetch movie by ID **/
        
	$movie = DB::select("SELECT filmes.id,filmes.titulo, generos.titulo_genero AS genero,filmes.ano,filmes.data_lancamento,filmes.duracao,filmes.direcao,filmes.elenco,filmes.sinopse FROM filmes INNER JOIN generos  ON filmes.id_genero = generos.id AND filmes.id = $id");	
	return response()->json($movie);
    }

   
}

