<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title TESTING SECOUD LAYOUT' }}</title>
          @vite('resources/css/app.css')
    </head>
<body>
    <nav class="">
        <h1 class="">My book reviews</h1>
        <a @class(['acitive' => request()->is('/')]) href="/">Book List</a>
        <a @class(['acitive' => request()->is('/create')]) href="create">Add a Book</a>
    </nav>
    <section class="">
        {{ $slot }}
    </section>
</body>
</html>
