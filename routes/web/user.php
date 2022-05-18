<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/user',[UserController::class, 'index'])->name('user.index');

Route::get('/user/profile',[UserController::class, 'profile'])->name('user.profile')

?>