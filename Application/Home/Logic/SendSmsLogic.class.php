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


}