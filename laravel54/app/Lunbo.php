<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use DB;
class Lunbo extends Model{
    /**
     * 轮播图列表
     */
    static function show(){
        $list = DB::table('lunbos')->where(['img_status'=>3])->orderBy('img_sort', 'asc')->paginate(3);
        return $list;
    }

    /**
     * 首页轮播图列表
     */
    static function home_Show()
    {
        $list = DB::table('lunbos')->where(['img_status' => 3])->where('img_sort', '<', 7)->orderBy('img_sort', 'asc')->get();
        return $list;
//        $lists = json_decode(json_encode($list), true);
//        //查询商品分类用于前台页面展示
//        $str = "
//            <div id='lunbo'>
//                <a href='#' id='aaa'><img src='./uploads/IWloI1y4.jpg' alt='' id='img'/></a>
//                <ul class='circle' id='ul'>";
//        foreach ($lists as $k => $v) {
//            $str .= " <li class='' src='" . $v['img'] . "' ids='" . ($k + 1) . "' id='li" . ($k + 1) . "' href='" . $v['img_url'] . " alt='" . $v['alt'] . ">" . ($k + 1) . "</li>";
//        }
//        $str .= "</ul>
//                <div class='arrow' id='arr'>
//                    <a href='javascript:;' class='arrow-l'><</a>
//                    <a href='javascript:;' class='arrow-r'>></a>
//                </div>
//            </div>";
//
//        return $str;
    }  
    
    /**
     * 添加轮播图
     */
    static function addPost(){
        $req = request();
        $file = $req->file('img');
        $extension = $file->getClientOriginalExtension();
        $fileName = str_random(8).".".$extension;
        $filePath = $file->move('uploads',$fileName);
        $res=DB::table('lunbos')->insert(['alt'=>$req->img_name,'img_url'=>$req->img_url,'img_sort'=>$req->img_sort,'img_status'=>$req->img_status,'img_text'=>$req->img_text,'img'=>$filePath]);
        return $res;
    }
    
    /**
     * 修改轮播图
     */
    static function edit($id){
        $row=DB::table('lunbos')->where('id',$id)->first();
        return $row;
    }
    static function editDo($id,$filePath){
        $request=request();
        $res = DB::table('lunbos')->where('id', $id)->update(
            array(
                'alt' => $request->img_name,
                'img_sort' => $request->img_sort,
                'img_status' => $request->img_status,
                'img_url' => $request->img_url,
                'img_text' => $request->img_text,
                'img' => $filePath
            )
        );
        return $res;
    }

    /**
     * 删除轮播图
     */
    static function del($ids){
        $ids = explode(',',$ids);
        $res = DB::table('lunbos')->whereIn('id',$ids)->update(['img_status'=>0]);
        return $res;
    }
}