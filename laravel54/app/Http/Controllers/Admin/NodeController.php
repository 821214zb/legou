<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Contracts\Validation\ValidationException;
use App\Node;
use DB;

class NodeController extends CommonController{
    /**
     * 添加用户
     */
    public function add(Request $request){
        if($_POST){
            $data = DB::table('nodes')->insert(['name' =>$request->name, 'title' =>$request->title, 'level' => $request->level, 'pid' => $request->pid,'status'=>$request->status]);
            if ($data) {
                echo "<script>alert('恭喜您添加成功');location.href='/node/show/0'</script>";
            } else {
                echo "<script>alert('添加失败');location.href='/node/add'</script>";
            }
            
        }else{
            return view('Admin.Node.add');
        }
    }

    /**
     * 用户列表
     */
    public function index(){
        $request = Request();
        $keywords = $request->input('keywords');
        if(!empty($keywords)){
            $data = DB::table('nodes')->where('name','like','%'.$keywords.'%')->orderBy('sort','asc')->paginate(2);
        }else{
            $data = DB::table('nodes')->orderBy('sort','asc')->paginate(5);
        }
        return view('Admin.Node.index',['data'=>$data,'keywords'=>$keywords]);
    }


    //获取父级节点列表
    public function getList($level){
        $data  =  Node::getByLevel($level-1);
        echo json_encode($data);
    }

    //获取父级节点列表
    public function status($id,$status){
        $res = Node::getStatus($id,$status);
        if(!$res){
            return redirect('/node/show/0');
        }else{
            return redirect('/node/show/0');
        }
    }

    //修改权限
    public function update($id){
        if($_POST){
            $request = Request();
            $data = Node::getUpdate($request);
            if($data){
                echo "<script>alert('修改权限成功');location.href='/node/show/0'</script>";
            }else{
                echo "<script>alert('修改权限失败');location.href='/node/update/0'</script>";
            }
            
        }else{
            $data = Node::getOne($id);
            return view('Admin.Node.update',['data'=>$data]);
        }
    }

    /**
 * 权限分类排序
 *
 */
    public function sort($ids,$sort)
    {
        $res = Node::getSort($ids,$sort);
        if($res > 0){
            echo json_encode('分类排序成功！');
        }else{
            echo json_encode('分类排序失败！');
        }
    }

    /**
     * 权限批量单个删除
     *
     */
    public function del($ids)
    {
        $res = Node::getDel($ids);
        if($res){
            echo json_encode('删除成功！');
        }else{
            echo json_encode('删除失败！');
        }
    }


}
