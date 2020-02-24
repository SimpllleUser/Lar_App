<?php

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
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StatusController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/status', 'StatusController@index');
Route::resource('task', 'TasksController');
