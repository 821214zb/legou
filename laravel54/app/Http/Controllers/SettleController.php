<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
class SettleController extends Controller{
    /*备注： 此控制器模型名字  Useraddr.php
     * 
     *用户收货地址
     *  */
    public function settle(){
        $useraddr = new \App\Useraddr();
        $uid = Auth::user()->id;
        $userInfo = DB::table('useraddrs')->where('uid',$uid)->first();
        if($userInfo){
            $id = $userInfo->id;
            session(['id'=>$id]);
            $userList = DB::table('useraddrs')->where('uid',$uid)->get();
        }
        isset($userInfo) ? $userInfo : "";
        //新增收货人信息
        if($_POST){
            $info = $useraddr->addRegion($uid);
            if($info){
                return redirect('settle');
            }
        }
        return view('settle',['userInfo'=>$userInfo,'userList'=>$userList]);
    }

    /*
     * 编辑收货人地址
     * */
    public function update($id){
        $useraddr = new \App\Useraddr();
        $aid = session('id');
        if($_POST){
            $info = $useraddr->updateRegion($aid);
            if($info){
                return redirect('settle');
            }
        }else{
            $data = DB::table('useraddrs')->where('id',$id)->first();
            echo json_encode($data);
        }
    }

    /*
     * 更多地址的修改
     * */
    public function updateTwo(){
        $useraddr = new \App\Useraddr();
        if($_POST){
            $info = $useraddr->updateTwo();
            if($info){
                return redirect('settle');
            }
        }
    }
    
    /*
     * 删除更多收货人地址
     * */
    public function delete($id){
        $res = DB::table('useraddrs')->where('id',$id)->delete();
        if($res){
            return array("res"=>"ok");
        }else{
            return array('res'=>"no");
        }
    }

}