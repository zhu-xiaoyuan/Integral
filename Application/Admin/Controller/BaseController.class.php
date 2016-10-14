<?php
namespace Admin\Controller;
use Think\Controller;
class BaseController extends Controller {
    function __construct()
    {
        parent::__construct();

        //构造中判断是否登陆。
        if(!is_login()){
            exit();
        }
    }

    function  base(){
        $stu = D("Office");

        $where[o_ispower] = 1;
        $info = $stu->where($where)->select();
        if(is_power()){
        }
        dump($info);
        $this->display();

     }
}