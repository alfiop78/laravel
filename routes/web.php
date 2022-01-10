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
Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');

// Archiviare il task (POST)
Route::post('/tasks/store', [TaskController::class, 'store'])->name('tasks.store');

// Modificare uno specifico Task
Route::get('/tasks/{id}/edit', [TaskController::class, 'edit'])->name('tasks.edit');

// Aggiornare il valore del task (PATCH)
Route::patch('/tasks/update/{id}', [TaskController::class, 'update'])->name('tasks.update');

// Eliminare uno specifico task (DELETE)
Route::delete('/tasks/{id}', [TaskController::class, 'delete'])->name('tasks.delete');
