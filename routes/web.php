<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

//controllers
use App\Http\Controllers\UsersController;

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

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('real-admin', [UsersController::class, 'users']);
    Route::get('delUser/{id}', [UsersController::class, 'userDelete'])->name('userDel');
    Route::get('detailUser/{id}', [UsersController::class, 'detailUser']);
    Route::get('editUser/{id}', [UsersController::class, 'editUser']);
    Route::post('updateUser', [UsersController::class, 'updateUser'])->name('updateUser');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
