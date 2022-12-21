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

Route::get('/', function () {

    $saluto = "Buongiorno";
    $utente = "Gabriele";

    $data = [
        'saluto'=>$saluto,
        'utente'=>$utente
    ];
    return view('home', $data);
});

Route::get('/about-us', function(){
    $saluto = "Benvenuto";
    $utente = "Gabry";
    $posizione = "Ti trovi sulla pagina chi siamo";
    $stampa_paragrafo = true;
    $numeri = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

    return view('about', compact('saluto', 'utente', 'stampa_paragrafo', 'numeri'));
});
