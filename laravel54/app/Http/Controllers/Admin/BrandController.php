<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class BrandController extends BaseController
{

    /**
     * 商品分类展示
     */
    public function show()
    {
        return view('Admin.brand.brand');
    }

    /**
     * 商品分类添加
     */
    public function add()
    {
        return view('Admin.brand.add');
    }
    
    /**
     * 商品分类珊瑚
     */
    public function delete()
    {
        return view('Admin.brand.delete');
    }

}