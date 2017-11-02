<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Brand;
use DB;
class BrandController extends BaseController{
    /**
     * 品牌展示
     */
    public function show(){
        $list=Brand::show();
        return view('Admin.brand.show',['brand'=>$list]);
    }

    /**
     * 添加品牌
     */
    public function add(){
        return view('Admin.brand.add');
    }
    
    public function addPost(){
        $res=Brand::addPost();
        var_dump($res);
        if($res){
            return redirect('/brand/show');
        }else{
            return "添加失败!";
        }
    }
    
    public function delete($ids){
//        $ids = explode(',',$ids);
//        $res = Brand::whereIn('id',$ids)->update(['status'=>0]);
        $res=Brand::del($ids);
        if($res){
            return array("res"=>"ok");
        }else{
            return array('res'=>"no");
        }
    }

    /**
     * 修改品牌
     */
    public function update(Request $r,$id){
        if (empty($_POST)) {
            $row = Brand::edit($id);
            return view('Admin.brand.update', array('row' => $row));
        } else {
            $row=Brand::editDo($id);
            if($row){
                return redirect('/brand/show');
            }else{
                return "没有数据被修改";
            }
        }
    }
}