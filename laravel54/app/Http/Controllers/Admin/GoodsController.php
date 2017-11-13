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

class GoodsController extends CommonController{
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
        //搜索推荐位
        $posids = DB::table('posids')->get();
        //搜索店铺
        $shops = DB::table('shops')->get();

        if($_POST){
            //var_dump($_POST);
        }
        $lists = DB::table('goods')->paginate(5);
        return view('Admin.goods.show',['goods'=>$lists,'cateList'=>$cateList,'cate'=>$cate,'posids'=>$posids,'shops'=>$shops]);
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
                        $color = $_POST['color'];
                        $table = "cate_box";
                        $data = $goods->publicAdd($size,$color,$table,$goods_id);

                        DB::table('goods')->where('id',$goods_id)->update(['cate_id'=>$status]);
                        if ($data) {
                            return redirect('goods/show');
                        }
                    }
                } elseif ($status == 2) {
                    //家电表
                    if ($_POST) {
                        $goods->cate_jiadian($goods_id);
                        $table = "cate_jiadian";
                        $size = $_POST['size'];
                        $color = $_POST['color'];
                        $screen_size = $_POST['screen_size'];
                        $data = $goods->publicJiadian($size,$color,$table,$goods_id,$screen_size);

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
                        $color = $_POST['color'];
                        $table = "cate_cloth";
                        $data = $goods->publicAdd($size,$color,$table,$goods_id);

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
                        $color = $_POST['color'];
                        $table = "cate_shoes";
                        $data = $goods->publicAdd($size,$color,$table,$goods_id);

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
                        $color = $_POST['color'];
                        $table = "cate_hufu";
                        $data = $goods->publicAdd($size,$color,$table,$goods_id);

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
                        $color = $_POST['color'];
                        $table = "cate_shuma";
                        $data = $goods->publicAdd($size,$color,$table,$goods_id);

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
                        $color = $_POST['color'];
                        $table = 'cate_food';
                        $data = $goods->publicFood($flavor,$color,$table,$goods_id);

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

        if($_POST) {
            if ($_POST['one'] == '确认提交') {
                $goods_id = $_POST['gid'];
                $goods->upGoods($goods_id);
                $file = $req->file('img');
                if ($file) {
                    $extension = $file->getClientOriginalExtension();
                    $fileName = str_random(8) . "." . $extension;
                    $filePath = $file->move('uploads', $fileName);
                    //添加的同时删除之前的图片
                    $img = DB::table("goods")->where('id',$goods_id)->update(['goods_img'=>$filePath]);
                    if($img){
                        $goods_img = session('goods_img');
                        if (!empty($goods_img)) {
                            unlink($goods_img);
                        }
                    }
                }
                //修改推荐位
                if (!empty($_POST['posid'])) {
                    $sid = $_POST['posid'];
                    DB::table("goods_posids")->where('goods_id', $goods_id)->delete();
                    foreach ($sid as $v) {
                        DB::table("goods_posids")->insert(['goods_id' => $goods_id, 'posids_id' => $v]);
                    }
                }
            }
            $cate_id = session('cate_id');
            $goods_id = session('id');
            //判断视图，修改属性
            if ($cate_id == 1) {
                $table = "cate_box";
                $box_arr = $goods->public_method($table,$goods_id);
                //修改箱包属性
                if ($_POST) {
                    if(!empty($_POST['size'])){
                        DB::table("cate_box")->where('goods_id', $goods_id)->delete();
                        $goods->cate_box($goods_id);

                        $size = $_POST['size'];
                        $color = $_POST['color'];
                        $table = "cate_box";
                        $data = $goods->publicAdd($size,$color,$table,$goods_id);
                        if ($data) {
                            return redirect('goods/show');
                        }
                    }
                }
                return view('Admin.goods.up_box', ['goods_id' => $goods_id, 'box_arr' => $box_arr]);
            } elseif ($cate_id == 2) {
                $table = "cate_jiadian";
                $jiadian_arr = $goods->public_method($table,$goods_id);
                //修改家电属性
                if ($_POST) {
                    if(!empty($_POST['size'])){
                        DB::table("cate_jiadian")->where('goods_id', $goods_id)->delete();
                        $goods->cate_jiadian($goods_id);

                        $table = "cate_jiadian";
                        $size = $_POST['size'];
                        $color = $_POST['color'];
                        $screen_size = $_POST['screen_size'];
                        $data = $goods->publicJiadian($size,$color,$table,$goods_id,$screen_size);
                        if ($data) {
                            return redirect('goods/show');
                        }
                    }
                }
                return view('Admin.goods.up_jiadian', ['goods_id' => $goods_id,'jiadian_arr'=>$jiadian_arr]);
            } elseif ($cate_id == 3) {
                $table = "cate_cloth";
                $cate_cloth = $goods->public_method($table,$goods_id);

                //修改服装属性
                if ($_POST) {
                    if(!empty($_POST['size'])){
                        DB::table("cate_cloth")->where('goods_id', $goods_id)->delete();
                        $goods->cate_cloth($goods_id);

                        $size = $_POST['size'];
                        $color = $_POST['color'];
                        $table = "cate_cloth";
                        $data = $goods->publicAdd($size,$color,$table,$goods_id);
                        if ($data) {
                            return redirect('goods/show');
                        }
                    }
                }
                return view('Admin.goods.up_cloth', ['goods_id' => $goods_id,'cate_cloth'=>$cate_cloth]);
            } elseif ($cate_id == 4) {
                $table = "cate_shoes";
                $cate_shoes = $goods->public_method($table,$goods_id);
                //修改服装属性
                if ($_POST) {
                    if(!empty($_POST['size'])){
                        DB::table("cate_shoes")->where('goods_id', $goods_id)->delete();
                        $goods->cate_shoes($goods_id);

                        $size = $_POST['size'];
                        $color = $_POST['color'];
                        $table = "cate_shoes";
                        $data = $goods->publicAdd($size,$color,$table,$goods_id);
                        if ($data) {
                            return redirect('goods/show');
                        }
                    }
                }
                return view('Admin.goods.up_shoes', ['goods_id' => $goods_id,'cate_shoes'=>$cate_shoes]);
            } elseif ($cate_id == 5) {
                $table = "cate_hufu";
                $cate_hufu = $goods->public_method($table,$goods_id);
                //修改护肤品属性
                if ($_POST) {
                    if(!empty($_POST['size'])){
                        DB::table("cate_hufu")->where('goods_id', $goods_id)->delete();
                        $goods->cate_hufu($goods_id);

                        $size = $_POST['size'];
                        $color = $_POST['color'];
                        $table = "cate_hufu";
                        $data = $goods->publicAdd($size,$color,$table,$goods_id);
                        if ($data) {
                            return redirect('goods/show');
                        }
                    }
                }
                return view('Admin.goods.up_hufu', ['goods_id' => $goods_id,'cate_hufu'=>$cate_hufu]);
            } elseif ($cate_id == 6) {
                $table = "cate_shuma";
                $cate_shuma = $goods->public_method($table,$goods_id);
                //修改数码属性
                if ($_POST) {
                    if(!empty($_POST['size'])){
                        DB::table("cate_shuma")->where('goods_id', $goods_id)->delete();
                        $goods->cate_shuma($goods_id);

                        $size = $_POST['size'];
                        $color = $_POST['color'];
                        $data = $goods->publicAdd($size,$color,$table,$goods_id);
                        if ($data) {
                            return redirect('goods/show');
                        }
                    }
                }
                return view('Admin.goods.up_shuma', ['goods_id' => $goods_id,'cate_shuma'=>$cate_shuma]);
            } elseif ($cate_id == 7) {
                $table = "cate_food";
                $cate_food = $goods->public_method($table,$goods_id);
                //修改商品属性
                if($_POST){
                    if(!empty($_POST['flavor'])) {
                        DB::table("cate_food")->where('goods_id', $goods_id)->delete();
                        $goods->cate_food($goods_id);

                        $flavor = $_POST['flavor'];
                        $color = $_POST['color'];
                        $data = $goods->publicFood($flavor, $color, $table, $goods_id);
                        if ($data) {
                            return redirect('goods/show');
                        }

                    }
                }
                return view('Admin.goods.up_food', ['goods_id' => $goods_id,'cate_food'=>$cate_food]);
            }
        }else {
            //分类默认选中
            $cateThree = DB::table('cates')->where('cate_level', '3')->select('id', 'cate_pid', 'cate_title')->get();
            $cateTwo = DB::table('cates')->where('cate_level', '2')->select('id', 'cate_pid', 'cate_title')->get();
            $cateOne = DB::table('cates')->where('cate_level', '1')->select('id', 'cate_pid', 'cate_title')->get();
            //商品查询
            $goodsInfo = DB::table('goods')->where('id', $gid)->first();
            $goods_img = $goodsInfo->goods_img;
            $cate_id = $goodsInfo->cate_id;
            $id = $goodsInfo->id;
            session(['goods_img' => $goods_img]);
            session(['cate_id' => $cate_id]);
            session(['id' => $id]);

            //查询店铺
            $shop = DB::table('shops')->get();
            //推荐位默认选中
            $g_p = DB::table('goods_posids')->where('goods_id', $gid)->get();
            $arrGp = array();
            foreach ($g_p as $k => $v) {
                $arrGp[$v->posids_id] = $v->posids_id;
            }
            //推荐位查询
            $res = DB::table('posids')->get();
            $arrPosids = array();
            foreach ($res as $k => $v) {
                $arrPosids[$v->id] = $v->type;
            }
            //分类顶级查询
            $data = DB::table('cates')->where('cate_pid', '0')->select('id', 'cate_pid', 'cate_title')->get();
            //品牌查询
            $row = $goods->brand();
            return view('Admin.goods.update', ['cate' => $data, 'row' => $row, 'res' => $arrPosids, 'goodsInfo' => $goodsInfo, 'g_p' => $arrGp, 'cateThree' => $cateThree, 'cateTwo' => $cateTwo, 'cateOne' => $cateOne,'shop'=>$shop]);
        }
    }
    
    /*
     * 分类三级联动
     * */
    public function linkage($pid){
        if(!empty($pid)){
            $res = DB::table('cates')->where('cate_pid',$pid)->select('id','cate_pid','cate_title')->get();
            echo json_encode($res);
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