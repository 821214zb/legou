<?php

namespace App\Http\Controllers\Admin;
use Session;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Login;

class CommonController extends BaseController{

    
    public function __construct(){

        //用户登陆验证
        $this->middleware(function ($request, $next) {
            $username = $request->session()->get('username');
            //dump($username);
            $userId  = $request->session()->get('userId');
            if(empty($username)){
                echo "<script>alert('请登陆！');location.href='/admin/login';</script>";
            }

            //获取当前用户访问的控制器和方法
            $path   = explode('/',$_SERVER['REQUEST_URI']);
            $module = $path[1];  //获取模块
            $action = $path[2];  //获取方法
            $module_action = $module."-".$action;//系统常量
            $allow = "index-index,index-info,Index-pass,Index-edit"; //给予用户默认权限

            $role_id = DB::table('role_admins')->where('admin_id',$userId)  //查询用户角色
            ->join('roles', 'id', '=', 'role_id')->select('role_id')->first();
            if(empty($role_id)){
                echo "<script>alert('对不起您的用户组已经被禁用！');location.href='/admin/login';</script>";
            }
            $node_id = DB::table('accesss')->where('role_id',$role_id->role_id)->pluck('node_id');//获取该用户的权限id;
            $node_id = json_decode(json_encode($node_id),true);

            $root_info = DB::table('nodes as a')->whereIn('a.id',$node_id)->where('a.level',3)->leftjoin('nodes as b','b.id','=','a.pid')
                        ->select('a.id','a.name as a','b.name as b')->get();
            $root_info = json_decode(json_encode($root_info),true);

            $info = array(); //p($info);
            foreach( $root_info as $k=>$v ){
                $info[$v["id"]] = $v["b"]."-".$v["a"];//转化为一维数组
            }
            $info = implode(',',$info);//将用户有的权限转化为字符串
            if(strpos($info,$module_action) === false && strpos($allow,$module_action) === false && $username !== 'admin'){

                echo "<script>alert('请登陆！');location.href='/admin/logout';</script>";
            }

            return $next($request);

        });
    }


//    }public function verify(){
//        $username = session('username');
//        if(empty($username)){
//            echo 111;
//            echo "<script>alert('请登陆！');location.href='/admin/login';</script>";
//               // redirect('/admin/login');
//        }else{
//            return view('Admin.index.index');
//        }
//
//    }















































}
