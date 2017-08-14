<?php
namespace Home\Controller;
use Think\Controller;

class SmsController extends Controller {

    public function index(){


        $this->display();
    }

    public function sendSms(){

        $type = true;

        $phone = $_POST['phone'];

        $message = '请求有误';
        if (empty($phone)){

            $message = '参数不能为空';
            ajaxRes(-1,$message);
        }

        $SendLogic = D('SendSms','Logic');
        $sendRes = $SendLogic->send($phone);

        $sendArr = object_to_array($sendRes);

        if ($sendArr['Code'] == 'OK' && $sendArr['Message'] == 'OK'){
            $message = '发送成功';
            $SendLogic->savePhone($phone);
            ajaxRes(0,$message);
        }

        if ($sendArr['Code'] != 'OK'){
            $message = '发送失败,请稍候再试';
            ajaxRes(-1,$message);
        }
        ajaxRes(-1,$message);

    }

}