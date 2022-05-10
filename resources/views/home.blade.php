@extends('layouts.app')

@section('content')
<div class="container">
    <div>
        <div class="flex justify-center">
            <div class="flex flex-col rounded-lg shadow-lg p-5 bg-graph">
{{--                <form action="{{ route('note.store') }}">--}}
                    <label for="title" class="text-white">Názov poznámky</label>
                    <input name="title" type="text" class="rounded required:border-red-500 transition-opacity bg-gray-500 bg-opacity-25 p-2 border border-gray-300 focus:border-white focus:outline-none text-white placeholder:text-gray-300 focus:placeholder:text-white mb-5" maxlength="32" placeholder="Dôležitá poznámka" autofocus>

                    <label for="content" class="text-white">Obsah poznámky</label>
                    <textarea name="content" maxlength="2048" class="rounded transition duration-200 transition-opacity bg-gray-500 bg-opacity-25 focus:bg-opacity-50 p-2 border border-gray-300 focus:border-white focus:outline-none text-white placeholder:text-gray-300 focus:placeholder:text-white h-32 w-72" placeholder="Nezabudni kúpiť mlieko"></textarea>

                    <button type="button" class="inline-flex items-center justify-center w-32 ml-auto mt-3 px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-sky-600 hover:bg-sky-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        Uložiť
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
