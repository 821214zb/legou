<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\ThrottlesLogins;
use Illuminate\Foundation\AuthenticatesAndRegistersUsers;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Gregwar\Captcha\CaptchaBuilder;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Contracts\Validation\ValidationException;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

use DB;
class Node extends Model{
    protected $patchValidate = true;

    //根据等级的level值查询节点列表
    public static function getByLevel($level)
    {
        $data = DB::table('nodes')->select('id','title')->where('level','=',$level)->get();
        if ($data) {
            return $data;
        } else {
            return false;
        }
    }

    //根据id查询单条信息
    public static function getOne($id)
    {
        $data = DB::table('nodes')->where('id','=',$id)->first();
        if ($data) {
            return $data;
        } else {
            return false;
        }
    }

    //根据id查询修改信息
    public static function getUpdate($request)
    {
        $data = DB::table('nodes')->where('id',$request->id)->update(['name'=>$request->name,'title'=>$request->title,'status'=>$request->status]);
        if ($data) {
            return $data;
        } else {
            return false;
        }
    }

    public static function getStatus($id,$status){

        if($status == 0){
            $statuss = 2;
        }elseif ($status == 1){
            $statuss = 0;
        }elseif($status == 3){
            $statuss = 1;
        }else{
            $statuss = 3;
        }
        return $res = Node::where('id',$id)->update(['status'=>$statuss]);
    }

    /*
     * 修改商品分类排序
     *      
     * */
    public static function getSort($ids,$sort){
        //将字符串转化为数组
        $a = 0;
        $ids   = explode(',',$ids);
        $sorts = explode(',',$sort);
        $id_sort = array_combine($ids,$sorts);
        foreach ($id_sort as $k=>$v){
            Node::where('id',$k)->update(['sort'=>$v]);
            $a++;
        }
        return $a;
    }


    /*
     * 删除商品
     *      
     * */
    public static function getDel($ids){
        //将字符串转化为数组
        $ids   = explode(',',$ids);
        return $res = Node::whereIn('id',$ids)->update(['status'=>0]);
    }


    public static function nodeAuth($request){
        //自动验证注册
        $validator =  Validator::make($request,
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

            ],
            [
                'name.required' => '用户名不能为空！',
                'name.regex' => '用户名格式不对，应汉字或6到8位字母！',
                'name.unique'=>'该用户名已经存在',
                'email.unique'=>'该邮箱已被注册',
                'mobile.unique'=>'该手机号码已被注册',
                'password.required' => '密码不能为空！',
                'password.regex' => '密码必须是由5-16位的数字、字母组成',
                'password.confirmed' => '两次密码不一致,请重试',
                'email.required' => '邮箱不能为空！',
                'email.regex' => '邮箱格式不对 应***@***.(com|cn|edn|gov)！',
                'mobile.required' => '手机不能为空！',
                'mobile.regex' => '手机格式不对 应13，15，18，17开头的11位数字！',
            ]
        );
        if($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }
    }
    
    
}