<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Larazillow</title>
        @vite('resources/js/app.js')
        @inertiaHead
    </head>
    <body class="bg-white text-gray-900 dark:bg-gray-900 dark:text-gray-200">
        @inertia
    </body>
</html>
