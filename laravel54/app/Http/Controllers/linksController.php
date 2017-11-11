<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
class linksController extends Controller{
    /**
     * 前台友情链接展示
     */
    public function show(){
        $list=DB::table("links")->paginate(1);
        return view ('links',["links"=>$list]);
    } 

    /**
     * 申请友情链接
     */
    public function add (){
        $request=request();
        $file = $request->file('link_image');
        $extension = $file->getClientOriginalExtension();
        $fileName = str_random(8).".".$extension;
        $filePath = $file->move('uploads',$fileName);
        if($_POST){
            $res=DB::table('links')->insert(["link_name"=>$request->link_name,"link_url"=>$request->link_url,'link_email'=>$request->link_email,"link_remark"=>$request->link_remark,"link_image"=>$filePath]);
            if($res){
                echo "<script>alert('申请已提交，请等待管理员审核！').location.href='/links'</script>";
            }else{
                echo "<script>alert('申请失败，请重新申请！').location.href='/links'</script>";
            }
        }
    }
}
