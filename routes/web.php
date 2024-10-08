<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FriendController;
use App\Http\Controllers\SecretFriendController;
use App\Models\Friend;

Route::get('/', function () {
    $friends = Friend::all();
    return view('welcome', compact('friends'));
})->name('welcome');

Route::prefix('/friends')->as('friends.')->group(function(){
    Route::get('/create', [FriendController::class, 'create'])->name('create');
    Route::post('/', [FriendController::class, 'store'])->name('store');
    Route::get('/edit/{friend}', [FriendController::class, 'edit'])->name('edit');
    Route::put('/{friend}', [FriendController::class, 'update'])->name('update');
    Route::delete('/{id}', [FriendController::class, 'destroy'])->name('destroy');
    Route::get('/search', [FriendController::class, 'search'])->name('search');
    Route::get('/secret-friends/random', [FriendController::class, 'randomFriends'])->name('randomFriends');
    Route::get('/secret-friends/result', [FriendController::class, 'resultSecretFriends'])->name('resultSecretFriends');
});



require __DIR__.'/auth.php';
