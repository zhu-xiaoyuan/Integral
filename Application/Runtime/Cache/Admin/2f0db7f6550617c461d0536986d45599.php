<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="refresh">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <!--<link href="/Integral/Public/Admin/bracket/css/style.default.css" rel="stylesheet">-->
    <link rel="stylesheet" href="/Integral/Public/Admin/bracket/css/dropzone.css" />
    <script src="/Integral/Public/Admin/bracket/js/jquery-1.11.1.min.js"></script>
    <script src="/Integral/Public/Admin/bracket/js/dropzone.min.js"></script>
    <script src="/Integral/Public/Admin/bracket/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="/Integral/Public/Admin/bracket/js/jquery-ui-1.10.3.min.js"></script>
    <script src="/Integral/Public/Admin/bracket/js/bootstrap.min.js"></script>
    <script src="/Integral/Public/Admin/bracket/js/modernizr.min.js"></script>
    <script src="/Integral/Public/Admin/bracket/js/jquery.sparkline.min.js"></script>
    <script src="/Integral/Public/Admin/bracket/js/toggles.min.js"></script>
    <script src="/Integral/Public/Admin/bracket/js/retina.min.js"></script>
    <script src="/Integral/Public/Admin/bracket/js/jquery.cookies.js"></script>

    <script src="/Integral/Public/Admin/bracket/js/morris.min.js"></script>
    <script src="/Integral/Public/Admin/bracket/js/raphael-2.1.0.min.js"></script>

    <script src="/Integral/Public/Admin/bracket/js/custom.js"></script>
    <script src="/Integral/Public/static/layer/layer.js"></script>

    <script src="/Integral/Public/Admin/bracket/js/html5shiv.js"></script>
    <script src="/Integral/Public/Admin/bracket/js/respond.min.js"></script>
    <title>积分查询</title>
    
    <style>
        .contentDiv{
            position: fixed;
            top: 0px;
            bottom: 25px;
            left: 10px;
            right: 10px;

            width: auto;
            height: auto;
        }
        .footDiv{
            position: fixed;
            bottom: 0px;

            color: black;
            width: 100%;

        }
        .admin{

        }
    </style>
</head>
<body>

<div class="contentDiv" align="center">
    
    <div class="col-md-6" style="width: 100%">

        <form id="form1" action="search" method="post" class="form-horizontal" style="width: auto">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">个人积分查询</h4>
                </div>
                <div class="panel-body">
                    <div class="form-group" align="center">
                        <div class="col-sm-8" style="width: 100%">
                            <input type="text" placeholder="请输入个人的学号" name="s_id" class="form-control">
                        </div>
                    </div>
                </div><!-- panel-body -->
                <div class="panel-footer">
                    <input class="btn btn-primary" type="submit" value="查询">
                </div><!-- panel-footer -->
            </div><!-- panel-default -->
        </form>

    </div>


    <div class="footDiv" align="center">
        <a class="admin" href="/Integral/Admin/login">管理员登陆</a>
        <a href="http://www.marchsoft.cn" style="font-size: 10px;color: black;" target="_self">
            <p>&copy;三月软件提供技术支持</p>
        </a>

    </div>
</div>

</body>
</html>