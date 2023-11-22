<?php

namespace App\Http\Controllers;

use App\Models\Note;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;

class NoteController extends Controller
{
    public function getAllNotes(Request $request)
    {
        $notes = Note::where('user_id', $request->user_id)->get();
        return response()->json(['notes' => $notes]);
    }

    public function getNote(Request $request, $id)
    {
        $note = Note::where('user_id', $request->user_id,)->where('id', $id)->first();
        if (!$note) {
            return response()->json(['error' => 'Note not found'], 404);
        }
        return response()->json(['note' => $note]);
    }

    public function createNote(Request $request)
    {
        $note = Note::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'user_id' => $request->user_id,
        ]);

        return response()->json(['note' => $note]);
    }

    public function updateNote(Request $request, $id)
    {
        $note = Note::where('user_id', $request->user_id,)->where('id', $id)->first();

        if (!$note) {
            return response()->json(['error' => 'Note not found'], 404);
        }

        $note->update([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        ]);

        return response()->json(['note' => $note]);
    }

    public function deleteNote(Request $request, $id)
    {
        $note = Note::where('user_id', $request->user_id,)->where('id', $id)->first();
        if (!$note) {
            return response()->json(['error' => 'Note not found'], 404);
        }

        $note->delete();
        return response()->json(['message' => 'Note deleted successfully']);
    }
}
