<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNoteRequest;
use App\Http\Resources\NoteResource;
use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class NoteController extends Controller
{
    /**
     * Homepage indexing; display user created notes for authenticated users.
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index() {
      $notes = [];
      if(auth()->check()) {
        $user = Auth::user();
        $notes = $user->notes()
                      ->orderBy('updated_at', 'DESC')
                      ->paginate(9);
      }

      return view('home', ['notes' => $notes]);
    }

    /**
     * Display note resource based on slug.
     * @param $slug
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($slug) {
      $note = Note::where('slug', $slug)->firstOrFail();

      return view('note', $note);
    }

    /**
     * Assign note UUID and store in database.
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|void
     */
    public function store(StoreNoteRequest $request) {
      $data = $request->validated()->except('_token');
      $data['slug'] = Str::uuid();

      $note = Note::create($data);

      // if user is authenticated, associate note with user
      if(auth()->check()) {
        $note->user()->associate(Auth::id());
        $note->save();
      }

      if(!$note) { abort(500); }
      return redirect()->route('note.show', $note->slug);
    }
}
