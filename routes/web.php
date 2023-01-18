<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmsController;
use App\Http\Controllers\PlanetsController;




Route::get('/films', [FilmsController::class, 'getAllDataFromDB']);
Route::get('/films/{id}', [FilmsController::class, 'getPlanetsByFilmId']);

Route::get('/planets', [PlanetsController::class, 'getAllDataFromDB']);
Route::get('/planets/{id}', [PlanetsController::class, 'getFilmsByPlanetId']);