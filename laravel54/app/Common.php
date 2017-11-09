<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
class Common extends Model
{
    //生成5个随机数
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

