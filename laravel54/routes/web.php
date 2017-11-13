<?php

//前台路由==============================================================================================

/**
 * 爱尚首页面
 */
Route::any('/', 'JDController@show');

/**
 * 我的爱尚
 */
Route::any('/user_index/{user_id}', 'JDController@user_index');

/**
 * 我的订单
 */
Route::any('/user_indent/{user_id}', 'JDController@user_indent');

/**
 * 爱尚首页分类页面展示（副导航）
 */
Route::any('/cate_lunBo', 'JDController@cate_lunBo');

/**
 * 爱尚首页分类页面展示（中间分类详情）
 */
Route::any('/dev_cate/{id}/{cate_name}', 'JDController@cate');

/**
 * 爱尚二级分类首页
 */
Route::any('/cate_index', 'JDController@er_index');

/**
 * 展示前台商品列表
 */
Route::any('/cate_goods/{id}', 'GoodController@goods_list');

/**
 * 展示前台商品详情
 */
Route::any('/goodInfo/{id}/{did}', 'GoodController@goodInfo');//(id 商品ID did是店铺)

/**
 * 友情链接
 */
Route::any('/links/show','linksController@show');//友情链接展示
Route::any('/links/add','linksController@add');//申请友情链接

/**
 * 用户注册登录路由
 */
Route::any('/zhuce','Auth\RegisterController@zhuce');//注册页面展示
Route::any('/login','Auth\LoginController@showLoginForm');//登录页面展示
Route::any('/login','Auth\LoginController@Login');//检测用户登录
Route::any('/logout','Auth\LoginController@Logout');//检测用户登录
//生成验证码
Route::any('/zhuce/{tmp}', 'Auth\RegisterController@captcha');
//手机验证码
//Route::any('/app','PhpController@add_user_verify');
Route::any('/app','PhpController@add_user_verify');
/**
 * 购物车路由
 */
Route::any('/cart','CartController@show');//注册页面展示

/**
 * 订单路由
 */
Route::any('/dingdan','IndentController@show');//注册页面展示



//后台路由===================================================================================================

/**
 * 后台首页路由
 */
//Route::any('/index/index','Admin\IndexController@index');//框架集展示
//Route::any('/index/index','Admin\CommonController@index');//框架集展示
Route::any('/index/info',function(){
    return view('Admin/Index/info');
});
Route::group(['middleware'=>'web'],function() {
    Route::any('/index/index','Admin\IndexController@index');//框架集展示
});

/**
 * 后台登录路由
 */
Route::any('/admin/login','Admin\LoginController@login');//登录路由
Route::any('/admin/logout','Admin\LoginController@logout');//登录路由
/*
 * 后台验证码
 */
Route::any('/login/code/{tmp}', 'Admin\LoginController@captcha');
Route::any('/index/info',function(){
    return view('Admin/Index/info');
});

/**
 * 商品信息路由
 */
Route::any('/goods/show','Admin\GoodsController@show');                //商品列表展示
Route::any('/goods/add','Admin\GoodsController@add');                  //商品数据添加
Route::any('/goods/update/{gid}','Admin\GoodsController@update');      //商品数据修改
Route::any('/goods/delete/{id}','Admin\GoodsController@delete');       //商品数据删除
Route::any('/goods/addTwo','Admin\GoodsController@addTwo');            //商品属性添加
Route::any('/goods/updateTwo/{gid}','Admin\GoodsController@updateTwo');//商品属性修改
Route::any('/goods/linkage/{pid}','Admin\GoodsController@linkage');    //分类三级联动
/**
 * 商品品牌路由（注意：分类无修改操作）
 */
Route::any('/brand/show','Admin\BrandController@show');         //商品品牌展示
Route::any('/brand/add','Admin\BrandController@add');           //添加商品品牌
Route::any('/brand/delete/{id}','Admin\BrandController@delete');//商品品牌删除
Route::any('/brand/update/{id}','Admin\BrandController@update');//修改商品品牌
Route::any('/brand/sort','Admin\BrandController@sort');         //商品品牌排序

/**
 * 商品分类路由
 */
Route::any('/cate/show/{id}','Admin\CateController@show');    //商品列表展示
Route::any('/cate/add','Admin\CateController@add');           //商品数据添加
Route::any('/cate/update/{id}','Admin\CateController@update');//商品数据修改
Route::any('/cate/delete/{id}/{level}/{name}','Admin\CateController@delete');  //商品数据删除
Route::any('/cate/sort/{id}/{sort}','Admin\CateController@sort');              //商品数据排序
Route::any('/cate/status/{id}/{status}','Admin\CateController@cate_status');   //商品数据状态修改
Route::any('/cate/level/{level}','Admin\CateController@cate_data');            //获取商品分类联动

/**
 * 轮播图路由
 */
Route::any('/lunbo/show','Admin\LunboController@show');         //轮播图列表
Route::any('/lunbo/add','Admin\LunboController@add');           //添加轮播图
Route::any('/lunbo/update/{id}','Admin\lunboController@update');//修改轮播图
Route::any('/lunbo/delete/{id}','Admin\LunboController@delete');//删除轮播图
Route::any('/lunbo/sort','Admin\LunboController@sort');         //轮播图排序

/**

 * 用户路由 
 */
Route::any('/admin/show','Admin\AdminController@show');         //管理员列表
Route::any('/admin/add','Admin\AdminController@add');           //添加用户
Route::any('/admin/update/{id}','Admin\AdminController@update');//修改用户
Route::any('/admin/delete/{id}','Admin\AdminController@delete');//删除用户

/**
 * 角色路由
 */
Route::any("/role/show",'Admin\RoleController@show');         //角色列表
Route::any('/role/add','Admin\RoleController@add');           //添加角色
Route::any('/role/update/{id}','Admin\RoleController@update');//修改角色
Route::any('/role/delete/{id}','Admin\RoleController@delete');//删除角色

Route::any('/role/uList/{id}','Admin\RoleController@uList');                //给用户分配角色并保存

Route::any("/role/app/{id}",'Admin\RoleController@app');                    //应用授权
Route::any("/role/setApp",'Admin\RoleController@setApp');                   //保存应用授权

Route::any('/role/module/{groupId}','Admin\RoleController@module');         //模块授权
Route::any('/role/modules/{appId}/{groupId}','Admin\RoleController@module');//模块授权
Route::any('/role/setModule','Admin\RoleController@setModule');             //保存模块授权

Route::any('/role/action/{groupId}','Admin\RoleController@action');                    //方法授权
Route::any('/role/actions/{appId}/{groupId}','Admin\RoleController@action');            //方法授权
Route::any('/role/actionss/{appId}/{groupId}/{moduleId}','Admin\RoleController@action');//方法授权
Route::any('/role/setAction','Admin\RoleController@setAction');                         //保存应用授权

/**
 * 权限路由
 */
Route::any('/node/show/{id}', 'Admin\NodeController@index'); //展示权限列表
Route::any('/node/add', 'Admin\NodeController@add');         //添加权限
Route::any('/node/update/{id}', 'Admin\NodeController@update');//修改权限
Route::get('/node/delete/{id}','Admin\NodeController@del');    //删除权限
Route::any('/node/getList/{level}', 'Admin\NodeController@getList'); //权限等级联动
Route::any('/node/status/{id}/{status}', 'Admin\NodeController@status'); //修改权限状态
Route::get('/node/sort/{id}/{sort}','Admin\NodeController@sort');  //权限排序

/*
 * 店铺管理路由
 */
Route::any('/shop/show','Admin\ShopController@show');         //店铺展示
Route::any('/shop/add','Admin\ShopController@add');           //添加店铺
Route::any('/shop/delete/{id}','Admin\ShopController@delete');//删除店铺
Route::any('/shop/update/{id}','Admin\ShopController@update');//修改店铺
Route::any('/check/show/{status}/{id}','Admin\ShopController@check');//审核店铺


/*
 * 推荐为管理路由
 */
Route::any('/posid/show','Admin\PosidController@show');              //推荐为展示
Route::any('/posid/add','Admin\PosidController@add');                //推荐位添加
Route::any('/posid/update/{id}','Admin\PosidController@update');     //推荐位修改
Route::any('/posid/list/{id}','Admin\PosidController@getList');      //推荐位数据详情
Route::any('/posid/status/{id}/{status}','Admin\PosidController@getstatus');   //修改状态
Route::any('/posid/upload/{goods_id}','Admin\PosidController@getupload');      //给商品添加图片
Route::any('/posid/sort/{id}/{sort}/{posid_id}','Admin\PosidController@Sort'); //给推荐位商品排序

/**
 * 友情链接路由
 */
Route::any('/links/show','Admin\linksController@show');                    //友情链接展示
Route::any('/links/check/{id}/{status}','Admin\linksController@check');    //审核状态（通过）

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

