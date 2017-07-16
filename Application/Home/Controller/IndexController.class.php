<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {

    public function index(){
        $this->display();
    }

    /**
     * php自动执行
     */
    public function phpFixedTime(){
        $AutoLogic = D('Auto','Logic');
        // 自动执行,自动更改订单状态
        $AutoLogic->autoFinishOrders();
        $res = $AutoLogic->index();
        $data = array(
            'list'=>$res
        );

        $this->assign('list',$data);
        $this->display();
    }

    /**
     * 创建数据
     */
    public function phpFixedCreate(){
        $AutoLogic = D('Auto','Logic');
        $AutoLogic->insertData();
        $this->assign('msg','创建');
        $this->display();
    }

    /*
     * 删除数据
     */
    public function phpFixedDel(){
        $AutoLogic = D('Auto','Logic');
        $AutoLogic->upDataStutic(1,1);
        $this->assign('msg','清除');
        $this->display('phpFixedCreate');
    }

    /*
     * liunx 首页
     */
    public function liunxFixedTime(){

        $AutoLogic = D('Auto','Logic');

        $res = $AutoLogic->index(0);

        $data = array(
            'name'=>'liunx',
            'list'=>$res
        );

        $this->assign('list',$data);
        $this->display();
    }


    /*
     * liunx 自动执行
     */
    public function LiunxAuto(){
        $AutoLogic = D('Auto','Logic');
        // 自动执行,自动更改订单状态
        $AutoLogic->upDataStutic(0);
    }


    /**
     * 创建数据
     */
    public function LiunxFixedCreate(){
        $AutoLogic = D('Auto','Logic');
        $AutoLogic->insertData(0);
        $this->assign('msg','创建');
        $this->display('phpFixedCreate');
    }

    /*
     * 删除数据
     */
    public function LiunxFixedDel(){
        $AutoLogic = D('Auto','Logic');
        $AutoLogic->upDataStutic(0,1);
        $this->assign('msg','清除');
        $this->display('phpFixedCreate');
    }


}