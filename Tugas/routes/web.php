<?php

use Illuminate\Support\Facades\Route;


//Tambahkan ini
use App\Http\Controllers\HelloController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Tambahkan kode dibawah ini, ini disebut route
Route::get('/hello', [HelloController::class, 'index']);