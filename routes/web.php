<?php

use App\Models\Entity;
use App\Models\Note;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {


    Route::get('/dashboard', function () {

        $notes = Note::take(1)->get();

        $entities = Entity::take(2)->get();

        return view('dashboard', ['notes' => $notes, 'entities' => $entities]);
    })->name('dashboard');
});
