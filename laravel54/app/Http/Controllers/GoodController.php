<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Cate;
use App\Good;
use Session;
use DB;
class GoodController extends Controller{
    /*
     * $brand 品牌详情
     * $cate 分类详情
     * $attr   具体属性表信息
     * $goods 展示商品详情
     */
    public function goods_list($id){
        if($_GET){
            $keyword=isset($_GET["keyword"]) ? $_GET["keyword"] : "";
            $list=DB::table("goods")->where('goods_name','like','%'.$keyword.'%')->paginate(4);
            return view("flower_k",["list"=>$list,'keyword'=>$keyword]);
        }else{
            $brand = Good::getBrand($id);
            $cate = Good::getCate($id);
            $attr = Good::getAttr($id);
            $goods = Good::getGoods($id);
            return view('flower',['brand'=>$brand,'cate'=>$cate,'attr'=>$attr[0],'attr1'=>$attr[1],'goods'=>$goods]);
        }
    }

    /**
     * $goodInfoList展示商品详情
     * $cat_id 通过分类顶级id判断属性表
     * $attr   具体属性表信息
     * $ShopList 商铺信息
     */
    public function goodInfo($id,$did){
        $goodInfoList=DB::table("goods")->where("id",$id)->first();//商品
        $cat_id=$goodInfoList->cate_id;
        $attr = Good::getGoodsList($id,$cat_id);
        $ShopList = Good::getShopList($did);
        return view('goodInfo',['goodInfoList'=>$goodInfoList,'cat_id'=>$cat_id,'cat_list'=>$attr,'ShopList'=>$ShopList]);
    }
}
