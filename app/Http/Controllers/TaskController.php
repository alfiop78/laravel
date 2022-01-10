<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// aggiungo la classe Task del Model
use App\Models\Task;

class TaskController extends Controller
{
  public function index()
  {
    // recupero tutti i record dalla tabella tasks
    $tasks = Task::all();
    return view('tasks.index')->with('tasks', $tasks);
  }

  public function create()
  {
    return view('tasks.create');
  }

  public function store()
  {
    // utilizzo un helper di Laravel per recuperare i dati di un form (attributo "name" delle input)
    // dd(request()->all());
    // Creo una nuova istanza del Model Task. Il Model Task rappresenta una tabella o un record
    $task = new Task();
    // salvo il record all'interno del DB
    $task->title = request()->taskTitle;
    $task->description = request()->taskDescription;
    $task->save();

    // redirect verso la route index, dove, una volta creato il nuovo task, lo visualizzo nella pagina "tutti i task"
    return redirect()->route('tasks.index');
  }

  public function edit($id)
  {
    // dd($id);
    $task = Task::findOrFail($id); // cerca nella tabella il record con l'id specificato come argomento
    // view edit mostrerà il form con i valori da modificare
    return view('tasks.edit')->with('task', $task);
  }

  public function update($id)
  {
    // in questo caso ill codice è uguale a quello del metodo store, l'unica differenze è che non è necessario creare una nuova istanza di Task
    $task = Task::findOrFail($id); // cerca il record da modificare

    $task->title = request()->taskTitle;
    $task->description = request()->taskDescription;
    $task->save();

    // redirect verso la route index, dove, una volta creato il nuovo task, lo visualizzo nella pagina "tutti i task"
    return redirect()->route('tasks.index');
  }

  public function delete($id)
  {
    $task = Task::findOrFail($id);
    $task->delete();
    return redirect()->route('tasks.index');
  }
}
