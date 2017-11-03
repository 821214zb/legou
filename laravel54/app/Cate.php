<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
class Cate extends Model
{
    public $timestamps = false;

    /*
     * 查询首页左侧分页数据用于前台展示
     */
    public static function get_left_Cate(){
        $cate_data1 = DB::table('cates')->where('cate_level',1)->select('id')->get();
        $data1 = json_decode(json_encode($cate_data1), true);//将对象转换成数组
        $cate_data2 = DB::table('cates')->where('cate_level',2)->select('id','cate_title','cate_pid')->get();
        $data2 = json_decode(json_encode($cate_data2), true);//将对象转换成数组

        $str = '';
        foreach($data1 as $k){
            $str .= "<div class='items' >
                    <label id='".$k['id']."'>";
            foreach ($data2 as $kk=>$v){
                if($k['id'] == $v['cate_pid']){
                    $str .= "<a  style='color:white;margin-left: 3px;' href='###'>".$v['cate_title']."</a>/";
                }
            }
            $str = rtrim($str,'/');
            $str .= "<span>></span>
                    </label></div>";
        }
        return $str;
    }

    /*
     * 查询首页右侧分页数据用于前台展示
     */
    public static function get_right_Cate($id){
        //获取等级是2的id和name
        $cate_data2 = DB::table('cates')->where('cate_pid',$id)->select('id','cate_title')->get();
        $data2 = json_decode(json_encode($cate_data2), true);//将对象转换成数组
        $ids = array();
        foreach ($data2 as $k=>$v){
            array_push($ids,$v['id']);
        }

        $cate_data3 = DB::table('cates')->whereIn('cate_pid',$ids)->select('id','cate_title','cate_pid')->get();
        $data3 = json_decode(json_encode($cate_data3), true);//将对象转换成数组

        //拼接分类展示
        $str='<div style="margin-top: 10px;line-height:30px">';
        foreach ($data2 as $k=>$v){
            $str .= "<font color='black' size='4px' ><b>".$v['cate_title']."</b></font><br>";
            foreach ($data3 as $kk=>$vv){
                if($vv['cate_pid'] == $v['id']){
                    $str.= "<font size='3px'><a style='margin:3px;' href='/cate/goods/".$vv['id']."'>".$vv['cate_title']."</a></font>&nbsp;&nbsp;&nbsp;&nbsp;";
                }
            }$str.="<br><br>";
        }
        $str.='</div>';
        return $str;
    }



}

