<?php

namespace Home\Model;
use Think\Model;

class IndexModel extends Model {
    protected $autoCheckFields = false;


    public function tt(){
        return 'ttindex';
    }

}