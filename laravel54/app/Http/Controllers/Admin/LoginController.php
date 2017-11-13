<?php

namespace App\Http\Controllers\Admin;
use Session;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Gregwar\Captcha\CaptchaBuilder;
use App\Login;

class LoginController {

    /**
     * 登录页面
     */
    public function login(){
        if($_POST){
            $request = Request();
            Login::getLogin($request);
        }else{
            return view('Admin.Login.login');
        }
    }


    /**
     * 验证码生成
     * @param  [type] $tmp [description]
     * @return [type]      [description]
     */
    public function captcha($tmp){

        //生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder;
        //可以设置图片宽高及字体
        $builder->build($width = 100, $height = 30, $font = null);
        //获取验证码的内容
        $phrase = $builder->getPhrase();
        //把内容存入session
        Session::flash('milkcaptcha', $phrase);
        //生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header('Content-Type: image/jpeg');
        $builder->output();
    }

//    // 登出
//    public function getLogout()
//    {
//        Auth::logout();
//        return Redirect::to('/');
//    }
//
//
//    /**
//     * 登录验证通过后默认跳转的地址
//     */
//    protected function redirectTo()
//    {
//        return '/';
//    }


    public function logout()
    {
        //移除session
        Session::flush();
        return redirect('/admin/login');
    }


    public function username()
    {
        return 'name';
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */


//    public function __construct()
//    {
//        //dd($this->middleware('guest', ['except' => 'logout']));
//        $this->middleware('guest', ['except' => 'logout']);
//    }


    //生成5个随机数   供盐值使用
    public static function str_rand ()
    {
        $str = "abcdefghijkmnpqrstuvwxyz0123456789ABCDEFGHIGKLMNPQRSTUVWXYZ";//设置被随机采集的字符串
        $codeLen = '6';//设置生成的随机数个数
        $rand = "";
        for ($i = 0; $i < $codeLen - 1; $i++) {
            $rand .= $str[mt_rand(0, strlen($str) - 1)];  //如：随机数为30  则：$str[30]
        }
        return $rand;
    }
}
