<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Passaggio di parametri multipli</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body class="antialiased">
      <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

            <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    
                    <div>
                      <p><a href="{{ route('utenti.nomi.show', [1, 'Alfio']) }}">Es.: 1 - Passaggio parametri come array (mantenedo l'ordine)</a></p>
                      <p><a href="{{ route('utenti.nomi.show', ['username' => 'Alfio', 'id' => 1 ]) }}">Es.: 2 - Passaggio di parametri come array associato (anche senza mantenere l'ordine da sinistra->destra dei parametri)</a></p>
                      <p><a href="{{ route('utenti.nomi.show', ['username' => 'Alfio', 'id' => 1, 'options' => 'queryString']) }}">Es.: 3 - Passaggio parametri con valori opzionali</a></p>
                    </div>
                </div>
            </div>

        </div>
    </body>
</html>
