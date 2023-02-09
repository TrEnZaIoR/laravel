<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnController;

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

Route::get('/', [AnController::class,'home']);

Route::get('/contact', [AnController::class,'contact']);

Route::get('/speciality', [AnController::class,'speciality']);
/*Route::get('/post', function () {
    $stud = App\Models\Post::all();
    return view('stud', compact('stud'));
});*/
Route::get('/post', [AnController::class,'stud']);
Route::get('/prepod', [AnController::class,'prepod']);