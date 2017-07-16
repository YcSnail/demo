<?php

namespace Home\Logic;
use \Think\Model;

class AutoLogic extends Model{

    protected $autoCheckFields = false;

    /**
     * 查询数据
     * @return array|null
     */
    public function index($is_php = 1){
        $automate = M('automate');
        $res = $automate->where("is_php= $is_php AND is_del=0")->order('id desc')->select();

        if (!empty($res)){
            $res = $this->showRes($res);
        }

        return $res;
    }

    /**
     * 处理要展示的数据
     * @param $res
     * @return array|null
     */
    public function showRes($res){

        if (empty($res)){
            return null;
        }

        $arr = array();

        foreach ($res as $vlue){

            $vlue['create_time'] = date("m-d H:i:s",$vlue['create_time']);
            $vlue['updata_time'] = date("m-d H:i:s",$vlue['updata_time']);

            if ($vlue['status'] == 1){
                $vlue['status'] = '是';
                $arr['normal'][] = $vlue;
            }else{
                $vlue['status'] = '否';
                $arr['abnormal'][] = $vlue;
            }
        }

        return $arr;
    }

    /**
     * 写入5条数据
     * @param int $is_php
     */
    public function insertData($is_php = 1){
        $automate = M('automate');
        $data['status'] = 0;
        $data['create_time'] = time();
        $data['is_php'] = $is_php;
        $data['is_del'] = 0;
        for($i=1;$i<=5;$i++){
            $data['name'] = $this->randWord();
            $automate->add($data);
        }

    }


    /**
     * 自动执行 更新操作,默认时间 10 S
     *
     */
    public function autoFinishOrders($interval = 60){

        $file = YC_COMMON . "file/autoOrder.txt";
        $getFile = file_get_contents($file);
        $lasttime = strtotime(@$getFile);
        $current = time();

        if ($lasttime + $interval <= $current) {
            file_put_contents($file, date('Y-m-d H:i:s', $current));
            $this->upDataStutic();
        }
    }


    /**
     * 更新数据
     * @param int $is_php
     * @param int $is_del
     */
    public function upDataStutic($is_php = 1,$is_del = 0){
        $automate = M('automate');
        $data = array();
        $data['status'] = 1;
        $data['updata_time']=time();
        $data['is_del'] = $is_del;
        $automate->where("is_php=$is_php AND is_del=0")->save($data);
    }

    /**
     * 随机生成字母
     * @return string
     */
    public function randWord(){
        $code = '';
        for($i=1;$i<=4;$i++){
            $code .= chr(rand(97,122));
        }
        return $code;
    }


}