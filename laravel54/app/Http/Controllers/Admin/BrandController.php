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
    public function show($keyword=""){
        if($_GET){
            $keyword=$_GET['keyword']?$_GET['keyword']:"";
            $list=DB::table('brands')->where('brand_name','like','%'.$keyword.'%')->where(['status'=>3])->orderBy('brand_sort', 'desc')->paginate(6);
        }else{
            $list=DB::table('brands')->where(['status'=>3])->orderBy('brand_sort', 'desc')->paginate(6);
        }
        return view('Admin.brand.show',['brand'=>$list,'keyword'=>$keyword]);
    }

    /**
     * 添加品牌
     */
    public function add(){
        return view('Admin.brand.add');
    }
    
    public function addPost(){
        $res=Brand::addPost();
        if($res){
            return redirect('/brand/show');
        }else{
            return "添加失败!";
        }
    }

    /**
     * 删除
     */
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
    
    /**
     * 排序
     */
    public function sort(){
        $sort_id=trim($_POST["id"],",");
        $sort=trim($_POST["sort"],",");
        $id_arr=explode(",",$sort_id);
        $sort_arr=explode(",",$sort);
        $arr=array();
        for($i=0; $i<count($id_arr); $i++){
            $arr[$id_arr[$i]]=$sort_arr[$i];
        }
        foreach($arr as $k=>$v){
            $data['brand_sort']=$v;
            $res=DB::table('brands')->where('id',$k)->update($data);
        }
        if($res){
            return array("res"=>"ok");
        }else{
            return array('res'=>"no");
        }
    }
}