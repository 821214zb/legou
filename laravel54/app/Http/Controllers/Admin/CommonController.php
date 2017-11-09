<?php

namespace App\Http\Controllers\Admin;
use Session;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class CommonController extends Controller
{
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
