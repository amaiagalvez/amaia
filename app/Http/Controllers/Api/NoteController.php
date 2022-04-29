<?php

namespace App\Http\Controllers\Api;

use Amaia\Base\Models\Note;
use Amaia\Base\Http\Validators\NoteValidator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NoteController extends Controller
{
    public function index()
    {
        return response()->json(Note::with('user')->paginate(5));
    }

    public function store()
    {
        $validator = new NoteValidator();

        if (!$validator->isValid('store')) {
            return response()->json($validator->getErrors(), 422);
        }

        Note::create($validator->getInputData());

        return redirect()->route('vue');
    }

    public function isPositive(){
        
    }
}
