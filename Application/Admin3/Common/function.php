<?php
use Think\Controller;

/**
 * Created by PhpStorm.
 * User: 孝远
 * Date: 2016/10/1
 * Time: 16:34
 */

//判断是否登陆
function is_login(){
    //判断是否登陆代码
    if (isset($_SESSION['o_id'])) {
    	return true;
    }else {
    	return false;
    }
    	
}