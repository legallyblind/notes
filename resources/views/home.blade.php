@extends('layouts.app')

@section('content')
    <div>
        <div class="flex justify-center">
            <form action="{{ route('note.store') }}" method="post">
                @csrf
                <div class="flex flex-col rounded-lg shadow-lg p-5 bg-graph">
                    <label for="title" class="text-white">Názov poznámky</label>
                    <input name="title" type="text" class="rounded transition-opacity bg-gray-500 bg-opacity-25 p-2 border border-gray-300 focus:border-white focus:outline-none text-white placeholder:text-gray-300 focus:placeholder:text-white mb-5 @error('title') border-red-500 focus:border-red-700 @enderror" maxlength="32" placeholder="Dôležitá poznámka" autofocus value="{{old('title')}}">

                    <label for="content" class="text-white">Obsah poznámky</label>
                    <textarea name="content" maxlength="2048" class="rounded transition duration-200 transition-opacity bg-gray-500 bg-opacity-25 focus:bg-opacity-50 p-2 border border-gray-300 focus:border-white focus:outline-none text-white placeholder:text-gray-300 focus:placeholder:text-white h-32 w-72 @error('content') border-red-500 focus:border-red-700 @enderror" placeholder="Nezabudni kúpiť mlieko">{{old('content')}}</textarea>

                    <button type="submit" class="inline-flex items-center justify-center w-32 ml-auto mt-3 px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-sky-600 hover:bg-sky-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        Uložiť
                    </button>
                </div>
            </form>
        </div>
        <div class="w-3/4 xl:w-5/6 mx-auto">
            <div class="grid lg:grid-cols-3 gap-4 my-5">
                @foreach($notes as $note)
                    <div class="bg-gray-800 p-3 xl:p-5 rounded shadow hover:shadow-xl">
                        <h1 class="text-white text-xl xl:text-2xl font-medium hover:underline"><a href="{{ route('note.show', $note->slug) }}">{{ $note->title }}</a></h1>
                        <p class="text-gray-300 font-light px-2 pt-2 overflow-clip">{{ Str::limit($note->content, 120) }}</p>
                    </div>
                @endforeach
            </div>

            @if(!empty($notes))
                {{ $notes->links() }}
            @endif
        </div>
    </div>
@endsection
