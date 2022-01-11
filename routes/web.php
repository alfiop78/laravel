<?php

use Illuminate\Support\Facades\Route;

// aggiungo il namespace relativo allll TaskController
use App\Http\Controllers\TaskController;
use App\Http\Controllers\CategoriaController;

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
/* sezione 4 - Applicazione Task */
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

// Completamento del task
Route::get('/tasks/completed/{id}', [TaskController::class, 'completed'])->name('tasks.completed');

// Riattivazione di un task completato
Route::get('/tasks/incomplete/{id}', [TaskController::class, 'incomplete'])->name('tasks.incomplete');
/* end sezione 4*/

/* sezione 5 - Parametri */
// Per fornire un parametro di default occorre aggiungere un ? dopo il parametro e definire un parametro di default nella closure
Route::get('/corsi/{corso?}', function($corso = "default"){
    return "Sei nel corso : ".$corso;
});

// Controllo sui parametri passati con le RegEx
Route::get('/utenti/{id}/nomi/{username}', function($user_id, $user_name) {
    return "ID : " .$user_id . " Nome : " .$user_name;
    // nella ->where si possono definire i vincoli per i parametri
    // id sono consentiti solo numeri, username sono consentiti caratteri alfanumerici
})->where(['id' => '[0-9]', 'username' => '[A-Za-z]+'])->name('utenti.nomi.show');
// La route /parametri va a testare la Route qui sopra impostando 3 link per passare parametri alla Route
Route::get('/parametri', function() {return view('sezione5.index');});

// Route resources
// esssempio di utilizzo di una Route resource. Le Route e i Metodi del Controller verranno automaticamente creati dal comando : 
// php artisan make:controller CategoriaController --resource
Route::resource('categorie', 'CategoriaController');
// con il comando : php artisan route:list si potranno vedere tutte le route create automaticamente (per CategoriaController)


/* sezione 5 - Parametri */
