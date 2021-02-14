<?php

use App\Http\Controllers\Pdcontroller;
use App\Http\Controllers\usercontroller;
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
Route::view('/register', 'register');
Route::get('/logout', function () {
	Session::forget('user');
	return redirect('/login');
});
Route::view('/login', 'login');

Route::post('login', [usercontroller::class, 'login']);
Route::get('/', [Pdcontroller::class, 'hd']);
Route::get('detail/{id}', [Pdcontroller::class, 'detail']);
Route::get('/search', [Pdcontroller::class, 'search']);
Route::post('add-to-card', [Pdcontroller::class, 'addcard']);
Route::get('/cardlist', [Pdcontroller::class, 'cardlist']);

Route::get('deletecart/{id}', [Pdcontroller::class, 'deletecard']);
Route::get('ordercard/{id}', [Pdcontroller::class, 'ordercard']);
Route::post('/orderplace', [Pdcontroller::class, 'orderplace']);

Route::get('myorder', [Pdcontroller::class, 'myorder']);
Route::get('/deleteorder/{id}', [Pdcontroller::class, 'deleteorder']);
Route::post('/registration', [usercontroller::class, 'registration']);