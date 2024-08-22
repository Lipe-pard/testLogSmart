<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FriendController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/friends')->as('friends.')->group(function(){
    Route::get('/create', [FriendController::class, 'create'])->name('create');
});


require __DIR__.'/auth.php';
