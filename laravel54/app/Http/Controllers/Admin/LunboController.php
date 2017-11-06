<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Lunbo;
use DB;
class LunboController extends BaseController{
    /**
     * 轮播图列表
     */
    public function show(){
        $list=Lunbo::show();
        return view('Admin.lunbo.show',['lunbo'=>$list]);
    }

    /**
     * 添加展示表单
     */
    public function add(){
        return view ("Admin.Lunbo.add");
    }

    /**
     * 添加
     */
    public function addPost(){
        $res=Lunbo::addPost();
        if($res){
            return redirect('/lunbo/show');
        }else{
            return "添加失败!";
        }
    }
    
    /**
     * 修改
     */
    public function update(Request $r, $id){
        $row = Lunbo::edit($id);
        if ($_POST) {
            $file = $r->file('img');
            if ($file) {
                $extension = $file->getClientOriginalExtension();
                $fileName = str_random(8) . "." . $extension;
                $filePath = $file->move('uploads', $fileName);
                $res=Lunbo::editDo($id,$filePath);
                if ($res) {
                    $img2 = (array)$row;
                    $imgName = $img2["img"];
                    if (!empty($imgName)) {
                        unlink($imgName);
                    }
                    return redirect('/lunbo/show');
                }
            } else {
                return "没有数据被修改";
            }
        }
        return view('Admin.lunbo.update', array('row' => $row));
    }

    /**
     * 删除
     */
    public function delete($ids){
        $res=Lunbo::del($ids);
        if($res){
            return array("res"=>"ok");
        }else{
            return array("res"=>"no");
        }
    }

    /**
     * 轮播图排序
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
            $data['img_sort']=$v;
            $res=DB::table('lunbos')->where('id',$k)->update($data);
        }
        if($res){
            return array("res"=>"ok");
        }else{
            return array('res'=>"no");
        }
    }
}