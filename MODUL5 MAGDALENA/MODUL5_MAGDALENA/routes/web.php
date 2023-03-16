<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShowroomController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ShowroomsController;


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

Route::get('/login',[LoginController::class,'index']);
Route::post('/login',[LoginController::class,'authenticate']);
Route::post('/logout',[LoginController::class,'logout']);


//REGISTER
Route::get('/regist', [RegistController::class, 'regist'])->name('regist');
Route::post('/regist', [RegistController::class, 'actionregist'])->name('actionregist');

Route::get('/dashboard',[DashboardController::class,'index']);

Route::get('/profile',[ProfileController::class,'index']);

Route::resource('product', ProductController::class);