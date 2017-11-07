<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cate;
use App\Lunbo;
use Session;
class JDController extends Controller
{
    /**
     * 首页
     */
    public function show(){
        $list = Lunbo::home_Show();
        return view('JDindex',['list'=>$list]);
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }


    /*
     * 首页左侧分类数据的展示
     */
    public function cate_lunBO(){
        //查询商品分类 和 首页轮播图 用于前台页面展示
        $cate  = Cate::get_left_Cate();
        //$LunBo = Lunbo::home_Show();
        echo json_encode($data=['cate'=>$cate]);
    }
    
    /*
     * 首页右侧分类数据的展示
     */
    public function cate($id,$cate_name){
        //查询商品分类用于前台页面展示
        $cate=Cate::get_right_Cate($id,$cate_name);
        echo json_encode($cate);
    }
    
    /*
     * 二级首页数据展示
     */
    public function er_index(){
        

       return view('er_index');
    }



}
