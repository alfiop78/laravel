<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Task Project</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body class="antialiased">
      <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

            <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="p-6">
                      <p>Visualizzazione di tutti i task</p>
                    </div>
                    <div>
                      @if ($tasks->count() > 0)
                        @foreach($tasks as $task)
                          <p><span>ID : </span><span>{{$task->id}}</span></p>
                          <p><span>Title : </span><span>{{$task->title}}</span></p>
                          <p><span>Description : </span><span>{{$task->description}}</span></p>
                          <p><a href="{{ route('tasks.edit', $task->id) }}" value="Edit">Edit</a></p>
                          <!-- il method delete va inviato con un form apposito -->
                          <p>
                            <form method="post" action="{{ route('tasks.delete', $task->id) }}">
                            @csrf
                            @method('DELETE')
                              <button type="submit">Remove</button>
                            </form>
                          </p>
                        @endforeach
                      @else
                          <p>Nessun task disponibile</p>
                      @endif
                    </div>
                    <div>
                      <a href="{{ route('tasks.create') }}">Nuovo Task</a>
                    </div>
                </div>
            </div>

        </div>
    </body>
</html>
