<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use DB;
class Role extends Model{
    /**
     * 角色列表
     */
    static function show(){
        $list=DB::table("roles")->paginate(3);
        return $list;
    }
    
    /**
     * 添加角色
     */
    static function addPost(){
        $request=request();
        $row=DB::table('roles')->insert(
            array(
                'name'=>$request->name,
                'status'=>$request->status,
                'remark'=>$request->remark,
                'create_time'=>time(),
            )
        );
        return $row;
    }

    /**
     * 修改角色
     */
    static function edit($id){
        $row=DB::table("roles")->where('id',$id)->first();
        return $row;
    }
    
    static function editDo($id){
        $request=request();
        $res=DB::table('roles')->where('id',$id)->update(
            array(
                'name'=>$request->name,
                'remark'=>$request->remark,
                'status'=>$request->status,
                'update_time'=>time(),
            )
        );
        return $res;
    }
    
    /**
     * 删除
     */
    static function del($ids){
        $ids = explode(",",$ids);
        $res=DB::table("roles")->whereIn("id",$ids)->update(['status'=>0]);
        return $res;
    }
    

}