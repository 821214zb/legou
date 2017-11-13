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
class RoleController extends CommonController{
    /**
     * 角色列表
     */
    public function show(){
        $list=Role::show();
        return view("Admin.role.show",["role"=>$list]);
    }
    
    /**
     * 添加角色
     */
    public function add(){
        if($_POST){
            $row=Role::addPost();
            if($row){
                return redirect('/role/show');
            }else{
                return "添加失败!";
            }
        }else{
            return view("Admin.role.add");
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
        
        if($_POST){
            $groupId=isset($_POST["groupId"]) ? $_POST["groupId"] : "";
            if($groupId){
                $groupList= DB::table("role_admins")->where("role_id",$groupId)->delete();
            }
            $id=isset($_POST["groupUserId"])?$_POST["groupUserId"]:"";
            if($id){
                foreach($id as $v){
                    $data["role_id"]=$groupId;
                    $data["admin_id"]=$v;
                    $res=DB::table("role_admins")->insert($data);
                }
                if($res){
                    return redirect("/role/show");
                }else{
                    echo "<script>alert('授权失败').location.href='/role/show'</script>";
                }
            }else{
                return redirect("/role/show");
            }
        }else{
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
       
    }

    /**
     * 应用授权
     */
    public function app(){
        $request = request();
        $id      = $request->id;
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

        $groupId = isset($_POST["groupId"]) ? $_POST["groupId"] : "";           //角色id
        $appId   = isset($_POST["groupAppId"]) ? $_POST["groupAppId"] : array();//应用id

        if($groupId){
            DB::table("accesss")->where(["level"=>1])->where("role_id",$groupId)->delete(); //删除当前角色组下的所有权限
        }
        if($appId){
            foreach($appId as $v){
                $data["role_id"]=$groupId;
                $data["node_id"]=$v;
                $data["pid"]=0;
                $data["level"]=1;
                $res=DB::table("accesss")->insert($data);
            }
            if($res){
                return redirect("/role/show");
            }else{
                echo "<script>alert('授权失败').location.href='/role/show'</script>";
            }
        }else{
            return redirect("/role/show");
        }
    }

    /**
     * 模块授权
     */
    public function module(){
        
        $request = request();
        $groupId = isset($request->groupId) ? $request->groupId: "" ;   //获取角色id
        $appId   = isset($request->appId) ? $request->appId: "";        //获取应用id      
        
        //读取角色列表
        $list=DB::table("roles")->select("id","name")->get();
        $groupList=array();
        foreach($list as $vo){
            $groupList[$vo->id]=$vo->name; 
        }
        //var_dump($groupList);die;
        $appList=array();
        if(!empty($groupId)){
            //获取当前组的操作权限的列表(当前角色的项目列表)
            $list2=DB::table("nodes")->join('accesss','accesss.node_id', '=', 'nodes.id')->where("nodes.pid",0)->where("role_id",$groupId)->select("nodes.id","nodes.name","nodes.title")->get();
            foreach($list2 as $vo){
                $appList[$vo->id]=$vo->title;
            }
        }
//        var_dump($appList);die;
        $moduleList=array();
        if(!empty($appId)){
            //读取当前项目的模块列表
            $nodeList=DB::table("nodes")->where(["level"=>2,"pid"=>$appId])->select("id","title")->get();
            foreach($nodeList as $vo){
                $moduleList[$vo->id]=$vo->title;
            }
        }
//        var_dump($moduleList);die;
        //获取当前项目的模块授权信息
        $groupModuleList=array();
        if(!empty($groupId) && !empty($appId)){
            $groupLists=DB::table("nodes")->join('accesss','accesss.node_id', '=', 'nodes.id')->where("nodes.pid",$appId)->where("role_id",$groupId)->select("nodes.id","nodes.name","nodes.title")->get();
            foreach($groupLists as $vo){
                $groupModuleList[$vo->id]=$vo->id;
            }
        }
       // var_dump($groupList);die;
        return view("admin.role.module",["id"=>$groupId,'selectGroupId'=>$groupId,'groupList'=>$groupList,"appList"=>$appList,"selectAppId"=>$appId,"moduleList"=>$moduleList,'groupModuleList'=>$groupModuleList,]);
    }

    /**
     * 保存模块授权
     */
    public function setModule(){
        
        $moduleId = isset($_POST["groupModuleId"]) ? $_POST["groupModuleId"] : array();       //获取模块id
        $groupId  = isset($_POST["groupId"]) ? $_POST["groupId"] : "";                        //获取角色组id
        $appId    = isset($_POST["appId"]) ? $_POST["appId"] : "";                            //获取应用id
        
        //删除当前组的模块列表
        if($groupId && $appId){
            $moduleList=DB::table("accesss")->where(["pid"=>$appId,"role_id"=>$groupId,"level"=>2])->delete();
        }
        //保存模块授权
        if($moduleId){
            foreach($moduleId as $v){
                $data["role_id"]=$groupId;
                $data["node_id"]=$v;
                $data["pid"]=$appId;
                $data["level"]=2;
                $res=DB::table("accesss")->insert($data);
            }
            if($res){
                return redirect("/role/show");
            }else{
                echo "<script>alert('授权失败').location.href='/role/show'</script>";
            }
        }else{
            return redirect("/role/show");
        }
    }

    /**
     * 操作授权
     */
    public function action(){
        $request=request();
        $id=$request->groupId;
        $groupId=isset($request->groupId) ? $request->groupId : "";
        $appId=isset($request->appId) ? $request->appId : "";
        $moduleId=isset($request->moduleId) ? $request->moduleId : "";
        //读取系统组列表(角色列表)
        $list=DB::table("roles")->select("id","name")->get();
        $groupList=array();
        foreach($list as $vo){
            $groupList[$vo->id]=$vo->name;
        }
        $appList=array();
        if(!empty($groupId)){
            //获取当前组的操作权限的列表(当前角色的项目列表)
            $list2=DB::table("nodes")->join('accesss','accesss.node_id', '=', 'nodes.id')->where("nodes.pid",0)->where("role_id",$groupId)->select("nodes.id","nodes.name","nodes.title")->get();
            foreach($list2 as $vo){
                $appList[$vo->id]=$vo->title;
            }
        }
        $moduleList=array();
        if(!empty($appId)){
            //读取当前项目的模块列表
            $nodeList=DB::table("nodes")->where(["level"=>2,"pid"=>$appId])->select("id","title")->get();
            foreach($nodeList as $vo){
                $moduleList[$vo->id]=$vo->title;
            }
        }
        $actionList=array();
        if(!empty($moduleId)){
            //读取当前项目的操作列表
            $map["level"]=3;
            $map["pid"]=$moduleId;
            $list=DB::table('nodes')->where($map)->select("id","title")->get();
            if($list){
                foreach($list as $vo){
                    $actionList[$vo->id]=$vo->title;
                }
            }
        }
        //获取当前用户组的操作权限信息
        $groupActionList=array();
        if(!empty($groupId) && !empty($moduleId)){
            //获取当前组的操作权限列表
            $list1=DB::table("nodes")->join("accesss","accesss.node_id",'=','nodes.id')->where('nodes.pid',$moduleId)->where("role_id",$groupId)->select("nodes.id","nodes.name","nodes.title")->get();
            if($list1){
                foreach($list1 as $vo){
                    $groupActionList[$vo->id]=$vo->id;
                }
            }
        }
        return view("admin.role.action",["id"=>$id,"groupList"=>$groupList,"selectGroupId"=>$groupId,"appList"=>$appList,"selectAppId"=>$appId,"moduleList"=>$moduleList,"selectModuleId"=>$moduleId,"actionList"=>$actionList,"groupActionList"=>$groupActionList]);
    }

    /**
     * 保存操作授权
     */
    public function setAction(){
        $groupId=isset($_POST["groupId"]) ? $_POST["groupId"] : "";
        $moduleId=isset($_POST["moduleId"]) ? $_POST["moduleId"] : "";
        $moduleId=implode($moduleId);
        $id=isset($_POST["groupActionId"]) ? $_POST["groupActionId"] : "";
        //删除当前组的操作方法
        if($groupId && $moduleId){
            $list=DB::table("accesss")->where(["level"=>3,"pid"=>$moduleId,"role_id"=>$groupId])->delete();
        }
        //保存方法授权
        if($id){
            foreach($id as $v){
                $data["role_id"]=$groupId;
                $data["node_id"]=$v;
                $data["pid"]=$moduleId;
                $data["level"]=3;
                $res=DB::table("accesss")->insert($data);
            }
            if($res){
                return redirect("/role/show");
            }else{
                echo "<script>alert('授权失败').location.href='/role/show'</script>";
            }
        }else{
            return redirect("/role/show");
        }
    }
}