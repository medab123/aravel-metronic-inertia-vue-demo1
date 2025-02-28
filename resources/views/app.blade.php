<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    @vite(['resources/ts/app.ts'])
    @routes
    @inertiaHead
</head>
<body class="font-sans antialiased">
@inertia
</body>
</html>
