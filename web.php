<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerpage;

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


Route::get('/',  [controllerpage::class,'ansh'] );
// Route::get('/register', [controllerpage::class,'register']);
Route::get('/hireme',[controllerpage::class,'hireme']);
Route::get('/contact',[controllerpage::class,'contact']);
Route::POST('/submit',[controllerpage::class,'submit'] );   
