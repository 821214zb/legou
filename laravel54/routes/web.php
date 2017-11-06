<?php

//前台路由==============================================================================================

/**
 * 爱尚首页面
 */
Route::get('/', 'JDController@show');

/**
 * 爱尚首页分类页面展示（副导航）
 */
Route::get('/cate', 'JDController@cate_left');

/**
 * 爱尚首页分类页面展示（导航详情）
 */
Route::get('/cate/{id}', 'JDController@cate');

/**
 * 首页轮播图
 */
Route::get('/lunbo', 'JDController@lunbo');


/**
 * 用户注册登录路由
 */
Route::match(['post','get'],'/zhuce','Auth\RegisterController@zhuce');//注册页面展示
Route::get('/login','Auth\LoginController@showLoginForm');//登录页面展示
Route::post('/login','Auth\LoginController@Login');//检测用户登录
Route::any('/logout','Auth\LoginController@Logout');//检测用户登录
//生成验证码
Route::any('/zhuce/{tmp}', 'Auth\RegisterController@captcha');

/**
 * 购物车路由
 */
Route::get('/cart','CartController@show');//注册页面展示

/**
 * 订单路由
 */
Route::get('/dingdan','IndentController@show');//注册页面展示



//后台路由===================================================================================================

/**
 * 后台首页路由
 */
Route::get('/index/index','Admin\IndexController@index');//框架集展示
Route::get('/index/info',function(){
    return view('Admin/Index/info');
});

/**
 *用户信息路由
 */
Route::get('/user/show','Admin\UserController@show');                          //用户列表展示
Route::match(['get','post'],'/user/add','Admin\UserController@add');           //用户数据添加
Route::match(['get','post'],'/user/update/{id}','Admin\UserController@update');//用户数据修改
Route::get('/user/delete/{id}','Admin\UserController@delete');                 //用户数据删除

/**
 * 商品信息路由
 */
Route::get('/goods/show','Admin\GoodsController@show');                          //商品列表展示
Route::match(['get','post'],'/goods/add','Admin\GoodsController@add');           //商品数据添加
Route::match(['get','post'],'/goods/update/{id}','Admin\GoodsController@update');//商品数据修改
Route::get('/goods/delete/{id}','Admin\GoodsController@delete');                 //商品数据删除

/**
 * 商品品牌路由（注意：分类无修改操作）
 */
Route::get('/brand/show','Admin\BrandController@show');               //商品分类展示
Route::match(['get','post'],'/brand/add','Admin\BrandController@add');//商品分类添加
Route::get('/brand/delete/{id}','Admin\BrandController@delete');      //商品分类删除

/**
 * 商品分类路由
 */
Route::get('/cate/show/{id}','Admin\CateController@show');                     //商品列表展示
Route::match(['get','post'],'/cate/add','Admin\CateController@add');           //商品数据添加
Route::match(['get','post'],'/cate/update/{id}','Admin\CateController@update');//商品数据修改
Route::get('/cate/delete/{id}','Admin\CateController@delete');                 //商品数据删除
Route::get('/cate/status/{id}/{status}','Admin\CateController@cate_status');   //商品数据状态修改
Route::get('/cate/cate_data/level/{level}','Admin\CateController@cate_data');  //获取商品分类数据


/**
 * 用户评论
 */
Route::get('/goods/pinglun','Admin\GoodsController@pinglun');

/**
 * 交易信息
 */
Route::get('/deal/info','Admin\DealController@info');
/**
 * 订单查询
 */
Route::get('/deal/select','Admin\DealController@select');
/**
 * 合并订单
 */
Route::get('/deal/hb','Admin\DealController@hb');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
