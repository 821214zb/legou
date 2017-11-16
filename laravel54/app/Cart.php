<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use DB;
class Cart extends Common{

    /**
     * 通过商品id查询具体信息
     */
    public static function add($uid){
//        echo json_encode($_POST);die;
        return $res = DB::table('carts')->insert(['uid' =>$uid, 'goods_id' =>$_POST["goods_id"], 'goods_price' => $_POST["price"], 'goods_count' => $_POST["num"],'goods_img'=>$_POST["img"],'goods_weight'=>$_POST["goods_weight"],'goods_attr'=>$_POST["attr"],'goods_color'=>$_POST["color"],'shop_id'=>$_POST["shop_id"],'shop_name'=>$_POST["shop_name"],'goods_text'=>$_POST["goods_text"],'goods_name'=>$_POST["goods_name"],'one_price'=>$_POST["one_price"],'all_count'=>$_POST["all_count"]]);
    }

    static function getCart($uid){
        return DB::table('carts')->where('uid',$uid)->paginate(4);
    }
}