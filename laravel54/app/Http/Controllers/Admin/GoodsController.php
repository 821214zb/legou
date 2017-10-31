<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class GoodsController extends BaseController{
    /**
     * 商品列表
     */
    public function show(){
        return view('Admin.goods.show');
    }
    
    /**
     * 添加商品
     */
    public function add(){
        return view('Admin.goods.add');
    }
    
    /**
     * 平台商品分类
     */
    
    public function cate(){
        return view('Admin.goods.Cate');
    }

    /**
     * 用户评论
     */
    public function pinglun(){
        return view('Admin.goods.pinglun');
    }
    
    /**
     * 品牌
     */
    public function brand(){
        return view('Admin.goods.brand');
    }
    
    /**
     * 删除商品
     */
    public function del(){
        return view('Admin.goods.del');
    }
}