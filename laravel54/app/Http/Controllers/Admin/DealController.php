<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class DealController extends CommonController{
    /**
     * 交易信息
     */
    public function info(){
        return view('admin.deal.info');
    }

    /**
     * 订单查询
     */
    public function select(){
        return view('admin.deal.select');
    }

    /**
     * 合并订单
     */
    public function hb(){
        return view('admin.deal.hb');
    }
}