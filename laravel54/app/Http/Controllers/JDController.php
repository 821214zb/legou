<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cate;
use Session;
class JDController extends Controller
{
    /**
     * 首页
     */
    public function show(){
        return view('JDindex');
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
    public function header(){
        //查询商品分类用于前台页面展示
        $cate=Cate::get_left_Cate();
        return json_encode($cate);
    }

    /*
     * 首页左侧分类数据的展示
     */
    public function cate_left(){
        //查询商品分类用于前台页面展示
        $cate=Cate::get_left_Cate();
        return json_encode($cate);
    }
    
    /*
     * 首页右侧分类数据的展示
     */
    public function cate($id,$cate_name){
        //查询商品分类用于前台页面展示
        $cate=Cate::get_right_cate($id,$cate_name);
        echo json_encode($cate);

    }
    
    /*
     * 首页轮播图的展示
     */
    public function lunbo(){
        //查询商品分类用于前台页面展示
        $str = "
            <div id='dd'>
                <ul id='pic'> 
                    <li><a href='#'><img src='images/11.jpg' alt='' id='pic'/></a></li>
                </ul>
                <ul class='circle'> 
                    <ol id='list'>
                        <li class='on'>1</li>
                        <li>2</li>
                        <li>3</li>
                        <li>4</li>
                        <li>5</li>
                    </ol>
                </ul>
                <div class='arrow' id='arr'> 
                    <a href='javascript:;' class='arrow-l'><</a>
                    <a href='javascript:;' class='arrow-r'>></a>
                </div>
            </div>";
        return json_encode($str);

    }
}
