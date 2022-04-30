<?php

namespace App\Http\Controllers\Api;

use Amaia\Base\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        return response()->json(User::get());
    }
}
