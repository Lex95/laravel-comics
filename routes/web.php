<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// tecnicamente è la sezione comics
Route::get('/', function () {

    $datiComics = config("comics");

    $datiView = [
        "comicsList" => $datiComics
    ];

    return view('homepage', $datiView);
})->name("pagina-home");

Route::get("/{index}", function ($index) {

    $datiComics = config("comics");

    if (!is_numeric($index) || $index < 0 || $index > count($datiComics) - 1) {
        abort(404, "Prodotto inesistente");
    }

    $fumettoScelto = $datiComics[intval($index)];
    return view("singleComic", [
        "fumetto" => $fumettoScelto
    ]);
})->name("pagina-singolo-fumetto");