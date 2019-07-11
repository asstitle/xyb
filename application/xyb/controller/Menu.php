<?php
namespace app\xyb\Controller;
use app\common\Controller\Base;

class Menu extends Base
{
    //菜单列表
    public function index(){
       return $this->fetch();
    }
    //添加菜单
    public function add(){
        return $this->fetch();
    }

}