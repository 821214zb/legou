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
                'goods_name'    => $req->goods_name,
                'goods_count'   => $req->goods_count,
                'goods_category'=> $req->pid3,
                'goods_brand'   => $req->brand_id,
                'new_price'     => $req->new_price,
                'old_price'     => $req->old_price,
                'goods_sort'    => $req->sort,
                'up_time'       => strtotime($req->up_time),
                'down_time'     => strtotime($req->end_time),
                'promotion_date'=> strtotime($req->promotion_date),
                'supplier'      => $req->supplier,
                'integral'      => $req->integral,
                'integral_moeny'=> $req->integral_moeny,
                'Member_price'  => $req->member_price,
                'preferential_price' => $req->pre_price,
                'market_price'       => $req->market_price,
                'Promotional_Pricing'=>$req->chuxiao,
                'status'        => $req->status,
                'style'         => $req->style,
                'goods_text'    => $req->goods_text,
                'goods_img'     => $filePath,
            ]
        );
        return $goodsList;
    }

    /*
     * 箱包表
     * */
    public function cate_box($goods_id){
        $req = request();
        $goodsInfo = DB::table('cate_box')->insert(
            [
                'goods_id'=>$goods_id,
                'weight'=>$req->weight,
                'volume'=>$req->volume,
                'style'=>$req->style,
                'material'=>$req->material,
                'crowd'=>$req->crowd,
                'draw-bar_box'=>$req->draw_bar,
            ]
        );
        return $goodsInfo;
    }
    /*
     * 家电表
     * */
    public function cate_jiadian($goods_id){
        $req = request();
        $goodsInfo = DB::table('cate_jiadian')->insert(
            [
                'goods_id'=>$goods_id,
                'weight'=>$req->weight,
                'volume'=>$req->volume,
                'style'=>$req->style,
                'material'=>$req->material,
                'series'=>$req->series,
                'diameter'=>$req->diameter,
                'display'=>$req->display,
                'screen_scale'=>$req->screen_scale,
                'tv_type'=>$req->tv_type,
                'Voltage_frequency'=>$req->Voltage,
                'cpc'=>$req->cpc,
                'Panel_type'=>$req->panel_type,
                'Bd_structure'=>$req->Bd_structure,
                'resolution'=>$req->resolution,
                'Refrigeration_mode'=>$req->refrigeration_mode,
            ]
        );
        return $goodsInfo;
    }

    /*
     * 服装表
     * */
    public function cate_cloth($goods_id){
        $req = request();
        $goodsInfo = DB::table('cate_cloth')->insert(
            [
                'goods_id'=>$goods_id,
                'weight'=>$req->weight,
                'fabric'=>$req->fabric,
                'style'=>$req->style,
                'type_version'=>$req->type_version,
                'sleeve_type'=>$req->sleeve_type,
                'collar_type'=>$req->collar_type,
                'long_pants'=>$req->long_pants,
                'season'=>$req->season,
                'article_number'=>$req->article_number,
                'crowd'=>$req->crowd,
            ]
        );
        return $goodsInfo;
    }

    /*
     * 鞋子表
     * */
    public function cate_shoes($goods_id){
        $req = request();
        $goodsInfo = DB::table('cate_shoes')->insert(
            [
                'goods_id'=>$goods_id,
                'weight'=>$req->weight,
                'fabric'=>$req->fabric,
                'style'=>$req->style,
                'season'=>$req->season,
                'article_number'=>$req->article_number,
                'crowd'=>$req->crowd,
            ]
        );
        return $goodsInfo;
    }

    /*
     * 美妆个护表
     * */
    public function cate_hufu($goods_id){
        $req = request();
        $goodsInfo = DB::table('cate_hufu')->insert(
            [
                'goods_id'=>$goods_id,
                'weight'=>$req->weight,
                'shelf_time'=>$req->shelf_time,
                'style'=>$req->style,
                'season'=>$req->season,
                'origin'=>$req->origin,
                'crowd'=>$req->crowd,
                'Efficacy'=>$req->efficacy,
            ]
        );
        return $goodsInfo;
    }

    /*
     * 数码表
     * */
    public function cate_shuma($goods_id){
        $req = request();
        $goodsInfo = DB::table('cate_shuma')->insert(
            [
                'goods_id'=>$goods_id,
                'weight'=>$req->weight,
                'material'=>$req->material,
                'style'=>$req->style,
                'system'=>$req->system,
                'crowd'=>$req->crowd,
                'version'=>$req->version,
                'control_mode'=>$req->control_mode,
                'cpu'=>$req->cpu,
                'network'=>$req->network,
                'sim_size'=>$req->sim_size,
                'cpu_model'=>$req->cpu_model,
            ]
        );
        return $goodsInfo;
    }

    /*
     * 食品表
     * */
    public function cate_food($goods_id){
        $req = request();
        $goodsInfo = DB::table('cate_food')->insert(
            [
                'goods_id'=>$goods_id,
                'Domestic_import'=>$req->chandi,
                'weight'=>$req->weight,
                'Alcohol_content'=>$req->alcohol_content,
                'Packing'=>$req->packing,
                'Liquor_flavor_type'=>$req->liquor,
                'crowd'=>$req->crowd,
                'shelf_time'=>$req->shelf_time,
                'origin'=>$req->origin,
                'Efficacy'=>$req->efficacy,
                'Net_content'=>$req->net,
                'number_of_packages'=>$req->num,
                'food_additives'=>$req->food_addi,
                'Storage method'=>$req->sto,
                'Applicable_scene'=>$req->applicable,
            ]
        );
        return $goodsInfo;
    }



    /*
     * 商品添加时验证
     * */
    public function goods(){
        $request = Request();
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
    
    //品牌表
    public function brand(){
        $rows = DB::table('brands')->select('id','brand_name')->get();
        return $rows;
    }

}