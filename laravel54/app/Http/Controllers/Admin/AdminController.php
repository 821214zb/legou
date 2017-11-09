<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Admin;
use DB;
class AdminController extends CommonController{
    /**
     * 管理员列表
     */
    public function show($keyword=""){
        if($_GET){
            $keyword=$_GET['keyword']?$_GET['keyword']:"";
            $list=DB::table('admins')->where('account','like','%'.$keyword.'%')->paginate(3);
        }else{
            $list=DB::table('admins')->paginate(3);
        }
        return view('Admin.admin.show',['admin'=>$list,'keyword'=>$keyword]);
    }

    /**
     * 展示表单
     */
    public function add(){
        return view ("Admin.admin.add");
    }
    
    /**
     * 添加用户
     */
    public function addPost(){
        $row=Admin::addPost();
        if($row){
            return redirect("/admin/show");
        }else{
            return "添加失败!";
        }
    }

    /**
     * 修改用户
     */
    public function update($id){
        if (empty($_POST)) {
            $row=DB::table("admins")->where('id',$id)->first();
            return view('Admin.admin.update', array('row' => $row));
        } else {
            $row=Admin::editDo($id);
            if($row){
                return redirect('/admin/show');
            }else{
                return "没有数据被修改";
            }
        }
    }

    /**
     * 删除用户
     */
    public function delete($ids){
        $res=Admin::del($ids);
        if($res){
            return array("res"=>"ok");
        }else{
            return array('res'=>"no");
        }
    }
    
}