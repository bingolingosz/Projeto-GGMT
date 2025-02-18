<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProjetosController;

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
    return view('inicio');
});

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/conecte', function () {
    return view('conecte');
});

Route::get('/equipe', function () {
    return view('equipe');
});

Route::get('/perfil', function () {
    return view('perfil');
});

Route::get('/registro', function () {
    return view('registro');
});

Route::get('/sitefeito', function () {
    return view('sitefeito');
});

Route::get('/sitespublicados', function () {
    return view('sitespublicados');
});

Route::get('/sobrenos', function () {
    return view('sobrenos');
});

Route::get('/suporte', function () {
    return view('suporte');
});

Route::post('/cadastro', [ProjetosController::class,"cadastroUsuario"]);

Route::post('/checa', [ProjetosController::class,"checaUsuario"]);

// Sites do matheus

Route::get('/a-short-hike-download', function () {
    return view('a-short-hike-download');
});

Route::get('/a-short-hike', function () {
    return view('a-short-hike');
});

Route::get('/celeste.downloads', function () {
    return view('celeste.downloads');
});

Route::get('/celeste', function () {
    return view('celeste');
});

Route::get('/eastshade', function () {
    return view('eastshade');
});

Route::get('/eatshade-download', function () {
    return view('eatshade-download');
});

Route::get('/fez.download', function () {
    return view('fez.download');
});

Route::get('/fez', function () {
    return view('fez');
});

Route::get('/indie', function () {
    return view('indie');
});

Route::get('/jogo-da-cobrinha', function () {
    return view('jogo-da-cobrinha');
});

Route::get('/night-in-the-woods-download', function () {
    return view('night-in-the-woods-download');
});

Route::get('/night-in-the-woods', function () {
    return view('night-in-the-woods');
});

Route::get('/pedestrian_downloads', function () {
    return view('pedestrian_downloads');
});

Route::get('/pedestrian', function () {
    return view('pedestrian');
});
