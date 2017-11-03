<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
//use Intervention\Image\ImageManagerStatic as Image;
//use Intervention\Image\ImageManager;
use DB;
use App\Good;

class GoodsController extends BaseController{
    /**
     * 商品列表
     */
    public function show(){
        $lists = DB::table('goods')->paginate(5);
        return view('Admin.goods.show',['goods'=>$lists]);
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
            $file = $req->file('img');
            $extension = $file->getClientOriginalExtension();
            $fileName = str_random(8).".".$extension;
            $filePath = $file->move('uploads',$fileName);
            
            $goodsId = $goods->goodsAdd($filePath);
            //同时插入商品属性表
            $goodsInfo = DB::table('propertys')->insert(
                [
                    'goods_id'=>$goodsId,
                    'color'=>$req->color,
                    'size'=>$req->size,
                    'weight'=>$req->weight,
                ]
            );
            if($goodsInfo){
                return redirect('goods/show');
            }
        }
        $data = DB::table('cates')->where('cate_pid','0')->select('id','cate_pid','cate_title')->get();
        $row = DB::table('brands')->select('id','brand_name')->get();
        //分类联动
        if(!empty($_GET['pid'])){
            $id = $_GET['pid'];
            $res = DB::table('cates')->where('cate_pid',$id)->select('id','cate_pid','cate_title')->get();
            echo json_encode($res);
        }else{
            return view('Admin.goods.add',['cate'=>$data,'row'=>$row]);
        }
    }


    /**
     * 平台商品分类
     */
    
    public function cate(){
        return view('Admin.goods.Cate');
    }

    /**
     * 用户评论
     */
    public function pinglun(){
        return view('Admin.goods.pinglun');
    }
    
    /**
     * 品牌
     */
    public function brand(){
        return view('Admin.goods.brand');
    }
    
    /**
     * 删除商品
     */
    public function del(){
        return view('Admin.goods.del');
    }
}