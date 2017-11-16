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
                'Postage'       => $req->Postage,
                'shop_id'       => $req->shop_id,
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
                'model'=>$req->model,
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


    //添加商品时公共的方法
    public function publicAdd($size,$color,$table,$goods_id){
        foreach ($size as $v) {
            $data = DB::table($table)->insert(['size' => $v, 'goods_id' => $goods_id]);
        }
        foreach ($color as $v) {
            $data = DB::table($table)->insert(['color' => $v, 'goods_id' => $goods_id]);
        }
        return $data;
    }
    //添加家电时公共方法
    public function publicJiadian($size,$color,$table,$goods_id,$screen_size){
        foreach ($size as $v) {
            if(!empty($size)){
                $data = DB::table($table)->insert(['size' => $v, 'goods_id' => $goods_id]);
            }
        }
        foreach ($color as $v) {
            if(!empty($color)){
                $data = DB::table($table)->insert(['color' => $v, 'goods_id' => $goods_id]);
            }
        }
        foreach ($screen_size as $v) {
            if($screen_size){
                $data = DB::table($table)->insert(['screen_size' => $v, 'goods_id' => $goods_id]);
            }
        }
        return $data;
    }
    //食品属性公共方法
    public function publicFood($flavor,$color,$table,$goods_id){
        foreach ($flavor as $v) {
            $data = DB::table($table)->insert(['Flavor' => $v, 'goods_id' => $goods_id]);
        }
        foreach ($color as $v) {
            $data = DB::table($table)->insert(['color' => $v, 'goods_id' => $goods_id]);
        }
        return $data;
    }

    //修改商品基本信息
    public function upGoods($goods_id){
        $req = request();
        $goodsList = DB::table('goods')->where('id',$goods_id)->update(
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
                'Postage'       => $req->Postage,
                'shop_id'       => $req->shop_id,
            ]
        );
        return $goodsList;
    }

    //属性修改  公共的方法
    public function public_method($table,$goods_id){
        $box1 = DB::table($table)->where('goods_id', $goods_id)->get();
        if(!empty($box1)){
            $box = json_decode(json_encode($box1), true);
            $box_arr = array();
            //获取属性表字段名称
            $zd = array_keys($box[0]);
            foreach ($box as $k => $v) {
                foreach ($zd as $K => $kk) {
                    if ($v[$kk] !== '0' && $v[$kk] !== null && $v[$kk] !== "") {
                        $box_arr[$kk][] = $v[$kk];
                    }
                }
            }
            return $box_arr;
        }
    }


    /*
     * 商品具体列表 通过分类id获取相对应的品牌展示
     * */
    public static function getBrand($id){

        $row = DB::table('goods')->select('goods_brand')->where('goods_category',$id)->get();
        $data = json_decode(json_encode($row),true);
        $ids = '';
        $count = count($data);
        for($i = 0; $i < $count; $i++){
            $ids .= $data[$i]['goods_brand'].',';
        }
        $sum = substr($ids,1);
        $id1 = rtrim($sum,',');
        $id2 = ltrim($id1,',');
        $id3   = array_unique(explode(',',$id2));
        return DB::table('brands')->select('brand_name')->whereIn('id',$id3)->get();

    }


    /*
    * 商品具体列表 通过分类id获取相对应的属性
    * */
    public static function getCate($id){
        $row = DB::table('cates')->select('cate_pid')->where('id',$id)->first();
        $pid = $row->cate_pid;
        return DB::table('cates')->select('cate_title')->where('cate_pid',$pid)->get();


    }


    /*
     * *********************
     * ********
     **  商品具体列表 通过分类id获取相对应的pid
     *   pid 找到所有子id分类
     *   用所有分类id去商品表找到其对应的商品id去重复
     *   拿到商品id去对应的属性表里查到其所有属性值
     *
     * *******
     * *******************
     * */
    public static function getAttr($id){

        $row = DB::table('cates')->select('cate_pid')->where('id',$id)->first();
        $pid = $row->cate_pid;
        $row = DB::table('cates')->select('id')->where('cate_pid',$pid)->get();
        $data = json_decode(json_encode($row),true);
        $ids = '';
        $count = count($data);
        for($i = 0; $i < $count; $i++){
            $ids .= $data[$i]['id'].',';
        }
        $sum = substr($ids,1);
        $id1 = rtrim($sum,',');
        $id2 = ltrim($id1,',');
        $id3   = array_unique(explode(',',$id2));
        $goods = DB::table('goods')->select('id','cate_id')->whereIn('goods_category',$id3)->get();
        $shu = json_decode(json_encode($goods),true);
        $idsx = '';
        $cat_ids = '';
        $count = count($shu);
        for($i = 0; $i < $count; $i++){
            $idsx .= $shu[$i]['id'].',';
            $cat_ids .= $shu[$i]['cate_id'].',';
        }
        $sum1 = substr($idsx,1);
        $idsx1 = rtrim($sum1,',');
        $idsx2 = ltrim($idsx1,',');
        $idsx3   = array_unique(explode(',',$idsx2));
        $sum2 = substr($cat_ids,1);
        $cat_id1 = rtrim($sum2,',');
        $cat_id2 = ltrim($cat_id1,',');
        $cat_id3   = array_unique(explode(',',$cat_id2));
        $cat_id3=$cat_id3[0];
        //var_dump($cat_id3[0]);die;
        if($cat_id3 == 1){
             return array(DB::table('cate_box')->select('style')->whereIn('goods_id',$idsx3)->get(),1);
        }elseif ($cat_id3 == 2){
            return array(DB::table('cate_jiadian')->select('style')->whereIn('goods_id',$idsx3)->get(),2);
        }elseif ($cat_id3 == 3){
            return array(DB::table('cate_cloth')->select('style')->whereIn('goods_id',$idsx3)->get(),3);
        }elseif ($cat_id3 == 4){
            return array(DB::table('cate_shoes')->select('fabric')->whereIn('goods_id',$idsx3)->get(),4);
        }elseif ($cat_id3 == 5){
            return array(DB::table('cate_hufu')->select('Efficacy')->whereIn('goods_id',$idsx3)->get(),5);
        }elseif ($cat_id3 == 6){
            return array(DB::table('cate_shuma')->select('style')->whereIn('goods_id',$idsx3)->get(),6);
        }elseif ($cat_id3 == 7){
            return array(DB::table( 'cate_food')->select('crowd')->whereIn('goods_id',$idsx3)->get(),7);
        }else{
            return false;
        }
    }

    /*
     * *********************
     * ********
     **  商品具体列表 通过分类id获取相对应的pid
     *   pid 找到所有子id分类
     *   用所有分类id去重复后去商品表找到其对应的商品
     *
     * *******
     * *******************
     * */
    public static function getGoods($id){

        $row = DB::table('cates')->select('cate_pid')->where('id',$id)->first();
        $pid = $row->cate_pid;
        $row = DB::table('cates')->select('id')->where('cate_pid',$pid)->get();
        $data = json_decode(json_encode($row),true);
        $ids = '';
        $count = count($data);
        for($i = 0; $i < $count; $i++){
            $ids .= $data[$i]['id'].',';
        }
        $sum = substr($ids,1);
        $id1 = rtrim($sum,',');
        $id2 = ltrim($id1,',');
        $id3   = array_unique(explode(',',$id2));
        return DB::table('goods')->select('id','goods_name','goods_text','new_price','goods_img','shop_id')->whereIn('goods_category',$id3)->paginate(10);

    }

    /*
    * *********************
    * ********
     * $id 商品id  $cat_id 验证属性
    **  属性详情页展示
    * *******
    * *******************
    * */
    public static function getGoodsList($id,$cat_id){
        if($cat_id == 1){
            return DB::table('cate_box')->where('goods_id',$id)->get();
        }elseif ($cat_id == 2){
            return DB::table('cate_jiadian')->where('goods_id',$id)->get();
        }elseif ($cat_id == 3){
            return DB::table('cate_cloth')->where('goods_id',$id)->get();
        }elseif ($cat_id == 4){
            return DB::table('cate_shoes')->where('goods_id',$id)->get();
        }elseif ($cat_id == 5){
            return DB::table('cate_hufu')->where('goods_id',$id)->get();
        }elseif ($cat_id == 6){
            return DB::table('cate_shuma')->where('goods_id',$id)->get();
        }elseif ($cat_id == 7){
            return DB::table( 'cate_food')->where('goods_id',$id)->get();
        }else{
            return false;
        }

    }


    /*
   * *********************
   * ********
   **  商铺详情页展示
   * *******
   * *******************
   * */
    public static function getShopList($did){
         return DB::table("shops")->where(["shop_id"=>$did])->first();//商品

    }
}