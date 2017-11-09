<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
//use Intervention\Image\ImageManagerStatic as Image;
use Intervention\Image\ImageManager;
use DB;
use App\Good;

class GoodsController extends BaseController{
    /**
     * 商品列表
     */
    public function show(){
        $goods = new \App\Good();
        //搜索分类
        $sellers = array();
        $data = DB::table('cates')->get();
        foreach($data as $k=>$v){
            $sellers[$k] = (array)$v;
        }
        $cateList = getTreeData($sellers,0);
        //搜索品牌
        $cate = $goods->brand();

        if($_POST){
            //var_dump($_POST);
        }
        $lists = DB::table('goods')->paginate(5);
        return view('Admin.goods.show',['goods'=>$lists,'cateList'=>$cateList,'cate'=>$cate]);
    }
    
    /**
     * 添加商品
     */
    public function add(){
        $req = request();
        $goods = new \App\Good();
        $goods->goods($req);

        if($_POST){
            //上传图片的路径
            if($_POST['one'] == '确认提交'){
                $file = $req->file('img');
                if($file){
                    $extension = $file->getClientOriginalExtension();
                    $fileName = str_random(8).".".$extension;
                    $filePath = $file->move('uploads',$fileName);
                    $goodsId = $goods->goodsAdd($filePath);
                    //添加推荐位
                    if(!empty($_POST['Posid'])){
                        $sid = $_POST['Posid'];
                        foreach ($sid as $v){
                            DB::table("goods_posids")->insert(['goods_id'=>$goodsId,'posids_id'=>$v]);
                        }
                    }
                    session(['goods_id'=>$goodsId]);
                    return view('Admin.goods.addTwo');
                }
            }else {
                $goods_id = session('goods_id');
                $status = $_POST['shuxing'];
                if ($status == 1) {
                    //箱包表
                    if ($_POST) {
                        $goods->cate_box($goods_id);
                        $size = $_POST['size'];
                        foreach ($size as $v) {
                            $data = DB::table('cate_box')->insert(['size' => $v, 'goods_id' => $goods_id]);
                        }
                        $color = $_POST['color'];
                        foreach ($color as $v) {
                            $data = DB::table('cate_box')->insert(['color' => $v, 'goods_id' => $goods_id]);
                        }
                        DB::table('goods')->where('id',$goods_id)->update(['cate_id'=>$status]);
                        if ($data) {
                            return redirect('goods/show');
                        }
                    }
                } elseif ($status == 2) {
                    //家电表
                    if ($_POST) {
                        $goods->cate_jiadian($goods_id);
                        $size = $_POST['size'];
                        foreach ($size as $v) {
                            $data = DB::table('cate_jiadian')->insert(['size' => $v, 'goods_id' => $goods_id]);
                        }
                        $color = $_POST['color'];
                        foreach ($color as $v) {
                            $data = DB::table('cate_jiadian')->insert(['color' => $v, 'goods_id' => $goods_id]);
                        }
                        $screen_size = $_POST['screen_size'];
                        foreach ($screen_size as $v) {
                            $data = DB::table('cate_jiadian')->insert(['screen_size' => $v, 'goods_id' => $goods_id]);
                        }
                        DB::table('goods')->where('id',$goods_id)->update(['cate_id'=>$status]);
                        if ($data) {
                            return redirect('goods/show');
                        }
                    }
                } elseif ($status == 3) {
                    //服装表
                    if ($_POST) {
                        $goods->cate_cloth($goods_id);
                        $size = $_POST['size'];
                        foreach ($size as $v) {
                            $data = DB::table('cate_cloth')->insert(['size' => $v, 'goods_id' => $goods_id]);
                        }
                        $color = $_POST['color'];
                        foreach ($color as $v) {
                            $data = DB::table('cate_cloth')->insert(['color' => $v, 'goods_id' => $goods_id]);
                        }
                        DB::table('goods')->where('id',$goods_id)->update(['cate_id'=>$status]);
                        if ($data) {
                            return redirect('goods/show');
                        }
                    }
                } elseif ($status == 4) {
                    //鞋子表
                    if ($_POST) {
                        $goods->cate_shoes($goods_id);
                        $size = $_POST['size'];
                        foreach ($size as $v) {
                            $data = DB::table('cate_shoes')->insert(['size' => $v, 'goods_id' => $goods_id]);
                        }
                        $color = $_POST['color'];
                        foreach ($color as $v) {
                            $data = DB::table('cate_shoes')->insert(['color' => $v, 'goods_id' => $goods_id]);
                        }
                        DB::table('goods')->where('id',$goods_id)->update(['cate_id'=>$status]);
                        if ($data) {
                            return redirect('goods/show');
                        }
                    }
                } elseif ($status == 5) {
                    //美妆个护表
                    if ($_POST) {
                        $goods->cate_hufu($goods_id);
                        $size = $_POST['size'];
                        foreach ($size as $v) {
                            $data = DB::table('cate_hufu')->insert(['size' => $v, 'goods_id' => $goods_id]);
                        }
                        $color = $_POST['color'];
                        foreach ($color as $v) {
                            $data = DB::table('cate_hufu')->insert(['color' => $v, 'goods_id' => $goods_id]);
                        }
                        DB::table('goods')->where('id',$goods_id)->update(['cate_id'=>$status]);
                        if ($data) {
                            return redirect('goods/show');
                        }
                    }
                } elseif ($status == 6) {
                    //数码
                    if ($_POST) {
                        $goods->cate_shuma($goods_id);
                        $size = $_POST['size'];
                        foreach ($size as $v) {
                            $data = DB::table('cate_shuma')->insert(['size' => $v, 'goods_id' => $goods_id]);
                        }
                        $color = $_POST['color'];
                        foreach ($color as $v) {
                            $data = DB::table('cate_shuma')->insert(['color' => $v, 'goods_id' => $goods_id]);
                        }
                        DB::table('goods')->where('id',$goods_id)->update(['cate_id'=>$status]);
                        if ($data) {
                            return redirect('goods/show');
                        }
                    }
                } elseif ($status == 7) {
                    //食品
                    if ($_POST) {
                        $goods->cate_food($goods_id);
                        $flavor = $_POST['flavor'];
                        foreach ($flavor as $v) {
                            $data = DB::table('cate_food')->insert(['Flavor' => $v, 'goods_id' => $goods_id]);
                        }
                        $color = $_POST['color'];
                        foreach ($color as $v) {
                            $data = DB::table('cate_food')->insert(['color' => $v, 'goods_id' => $goods_id]);
                        }
                        DB::table('goods')->where('id',$goods_id)->update(['cate_id'=>$status]);
                        if ($data) {
                            return redirect('goods/show');
                        }
                    }
                }
            }
        }
        //查询店铺
        $shop = DB::table('shops')->get();
        //推荐位查询
        $res = DB::table('posids')->get();
        //分类表查询
        $data = DB::table('cates')->where('cate_pid','0')->select('id','cate_pid','cate_title')->get();
        //品牌查询
        $row = $goods->brand();
        //分类联动
        if(!empty($_GET['pid'])){
            $id = $_GET['pid'];
            $res = DB::table('cates')->where('cate_pid',$id)->select('id','cate_pid','cate_title')->get();
            echo json_encode($res);
        }else{
            return view('Admin.goods.add',['cate'=>$data,'row'=>$row,'res'=>$res,'shop'=>$shop]);
        }
    }


    /**
     * 商品修改
     */
    public function update($gid){
        $req = request();
        $goods = new \App\Good();
        if($_POST){

        }else{
            //分类默认选中
            $cateThree = DB::table('cates')->where('cate_level','3')->select('id','cate_pid','cate_title')->get();

            $cateTwo = DB::table('cates')->where('cate_level','2')->select('id','cate_pid','cate_title')->get();
            //var_dump($cateTwo);

            $cateOne = DB::table('cates')->where('cate_level','1')->select('id','cate_pid','cate_title')->get();
            //商品查询
            $goodsInfo = DB::table('goods')->where('id',$gid)->first();
//            var_dump($goodsInfo);
            //默认选中
            $g_p = DB::table('goods_posids')->where('goods_id',$gid)->get();
            $arrGp = array();
            foreach($g_p as $k=>$v){
                $arrGp[$v->posids_id] = $v->posids_id;
            }
            //推荐位查询
            $res = DB::table('posids')->get();
            $arrPosids = array();
            foreach($res as $k=>$v){
                $arrPosids[$v->id] = $v->type;
            }
            //分类表查询
            $data = DB::table('cates')->where('cate_pid','0')->select('id','cate_pid','cate_title')->get();
            //品牌查询
            $row = $goods->brand();
            //分类联动
            if(!empty($_GET['pid'])){
                $id = $_GET['pid'];
                $res = DB::table('cates')->where('cate_pid',$id)->select('id','cate_pid','cate_title')->get();
                echo json_encode($res);
            }else{
                return view('Admin.goods.update',['cate'=>$data,'row'=>$row,'res'=>$arrPosids,'goodsInfo'=>$goodsInfo,'g_p'=>$arrGp,'cateThree'=>$cateThree,'cateTwo'=>$cateTwo,'cateOne'=>$cateOne]);
            }
        }
    }

    /*
     * 商品属性修改
     * */
    public function updateTwo($gid){
        //商品查询
        $goodsInfo = DB::table('goods')->where('id',$gid)->first();
        $cate_id = $goodsInfo->cate_id;
        $data = array();
        if($cate_id == 1){
            $box1 = DB::table('cate_box')->where('goods_id',$gid)->get();
            $box = json_decode(json_encode($box1),true);
//            dump($box);
            $array=array();
            foreach ($box as $k => $v){
//                echo $k;
                foreach ($v as $v1){
                    $array[$v["goods_id"]]=$v1;
                }
                dump($v);
            }
//            dump($array);



//            $array = array();
//            foreach ($box as $k=>$v){
//                $arrData = array_filter($v);
//                var_dump($arrData);
//                $array[] = $arrData;
//                var_dump($array);
//            }

            die;
//           //var_dump($box);die;
//            $box_arr = "";
//            for($i=0 ; $i<count($box[0]) ; $i++){
//                for($j=0 ; $j<count($box) ; $j++){
//                    $box_arr[$i][$j] = $box[$j][$i];
//                }
//            }
//            var_dump($box_arr);die;
            return view('Admin.goods.up_box',['goodsInfo'=>$goodsInfo,'arrData'=>$arrData]);
        }elseif ($cate_id == 2){
            return view('Admin.goods.up_jiadian',['goodsInfo'=>$goodsInfo]);
        }elseif ($cate_id == 3){
            return view('Admin.goods.up_cloth',['goodsInfo'=>$goodsInfo]);
        }elseif ($cate_id == 4){
            return view('Admin.goods.up_shoes',['goodsInfo'=>$goodsInfo]);
        }elseif ($cate_id == 5){
            return view('Admin.goods.up_hufu',['goodsInfo'=>$goodsInfo]);
        }elseif ($cate_id == 6){
            return view('Admin.goods.up_shuma',['goodsInfo'=>$goodsInfo]);
        }elseif ($cate_id == 7){
            return view('Admin.goods.up_food',['goodsInfo'=>$goodsInfo]);
        }


    }


    /**
     * 删除商品
     */
    public function delete($ids){
        $goods_id = trim($ids,",");
        $id = explode(",",$goods_id);
        $res = DB::table('goods')->whereIn('id',$id)->update(['status'=>0]);
        if($res){
            return array("res"=>"ok");
        }else{
            return array('res'=>"no");
        }
    }
    
    /*
     * 添加商品属性
     * */
    public function addTwo(){
        if($_POST){
            $cate = $_POST["cate"];
            if($cate == 1){
                $cateOne = file_get_contents("html/cateOne.html");
                echo json_encode($cateOne);
            }elseif ($cate == 2){
                $cateOne = file_get_contents("html/jiadian.html");
                echo json_encode($cateOne);
            }elseif ($cate == 3){
                $cateTwo = file_get_contents("html/fuzhuang.html");
                echo json_encode($cateTwo);
            }elseif ($cate == 4){
                $shoes = file_get_contents("html/shoes.html");
                echo json_encode($shoes);
            }elseif ($cate == 5){
                $hufu = file_get_contents("html/hufu.html");
                echo json_encode($hufu);
            }elseif ($cate == 6){
                $shuma = file_get_contents("html/shuma.html");
                echo json_encode($shuma);
            }elseif($cate == 7){
                $food = file_get_contents("html/food.html");
                echo json_encode($food);
            }

        }else{
            return view('Admin.goods.addTwo');
        }
    }
    
}