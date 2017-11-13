<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use DB;

class links extends Model{
    /**
     * 前台友情链接展示
     */
    static function show(){
        $list=DB::table("links")->where(["link_status"=>1])->orderBy("link_sort","asc")->paginate(3);
        return $list;
    }
    
    /**
     * 申请友情链接
     */
    static function add(){
        $request=request();
        $file = $request->file('link_image');
        $extension = $file->getClientOriginalExtension();
        $fileName = str_random(8).".".$extension;
        $filePath = $file->move('uploads',$fileName);
        if($_POST){
            $res=DB::table('links')->insert(["link_name"=>$request->link_name,"link_url"=>$request->link_url,'link_email'=>$request->link_email,"link_remark"=>$request->link_remark,"link_image"=>$filePath]);
            return $res;
        }
    }
}