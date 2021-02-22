<?php
namespace App\Http\Controllers;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nameinfo/{id}', [StudentController::class, 'show_name']);
Route::get('/dateinfo/{birthday}', [StudentController::class, 'show_date']);
Route::get('/ageinfo/{age}', [StudentController::class, 'show_age']);


