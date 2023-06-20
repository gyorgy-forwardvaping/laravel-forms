<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\User;
use Carbon\Carbon;

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

/**
 * Application crud
 */

//we use middleware for the resource validation
Route::group(['middleware' => 'web'], function () {
    Route::resource('/posts', 'App\Http\Controllers\PostController');
});
//dates options
Route::get('/dates', function () {
    echo Carbon::now()->diffForHumans();
    echo '<br>';
    echo Carbon::now()->subMonths(5)->diffForHumans();
    echo '<br>';
    echo Carbon::now()->yesterday()->timespan();
    echo '<br>';
});

//accessors
Route::get('/get-name', function () {
    $user = User::findOrFail(1);
    echo $user->user_name;
});

Route::get('/set-name', function () {
    $user = User::findOrFail(1);
    $user->user_name = 'Gyorgy Jezerniczky';
    $user->save();
});
