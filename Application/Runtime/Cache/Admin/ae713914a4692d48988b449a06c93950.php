<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/Integral/Public/Admin/bracket/images/favicon.png" type="image/png">
    <title>登陆</title>
    <link href="/Integral/Public/Admin/bracket/css/style.default.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="/Integral/Public/Admin/bracket/js/html5shiv.js"></script>
    <script src="/Integral/Public/Admin/bracket/js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="signin" style="background: rgb(186,223,242)">

<section>

    <div class="signinpanel">

        <div class="row">

            <div class="col-md-7">
                <div class="signin-info">
                    <img src="/Integral/Public/Admin/bracket/images/img/log.jpg" width="318px" height="230px" alt="">
                </div><!-- signin0-info -->
            </div><!-- col-sm-7 -->

            <div class="col-md-5">

                <form method="post">
                    <h4 class="nomargin">登陆系统</h4>

                    <input type="text" class="form-control " id="uname" name="name" placeholder="账号" />
                    <input type="password" class="form-control " id="pword" name="psd" placeholder="密码" />
                    <button type="button" class="btn btn-success btn-block" onclick="loginBtn()">Sign In</button>

                </form>
            </div><!-- col-sm-5 -->

        </div><!-- row -->

        <div class="signup-footer" style="margin-top: 110px">
            <div class="pull-left">
                &copy; 2016. 三月软件工作室保留所有权利。
            </div>
            <div class="pull-right">
                Created By: <a href="http://www.marchsoft.cn/index.php/Index/home" target="_blank">三月软件工作室</a>
            </div>
        </div>

    </div><!-- signin -->

</section>


<script src="/Integral/Public/Admin/bracket/js/jquery-1.11.1.min.js"></script>
<script>
    document.onkeydown=function(event){
        var e = event || window.event || arguments.callee.caller.arguments[0];
        if(e && e.keyCode==13){

            loginBtn();

        }
    };
    function loginBtn() {
        var oid = $.trim($("#uname").val());
        var opsd = $("#pword").val();
        if ($.trim(oid) == '') {
            $("#uname").css("border","1px solid red");
            clearPrompt("#uname");
        }else{
            if ($.trim(opsd) == '') {
                $("#pword").css("border","1px solid red");
                clearPrompt("#pword");
            }else{
                $.post("/Integral/index.php/Admin/login/login",
                        {
                            o_id:oid,
                            o_psd:opsd
                        },function(data){
                            if (data==1) {

                                window.location.href="/Integral/index.php/Admin/Index/index";
                            }else if(data==2) {
                                $("#uname").css("border","1px solid red");
                                clearPrompt("#uname");
                            }else{
                                $("#pword").css("border","1px solid red");
                                clearPrompt("#pword");
                            }
                        }
                );
            }
        }
    }
    function clearPrompt($show){
        setTimeout(function(){
            $($show).css("border","1px solid #ccc");
        },3000);
    }
</script>

</body>
</html>