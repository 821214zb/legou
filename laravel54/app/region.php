<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
class region extends Model
{
    public $timestamps = false;

    public static function get_region(){

        $a = DB::table('region')->where('region_type',1)->get();
        $b = DB::table('region')->where('region_type',2)->get();
        $c = DB::table('region')->where('region_type',3)->get();
        return $region=['a'=>$a,'b'=>$b,'c'=>$c];
    }
  
}

