<?php


use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('users');
});

Route::get('/users',[userController::class,'loadAllUsers']);
Route::get('/add/user',[UserController::class,'loadAddUserForm']);

Route::post('/add/user',[UserController::class,'AddUser'])->name('AddUser');

Route::get('/edit/{id}',[UserController::class,'loadEditForm']);
Route::get('/delete/{id}',[UserController::class,'deleteUser']);

Route::post('/edit/user',[UserController::class,'EditUser'])->name('EditUser');
