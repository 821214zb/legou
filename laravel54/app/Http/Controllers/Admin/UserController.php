<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class UserController extends BaseController{
    /**
     * 添加用户
     */
    public function add(){
        return view('Admin.User.add');
    }
    
    /**
     * 用户列表
     */
    public function show(){
        return view('Admin.User.show');
    }
}
