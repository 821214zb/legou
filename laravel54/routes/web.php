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
    return view('JDindex');
});

/*
 * 用户注册登录路由
 */
Route::get('/zhuce','Auth\RegisterController@zhuce');//注册页面展示
Route::get('/login','Auth\LoginController@showLoginForm');//登录页面展示
Route::post('/login','Auth\LoginController@Login');//检测用户登录