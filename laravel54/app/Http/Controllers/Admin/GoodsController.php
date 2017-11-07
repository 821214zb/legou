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
        $cate = $goods->category();

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
                    if(!empty($_POST['posid'])){
                        $sid = $_POST['posid'];
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
                        if ($data) {
                            return redirect('goods/show');
                        }
                    }
                }
            }
        }
        //推荐位查询
        $res = DB::table('posids')->get();
        //分类表查询
        $data = DB::table('cates')->where('cate_pid','0')->select('id','cate_pid','cate_title')->get();
        $row = $goods->category();
        //分类联动
        if(!empty($_GET['pid'])){
            $id = $_GET['pid'];
            $res = DB::table('cates')->where('cate_pid',$id)->select('id','cate_pid','cate_title')->get();
            echo json_encode($res);
        }else{
            return view('Admin.goods.add',['cate'=>$data,'row'=>$row,'res'=>$res]);
        }
    }


    /**
     * 商品修改
     */
    public function update(){
        return view('Admin.goods.update');
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