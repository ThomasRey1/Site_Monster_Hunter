<?php

use App\Http\Controllers\MonsterController;
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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
})->middleware(['auth'])->name('home');


Route::get('/monsters', [MonsterController::class, 'index'])->name('allMonsters');

Route::get('/monsters/{id}/', [MonsterController::class, 'show'])->middleware(['auth'])->whereNumber('id')->name('monster.show');

require __DIR__.'/auth.php';
