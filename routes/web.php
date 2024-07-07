<?php

use App\Http\Controllers\PlayerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('player/listar',[PlayerController::class,'index'])->name('player.index');
Route::get('Player/create',[PlayerController::class,'create'])->name('player.create');
Route::post('Player/store',[PlayerController::class,'store'])->name('Player.store');
Route::get('Player/{players}',[PlayerController::class,'show'])->name('player.show');
Route::put('Player/{players}',[PlayerController::class,'update'])->name('player.update');
Route::delete('Player/{players}',[PlayerController::class,'destroy'])->name('player.destroy');
Route::get('Player/{players}/editar',[PlayerController::class,'edit'])->name('player.edit');



