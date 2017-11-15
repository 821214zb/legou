<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use DB;
use Illuminate\Support\Facades\Auth;
class CartController extends Controller
{
    public function show($uid){
        if($uid == 0){
            echo "<script>alert('请先登录账户');location.href='/login'</script>";
        }else{
            //if($_POST){
                $request = Request();
                $goods = DB::table('carts')->where('uid',Auth::user()->id)->get();
                //$goods = Cart::addCarts($request,$uid,$gid);
                return view('cart',['goods'=>$goods]);
            //}
        }
    }
    
    
    
}
