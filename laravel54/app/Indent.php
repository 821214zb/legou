<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use DB;

class Indent extends Model{
    /*
     * 生成多个订单
     * */
    public function indentAll($gid,$uid){
        $cart = DB::table('carts')->whereIn('id',$gid)->get();
        //如果在多家店下的单  循环生成多个订单
        $goods_id = "";
        $goods_price = "";
        $goods_count = "";
        $goods_text = "";
        foreach($cart as $v){
            $goods_id .= $v->goods_id.",";
            $goods_price .= $v->goods_price.",";
            $goods_count .= $v->goods_count.",";
            $goods_text .= $v->goods_text.",";
        }
        $num = getVerify();
        $indent = DB::table('indents')->insertGetId(
            [
                'goods_id' => $goods_id,
                'uid' => $uid,
                'goods_count' => $goods_count,
                'goods_count_price' => $goods_price,
                'goods_text' => $goods_text,
                'indent_time' => time(),
                'indent_num' => $num,
                'indent_status' => '1',
            ]
        );
        return $indent;
    }

    /*
     * 生成一个订单
     * */
    public function indentOne($gid,$uid){
        $cart = DB::table('carts')->where('id',$gid)->first();
        if($cart){
            $goods_id = $cart->goods_id;
            $goods_price = $cart->goods_price;
            $goods_count = $cart->goods_count;
            $goods_text = $cart->goods_text;
            $num = getVerify();

            $indent = DB::table('indents')->insertGetId(
                [
                    'goods_id' => $goods_id,
                    'uid' => $uid,
                    'goods_count' => $goods_count,
                    'goods_count_price' => $goods_price,
                    'goods_text' => $goods_text,
                    'indent_time' => time(),
                    'indent_num' => $num,
                    'indent_status' => '1',
                ]
            );
            return $indent;
        }
    }

}