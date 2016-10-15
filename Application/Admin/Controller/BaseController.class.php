<?php
namespace Admin\Controller;
use Think\Controller;
class BaseController extends Controller {
    function __construct()
    {
        parent::__construct();
        $_SESSION['is_power'] = 1;
        //构造中判断是否登陆。
        if(!is_login()){
            exit();
        }
    }

}