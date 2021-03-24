<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetailProfilController;
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

Route::get('Helo', function () {
    //me-return string
    return "Hallooooo";
});

Route::get('blog', function () {
    //me-return view
    return view('blog');
});

Route::get('user', 'ManagementUserController@index');
//Route::get('/user'