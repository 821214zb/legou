<?php

//前台路由==============================================================================================

/**
 * 爱尚首页面
 */
Route::get('/', 'JDController@show');

/**
 * 我的爱尚
 */
Route::get('/user_index/{user_id}', 'JDController@user_index');

/**
 * 我的订单
 */
Route::get('/user_indent/{user_id}', 'JDController@user_indent');

/**
 * 爱尚首页分类页面展示（副导航）
 */
Route::get('/cate_lunBo', 'JDController@cate_lunBo');

/**
 * 爱尚首页分类页面展示（中间分类详情）
 */
Route::get('/dev_cate/{id}/{cate_name}', 'JDController@cate');

/**
 * 爱尚二级分类首页
 */
Route::get('/cate_index', 'JDController@er_index');

/**
 * 展示前台商品列表
 */
Route::get('/cate_goods/{id}', 'JDController@goods_list');




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
Route::match(['get','post'],'/goods/addTwo','Admin\GoodsController@addTwo');

/**
 * 商品品牌路由（注意：分类无修改操作）
 */
Route::get('/brand/show','Admin\BrandController@show');               //商品品牌展示
Route::match(['get','post'],'/brand/add','Admin\BrandController@add');//展示表单
Route::post('/brand/addPost','Admin\BrandController@addPost');//商品品牌添加
Route::match(['get','post'],'/brand/delete/{id}','Admin\BrandController@delete');      //商品品牌删除
Route::match(['get','post'],'/brand/update/{id}','Admin\BrandController@update');//修改商品品牌
Route::post('/brand/sort','Admin\BrandController@sort');//排序

/**
 * 商品分类路由
 */
Route::get('/cate/show/{id}','Admin\CateController@show');                     //商品列表展示
Route::match(['get','post'],'/cate/add','Admin\CateController@add');           //商品数据添加
Route::match(['get','post'],'/cate/update/{id}','Admin\CateController@update');//商品数据修改
Route::get('/cate/delete/{id}/{level}/{name}','Admin\CateController@delete');  //商品数据删除
Route::get('/cate/sort/{id}/{sort}','Admin\CateController@sort');              //商品数据排序
Route::get('/cate/status/{id}/{status}','Admin\CateController@cate_status');   //商品数据状态修改
Route::get('/cate/cate_data/level/{level}','Admin\CateController@cate_data');  //获取商品分类数据

/**
<<<<<<< HEAD
 * 轮播图路由
=======
 * 轮播图分类路由
>>>>>>> f72cf3ae50a5de8a391406b3128a6c359d7599c7
 */
Route::match(['get','post'],'/lunbo/add','Admin\LunboController@add');//展示表单
Route::post('/lunbo/addPost','Admin\LunboController@addPost');//添加轮播图
Route::get('/lunbo/show','Admin\LunboController@show');//轮播图列表
Route::match(['get','post'],'/lunbo/update/{id}','Admin\lunboController@update');//修改轮播图
Route::match(['get','post'],'/lunbo/delete/{id}','Admin\LunboController@delete');//删除轮播图
Route::post('/lunbo/sort','Admin\LunboController@sort');//排序

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
