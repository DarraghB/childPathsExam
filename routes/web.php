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
    return redirect(Auth::guest() ? 'auth/login' : route('posts.index'));
});


Route::group(['prefix' => 'posts', 'as' => 'posts.'], function($route) {
        $route->get('index', ['uses' => 'PostsController@index', 'as' => 'index']);
    });


Route::prefix('auth')->name('auth.')->group(function($route) {
    $route->get('login', 'Auth\LoginController@getLogin')->name('login');
    $route->post('post-login', 'Auth\LoginController@postLogin')->name('post-login');
    $route->get('logout', 'Auth\LoginController@getLogout')->name('logout');

    $route->get('register', 'Auth\RegisterController@register')->name('register');
    $route->post('register-create', 'Auth\RegisterController@create')->name('register-create');

});

