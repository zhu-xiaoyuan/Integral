<?php
namespace Admin\Controller;
use Think\Controller;
class BaseController extends Controller {
    function __construct()
    {
        parent::__construct();



//        我把你的默认密码default密码啥去掉了    我存的密码都是$_SESSION['o_id']  在login控制器里
//         下边的  is_power也去掉了    别的都整好了    哈哈
//        我出去了啊   有事您Q我    我走了   没事我就跑着玩了   一学期了  终于可以去一次河师大了
//
//        啦啦啦~    走啦走啦    拜拜！
//        刚才是因为login控制器继承了base   我已经把他去掉了  修改错误是因为代码注释掉了
//        目前我写的代码都能正常运行了
//        ！！！！！！！！！学长您辛苦了❤苦了

//        $_SESSION['is_power'] = 1;
        //构造中判断是否登陆。
        if(!is_login()){
            $this->error("你还没登录呢！",'/Integral/index.php/Admin/login',2);
        }
    }

}