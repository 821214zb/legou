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
    public function settle($gid){
        $useraddr = new \App\Useraddr();
        $uid = Auth::user()->id;
        //新增收货人信息
        if($_POST){
            $info = $useraddr->addRegion($uid);
            if($info){
                return redirect('/settle/0');
            }
        }else{//查询当前用户地址信息
            $userInfo = DB::table('useraddrs')->where('uid',$uid)->first();
            $address = $userInfo->address;
            session(['address' => $address]);
            
            if(!empty($userInfo)){
                $ID = $userInfo->id;
                session(['id'=>$ID]);
                $userList = DB::table('useraddrs')->where('uid',$uid)->get();
            }
            isset($userList) ? $userList : "";
            isset($userInfo) ? $userInfo : "";
        }
        //获取购物车信息
        if(!empty($gid)){
            $gids = explode(",",$gid);
            $cartList = DB::table('carts')->whereIn('id',$gids)->get();
            $arr = array();
            $arr2 = array();
            foreach ($cartList as $v){
                $arr[] = $v->goods_price;
                $arr2[] = $v->goods_count;
                $price = array_sum($arr);
                $goods_count = array_sum($arr2);
            }
        }
        return view('settle',['userInfo'=>$userInfo,'userList'=>$userList,'cartList'=>$cartList,'price'=>$price,'goods_count'=>$goods_count,'gouid'=>$gid]);
    }

    /*
     * 编辑页面上一条地址
     * */
    public function up(){
        $useraddr = new \App\Useraddr();
        $aid = session('id');
        if($_POST){
            $info = $useraddr->updateRegion($aid);
            if($info !== false){
                return redirect('/settle/0');
            }
        }
    }

    /*
     * 修改更多地址时展示  异步
     * */
    public function update($id){
        $data = DB::table('useraddrs')->where('id',$id)->first();
        echo json_encode($data);
    }

    /*
     * 更多地址的修改
     * */
    public function updateTwo(){
        $useraddr = new \App\Useraddr();
        if($_POST){
            $info = $useraddr->updateTwo();
            if($info){
                return redirect('/settle/0');
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