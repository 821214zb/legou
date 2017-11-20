<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;
use App\Indent;

class IndentController extends Controller{
    /*
     * 提交订单
     * */
    public function show($gouid,$price){
        $indent = new \App\Indent();
        $uid = Auth::user()->id;

        $gid = explode("," , $gouid);
        //$indent_all = $indent->indentAll($gid,$uid);

//        if($indent_all){
            //删除购物车里的订单
           // DB::table('carts')->whereIn('id',$gid)->delete();
            $indentInfo = DB::table('indents')->where('id',78)->first();
            $indent_num = $indentInfo->indent_num;
            $goods_text = $indentInfo->goods_text;
            $goodsText = trim($goods_text,",");
            $g_text = explode(",",$goodsText);
            //dump($g_text);
            //通过商品id查询
            $goods_id = $indentInfo->goods_id;
            $goods_ids = trim($goods_id,",");
            $goodsId = explode(",",$goods_ids);
            $goodsInfo = DB::table('goods')->whereIn('id',$goodsId)->get();
            $goods_name = "";
            foreach($goodsInfo as $v){
                $goods_name .= $v->goods_name.",";
                $goods_names = trim($goods_name,",");
                $g_name = explode(",",$goods_names);
            }
            $goodsArr = array_merge($g_name,$g_text);
//        }

        $address = session('address');
      return view('submitOrder',['indent_num'=>$indent_num,'price'=>$price,'g_name'=>$goodsArr,'address'=>$address]);

    }
}
