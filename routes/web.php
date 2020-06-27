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
if (version_compare(PHP_VERSION, '7.2.0', '>=')) {
    // Ignores notices and reports all other kinds... and warnings
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
    // error_reporting(E_ALL ^ E_WARNING); // Maybe this is enough
}

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/post/{id}', ['as'=>'home.post','uses'=>'AdminPostsController@post']);
Route::get('/admin', function(){

    return view('admin.index');
});
// Route::group(['middleware'=>'admin'], function(){

    


// });
Route::resource('admin/users', 'AdminUsersController');
Route::resource('admin/posts', 'AdminPostsController');
Route::resource('admin/categories', 'AdminCategoriesController');
Route::resource('admin/media', 'AdminMediasController');

Route::resource('admin/comments','PostCommentsController');
Route::resource('admin/comment/replies','CommentRepliesController');



Route::delete('admin/delete/media', 'AdminMediasController@deleteMedia');

// Route::get('admin/media/upload', ['as'=>'media.upload', 'uses'=>'AdminMediasController@store']);
