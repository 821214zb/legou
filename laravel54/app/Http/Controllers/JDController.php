<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Cate;
use App\Lunbo;
use App\Good;
use Session;
use App\links;
use DB;
class JDController extends Controller
{
    /**
     * 首页
     */
    public function show(){
        $list = Lunbo::home_Show();//获取轮播图数据
        $posid = DB::table('goods_posids')->where('posids_id',1)->select('goods_img')->limit(4)->get();//获取首页推荐位内容

        $list = Lunbo::home_Show();//获取轮播图数据
        $posid = DB::table('goods_posids')->where('posids_id',1)->select('goods_img')->limit(5)->get();//获取首页推荐位内容

        if(!empty(Auth::user()->id)){
            $carts = DB::table('carts')->where('uid',Auth::user()->id)->sum('goods_count');//获取当前用户购物车数量
            $carts = isset($carts)?$carts:0;
            session(['carts'=>$carts]);//将购物车商品数量存入session;
        }else{
            session(['carts'=>0]);
        }
        return view('JDindex',['list'=>$list,'posid'=>$posid]);
    }


    /**
     * 用户信息（我的爱尚）
     */
    public function user_index($user_id){
       
        return view('myjd',['user_id'=>$user_id]);
    }
    
    /**
     * 用户信息（我的订单）
     */
    public function user_indent($user_id){
       
        return view('mydd',['user_id'=>$user_id]);
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
    public function er_index($id){
        
        //获取分类展示列表数据
        $cate  = Cate::cate_list($id);
        $title = DB::table('cates')->where('id',$id)->select('cate_title')->first();
        //p($cate);
        //获取轮播图
        $lunbo = DB::table('lunbos')->where('site',2)->get();
        //p($lunbo);
       return view('er_index',['cate'=>$cate,'title'=>$title,'list'=>$lunbo]);
    } 
    
    /*
     * 展示前台商品列表
     */
    public function goods_list($id){
        $brand = Good::getBrand($id);
        $cate = Good::getCate($id);
        return view('flower',['brand'=>$brand],['cate'=>$cate]);
    }
    
   /**
    * 前台友情链接展示
    */
    public function links_show(){
        $list=links::show();
        return view ('links',["links"=>$list]);
    }

    /**
     * 申请友情链接
     */
    public function links_add(){
        if($_POST){
            $res=links::add();
            if($res){
                echo "<script>alert('申请已提交，请等待管理员审核！');location.href='/links/links_show'</script>";
            }else{
                echo "<script>alert('申请失败，请重新申请！');location.href='/links/links_show'</script>";
            }
        }
    }
    
}
