<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cate;
use App\Lunbo;
use Session;
use DB;

class PhpController{


    /**
     * ��ʥ����ƽ̨ Http Demo for PHP
     * �ο����������ĵ� http://www.rcscloud.cn/common/api
     *
     * DEMO�ṩ���¹���ʾ�����뽫�������ó����˺ŵĲ�������ȥ����Ӧ���ܵ�ע�ͣ����ɽ��в��ԡ�
     * 1���˺Žӿ� ��Ϣ��ȡ
     * 2����ѯ�˺�����ģ��
     * 3����ѯ����ģ��
     * 4��ģ����Žӿ�
     * 5��״̬�ӿ� ��Ϣ��ȡ
     * 6�����нӿ� ��Ϣ��ȡ
     * 7����������
     * 8��������д�
     *
     */
    //��������
    var $sid      = "ZH000000457";                               // �����˺�
    var $apikey   = "8ea30578-e811-4951-8bf6-bdf157c3ba9c";      // APIKEY
    var $svr_rest = "http://api.rcscloud.cn:8030/rcsapi/rest";   // rest�����ַ

    /*
     * ���÷������û��ύ�ֻ��ŵ������Ϣ�������ݿ���
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

            //������з���ֵ
            if (empty($result))
            {
                echo json_encode('����ʧ�ܣ�');
            }else{
                //��ʽ��
                // json_decode();
                //��ӡ����ֵ��״̬��
                //print $result->{'code'};
                echo json_encode('���ͳɹ���');
            }
        }else{
            echo json_encode('����ʧ�ܣ�');
        }
    }
            //return $result;

    /*
     * ����ģ�����
     */
    public  function aa($verify,$tel){

        //$result = sendTplSms("1ca1eedce6f049dcb77b8bfe91cb8f1b", "@1@=1234", $_POST['tel'], "");


        //��ѯ�˺�����ģ��
        // $result = queryTpls();

        //��ѯ����ģ��
        //$result = queryTemplate("1ca1eedce6f049dcb77b8bfe91cb8f1b");

        //��ȡ���ŷ���״̬��Ϣ
        //$result = queryRpt();

        //��ѯ���ж���
        //$result = queryMo();

        //����ֻ���������������ֻ����ں������У����ܽ��յ����ţ�
        //$result = validBL("�ֻ�����");

        ////���ָ�����������Ƿ������д�
        //$result = validSW("��������");

        //---------------------------���ýӿ���ʾ����

        //
        //// *** 1���˺Žӿ� ��Ϣ��ȡ
        // function queryUser(){
        //    $sign     = md5( $GLOBALS["sid"]. $GLOBALS["apikey"]);                                       // ǩ����֤ Md5(sid+apikey)
        //    $svr_url  =$GLOBALS["svr_rest"]."/user/get.json?sid=". $GLOBALS["sid"]."&sign=".$sign;     // �������ӿ�·��
        //    return  file_get_contents($svr_url);                // ��ȡ��Ϣ
        //  //  my_print_arr($json_arr,"�˺Žӿڣ�");                                // ���
        // }
        //
        //
        //
        //// *** 2����ѯ�˺�����ģ��
        // function queryTpls(){
        //    $sign     = md5( $GLOBALS["sid"]. $GLOBALS["apikey"]);                                       // ǩ����֤ Md5(sid+apikey)
        //    $svr_url  = $GLOBALS["svr_rest"]."/tpl/gets.json?sid=".$GLOBALS["sid"]."&sign=".$sign;     // �������ӿ�·��
        //   return  file_get_contents($svr_url);                // ��ȡ��Ϣ
        //    //my_print_arr($json_arr,"��ѯ�˺�����ģ�壺");                        // ���
        //}

        //
        //
        //// *** 3����ѯ����ģ��
        //function queryTemplate($tplid){
        //
        //    $sign     = md5( $GLOBALS["sid"]. $GLOBALS["apikey"].$tplid);                                // ǩ����֤ Md5(sid+apikey+tplid)
        //    $svr_url  = $GLOBALS["svr_rest"]."/tpl/get.json?sid=".$GLOBALS["sid"]."&sign=".$sign."&tplid=".$tplid;    // �������ӿ�·��
        //   return  file_get_contents($svr_url);                // ��ȡ��Ϣ
        //   // my_print_arr($json_arr,"��ѯ����ģ�壺");                            // ���
        //}
        //
        //
        //// *** 4��ģ����Žӿ�  [ģ�����û�ж�ʱ����]
        //function sendTplSms($tplid,$content, $mobiles, $extno=""){
        ////  $tplid    = "69af1cbbb95043478593767935bc6c51";                      // ģ��id
        //                              // ����ֵ����������ԡ�||������ ��:@1@=HY001||@2@=3281
        //    $sign     = md5($GLOBALS["sid"].$GLOBALS["apikey"].$tplid.$mobiles.$content);               // ǩ����֤ Md5(sid+apikey+tplid+mobile+content)
        //    $svr_url  =$GLOBALS["svr_rest"]."/sms/sendtplsms.json";                        // �������ӿ�·��
        //
        //    // POST��ʽ�ύ������
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
        //// *** 5��״̬�ӿ� ��Ϣ��ȡ
        //function queryRpt(){
        //    $sign     = md5($GLOBALS["sid"].$GLOBALS["apikey"]);                                          // ǩ����֤ Md5(sid+apikey)
        //    $svr_url  = $GLOBALS["svr_rest"]."/sms/queryrpt.json?sid=".$GLOBALS["sid"]."&sign=".$sign;    // �������ӿ�·��
        //    return  file_get_contents($svr_url);                   // ��ȡ��Ϣ
        //}
        //
        //
        //// *** 6�����нӿ� ��Ϣ��ȡ
        // function queryMo(){
        //    $sign     = md5($GLOBALS["sid"].$GLOBALS["apikey"]);                                          // ǩ����֤ Md5(sid+apikey)
        //    $svr_url  = $GLOBALS["svr_rest"]."/sms/querymo.json?sid=".$GLOBALS["sid"]."&sign=".$sign;     // �������ӿ�·��
        //    return file_get_contents($svr_url);                   // ��ȡ��Ϣ
        //                               // ���
        //}
        //
        //
        //// *** 7����������
        //function validBL($mobile){
        //    $sign     = md5($GLOBALS["sid"].$GLOBALS["apikey"]);                                       // ǩ����֤ Md5(sid+apikey)
        //    $svr_url  = $GLOBALS["svr_rest"]."/assist/bl.json?sid=".$GLOBALS["sid"]."&sign=".$sign."&mobile=".$mobile;     // �������ӿ�·��
        //    return file_get_contents($svr_url);                   // ��ȡ��Ϣ
        //                                   // ���
        //}
        //
        //
        //// *** 8��������д�
        //function validSW($content){
        //    $content2  = urlencode($content);                                   // ������д��Զ��Ÿ���
        //    $sign     = md5($GLOBALS["sid"].$GLOBALS["apikey"]);                                          // ǩ����֤ Md5(sid+apikey)
        //    $svr_url  = $GLOBALS["svr_rest"]."/assist/sw.json?sid=".$GLOBALS["sid"]."&sign=".$sign."&content=".$content2;     // �������ӿ�·��
        //    return file_get_contents($svr_url);                   // ��ȡ��Ϣ
        //                                 // ���
        //}
        //---------------------------���ýӿ���ʾ
        //��ȡ�ʺ���Ϣ
        //$result = queryUser();
    }
    
}
?>
