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

Route::get('/', function () {
    return redirect('blog');
});
Route::get('blog', 'BlogController@index');
Route::get('blog/{slug}', 'BlogController@showPost');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('user-login', [
	'as' => 'user-login',
	'uses' => 'User\LoginController@store'
]);
Route::get('test', function(){
  echo 'hello the world';
});
// Route::get('hello',)

//worker: php artisan queue:listen in procfile

