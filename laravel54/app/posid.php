<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
class posid extends Model
{
    public $timestamps = false;

    /*
     * 获取上传图片路径
     */
    public static function getFilePath($req){

        //获取上传图片信息
        $file=$req->file('goods_img');
        if($file){
            if(!$req->hasFile('goods_image') && !empty($req->old_logo)){
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
            $destinationPath = 'Admin/uploads/'; //public 文件夹下面建uploads 文件夹
            //移动上传图片到指定项目目录下
            $file->move($destinationPath, $fileName);
            //生成前端能够调用的图片url；
            return asset($destinationPath.$fileName);
        }else{
            return $filePath = $req->old_logo;
        }

    }

    /*
        * 修改推荐位商品排序
        *      
        * */
    public static function getSort($ids,$sort,$posid_id){
        //将字符串转化为数组
        $a = 0;
        $ids   = explode(',',$ids);
        $sorts = explode(',',$sort);
        $id_sort = array_combine($ids,$sorts);
        foreach ($id_sort as $k=>$v){
            DB::table('goods_posids')->where('goods_id',$k)->where('posids_id',$posid_id)->update(['sort'=>$v]);
            $a++;
        }
        return $a;
    }


}

