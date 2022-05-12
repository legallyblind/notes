@extends('layouts.app')

@section('content')
    <div>
        <div class="flex flex-col justify-center">
            <div class="flex flex-col rounded-t-lg w-2/5 mx-auto shadow-lg p-5 bg-graph">
                <h1 class="text-white text-2xl text-center pb-4">{{ $title }}</h1>

                <textarea name="content" maxlength="2048" class="rounded transition duration-200 transition-opacity bg-gray-200 bg-opacity-10 p-2 border-none text-white placeholder:text-gray-300 focus:placeholder:text-white h-32 w-100" placeholder="Nezabudni kúpiť mlieko" disabled>{{ $content }}</textarea>

                @if(auth()->check() && Auth::id() === $user_id)
                    <button type="button" class="inline-flex items-center justify-center w-32 ml-auto mt-3 px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                        <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        Zmazať
                    </button>
                @endif
            </div>
            <div class="bg-gray-800 w-2/5 mx-auto rounded-b-lg p-3">
                <h2 class="text-white font-semibold">Odkaz na zdielanie: <a id="noteUrl" href="{{ $url }}" onclick="copyUrl()" class="font-mono text-xs hover:cursor-pointer hover:underline">{{ $url }}</a></h2>
                <span class="text-gray-400 text-xs">(klikom skopírujte)</span>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function copyUrl() {
            var url = document.getElementById("noteUrl");
            navigator.clipboard.writeText(copyText.href);
        }
    </script>
@endsection
