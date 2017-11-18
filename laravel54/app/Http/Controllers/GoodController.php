<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Cate;
use App\Good;
use Session;
use DB;
class GoodController extends Controller{
    
    /*
     * $brand 品牌
     * $cate  分类
     * $attr  具体属性表
     * $goods 展示商品详情
     */
    public function goods_list($id){
        
        $request = request();
        $keyword = isset($request["keyword"]) ?$request["keyword"] : "";
        if($keyword){
            $cate=DB::table("cates")->where('cate_title','like','%'.$keyword.'%')->get();
            $brands=DB::table("brands")->where('brand_name','like','%'.$keyword.'%')->first();
            $list=DB::table("goods")->where('goods_name','like','%'.$keyword.'%')->paginate(4);
            if($list == ""){
                if($cate && $brands == ""){
                    $list = Good::cate_goods($cate);
                }elseif($brands && $cate){
                    $list = Good::brand_goods($brands);
                }elseif($brands){
                    $list = Good::brand_goods($brands);
                }
                return view("flower_k",["list"=>$list,'keyword'=>$keyword,'cate'=>$cate,'brands'=>$brands]);
            }else{
                return view("flower_k",["list"=>$list,'keyword'=>$keyword,'cate'=>$cate,'brands'=>$brands]);
            }
        }else{
            $brand = Good::getBrand($id); //品牌
            $cate  = Good::getCate($id);  //分类
            $attr  = Good::getAttr($id);  //商品共有属性
            $goods = Good::getGoods($id); //商品id
            return view('flower',['brand'=>$brand,'cate'=>$cate,'attr'=>$attr[0],'attr1'=>$attr[1],'goods'=>$goods]);
        }
    }

    /**
     * $goodInfoList 展示商品详情
     * $cat_id       通过分类顶级id判断属性表
     * $attr         具体属性表信息
     * $ShopList     商铺信息
     */
    public function goodInfo($id,$did){
        $goodInfoList = DB::table("goods")->where("id",$id)->first();//商品
        $cat_id       = $goodInfoList->cate_id;
        $attr         = Good::getGoodsList($id,$cat_id);
        $ShopList     = Good::getShopList($did);
        return view('goodInfo',['goodInfoList'=>$goodInfoList,'cat_id'=>$cat_id,'cat_list'=>$attr,'ShopList'=>$ShopList]);
    }
}
