<?php

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
    
use App\Http\Controllers\Admin\NewsController;

//No19-4課題実施の為、use文１行とグループに２行を追加。
use App\Http\Controllers\Admin\ProfileController;

Route::controller(NewsController::class)->prefix('admin')->group(function(){
    Route::get('news/create','add');
    Route::get('Profile/create','ProfileController@add');
    Route::get('Profile/edit','ProfileController@edit');

});

//No19-3課題実施
Route::get('XXX','AAAController@bbb');