<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Lunbo;
use DB;
use App\shop;
use App\Cate;
use App\region;
class ShopController extends CommonController
{
    /**
     * 店铺列表
     */
    public function show()
    {
        $shop_data = '';
        if($_POST){
            if($_POST['goods_cate'] != 0){
                $goods_cate = $_POST['goods_cate'];
                //查询店铺信息用于视图层展示
                $shop_data = shop::join('cates', 'id', '=', 'goods_cate')->where('goods_cate',$goods_cate)->select('shop_id','name','cate_title','goods_cate','shop_status','shop_notice','zhuce_time')->paginate(5);
            }else{
                $shop_data = shop::join('cates', 'id', '=', 'goods_cate')->select('shop_id','name','cate_title','goods_cate','shop_status','shop_notice','zhuce_time')->paginate(5);
            }
        }else{
            //查询店铺信息用于视图层展示
            $shop_data = shop::join('cates', 'id', '=', 'goods_cate')->select('shop_id','name','cate_title','goods_cate','shop_status','shop_notice','zhuce_time')->paginate(5);
        }
        //查询一级商品分类
        $cate = Cate::where('cate_level','1')->select('cate_title','id')->get();
        return view('Admin.Dianpu.show',['list'=>$shop_data,'cate'=>$cate]);
    }

    /**
     * 添加店铺
     */
    public function add()
    {
        $req = Request();
        if ($_POST) {

           $res =  shop::get_insert($req);
            if($res > 0 ){
                return redirect("/shop/show");
            }else{
                return redirect("/shop/add");
            }
           
        } else {
            //查询一级商品分类
            $cate = Cate::where('cate_level','1')->select('cate_title','id')->get();
            //查询城市列表信息
            $region = region::get_region();
            return view("Admin.Dianpu.add",['list'=>$cate,'a'=>$region['a'],'b'=>$region['b'],'c'=>$region['c']]);
        }
    }

    /**
     * 修改店铺
     */
    public function update($id)
        
    {   $req = Request();
        if ($_POST) {
            $res = shop::get_update($req,$id);
            if($res){
                return redirect("/shop/show");
            }else{
                return redirect("/shop/show");
            }
        } else {
            //查询一级商品分类
            $cate = Cate::where('cate_level','1')->select('cate_title','id')->get();
            $list = shop::where('shop_id',$id)->first();
            //查询城市列表信息
            $region = region::get_region();
            return view("Admin.Dianpu.update",['list'=>$cate,'old_list'=>$list,'a'=>$region['a'],'b'=>$region['b'],'c'=>$region['c']]);
        }
    }

    /**
     * 删除店铺
     */
    public function delete()
    {

        return view("Admin.Dianpu");
    }

    /**
     * 店铺审核
     */
    public function check($status,$id)
    {

        if ($id != 0) {

            if($status == 2){
               shop::where('shop_id',$id)->update(['shop_status'=>$status]);
                return redirect('/shop/show');
            }else{
                shop::where('shop_id',$id)->update(['shop_status'=>$status]);
                return redirect('/shop/show');
            }
            return view("Admin.Dianpu.show");
        } else {
            //查询店铺信息用于视图层展示
            $shop_data = shop::join('cates', 'id', '=', 'goods_cate')->select('name','shop_id','cate_title','goods_cate','shop_status','shop_notice','zhuce_time')->paginate(5);
            return view('Admin.Dianpu.check',['list'=>$shop_data]);

        }
    }

}