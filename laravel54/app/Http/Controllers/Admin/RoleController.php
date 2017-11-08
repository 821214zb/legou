<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Role;
use DB;
use phpDocumentor\Reflection\DocBlock\Tags\Var_;

class RoleController extends BaseController{
    /**
     * 角色列表
     */
    public function show(){
        $list=Role::show();
        return view("Admin.role.show",["role"=>$list]);
    }

    /**
     * 展示视图
     */
    public function add(){
        return view("Admin.role.add");
    }
    
    /**
     * 添加角色
     */
    public function addPost(){
        $row=Role::addPost();
        if($row){
            return redirect('/role/show');
        }else{
            return "添加失败!";
        }
    }
    
    /**
     * 修改角色
     */
    public function update($id){
        if(empty($_POST)){
            $row=Role::edit($id);
            return view('Admin.role.update', array('row' => $row));
        }else{
            $res=Role::editDo($id);
            if($res){
                return redirect('/role/show');
            }else{
                return "没有数据被修改";
            }
        }
    }

    /**
     * 删除
     */
    public function delete($ids){
        $res=Role::del($ids);
        if($res){
            return array("res"=>"ok");
        }else{
            return array('res'=>"no");
        }
    }
    
    /**
     * 用户列表
     */
    public function uList(){
        $request=request();
        $id=$request->id;
        //获取用户列表
        $list2=DB::table("admins")->select("id","account","nickname")->get();
        $userList=array();
        foreach($list2 as $key=>$vo){
            $userList[$vo->id]=$vo->account ." ".$vo->nickname;
        }
        //获取角色列表
        $list1=DB::table("roles")->select("id","name")->get();
        $groupList=array();
        foreach($list1 as $key=>$vo){
            $groupList[$vo->id]=$vo->name;
        }
        //获取当前用户组信息
        $groupId=isset($request->id) ? $request->id: "" ;
        $groupUserList=array();
        if(!empty($groupId)){
            //获取当前组的用户列表
            $list=DB::table("admins")->join('role_admins', 'admins.id', '=', 'role_admins.admin_id')->where("role_id",$groupId)->select("admins.id")->get();
            foreach($list as $vo){
                $groupUserList[$vo->id]=$vo->id;
            }
        }
        return view("admin.role.uList",["id"=>$id,"selectGroupId"=>$groupId,"groupList"=>$groupList,"groupUserList"=>$groupUserList,"userList"=>$userList]);
    }

    //执行用户列表保存操作
    public function setUser(){
        $id=$_POST["groupUserId"];
        $groupId=$_POST["groupId"];
        if($groupId){
            $groupList= DB::table("role_admins")->where("role_id",$groupId)->delete();
        }
        foreach($id as $v){
            $data["role_id"]=$groupId;
            $data["admin_id"]=$v;
            $res=DB::table("role_admins")->insert($data);
        }
        if($res){
            return "授权成功！";
        }else{
            return "授权失败！";
        }
    }

    /**
     * 应用授权
     */
    public function app(){
        $request=request();
        $id=$request->id;
        //读取系统项目列表
        $list1=DB::table("nodes")->where(["level"=>1])->select("id","title")->get();
        $appList=array();
        foreach($list1 as $vo){
            $appList[$vo->id]=$vo->title;
        }
        //读取系统组列表(角色列表)
        $list=DB::table("roles")->select("id","name")->get();
        $groupList=array();
        foreach($list as $vo){
            $groupList[$vo->id]=$vo->name;
        }
        //获取当前用户组项目权限信息
        $groupId=isset($request->id) ? $request->id: "" ;
        $groupAppList=array();
        if(!empty($groupId)){
            //获取当前组的操作权限的列表(当前角色的项目列表)
            $list2=DB::table("nodes")->join('accesss','accesss.node_id', '=', 'nodes.id')->where("nodes.pid",0)->where("role_id",$groupId)->select("nodes.id","nodes.name","nodes.title")->get();
            foreach($list2 as $vo){
                $groupAppList[$vo->id]=$vo->id;
            }
        }
        return view("admin.role.app",["id"=>$id,"appList"=>$appList,"groupAppList"=>$groupAppList,"groupList"=>$groupList,"selectGroupId"=>$groupId]);
    }
    
    /**
     * 保存应用授权
     */
    public function setApp(){
        $groupId=$_POST["groupId"];//角色id
        $id=$_POST["groupAppId"];//项目的id
        if($groupId){
            $appList=DB::table("accesss")->where(["level"=>1])->where("role_id",$groupId)->delete();
        }
        foreach($id as $v){
            $data["role_id"]=$groupId;
            $data["node_id"]=$v;
            $data["pid"]=0;
            $data["level"]=1;
            $res=DB::table("accesss")->insert($data);
        }
        if($res){
            return "授权成功！";
        }else{
            return "授权失败！";
        }
    }

    /**
     * 模块授权
     */
    public function module(){
        $request=request();
        $id=$request->id;
        $groupId=isset($request->id) ? $request->id: "" ;
        $appId=$_GET["appId"];
        //读取系统组列表(角色列表)
        $list=DB::table("roles")->select("id","name")->get();
        $groupList=array();
        foreach($list as $vo){
            $groupList[$vo->id]=$vo->name;
        }
//        var_dump($groupList);die;
        $groupAppList=array();
        if(!empty($groupId)){
            //获取当前组的操作权限的列表(当前角色的项目列表)
            $list2=DB::table("nodes")->join('accesss','accesss.node_id', '=', 'nodes.id')->where("nodes.pid",0)->where("role_id",$groupId)->select("nodes.id","nodes.name","nodes.title")->get();
            foreach($list2 as $vo){
                $groupAppList[$vo->id]=$vo->title;
            }
        }
//        var_dump($groupAppList);die;
        $moduleList=array();
        if(!empty($appId)){
            //读取当前项目的模块列表
            $nodeList=DB::table("nodes")->where(["level"=>2,"pid"=>$appId])->select("id","title")->get();
//            var_dump($nodeList);die;
            foreach($nodeList as $vo){
                $moduleList[$vo->id]=$vo->title;
            }
        }
        //获取当前项目的模块授权信息
        $groupModuleList=array();
        if(!empty($groupId) && !empty($appId)){
            $groupList=DB::table("roles")->join('accesss','accesss.node_id', '=', 'nodes.id')->where("nodes.pid",0)->where("role_id",$groupId)->select("nodes.id","nodes.name","nodes.title")->get();
//            var_dump($groupList);die;
            foreach($groupList as $vo){
                $groupModuleList[$vo->id]=$vo->id;
            }
        }
        return view("admin.role.module",["id"=>$id,'selectGroupId'=>$groupId,'groupList'=>$groupList,"groupAppList"=>$groupAppList,"selectAppId"=>$appId,'groupModuleList'=>$groupModuleList,"moduleList"=>$moduleList]);
    }
}