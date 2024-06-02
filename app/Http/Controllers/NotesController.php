<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class NotesController extends Controller
{
    public function index(){
    $notesQuery = Note::latest()->filter(request(['search', 'category']));

    return view('notes.index', [
        'notes' => $notesQuery->paginate(20)
    ]);
}

    public function create (){
        return view ('notes.create');
    }

    public function show(Note $note){
        return view ('notes.show', [
            'note' => $note
            ]);
        }

        public function store(Request $request)
        {

            $validatedData = $request->validate([
                'title' => 'required|string|max:255',
                'body' => 'required|string',
                'slug' => 'nullable|string|unique:notes',
                'excerpt' => 'nullable|string', 
            ]);
        
            $note = new Note();

            $note->title = $validatedData['title'];
            $note->body = $validatedData['body'];
            $note->excerpt = $validatedData['excerpt'];
            $note->slug = $validatedData['slug'];
            $note->save();

            return redirect('/')->with('success', 'Note has been saved successfully!');
        }
        
        
        public function edit(Note $note)
        {
            return view('notes.edit', ['note' => $note]);
        }
    
        public function update(Note $note)
        {
            $attributes = request()->validate([
                'title' => 'required',
                'slug' => ['required', Rule::unique('notes', 'slug')->ignore($note->id)],
                'excerpt' => 'required',
                'body' => 'required',
            ]);
    
            $note->update($attributes);

            return redirect('/')->with('success', 'Post Updated!');
        }
    
        public function destroy(Note $note)
        {
            $note->delete();
    
            return redirect('/')->with('success', 'Note Deleted!');
        }

        protected function validateNote(Note $note = null)
{
        return request()->validate([
        'title' => 'required|string|max:255',
        'body' => 'required|string',
        'slug' => ['required', 'string', Rule::unique('notes')->ignore($note)],
        'excerpt' => 'nullable|string',
    ]);
}
}
