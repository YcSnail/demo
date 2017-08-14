<?php

namespace Home\Logic;
use \Think\Model;

class SendSmsLogic {

    protected $autoCheckFields = false;
    private $appId ='ykiRcmsVrl6cL0z0';
    private $appSecret ='dZLOg72VlpZmfTnV02ghZfbTUmpQpb';

    public function __construct(){
        if (empty($this->appId) || empty($this->appSecret)){
            echo '请先配置基本参数';
            die();
        }
    }

    public function send($phone){
        if (empty($phone) || strlen($phone) != 11){
            echo '手机号码不正确';
            die();
        }

        // 导入Home模块下面的 Application/Home/Util/UserUtil.class.php类库
        import("Home.Util.SmsDemo");
        $demo = new \SmsDemo( $this->appId , $this->appSecret );
        $num = rand(100000,999999);
        $response = $demo->sendSms(
            "虞城县优果小铺", // 短信签名
            "SMS_84015004", // 短信模板编号
            $phone, // 短信接收者
            Array(  // 短信模板中字段的值
                "name"=>$num
            ),
            "123"
        );
        return $response;
    }

    /**
     * 记录发送
     * @param $phone
     */
    public function savePhone($phone){

        if (empty($phone)){
            return;
        }
        $phone = intval($phone);

        $smsSend = M('sms_send');

        $phoneRes = $smsSend->where('phone',$phone)->find();

        if (empty($phoneRes)){

            $saveData = array(
                'phone'=>$phone,
                'create_time'=>time(),
                'count'=>1
            );
            $smsSend->add($saveData);
            return;

        }else{

            $phoneRes['count'] = intval($phoneRes['count']) +1;

            $saveData = array(
                'update_time'=>time(),
                'count'=>$phoneRes['count']
            );

            $smsSend->where('phone',$phone)->save($saveData);
            return;
        }

    }


//    public function checkSmsSend($phone){
//
//        if (empty($phone)){
//            return;
//        }
//
//        $smsSend = M('sms_send');
//
//        $phoneRes = $smsSend->where('phone',$phone)->find();
//
//        if (empty($phoneRes) || empty($phoneRes['update_time']) ){
//            return;
//        }
//
//        $dateTime = $phoneRes['update_time'];
//
//
//    }




}