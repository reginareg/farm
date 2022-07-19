<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimallController as A;
use App\Http\Controllers\SumaController as S;
use App\Http\Controllers\ColorController as C;
use App\Http\Controllers\PetController as P;


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

Route::get('/bebras', fn() => 'Valio bebrams');

Route::get('/barsukas', [A::class, 'barsukas']);

Route::get('/briedis/{id}', [A::class, 'briedis']);

Route::get('/suma/{s1?}/{s2?}', [S::class, 'suma']);

Route::get('/skirtumas', [S::class, 'skirtumas'])->name('forma');
Route::post('/skirtumas', [S::class, 'skaiciuoti'])->name('skaiciuokle');


//Colors

Route::get('/colors', [C::class, 'index'])->name('colors-index');
Route::get('/colors/create', [C::class, 'create'])->name('colors-create');
Route::post('/colors', [C::class, 'store'])->name('colors-store');
Route::get('/colors/edit/{color}', [C::class, 'edit'])->name('colors-edit');
Route::put('/colors/{color}', [C::class, 'update'])->name('colors-update');
Route::delete('/colors/{color}', [C::class, 'destroy'])->name('colors-delete');
Route::get('/colors/show/{id}', [C::class, 'show'])->name('colors-show');

//Pet

Route::get('/pets', [P::class, 'index'])->name('animals-index');
Route::get('/pets/create', [P::class, 'create'])->name('animals-create');
Route::post('/pets', [P::class, 'store'])->name('animals-store');
Route::get('/pets/edit/{animal}', [P::class, 'edit'])->name('animals-edit');
Route::put('/pets/{animal}', [P::class, 'update'])->name('animals-update');
Route::delete('/pets/{animal}', [P::class, 'destroy'])->name('animals-delete');
Route::get('/pets/show/{id}', [P::class, 'show'])->name('animals-show');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
