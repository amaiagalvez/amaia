<?php

use Amaia\Base\Models\Note;
use App\Models\Entity;
use Amaia\Base\Facades\Calculator;
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
})->name('home');

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

    Route::get('/tailwind', function () {
        return view('tailwind5');
    })->name('tailwind');

    Route::get('/tailwind1', function () {
        return view('tailwind1');
    })->name('tailwind1');

    Route::get('/package', function () {
        return config('base.name') . ' ' . Calculator::add(5)->subtract(10)->getResult();
    })->name('package');

    Route::get('/vue/{arg1?}/{arg2?}', function () {
        return view('vue');
    })->name('vue');
});
