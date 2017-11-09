<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Session;
use Gregwar\Captcha\CaptchaBuilder;

class Login extends Common
{
    public static function getLogin($request)
    {
        $name = $request->name;
        //校验验证码
        if (Session::get('milkcaptcha') != $request->code) {
            echo "<script>alert('验证码输入不正确');location.href='/login/login'</script>";
        }
        $list = DB::table("admins")->where('account','=', $name)->first();
        $data = json_decode(json_encode($list),true);
        if (!empty($data)) {
            $salt=$data['salt'];
            $password = md5(md5($request->password).$salt);
            if ($password == $data["password"]) {
                Session::flash('name', $name);
                Session::flash('id', $data['id']);
                $ip = $_SERVER["REMOTE_ADDR"];
                //修改用户访问次数 最后登录时间 最后登陆ip   更新用户信息
                DB::table('admins')->where('id',$data["id"])->update(['login_count'=>$data['login_count']+1,'last_login_time'=>time(),'last_login_ip'=>$ip]);
                if ($data["status"] != 1 && $name != "admin") {
                    echo "<script>alert('您的账号已被禁用，请联系管理员!');location.href='/login/logout'</script>";
                }
                echo "<script>alert('登陆成功!');location.href='/index/index'</script>";
            }else{
                echo "<script>alert('密码不正确!');location.href='/login/logout'</script>";
            }
        } else {
            echo "<script>alert('用户名不存在!');location.href='/login/logout'</script>";
        }
    }
}


