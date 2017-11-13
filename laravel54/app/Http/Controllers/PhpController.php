<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cate;
use App\Lunbo;
use Session;
use DB;

class PhpController{


    /**
     * 美圣融云平台 Http Demo for PHP
     * 参考开发帮助文档 http://www.rcscloud.cn/common/api
     *
     * DEMO提供以下功能示例。请将参数设置成您账号的参数，并去掉相应功能的注释，即可进行测试。
     * 1、账号接口 信息获取
     * 2、查询账号所有模板
     * 3、查询单个模板
     * 4、模板短信接口
     * 5、状态接口 信息获取
     * 6、上行接口 信息获取
     * 7、检测黑名单
     * 8、检测敏感词
     *
     */
    //参数设置
    var $sid      = "ZH000000457";                               // 短信账号
    var $apikey   = "8ea30578-e811-4951-8bf6-bdf157c3ba9c";      // APIKEY
    var $svr_rest = "http://api.rcscloud.cn:8030/rcsapi/rest";   // rest请求地址

    /*
     * 设置方法将用户提交手机号等相关信息存入数据库中
     * $username
     * $tel
     * $verify
     */
    public function add_user_verify(){

        $verify           = get_verify();
        $data['phone']    = $_POST['tel'];
        $data['username'] = $_POST['username'];
        $data['verify']   = $verify;
        $res = DB::table('user_verify')->insertGetId($data);
        if($res){
            $result = sendTplSms("a710b37a19a24c97bb8e75210290adfa", "@1@=".$verify,$_POST['tel'], "");

            //输出所有返回值
            if (empty($result))
            {
                echo json_encode('发送失败！');
            }else{
                //格式化
                // json_decode();
                //打印返回值中状态码
                //print $result->{'code'};
                echo json_encode('发送成功！');
            }
        }else{
            echo json_encode('发送失败！');
        }
    }
            //return $result;

    /*
     * 发送模板短信
     */
    public  function aa($verify,$tel){

        //$result = sendTplSms("1ca1eedce6f049dcb77b8bfe91cb8f1b", "@1@=1234", $_POST['tel'], "");


        //查询账号所有模板
        // $result = queryTpls();

        //查询单个模板
        //$result = queryTemplate("1ca1eedce6f049dcb77b8bfe91cb8f1b");

        //获取短信发送状态信息
        //$result = queryRpt();

        //查询上行短信
        //$result = queryMo();

        //检测手机黑名单（如果此手机号在黑名单中，则不能接收到短信）
        //$result = validBL("手机号码");

        ////检查指定的内容中是否含有敏感词
        //$result = validSW("待检内容");

        //---------------------------调用接口演示结束

        //
        //// *** 1、账号接口 信息获取
        // function queryUser(){
        //    $sign     = md5( $GLOBALS["sid"]. $GLOBALS["apikey"]);                                       // 签名认证 Md5(sid+apikey)
        //    $svr_url  =$GLOBALS["svr_rest"]."/user/get.json?sid=". $GLOBALS["sid"]."&sign=".$sign;     // 服务器接口路径
        //    return  file_get_contents($svr_url);                // 获取信息
        //  //  my_print_arr($json_arr,"账号接口：");                                // 输出
        // }
        //
        //
        //
        //// *** 2、查询账号所有模板
        // function queryTpls(){
        //    $sign     = md5( $GLOBALS["sid"]. $GLOBALS["apikey"]);                                       // 签名认证 Md5(sid+apikey)
        //    $svr_url  = $GLOBALS["svr_rest"]."/tpl/gets.json?sid=".$GLOBALS["sid"]."&sign=".$sign;     // 服务器接口路径
        //   return  file_get_contents($svr_url);                // 获取信息
        //    //my_print_arr($json_arr,"查询账号所有模板：");                        // 输出
        //}

        //
        //
        //// *** 3、查询单个模板
        //function queryTemplate($tplid){
        //
        //    $sign     = md5( $GLOBALS["sid"]. $GLOBALS["apikey"].$tplid);                                // 签名认证 Md5(sid+apikey+tplid)
        //    $svr_url  = $GLOBALS["svr_rest"]."/tpl/get.json?sid=".$GLOBALS["sid"]."&sign=".$sign."&tplid=".$tplid;    // 服务器接口路径
        //   return  file_get_contents($svr_url);                // 获取信息
        //   // my_print_arr($json_arr,"查询单个模板：");                            // 输出
        //}
        //
        //
        //// *** 4、模板短信接口  [模板短信没有定时功能]
        //function sendTplSms($tplid,$content, $mobiles, $extno=""){
        ////  $tplid    = "69af1cbbb95043478593767935bc6c51";                      // 模板id
        //                              // 参数值，多个参数以“||”隔开 如:@1@=HY001||@2@=3281
        //    $sign     = md5($GLOBALS["sid"].$GLOBALS["apikey"].$tplid.$mobiles.$content);               // 签名认证 Md5(sid+apikey+tplid+mobile+content)
        //    $svr_url  =$GLOBALS["svr_rest"]."/sms/sendtplsms.json";                        // 服务器接口路径
        //
        //    // POST方式提交服务器
        //    $post_data = array();
        //    $post_data["sign"]      = $sign;
        //    $post_data["sid"]       =  $GLOBALS["sid"];
        //    $post_data["tplid"]     = $tplid;
        //    $post_data["mobile"]    = $mobiles;
        //    $post_data["content"]   = $content;
        //    $post_data["extno"]=$extno;
        //    return  json_decode(request_post($svr_url, $post_data));
        //
        //}
        //
        //
        //// *** 5、状态接口 信息获取
        //function queryRpt(){
        //    $sign     = md5($GLOBALS["sid"].$GLOBALS["apikey"]);                                          // 签名认证 Md5(sid+apikey)
        //    $svr_url  = $GLOBALS["svr_rest"]."/sms/queryrpt.json?sid=".$GLOBALS["sid"]."&sign=".$sign;    // 服务器接口路径
        //    return  file_get_contents($svr_url);                   // 获取信息
        //}
        //
        //
        //// *** 6、上行接口 信息获取
        // function queryMo(){
        //    $sign     = md5($GLOBALS["sid"].$GLOBALS["apikey"]);                                          // 签名认证 Md5(sid+apikey)
        //    $svr_url  = $GLOBALS["svr_rest"]."/sms/querymo.json?sid=".$GLOBALS["sid"]."&sign=".$sign;     // 服务器接口路径
        //    return file_get_contents($svr_url);                   // 获取信息
        //                               // 输出
        //}
        //
        //
        //// *** 7、检测黑名单
        //function validBL($mobile){
        //    $sign     = md5($GLOBALS["sid"].$GLOBALS["apikey"]);                                       // 签名认证 Md5(sid+apikey)
        //    $svr_url  = $GLOBALS["svr_rest"]."/assist/bl.json?sid=".$GLOBALS["sid"]."&sign=".$sign."&mobile=".$mobile;     // 服务器接口路径
        //    return file_get_contents($svr_url);                   // 获取信息
        //                                   // 输出
        //}
        //
        //
        //// *** 8、检测敏感词
        //function validSW($content){
        //    $content2  = urlencode($content);                                   // 多个敏感词以逗号隔开
        //    $sign     = md5($GLOBALS["sid"].$GLOBALS["apikey"]);                                          // 签名认证 Md5(sid+apikey)
        //    $svr_url  = $GLOBALS["svr_rest"]."/assist/sw.json?sid=".$GLOBALS["sid"]."&sign=".$sign."&content=".$content2;     // 服务器接口路径
        //    return file_get_contents($svr_url);                   // 获取信息
        //                                 // 输出
        //}
        //---------------------------调用接口演示
        //获取帐号信息
        //$result = queryUser();
    }
    
}
?>
