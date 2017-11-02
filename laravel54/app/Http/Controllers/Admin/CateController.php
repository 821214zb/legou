<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;
use App\Cate;
use Illuminate\Http\Request;
//use Symfony\Component\HttpFoundation\Request;

class CateController extends BaseController
{

    /**
     * 商品分类展示
     */
    public function show($id)
    {
        $cate_pid = 0;
        if($id > 0){
            $cate_pid = $id;
        }
        //查询分页数据
        $cate_title = @$_GET['cate_title'] ? $_GET['cate_title'] : "";
        if($cate_title !== ""){
            $data = DB::table('cates')->where('cate_title','like','%'.$cate_title.'%')->where('cate_pid',$cate_pid)->where('status',3)->orderby('id','desc')->paginate(5);
        }else{
            $data = DB::table('cates')->where('cate_pid',$cate_pid)->where('status',3)->paginate(5);
        }
        //var_dump(good::toSql());
        return view('Admin.Cate.Cate',['data'=>$data,'cate_title'=>$cate_title]);
    }


    
    /**
     * 商品分类添加8
     */
    public function add(Request $req)
    {
        if($_POST){
            $cate_level = $req->cate_level;
            $cate_pid   = $req->cate_pid;
            $cate_name  = $req->cate_name;
            if($cate_level == 1){
                $path = './html/'.$req->cate_name;
                if(!is_dir($path)){
                    mkdir($path,0777,true);
                }
                $date['cate_url'] = './html/'.$cate_name;                 //将第一级分类目录存储用于缓存文件存储路径

            }else if($cate_level == 2){
                $file = Cate::where('id',$cate_pid)->select('cate_name')->first();        //获取等级是一的文件夹名字
                $path = './html/'.$file['cate_name'].'/'.$cate_name;
                if(!is_dir($path)){
                    mkdir($path,0777,true);
                }
                $date['cate_url']= './html/'.$file['cate_name'].'/'.$cate_name;                  //将第二级分类目录存储用于缓存文件存储路径

            }else if($cate_level == 3){
                $data  = Cate::where('i d',$cate_pid)->select('cate_name','cate_pid')->first();    //获取等级是2文件夹名字和pid
                $file1 = Cate::where('id',$data['cate_pid'])->select('cate_name')->first();
                $path = './html/'.$file1['cate_name'].'/'.$data['cate_name'].'/'.$cate_name;
                if(!is_dir($path)){
                    mkdir($path,0777,true);
                }
                $date['cate_url']= $path;      //将第三级分类目录存储用于缓存文件存储路径
            }
            $date['cate_name']  = $cate_name;
            $date['cate_title'] = $req->cate_title;
            $date['cate_level'] = $cate_level;
            $date['cate_pid']    = $cate_pid;
            $date['cate_sort']   = $req->cate_sort;
            $res = Cate::insertGetId($date);
            if($res){
                return redirect('cate/show');
            }else{
                return redirect('cate/add');
            }
        }else{
            return view('Admin.Cate.add');
        }
    }
    
    /**
     * 商品分类删除
     */
    public function delete($ids)
    {
        //将字符串转化为数组
        $ids = explode(',',$ids);
        $res = Cate::whereIn('id',$ids)->update(['status'=>0]);
        if(!$res){
            echo json_encode('数据删除失败！');
        }else{
            echo json_encode('数据删除成功！');
        }
    }

    /**
     * 获取商品分类信息//
     */
    public function cate_data($level)
    {
        //同过父级id查询父级分类数据
        $p_level = $level - 1;
        $p_cate_data = DB::table('cates')->where('cate_level', '=', $p_level)->select('cate_title', 'id')->get();
        echo json_encode($p_cate_data);
    }

}