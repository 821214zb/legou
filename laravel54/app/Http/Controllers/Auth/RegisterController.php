<?php


namespace App\Http\Controllers\Auth;

use App\User;
use DB;
use Session;
use Hash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Auth\RequestGuard;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\ThrottlesLogins;
use Illuminate\Foundation\AuthenticatesAndRegistersUsers;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests;
use Gregwar\Captcha\CaptchaBuilder;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/login';
    protected $redirectAfterLogout = 'auth/login';


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    } 
    
    public function zhuce(Request $request)
    {

        if ($_POST) {
            //验证手机验证码
            $verify = DB::table('user_verify')->where('username',$request->name)->where('phone',$request->mobile)->select('verify')->first();
            if($request->verify !== $verify->verify){
                return "<script>alert('手机验证码填写不正确请重新填写！');location.href='/zhuce';</script>";
            }

//          自动验证注册
            $this->validate($request,
                [
                    'name' => [
                        'required',
                        'regex:/^[^x00-xff]|\D{6,8}$/',
                        'unique:users',
                    ],
                    'password' => [
                        'required',
                        'regex:/^[0-9a-zA-Z]{4,15}$/',
                        'confirmed',
                    ],
                    'password_confirmation' => [
                        'required',
                        'regex:/^[0-9]{3,6}$/',
                    ],
                    'email' => [
                        'unique:users',
                        'required',
                        'regex:/^\w+@\w+(\.)(com|cn|edn|gov)$/',
                    ],
                    'mobile' => [
                        'unique:users',
                        'required',
                        'regex:/^13\d{9}|15\d{9}|18\d{9}|17\d{9}$/',
                    ],
                    'verify' => [
                        'required',
                    ],
                    'code' => [
                        'required',
                    ],

                ],
                [
                    'name.required' => '用户名不能为空！',
                    'name.regex' => '用户名格式不对，应汉字或6到8位字母！',
                    'name.unique'=>'该用户名已经存在',
                    'email.unique'=>'该邮箱已被注册，请直接点击登录！',
                    'mobile.unique'=>'该手机号码已被注册，请直接点击登录！',
                    'password.required' => '密码不能为空！',
                    'password.regex' => '密码必须是由5-16位的数字、字母组成',
                    'password.confirmed' => '两次密码不一致,请重试',
                    'email.required' => '邮箱不能为空！',
                    'email.regex' => '邮箱格式不对 应***@***.(com|cn|edn|gov)！',
                    'mobile.required' => '手机不能为空！',
                    'code.required' => '验证码不能为空！',
                    'verify.required' => '手机验证码不能为空！',
                    'mobile.regex' => '手机格式不对 应13，15，18，17开头的11位数字！',
                ]
            );

            $code = $request->code;
            //判断验证码是
            //否一致
            if (Session::get('milkcaptcha') != $code) {
                echo "<script>alert('验证码输入不正确');location.href='/zhuce'</script>";
            } else {echo 222;
                $password = md5($request["password"]);
                $data = DB::table('users')->insert(['name' =>$request->name, 'password' => Hash::make($password), 'email' => $request["email"], 'mobile' => $request["mobile"]]);
                if ($data) {echo 333;
                    echo "<script>alert('恭喜您注册成功');location.href='/login'</script>";
                } else {
                    echo "<script>alert('对不起，注册失败');location.href='/zhuce'</script>";
                }
            }
        }else{
            return view('zhuce');
        }
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
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

}
