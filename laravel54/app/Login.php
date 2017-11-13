<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Session;
use Gregwar\Captcha\CaptchaBuilder;

class Login extends Common
{
    static $name = '';
    public static function getLogin($request)
    {
        $name = $request->name;
        //校验验证码
        if (Session::get('milkcaptcha') != $request->code) {
            echo "<script>alert('验证码输入不正确');location.href='/admin/login'</script>";
        }
        $list = DB::table("admins")->where('account','=', $name)->first();
        $data = json_decode(json_encode($list),true);
        if (!empty($data)) {
            $salt=$data['salt'];
            $password = md5(md5($request->password).$salt);
            if ($password == $data["password"]) {
             
                session(['username'=>$name]);
                session(['userId'=>$data['id']]);
                Login::$name = $name;
                //Session::flash('id', $data['id']);
                $ip = $_SERVER["REMOTE_ADDR"];
                //修改用户访问次数 最后登录时间 最后登陆ip   更新用户信息
                DB::table('admins')->where('id',$data["id"])->update(['login_count'=>$data['login_count']+1,'last_login_time'=>time(),'last_login_ip'=>$ip]);
                if ($data["status"] != 1 && $name != "admin") {
                    echo "<script>alert('您的账号已被禁用，请联系管理员!');location.href='/admin/logout'</script>";
                }



                $id = session('userId');
                //查询当前用户所有权限
                $role_id = DB::table('role_admins')->where('admin_id',$id)  //查询用户角色
                ->join('roles', 'id', '=', 'role_id')->select('role_id')->first();
                if(empty($role_id)){
                    echo "<script>alert('对不起您的用户组已经被禁用！');location.href='/admin/login';</script>";
                }
                $node_id = DB::table('accesss')->where('role_id',$role_id->role_id)->pluck('node_id');//获取该用户的权限id;
                $node_id = json_decode(json_encode($node_id),true);                                   //对象转化为数组
                session(['node_id'=>$node_id]);//保存用户的次高级权限

                //获取用户的权限并分配到页面展示相应的列表权限信息
                if($name == "admin"){
                    $root_info = DB::table('nodes')->where('level',1)->pluck('title','id');
                    $root_info_secondary = DB::table('nodes')->where('level',2)->select('pid','name','title')->get();
                }else {
                    $root_info = DB::table('nodes')->whereIn('id', $node_id)->where('level', 1)->pluck('title', 'id');
                    $root_info_secondary = DB::table('nodes')->whereIn('id', $node_id)->where('level', 2)->select('pid', 'name', 'title')->get();
                }
                //存储index模板文件列表权限信息
                session(['root_info'=>$root_info]);                    //保存用户的最高权限
                session(['root_info_secondary'=>$root_info_secondary]);//保存用户的次高级权限

//                //获取具体的权限1.2.3级别
//                if(!session('access_list')){
//                    $app    = DB::table('nodes')->whereIn('id', $node_id)->where('level',1)->select();//获取最高级权限
//                    $module = DB::table('nodes')->whereIn('id', $node_id)->where('level',2)->select();//获取控制器权限
//                    $action = DB::table('nodes')->whereIn('id', $node_id)->where('level',3)->select();//获取方法权限
//                    $access_list=array($app,$module,$action);
//                    session(['access_list'=>$access_list]);    //将三级权限存储到session中
//                }



                echo "<script>alert('登陆成功!');location.href='/index/index'</script>";
            }else{
                echo "<script>alert('密码不正确!');location.href='/admin/login'</script>";
            }
        } else {
            echo "<script>alert('用户名不存在!');location.href='/admin/logout'</script>";
        }
    }
}


