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

class CateController extends CommonController
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
            $data = DB::table('cates')->where('cate_title','like','%'.$cate_title.'%')->where('cate_pid',$cate_pid)->orderby('id','desc')->paginate(5);
        }else{
            $data = DB::table('cates')->where('cate_pid',$cate_pid)->paginate(5);
        }
        //var_dump(good::toSql());
        return view('Admin.Cate.Cate',['data'=>$data,'cate_title'=>$cate_title]);
    }


    
    /**
     * 商品分类添加
     */
    public function add(Request $req){

        $path = '';
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
                $data  = Cate::where('id',$cate_pid)->select('cate_name','cate_pid')->first();    //获取等级是2文件夹名字和pid
                $file1 = Cate::where('id',$data['cate_pid'])->select('cate_name')->first();
                $path = './html/'.$file1['cate_name'].'/'.$data['cate_name'].'/'.$cate_name;
                if(!is_dir($path)){
                    mkdir($path,0777,true);
                }

            }
            $date['cate_url']   = $path;
            $date['cate_name']  = $cate_name;
            $date['cate_title'] = $req->cate_title;
            $date['cate_level'] = $cate_level;
            $date['cate_pid']   = $cate_pid;
            $date['cate_sort']  = $req->cate_sort;
            $date['dev_status'] = $req->radio;
            $res = Cate::insertGetId($date);

            if($res){
                //添加分类到推荐位数据表
                if($req->checkbox){
                    foreach ($req->checkbox as $k=>$v){
                        DB::table('cate_posid')->insertGetId(['cate_id'=>$res,'posid_id'=>$v]);
                    }
                }
                return redirect('cate/show/0');
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
    public function delete($ids,$level,$name)
    {
        //将字符串转化为数组
        $ids   = explode(',',$ids);
        $names = explode(',',$name);
        $id_name = array_combine($ids,$names);
        //删除缓存文件
        foreach ($id_name as $k=>$v){
            if(file_exists('./html/'.$v.$k.'.html')){
                unlink('./html/'.$v.$k.'.html');
            }
        }
        $res = '';
        //判断当前分类等级
        if($level == 1){
            //查询等级是2的分类id
            $level2_ids = Cate::whereIn('cate_pid',$ids)->select('id')->get();
            $level2_data = json_decode(json_encode($level2_ids),true);
           foreach ($level2_data as $k=>$v){
               $level2_id[$k] = $v['id'];
           }
            $res = Cate::whereIn('cate_pid', $level2_id)->update(['status'=>0]);
            if($res){
                $res = Cate::whereIn('id',$level2_id)->update(['status'=>0]);
                if($res){
                    $res = Cate::whereIn('id',$ids)->update(['status'=>0]);
                }
            }
        }elseif ($level == 2){
            //先删除等级是3的分类
            $res = Cate::whereIn('cate_pid',$ids)->update(['status'=>0]);
            if($res){
                Cate::whereIn('id',$ids)->update(['status'=>0]);
            }
        }else{
            $res = Cate::whereIn('id',$ids)->update(['status'=>0]);
        }

        if(!$res){
            echo json_encode('数据删除失败！');
        }else{
            echo json_encode('数据删除成功！');
        }
    }

    /**
     * 商品分类状态修改
     */
    public function cate_status($id,$status)
    {
       $res = Cate::getStatus($id,$status);
        if(!$res){
            return redirect('cate/show/0');
        }else{
            return redirect('cate/show/0');
        }
    }

    /**
     * 通过父级id查询父级分类数据
     */
    public function cate_data($level)
    {
        $p_cate_data = Cate::getCate($level);
        echo json_encode($p_cate_data);
    }

    /**
     * 商品分类排序
     *
     */
    public function sort($ids,$sort)
    {
        $res = Cate::getSort($ids,$sort);

        if($res > 0){
            echo json_encode('分类排序成功！');
        }else{
            echo json_encode('分类排序失败！');
        }
    }

}