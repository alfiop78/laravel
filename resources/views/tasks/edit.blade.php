<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Task Project - create</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>

<body class="antialiased">
  <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

    <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
      <div class="grid grid-cols-1 md:grid-cols-2">
        <div class="p-6">
          <p>Creazione di un nuovo Task</p>
        </div>
        <div>
          <a href="{{ route('tasks.index') }}"></a>
        </div>
        <div>
          <form method="post" action="{{ route('tasks.update', $task->id) }}">
            @csrf
            @method('PATCH')
            <div>
              <label for="taskTitle">Titolo</label>
              <input type="text" name="taskTitle" value="{{ $task->title }}" />
            </div>
            <div>
              <label for="taskDescription">Descrizione</label>
              <input type="text" name="taskDescription" value="{{ $task->description }}" />
            </div>
            <button type="submit">Archivia</button>
          </form>
        </div>
      </div>
    </div>

  </div>
</body>

</html>
