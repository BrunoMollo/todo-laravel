<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Todo Laravel</title>

</head>

<body class="antialiased">
    <nav>
        <a href="/todo">List</a>
        <a href="/todo/create">Create</a>
    </nav>
    <main>

        {{ $slot }}
    </main>
</body>

</html>
