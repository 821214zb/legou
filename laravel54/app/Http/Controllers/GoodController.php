<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Cate;
use App\Lunbo;
use App\Good;
use Session;
use DB;
class GoodController extends Controller{
    /*
     * 展示前台商品列表
     */
    public function goods_list($id){
        $brand = Good::getBrand($id);
        $cate = Good::getCate($id);
        //$attr = Good::getAttr($id);
        return view('flower',['brand'=>$brand],['cate'=>$cate]);
    }

    /**
     * 展示商品详情
     */
    public function goodInfo($id,$did){
        $goodInfoList=DB::table("goods")->where(["id"=>$id])->get();//商品
        $cat_id=$goodInfoList[0]->cate_id;
        if($cat_id == 1){
            $cat_list=DB::table("cate_box")->where("goods_id",$id)->get();
        }elseif($cat_id == 2){
            $cat_list=DB::table("cate_jiadian")->where("goods_id",$id)->get();
        }elseif($cat_id == 3){
            $cat_list=DB::table("cate_cloth")->where("goods_id",$id)->get();
        }elseif($cat_id == 4){
            $cat_list=DB::table("cate_shoes")->where("goods_id",$id)->get();
        }elseif($cat_id == 5){
            $cat_list=DB::table("cate_hufu")->where("goods_id",$id)->get();
        }elseif($cat_id == 6){
            $cat_list=DB::table("cate_shuma")->where("goods_id",$id)->get();
        }else{
            $cat_list=DB::table("cate_food")->where("goods_id",$id)->get();
        }
        return view('goodInfo',["goodInfoList"=>$goodInfoList,"cat_id"=>$cat_id],["cat_list"=>$cat_list]);
    }
    
}
