<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Cart;
use DB;
class CartController extends Controller
{
    public function show($uid){
        if($uid == 0){
            echo "<script>alert('请先登录账户');location.href='/login'</script>";
        }else{
            $goods = Cart::getCart();
            return view('cart',['goods'=>$goods]);
        }
    }

    public function ajax()
    {
        $uid = Auth::user()->id;
        $res = Cart::add($uid);

        if($res){
            echo json_encode("　添加购物车成功!\n 请尽快去购物车结算");
        }else{
            echo json_encode('添加购物车失败！');
        }
    }

    public function del()
    {
        $id = $_POST["id"];
        $res = DB::table('carts')->where('id',$id)->delete();
        if($res){
            echo json_encode("　删除商品成功!");
        }else{
            echo json_encode('删除商品失败！');
        }
    }

    public function update()
    {
        $id = $_POST["id"];
        $data['goods_count'] = $_POST["count"];
        $data['goods_price'] = $_POST["price"];
        $res = DB::table('carts')->where('id',$id)->update($data);
        if($res){
            echo json_encode("修改购物车商品数量和价格成功!");
        }else{
            echo json_encode('修改购物车商品数量和价格失败!');
        }
    }
    
    
    
}
