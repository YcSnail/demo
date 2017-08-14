<?php
namespace Home\Controller;
use Think\Controller;

class SmsController extends Controller {

    public function index(){


        $this->display();
    }

    public function sendSms(){

//        $phone = $_POST['phone'];
//
//        if (empty($phone)){
//            echo '参数不能为空';
//            die();
//        }
//
//        $AutoLogic = D('SendSms','Logic');
//        $sendRes = $AutoLogic->send($phone);
//
//        $sendArr = object_to_array($sendRes);
//
//        if ($sendArr['Code'] == 'OK' && $sendArr['Message'] == 'OK'){
//            $message = '发送成功';
//        }
//
//        if ($sendArr['Code'] != 'OK'){
//            $message = '发送失败,请稍候再试';
//        }

        $message = '成功';

        $this->assign('message',$message);

        $this->display();
    }

}