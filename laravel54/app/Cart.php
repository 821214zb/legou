<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use DB;
class Cart extends Common{

    /**
     * 通过商品id查询具体信息
     */
    static function getCarts($request,$uid,$gid){
        DB::table('carts')->insert(['uid' =>$request->$uid, 'goods_id' =>$gid, 'goods_price' => $request->goods_price, 'goods_count' => $request->goods_count,'goods_img'=>$request->goods_img,'goods_weight'=>$request->goods_weight,'goods_attr'=>$request->goods_attr,'goods_color'=>$request->goods_color]);
        return DB::table('carts')->get();
    }

}