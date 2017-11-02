<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use DB;
class Brand extends Model{
    protected $primaryKey='uid';
    public $timestamps=false;

    /**
     * 品牌列表
     */
    static function show(){
        $list=DB::table('brands')->paginate(5);
        return $list;
    }
    /**
     * 添加品牌
     */
    static function addPost(){
        $request=request();
        $row=DB::table('brands')->insert(
               array(
                'brand_name'=>$request->brand_name,
                'brand_sort'=>$request->brand_sort,
                'status'=>$request->status,
                'brand_text'=>$request->brand_text,
            )
        );
        return $row;
    }
    
    /**
     * 删除品牌
     */
    static function del($ids){
        $ids = explode(',',$ids);
        $res = DB::table('brands')->whereIn('id',$ids)->update(['status'=>0]);
        return $res;
    }

    /**
     * 修改
     */
    static function edit($id){
        $row = DB::table('brands')->where('id', $id)->first();
        return $row;
    }

    static function editDo($id){
        $request=request();
        $res=DB::table('brands')->where('id',$id)->update(
            array(
                'brand_name'=>$request->brand_name,
                'brand_sort'=>$request->brand_sort,
                'status'=>$request->status,
                'brand_text'=>$request->brand_text
            )
        );
        return $res;
    }
}
