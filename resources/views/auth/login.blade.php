@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="grid place-items-center h-screen">
        <div class="bg-gray-800 p-5 rounded-lg shadow flex flex-col w-2/4 -mt-56">
            <h1 class="text-white text-2xl pb-4 font-semibold">Prihlásenie</h1>
            <label for="email" class="text-white pb-1">E-mail</label>
            <input id="email" placeholder="jozko@gmail.com" type="email" class="rounded transition-opacity bg-gray-500 bg-opacity-25 p-2 border-none focus:outline-none text-white placeholder:text-gray-400 focus:placeholder:text-gray-300 mb-5 @error('email') border-red-500 focus:border-red-700 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

            <label for="password" class="text-white pb-1">Heslo</label>
            <input id="password" placeholder="**********" type="password" class="rounded transition-opacity bg-gray-500 bg-opacity-25 p-2 border-none focus:outline-none text-white placeholder:text-gray-400 focus:placeholder:text-gray-300 mb-5 @error('password') border-red-500 focus:border-red-700 @enderror" name="password" required autocomplete="new-password">

            <button type="submit" class="inline-flex items-center justify-center w-36 mx-auto mt-3 px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-sky-600 hover:bg-sky-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                </svg>
                Prihlásiť
            </button>
        </div>
    </div>
</form>
@endsection
