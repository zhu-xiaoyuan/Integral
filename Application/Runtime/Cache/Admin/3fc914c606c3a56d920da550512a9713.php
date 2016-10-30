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

    </style>

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
    
    <h4><?php echo ($title); ?></h4>
    <?php if($isPerson == 1): ?><div class="table-responsive" style="height: 400px;margin-top:20px;overflow-x: auto;overflow-y: auto">
            <table class="table mb30" style="min-width: 400px;">
                <thead align="center">
                <tr style=";color: #0000cc;">
                    <td>姓名</td>
                    <td>积分</td>
                    <td>积分变动原因</td>
                    <td>时间</td>
                    <td>部室</td>
                </tr>
                <?php if(is_array($list)): foreach($list as $key=>$v): ?><tr>
                    <td><?php echo ($v["s_name"]); ?></td>
                    <td><?php echo ($v["sc_number"]); ?></td>
                    <td><?php echo ($v["sc_reason"]); ?></td>
                    <td><?php echo ($v["sc_time"]); ?></td>
                    <td><?php echo ($v["sc_union"]); ?></td>
                </tr><?php endforeach; endif; ?>
                </thead>
            </table>
        </div>
        <?php else: ?>
        <div class="table-responsive" style="height: 85%;margin-top:40px;overflow-x: auto;overflow-y: auto">
            <table class="table mb30" style="min-width: 400px;">
                <thead align="center">
                <tr>
                    <td>姓名</td>
                    <td>总分</td>
                    <td>班级排名</td>
                    <td>查看详情</td>
                </tr>
                <?php if(is_array($list)): foreach($list as $k=>$v): ?><tr>
                        <td><?php echo ($v["s_name"]); ?></td>
                        <td><?php echo ($v["all_score"]); ?></td>
                        <td><?php echo ($k+1); ?></td>
                        <td><a href="personScoreDetail?s_id=<?php echo ($v["s_id"]); ?>">查看详情</a></td>
                    </tr><?php endforeach; endif; ?>
                </thead>
            </table>
        </div><?php endif; ?>




    <div class="footDiv" align="center">
        <a class="admin" href="/Integral/Admin/login">管理员登陆</a>
        <a href="http://www.marchsoft.cn" style="font-size: 10px;color: black;" target="_self">
            <p>&copy;三月软件提供技术支持</p>
        </a>

    </div>
</div>

</body>
</html>