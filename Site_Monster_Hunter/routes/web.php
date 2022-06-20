<?php

use App\Http\Controllers\ArmorController;
use App\Http\Controllers\FaunController;
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
Route::get('/fauns', [FaunController::class, 'index'])->name('allFauns');
Route::get('/armors{level}', [ArmorController::class, 'index'])->whereAlpha('level')->name('allArmors');

Route::middleware(['auth'])->group(function() {
    Route::get('/monsters/{id}/', [MonsterController::class, 'show'])->whereNumber('id')->name('monster.show');
    Route::get('/fauns/{id}/', [FaunController::class, 'show'])->whereNumber('id')->name('faun.show');
    Route::get('/armors/{id}/', [ArmorController::class, 'show'])->whereNumber('id')->name('armor.show');
});

require __DIR__.'/auth.php';
