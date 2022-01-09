<?php

use App\Http\Controllers\Admin\AlbumController;
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

Route::get('/clear', function () {
    Artisan::call('storage:link');
    Artisan::call('config:cache');
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    echo 'success';
});

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','WebsiteController@index');
Auth::routes();
Route::group(['middleware'=>'auth'],function(){
    Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
    Route::get('/profile', 'MemberController@index')->name('profile');
    Route::get('/user/edit', 'MemberController@edit');
    Route::put('/user/update/{id}', 'MemberController@update');
    Route::resource('/albums','AlbumController')->only('create', 'store', 'edit', 'update', 'destroy');
});


