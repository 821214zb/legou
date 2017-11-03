<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use DB;

class Good extends Model{
    /*
     * 添加商品
     * */
    public function goodsAdd($filePath){
       $req = request();

        $goodsList = DB::table('goods')->insertGetId(
            [
                'goods_name'=>$req->goods_name,
                'goods_count'=>$req->goods_count,
                'goods_category'=>$req->pid3,
                'goods_brand'=>$req->brand_id,
                'new_price'=>$req->new_price,
                'old_price'=>$req->old_price,
                'goods_sort'=>$req->sort,
                'up_time'=>strtotime($req->up_time),
                'down_time'=>strtotime($req->end_time),
                'status'=>$req->status,
                'goods_text'=>$req->goods_text,
                'goods_img'=>$filePath,
            ]
        );
        return $goodsList;
    }
    
    
    
    /*
     * 商品添加时验证
     * */
    public function goods(Request $request){
        $validator = Validator::make($request->all(),
            [
                'goods_name'=>'required',
                'goods_count'=>'required|numeric',
                'new_price'=>'required|numeric',
                'old_count'=>'required|numeric',
                'goods_sort'=>'required|numeric',
                'up_time'=>'required|numeric',
                'down_time'=>'required|numeric',
                'goods_text'=>'required',
                'status'=>'required',
            ],[
                'required'=>':该选项不能为空',
                'required|numeric'=>':该选项为数值型',
            ]
        );
        if($validator->fails()){
            return redirect() ->back() ->withErrors($validator) ->withInput();
        }
    }

}