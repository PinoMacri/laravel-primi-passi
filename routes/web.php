<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    $school = "Boolean";
    $stato = "Allegro";
    $meteo = "Sereno";
    $personaggi = ["pippo", "pluto", "paperino"];
    return view('index', compact('school', 'stato', 'meteo', 'personaggi'));
})->name("index");






Route::get('/{index}', function ($index) {
    $personaggi = ["pippo", "pluto", "paperino"];
    $singolo_personaggio = $personaggi[$index];
    return view('character', compact("singolo_personaggio"));
})->name("character");