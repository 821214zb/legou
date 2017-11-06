<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = 'users';
    protected $fillable = [
        'name', 'email', 'password','mobile'];

    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $connection = 'mysql';
    public $timestamps = false;

    //生成5个随机数
    public static function str_rand()
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
