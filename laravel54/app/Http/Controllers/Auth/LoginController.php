<?php

namespace App\Http\Controllers\Auth;
use Session;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';
    protected $redirectPath = '/';
    protected $redirectAfterLogout = '/';
//    public function redirectPath()
//    {
//        return URL::previous();
//    }

    // 登出
    public function getLogout()
    {
        Auth::logout();
       return Redirect::to('/');
    }


    /**
     * 登录验证通过后默认跳转的地址
     */
    protected function redirectTo()
    {
        return '/';
    }
//
    /**
     * 与密码配合使用的登录名
     */
    public function attemptLogin(Request $request)
    {
        $username = $request->input('name');

        $password = md5($request->input('password'));

        // 验证用户名登录方式
        $usernameLogin = $this->guard()->attempt(
            ['name' => $username, 'password' => $password], $request->has('remember')
        );
        if ($usernameLogin) {
            $request->session()->put('user',$username);
            return true;
        }


        // 验证手机号登录方式
        $mobileLogin = $this->guard()->attempt(
            ['mobile' => $username, 'password' => $password], $request->has('remember')
        );

        if ($mobileLogin) {
            $request->session()->put('user',$username);
            return true;
        }

        // 验证邮箱登录方式
        $emailLogin = $this->guard()->attempt(
            ['email' => $username, 'password' => $password], $request->has('remember')
        );
        if ($emailLogin) {
            $request->session()->put('user',$username);
            return true;
        }

        echo "<script>alert('用户名或密码错误');location.href='/login'</script>";die;
    }


//    public function inlog(Request $request)
//    {
//        //获取表单提交的数据
//        $input = $request->all();
//        //根本获取的数据去数据库中查询
//        $res = Stu::where(['english'=>$input['english'],'math'=>$input['math']])->get();
//        //如果有就代表账号密码正确,写入session
//        if ($res->count()){
//            $request->session()->put('user',$input['math']);
//            return 'YES';
//        } else {
//            return 'NO';
//        }
//    }

//    public function logout(Request $request)
//    {
//        //判断session里面是否有值(用户是否登陆)
//        if($request->session()->has('user')){
//            //移除session
//            $request->session()->pull('user',session('user'));
//            echo "<script>alert('成功');location.href='/'</script>";
//        }
//    }

    
    public function username()
    {
        return 'name';
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */


    public function __construct()
    {
        //dd($this->middleware('guest', ['except' => 'logout']));
        $this->middleware('guest', ['except' => 'logout']);
    }
}
