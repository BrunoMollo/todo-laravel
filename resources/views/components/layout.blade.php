<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Todo Laravel</title>

    <script src="https://unpkg.com/htmx.org@1.9.10"
        integrity="sha384-D1Kt99CQMDuVetoL1lrYwg5t+9QdHe7NLX/SoJYkXDFfX37iInKRy5xLSi8nO7UC"
        crossorigin="anonymous"></script>
</head>

<body class="antialiased" hx-boost="true">
    <nav>
        <a href="/todo">List Todo</a>
        <a href="/todo/create">Create Todo</a>

        <a href="/category">List Category</a>
        <a href="/category/create">Create Category</a>
    </nav>
    <main>

        {{ $slot }}
    </main>
    <script>
        htmx.config.globalViewTransitions = true
        htmx.config.defaultSettleDelay = 0
    </script>
    <style>
        ::view-transition-old(root),
        ::view-transition-new(root) {
            animation-duration: 0.15s;
        }
    </style>
</body>

</html>
