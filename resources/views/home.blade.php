@extends('layouts.app')

@section('content')
<div class="container">
    <div class="min-h-screen">
        <div class="flex justify-center">
            <div class="flex flex-col bg-sky-500 rounded shadow-lg p-5">
{{--                <form action="{{ route('note.store') }}">--}}
                    <label for="title" class="text-white">Názov poznámky</label>
                    <input name="title" type="text" class="rounded required:border-red-500 bg-transparent p-2 border border-gray-400 focus:border-gray-200 focus:outline-none text-white mb-5" maxlength="32" placeholder="Dôležitá poznámka">

                    <label for="content">Obsah poznámky</label>
                    <textarea name="content" maxlength="2048" class="rounded bg-transparent p-2 border border-gray-400 focus:border-gray-200 focus:outline-none text-white h-32 w-72" placeholder="Nezabudni kúpiť mlieko"></textarea>

                    <input type="submit" value="Button">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
