<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Notes') }}</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" class="bg-gray-300">
        <div class="h-16 bg-blue-500">
            <div class="container flex justify-center items-center font-raleway">
                <a href="" class="text-white text-xl">Prihlásenie</a>
                <a href="" class="text-white text-xl mx-5">Registrácia</a>
            </div>
        </div>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
