<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Lunbo;
use DB;
use App\posid;
class PosidController extends CommonController
{
    /**
     * 推荐位类型列表
     */
    public function show()
    {

        $list = posid::select('*')->paginate(3);
        return view('Admin.posid.show',['list'=>$list]);
    }

    /**
     * 添加推荐位置
     */
    public function add()
    {
        $req = Request();
        if ($_POST) {
            $res = posid::insertGetId(['type'=>$req->type,'status'=>$req->status]);
            if($res > 0 ){
                return redirect("/posid/show");
            }else{
                return redirect("/posid/add");
            }
        } else {
            return view("Admin.posid.add");
        }
    }

    /**
     * 修改推荐位类型
     */
    public function update($id)
        
    {   $req = Request();
        if ($_POST) {
            $res = posid::where('id',$id)->update(['type'=>$req->type,'status'=>$req->status]);
            if($res){
                return redirect("/posid/show");
            }else{
                return redirect("/posid/show");
            }
        } else {
            //查询修改数据
            $list = posid::where('id',$id)->first();
            return view("Admin.posid.update",['list'=>$list]);
        }
    }



    /**
     * 展示推荐位具体数据
     */
    public function getList($id)
    {
        $list = DB::table('goods_posids')->where('posids_id',$id)->paginate(5);
        return view('Admin.Posid.posid_list',['list'=>$list]);

    }
    
    /**
     * 修改推荐位具体数据状态
     */
    public function getStatus($id,$status)
    {
        $res = DB::table('goods_posids')->where('id',$id)->update(['status'=>$status]);
        if($res){
            return redirect("/posid/show");
        }else{
            return redirect("/posid/show");
        }
        
    }

    /**
     * 给推荐位图片添加图片
     */
    public function getupload($goods_id){

        $req = Request();
        if($_POST){
            $filePath = posid::getFilePath($req);//获取上传路径
            $res = DB::table('goods_posids')->where('goods_id',$goods_id)->update(['goods_img'=> $filePath]);
            if($res){
                return redirect("/posid/show");
            }else{
                return redirect("/posid/show");
            }
        }else{
            return view('Admin.Posid.upload',['goods_id'=>$goods_id]);
        }
        
    }

    /**
     * 商品分类排序
     *
     */
    public function sort($ids,$sort,$posid_id)
    {
        $res = posid::getSort($ids,$sort,$posid_id);

        if($res > 0){
            echo json_encode('商品排序成功！');
        }else{
            echo json_encode('商品排序失败！');
        }
    }

}