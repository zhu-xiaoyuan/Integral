<?php
namespace Admin\Controller;
use Think\Controller;
class BaseController extends Controller {
    function __construct()
    {
        parent::__construct();

        //构造中判断是否登陆。
        if(!is_login()){
           $this->error("你还没有登录呢！",U('login/index'),2);
        }
    }

}