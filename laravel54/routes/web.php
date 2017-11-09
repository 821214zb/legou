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
 * 后台登录路由
 */
Route::any('/login/login','Admin\LoginController@login');//登录路由
Route::any('/login/logout','Admin\LoginController@logout');//登录路由
/*
 * 后台验证码
 */
Route::any('/login/code/{tmp}', 'Admin\LoginController@captcha');
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
Route::match(['get','post'],'/goods/update/{gid}','Admin\GoodsController@update');//商品数据修改
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
 * 轮播图路由
 */
Route::match(['get','post'],'/lunbo/add','Admin\LunboController@add');//展示表单
Route::post('/lunbo/addPost','Admin\LunboController@addPost');//添加轮播图
Route::get('/lunbo/show','Admin\LunboController@show');//轮播图列表
Route::match(['get','post'],'/lunbo/update/{id}','Admin\lunboController@update');//修改轮播图
Route::match(['get','post'],'/lunbo/delete/{id}','Admin\LunboController@delete');//删除轮播图
Route::post('/lunbo/sort','Admin\LunboController@sort');//排序

/**

 * 用户路由 
 */
Route::get('/admin/show','Admin\AdminController@show');//管理员列表
Route::match(['get','post'],'/admin/add','Admin\AdminController@add');//展示表单
Route::post('/admin/addPost','Admin\AdminController@addPost');//添加用户
Route::match(['get','post'],'/admin/update/{id}','Admin\AdminController@update');//修改用户
Route::match(['get','post'],'/admin/delete/{id}','Admin\AdminController@delete');//删除用户

/**
 * 角色路由
 */
Route::get("/role/show",'Admin\RoleController@show');//角色列表
Route::match(['get','post'],'/role/add','Admin\RoleController@add');//展示表单
Route::post("/role/addPost",'Admin\RoleController@addPost');//添加角色
Route::match(['get','post'],'/role/update/{id}','Admin\RoleController@update');//修改角色
Route::match(["get","post"],'/role/delete/{id}','Admin\RoleController@delete');//删除角色
Route::match(["get","post"],'/role/uList/groupId/{id}','Admin\RoleController@uList');//用户列表
Route::match(["get","post"],"/role/setUser",'Admin\RoleController@setUser');//给用户分配角色并保存
Route::match(["get","post"],"/role/app/groupId/{id}",'Admin\RoleController@app');//应用授权
Route::match(["get","post"],"/role/setApp",'Admin\RoleController@setApp');//保存应用授权
Route::match(["get","post"],'/role/module/groupId/{id}','Admin\RoleController@module');//模块授权

/*
 * 店铺管理路由
 */
Route::any('/shop','Admin\ShopController@show');              //店铺展示
Route::any('/shop/add','Admin\ShopController@add');           //添加店铺
Route::get('/shop/delete/{id}','Admin\ShopController@delete');//删除店铺
Route::any('/shop/update/{id}','Admin\ShopController@update');//修改店铺
Route::any('/shop/check/{status}/{id}','Admin\ShopController@check');//审核店铺

/*
 * 推荐为管理路由
 */
Route::any('/posid','Admin\PosidController@show');              //店铺展示







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

/**
 * 权限管理
 */
Route::any('/node/index/{id}', 'Admin\NodeController@index');
Route::any('/node/add', 'Admin\NodeController@add');
Route::any('/node/update/{id}', 'Admin\NodeController@update');
Route::any('/node/getList/{level}', 'Admin\NodeController@getList');
Route::any('/node/status/{id}/{status}', 'Admin\NodeController@status');
Route::get('/node/sort/{id}/{sort}','Admin\NodeController@sort'); 
Route::get('/node/del/{id}','Admin\NodeController@del'); 
