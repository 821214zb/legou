<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
class shop extends Model
{
    public $timestamps = false;
    
    /*
     * 获取上传图片路径
     */
    public static function getFilePath($req){

        //获取上传图片信息
        $file=$req->file('shop_logo');
        if($file){
            if(!$req->hasFile('shop_logo') && empty($req->old_logo)){
                return ['error' => 'The image is already ! '];
            }
            //生成新文件的名称
            $extension = $file->getClientOriginalExtension(); //获取图片后缀名

            //验证上传图片格式
            $allowed_extensions = ["png", "jpg", "gif"];
            if ($extension && !in_array($extension, $allowed_extensions)) {
                return "<script>alert('文件格式错误,仅支持 jpg ,gif,png,jpeg');location.href='/shop/add'</script>";
            }

            $fileName = str_random(10).'.'.$extension;
            //设置上传图片的路径
            $destinationPath = 'Admin/upload/'; //public 文件夹下面建uploads 文件夹
            //移动上传图片到指定项目目录下
            $file->move($destinationPath, $fileName);
            //生成前端能够调用的图片url；
            return asset($destinationPath.$fileName);
        }else{
           return $filePath = $req->old_logo;
        }

    }

    public static function get_insert($req){

        $filePath = shop::getFilePath($req);//获取上传路径
        //获取要添加的数据
        $data['shop_logo']=$filePath;
        $data['name']=$req->name;
        $data['title']=$req->title;
        $data['goods_text']=$req->goods_text;
        $data['goods_cate']=$req->goods_cate;
        $data['keyword']=$req->keyword;
        $data['country']=$req->country;
        $data['city']=$req->city;
        $data['province']=$req->province;
        $data['address']=$req->address;
        $data['service_qq']=$req->service_qq;
        $data['service_email']=$req->service_email;
        $data['tb_ww']=$req->tb_ww;
        $data['close_shop']=$req->close_shop;
        $data['close_why']=$req->close_why;
        $data['licensed']=$req->licensed;
        $data['usercentor']=$req->usercentor;
        $data['shop_notice']=$req->shop_notice;
        $data['service_phone']=$req->service_phone;
        $data['close_zhuce']=$req->close_zhuce;
        $data['zhuce_time']=time();

        return $res = DB::table('shops')->insertGetId($data);

    }
    
     public static function get_update($req,$id){

        $filePath = shop::getFilePath($req);//获取上传路径

        //获取要添加的数据
        $data['shop_logo']=$filePath;
        $data['name']=$req->name;
        $data['title']=$req->title;
        $data['goods_text']=$req->goods_text;
        $data['goods_cate']=$req->goods_cate;
        $data['keyword']=$req->keyword;
        $data['country']=$req->country;
        $data['city']=$req->city;
        $data['province']=$req->province;
        $data['address']=$req->address;
        $data['service_qq']=$req->service_qq;
        $data['service_email']=$req->service_email;
        $data['tb_ww']=$req->tb_ww;
        $data['close_shop']=$req->close_shop;
        $data['close_why']=$req->close_why;
        $data['licensed']=$req->licensed;
        $data['usercentor']=$req->usercentor;
        $data['shop_notice']=$req->shop_notice;
        $data['service_phone']=$req->service_phone;
        $data['close_zhuce']=$req->close_zhuce;
        $data['zhuce_time']=time();

        return $res = DB::table('shops')->where('shop_id',$id)->update($data);

    }
    
    
  
}

