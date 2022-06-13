<?php

use App\Http\Controllers\MonsterController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Test;
use App\Http\Controllers\UserController;
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

Route::get('/', function(){
    return view('home');
});
Route::get('/home', function(){
    return view('home');
})->name('home');
Route::get('home/monsters', [MonsterController::class, 'index'])->name('allMonsters');
Route::get('home/create',[UserController::class, 'show'])->name('user.create');
Route::post('home/create',[UserController::class, 'store'])->name('user.store');
Route::get('home/monsters/{id}/', [MonsterController::class, 'show'])->whereNumber('id')->name('monster.show');