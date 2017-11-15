<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Cart;
use DB;
class UserController extends Controller
{
    /**
     * 修改前台用户信息
     */
    public function update(Request $req){
        $data['name']  = $req->name;
        $data['email'] = $req->email;
        $data['sex']   = $req->sex;
        $data['birthday'] = strtotime($req->birthday);
        $data['like']  = $req->like;
        $res = DB::table('users')->where('id',Auth::user()->id)->update($data);
        if($res){
            echo json_encode('用户信息修改成功！');
        }else{
            echo json_encode('用户信息修改失败！');
        }
    }

    /*
     * 用户收货地址修改
     * */
    public function userAddress(){
        //查询当前用户的收货地址信息
        $list = DB::table('useraddrs')->where('uid',Auth::user()->id)->get();
        if($_POST){
            //查询当前用户的收货地址信息
            $data['user_name']  = $_POST['name'];
            $data['address']    = $_POST['address'];
            $data['user_phone'] = $_POST['phone'];
            $data['email']      = $_POST['email'];
            $res= DB::table('useraddrs')->where('uid',$_POST['uid'])->update($data);
            if($res !== false){
                return view('useraddress',['list'=>$list]);
            }
        }else{
            return view('useraddress',['list'=>$list]);
        }
    }


    
}
