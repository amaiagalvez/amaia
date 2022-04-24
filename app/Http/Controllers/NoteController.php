<?php

namespace App\Http\Controllers;

use Amaia\Base\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index()
    {
        return response()->json(Note::with('user')->paginate(5));
    }
}
