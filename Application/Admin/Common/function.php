<?php
/**
 * Created by PhpStorm.
 * User: 孝远
 * Date: 2016/10/1
 * Time: 16:34
 */
define("DEFAULT_PSD" ,"123456");
//判断是否登陆
function is_login(){
    //判断是否登陆代码

    return true;
}
function is_power(){
    if(1 == $_SESSION["is_power"])
        return false;
    return true;
}