<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use DB;
class Useraddr extends Model{
    /*
     * 新增收货联系人
     *
     * $uid 当前登录用户 id
     * */
    public function addRegion($uid){
        $username = $_POST['username'];
        $dizhi = $_POST['dizhi'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $info = DB::table('useraddrs')->insertGetId(['uid'=>$uid,'user_name'=>$username,'user_phone'=>$phone,'address'=>$dizhi,'email'=>$email]);
        
        return $info;
    }

    /*
     * 修改用户收货地址
     *
     * $aid 用户订单信息表  主键
     * */
    public function updateRegion($aid){
        $username = $_POST['username'];
        $dizhi = $_POST['dizhi'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $info = DB::table('useraddrs')->where('id',$aid)->update(['user_name'=>$username,'user_phone'=>$phone,'address'=>$dizhi,'email'=>$email]);

        return $info;
    }

    /*
     * 修改更多地址
     * */
    public function updateTwo(){
        $username = $_POST['username'];
        $dizhi = $_POST['dizhi'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $regId = $_POST['regId'];
        $info = DB::table('useraddrs')->where('id',$regId)->update(['user_name'=>$username,'user_phone'=>$phone,'address'=>$dizhi,'email'=>$email]);

        return $info;
    }
}