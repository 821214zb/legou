<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class IndentController extends CommonController{
    /**
     * 订单列表
     */
    public function show(){
        return view('admin.indent.show');
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