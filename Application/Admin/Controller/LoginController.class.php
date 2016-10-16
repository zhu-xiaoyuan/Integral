<?php
namespace Admin\Controller;
use Think\Controller;

class LoginController extends Controller {
    public function index(){
        $this->display();
    }

//    // 判断登录
    public function login(){
        $office = M("office");
        $map['o_id'] = $_POST['o_id'];

        $result = $office->where($map)->find();
        if($result) {
            $data = $office->where($map)->field('o_name,o_ispower')->find();
            // is_power最高权限
            if($result['o_psd']==md5($_POST['o_psd'])){
                // 把id存入session中
                $_SESSION['o_id'] = $map['o_id'];
                // 把用户名存入session中
                $_SESSION['o_name'] = $data['o_name'];
                $_SESSION['is_power'] = $data['o_ispower'];
                $this->ajaxReturn(1);//登录成功
            }else{
                $this->ajaxReturn(3);//密码错误
            }
        }else{
            $this->ajaxReturn(2);//用户名错误
        }
    }
    // 退出
    public function logout(){
        session(null);
        $this->display('/login/index');
    }
}