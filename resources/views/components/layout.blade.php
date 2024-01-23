<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Job Board</title>

    @vite(['resources/css/app.css','resources/js/app.js'])

</head>
<body class="mx-auto mt-10 max-w-2xl bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 text-slate-700">
    {{ $slot }}
</body>
</html>
