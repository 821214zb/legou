<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use DB;
class Admin extends Common{
    /**
     * 管理员列表
     */
    static function show(){
        $list=DB::table("admins")->where(["status"=>3])->paginate(5);
        return $list;
    }
    
    /**
     * 添加用户
     */
    static function addPost(){
        $request=request();
        $password=$request->password;
        $salt= Common::str_rand();
        $pass=md5(md5($password).$salt);
        $row=DB::table("admins")->insert(
            array(
                'salt'=>$salt,
                'account'=>$request->account,
                'nickname'=>$request->nickname,
                'password'=>$pass,
                'email'=>$request->email,
                'remark'=>$request->remark,
                'status'=>$request->status,
                'create_time'=>time()
            )
        );
        return $row;
    }
    
    /**
     * 修改用户
     */
    static function edit($id){
        $row=DB::table("admins")->where('id',$id)->first();
        return $row;
    }
    static function editDo($id){
        $request=request();
        if($request->password !=""){
            $password=$request->password;
            $salt= Common::str_rand();
            $pass=md5(md5($password).$salt);
        }else{
            $list=DB::table("admins")->select('password','salt')->where('id',$id)->get();
            $data = json_decode(json_encode($list),true);
            //var_dump($data);die;
            $salt=$data[0]['salt'];
            $pass = $data[0]['password'];
        }
        $data=array(
            'salt'=>$salt,
            'account'=>$request->account,
            'nickname'=>$request->nickname,
            'password'=>$pass,
            'email'=>$request->email,
            'remark'=>$request->remark,
            'status'=>$request->status,
            'update_time'=>time()
        );
        $row=DB::table("admins")->where("id",$id)->update($data);
        return $row;
    }

    /**
     * 删除用户
     */
    static function del($ids){
        $ids=explode(",",$ids);
        $res=DB::table("admins")->whereIn("id",$ids)->update(["status"=>0]);
        return $res;
    }
    
}