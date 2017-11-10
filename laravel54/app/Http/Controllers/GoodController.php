<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cate;
use App\Lunbo;
use App\Good;
use Session;
class GoodController extends Controller
{
    /*
     * 展示前台商品列表
     */
    public function goods_list($id){

        $brand = Good::getBrand($id);
        $cate = Good::getCate($id);
        //$attr = Good::getAttr($id);
        return view('flower',['brand'=>$brand],['cate'=>$cate]);
    }





}
