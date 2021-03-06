<?php

use GuzzleHttp\Middleware;
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
Route::group(['middleware'=>'auth'],function(){
    Route::get('/','PanelController@index')->name('admin');
    Route::resource('roles', RoleController::class);
    Route::resource('members', MemberController::class);
    Route::resource('albums', AlbumController::class)->only([
        'show'
    ]);
});
