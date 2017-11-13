<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\Role;
use DB;
use phpDocumentor\Reflection\DocBlock\Tags\Var_;
class LinksController extends BaseController{
    /**
     * 友情链接展示
     */
    public function show(){
        $list=DB::table("links")->orderBy("link_sort","desc")->paginate(3);
        return view ('admin.links.show',["links"=>$list]);
    }

    /**
     * 审核状态
     */
    public function check($id,$status){
        if($status == 1){
            $res=DB::table("links")->where("id",$id)->update(["link_status"=>1]);
            if($res){
                echo "<script>alert('审核已通过');location.href='/links/show'</script>";
            }
        }else{
            $res=DB::table("links")->where("id",$id)->update(["link_status"=>0]);
            if($res){
                echo "<script>alert('审核状态未通过');location.href='/links/show'</script>";
            }
        }
    }

    /**
     * 友情链接排序
     */
    public function sort(){
        $sort_id=trim($_POST["id"],",");
        $sort=trim($_POST["sort"],",");
        $id_arr=explode(',',$sort_id);
        $sort_arr=explode(',',$sort);
        $arr=array();
        for($i=0;$i<count($id_arr);$i++){
            $arr[$id_arr[$i]]=$sort_arr[$i];
        }
        foreach($arr as $k=>$v){
            $data["link_sort"]=$v;
            $res=DB::table('links')->where('id',$k)->update($data);
        }
        if($res){
            return array("res"=>"ok");
        }else{
            return array("res"=>"no");
        }
    }

}