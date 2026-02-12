<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'showUser']);
Route::get('/user/{id}', [UserController::class, 'singleUser'])->name('singleUser');

Route::get('/add', [UserController::class, 'addUser']);

Route::get('/update', [UserController::class, 'updateUser']);

