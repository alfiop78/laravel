<?php

use Illuminate\Support\Facades\Route;

// aggiungo il namespace relativo allll TaskController
use App\Http\Controllers\TaskController;

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
  return view('welcome');
});

// Visualizzare tutti i task (GET)
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
// Visualizzare il form per la creazione del task (GET)

// Archiviare il task (POST)

// Visualizzare uno specifico Task

// Aggiornare il valore del task (PATCH)

// Eliminare uno specifico task (DELETE)
