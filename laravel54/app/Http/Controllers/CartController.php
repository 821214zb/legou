<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
class CartController extends Controller
{
    public function show($uid,$gid){
        if($uid == 0){
            echo "<script>alert('请先登录账户');location.href='/login'</script>";
        }else{
//            if($_POST){
//                $request = Request();
//                $goods = Cart::addCarts($request,$uid,$gid);
                return view('cart');
//            }
        }
    }
    
    
    
}
