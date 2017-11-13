<?php
//分类树，递归方法
function getTreeData($res,$parent=0,$s=''){
    static $array = array();
    foreach($res as $k=>$v){
        if($v['cate_pid'] == $parent){
            $v['s'] = $s;
            $array[] = $v;
            getTreeData($res,$v['id'],$v['s'].'&nbsp;&nbsp;&nbsp;&nbsp;');
        }
    }
    return $array;
}



//=======================================================================================================================================
//注册时手机验证码

/**
 * 模拟post进行url请求
 * @param string $url
 * @param array $post_data
 */
function request_post($url = '', $post_data = array()) {
    if (empty($url) || empty($post_data)) {
        return false;
    }

    $o = "";
    foreach ( $post_data as $k => $v )
    {
        $o.= "$k=" . urlencode( $v ). "&" ;
    }
    $post_data = substr($o,0,-1);

    $postUrl = $url;
    $curlPost = $post_data;
    $ch = curl_init();//初始化curl
    curl_setopt($ch, CURLOPT_URL,$postUrl);//抓取指定网页
    curl_setopt($ch, CURLOPT_HEADER, 0);//设置header
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded','Content-Encoding: utf-8'));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//要求结果为字符串且输出到屏幕上
    curl_setopt($ch, CURLOPT_POST, 1);//post提交方式
    curl_setopt($ch, CURLOPT_POSTFIELDS, $curlPost);
    $data = curl_exec($ch);//运行curl
    curl_close($ch);

    return $data;
}


function my_print_arr($arr) {
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}

function p($arr) {
    echo "<pre>";
    var_dump($arr);
    echo "</pre>";
    die;
}

//参数设置
// $sid      = "ZH000000457";                               // 短信账号
// $apikey   = "8ea30578-e811-4951-8bf6-bdf157c3ba9c";      // APIKEY
// $svr_rest = "http://api.rcscloud.cn:8030/rcsapi/rest";   // rest请求地址

$sid      = "ZH000000466";                               // �����˺�
$apikey   = "289f264e-adcf-45eb-a63d-f7a399a025d6";      // APIKEY
$svr_rest = "http://api.rcscloud.cn:8030/rcsapi/rest";    // rest�����ַ

// *** 1、账号接口 信息获取
function queryUser(){
    $sign     = md5( $GLOBALS["sid"]. $GLOBALS["apikey"]);                                       // 签名认证 Md5(sid+apikey)
    $svr_url  = $GLOBALS["svr_rest"]."/user/get.json?sid=". $GLOBALS["sid"]."&sign=".$sign;     // 服务器接口路径
    return  file_get_contents($svr_url);                // 获取信息
    //  my_print_arr($json_arr,"账号接口：");             // 输出
}



// *** 2、查询账号所有模板
function queryTpls(){
    $sign     = md5( $GLOBALS["sid"]. $GLOBALS["apikey"]);                                       // 签名认证 Md5(sid+apikey)
    $svr_url  = $GLOBALS["svr_rest"]."/tpl/gets.json?sid=".$GLOBALS["sid"]."&sign=".$sign;     // 服务器接口路径
    return  file_get_contents($svr_url);                // 获取信息
    //my_print_arr($json_arr,"查询账号所有模板：");                        // 输出
}




// *** 3、查询单个模板
function queryTemplate($tplid){

    $sign     = md5( $GLOBALS["sid"]. $GLOBALS["apikey"].$tplid);    // 签名认证 Md5(sid+apikey+tplid)
    $svr_url  = $GLOBALS["svr_rest"]."/tpl/get.json?sid=".$GLOBALS["sid"]."&sign=".$sign."&tplid=".$tplid;    // 服务器接口路径
    return  file_get_contents($svr_url);                // 获取信息
    // my_print_arr($json_arr,"查询单个模板：");          // 输出
}


// *** 4、模板短信接口  [模板短信没有定时功能]
function sendTplSms($tplid,$content, $mobiles, $extno=""){
    //$tplid    = "69af1cbbb95043478593767935bc6c51";                              // 模板id
    // 参数值，多个参数以“||”隔开 如:@1@=HY001||@2@=3281
    $sign     = md5($GLOBALS["sid"].$GLOBALS["apikey"].$tplid.$mobiles.$content);  // 签名认证 Md5(sid+apikey+tplid+mobile+content)
    $svr_url  =$GLOBALS["svr_rest"]."/sms/sendtplsms.json";                        // 服务器接口路径

    // POST方式提交服务器
    $post_data = array();
    $post_data["sign"]    = $sign;
    $post_data["sid"]     = $GLOBALS["sid"];
    $post_data["tplid"]   = $tplid;
    $post_data["mobile"]  = $mobiles;
    $post_data["content"] = $content;
    $post_data["extno"]   =$extno;
    return  json_decode(request_post($svr_url, $post_data));

}


// *** 5、状态接口 信息获取
function queryRpt(){
    $sign     = md5($GLOBALS["sid"].$GLOBALS["apikey"]);                                          // 签名认证 Md5(sid+apikey)
    $svr_url  = $GLOBALS["svr_rest"]."/sms/queryrpt.json?sid=".$GLOBALS["sid"]."&sign=".$sign;    // 服务器接口路径
    return  file_get_contents($svr_url);                   // 获取信息
}


// *** 6、上行接口 信息获取
function queryMo(){
    $sign     = md5($GLOBALS["sid"].$GLOBALS["apikey"]);                                          // 签名认证 Md5(sid+apikey)
    $svr_url  = $GLOBALS["svr_rest"]."/sms/querymo.json?sid=".$GLOBALS["sid"]."&sign=".$sign;     // 服务器接口路径
    return file_get_contents($svr_url);                   // 获取信息
    // 输出
}


// *** 7、检测黑名单
function validBL($mobile){
    $sign     = md5($GLOBALS["sid"].$GLOBALS["apikey"]);                                       // 签名认证 Md5(sid+apikey)
    $svr_url  = $GLOBALS["svr_rest"]."/assist/bl.json?sid=".$GLOBALS["sid"]."&sign=".$sign."&mobile=".$mobile;     // 服务器接口路径
    return file_get_contents($svr_url);                   // 获取信息
    // 输出
}


// *** 8、检测敏感词
function validSW($content){
    $content2  = urlencode($content);                                   // 多个敏感词以逗号隔开
    $sign     = md5($GLOBALS["sid"].$GLOBALS["apikey"]);                                          // 签名认证 Md5(sid+apikey)
    $svr_url  = $GLOBALS["svr_rest"]."/assist/sw.json?sid=".$GLOBALS["sid"]."&sign=".$sign."&content=".$content2;     // 服务器接口路径
    return file_get_contents($svr_url);                   // 获取信息
    // 输出
}

function get_verify ()
{
    $str = "0123456789";//设置被随机采集的字符串
    $codeLen = '5';//设置生成的随机数个数
    $rand = "";
    for ($i = 0; $i < $codeLen - 1; $i++) {
        $rand .= $str[mt_rand(0, strlen($str) - 1)];  //如：随机数为30  则：$str[30]
    }
    return $rand;
}

//=====================================================================================================


/**
 * 跳转提示函数
 */
function showMessage(Array $array){

    //验证参数
    if(!emptyempty($array['message']) && !emptyempty($array['url'])){
        $data = [
            'message' => $array['message'],
            'url' => $array['url'],
            'jumpTime' => !emptyempty($array['time']) ? $array['time'] : 2000,
            'ok'=>!emptyempty($array['ok']) ? $array['ok'] : true
        ];
    } else {
        $data = [
            'message' => '非法访问！',
            'url' => 'javascript：history.back();',
            'jumpTime' => 2000,
            'ok'=>!emptyempty($array['ok']) ? $array['ok'] : true
        ];
    }
    return view('admin.message',['data' => $data]);

    //  return redirect('/message')->with($array);
}

