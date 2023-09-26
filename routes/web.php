<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArrayController;

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

Route::get('/home', function () {
    return view('home');
});


Route::get('/about', function () {
    return view('about', [
        "name" => "Jamal ",
        "email" => "sukmarizki04@gmail.com", 
        "img" => "doraemon.png"
    ]);
});


Route::get('/blog', function () {
    return view('blog', [
        "major" => "Universitas Malikussaleh"
    ]);
});



Route::get('/latihan', function () {
    return view('latihan');
});



Route::get('training',[LatihanController::class,'index']);


Route::get('/array', [ArrayController::class,'array']);
