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
}
