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
    <div id="app" class="bg-gray-900 min-h-screen">
        <header>
            <div class="h-16 bg-gradient-to-tr from-sky-500 to-sky-600 shadow-lg">
                <div class="container flex justify-center items-center font-raleway font-semibold pt-4">
                    <a href="/" class="absolute left-2 md:left-10 lg:left-10">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="white" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                        </svg>
                    </a>
                    <a href="{{ route('login') }}" class="text-white text-xl">Prihlásenie</a>
                    <a href="{{ route('register') }}" class="text-white text-xl mx-5">Registrácia</a>
                </div>
            </div>
        </header>

        <main class="py-4">
            @yield('content')
        </main>

        <footer>
            <div class="h-12 w-full absolute bottom-0 flex justify-center items-center bg-gray-800 bg-opacity-25">
                <p class="text-gray-300">© <a href="https://github.com/legallyblind/" target="_blank" class="text-sky-300">legallyblind</a></p>
            </div>
        </footer>
    </div>
</body>
</html>
