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
        #name{
            display: block;
            color: greenyellow;
            font-size: 20px;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            margin-top: 25px;
        }
        #snum{
            display: block;
            color: greenyellow;
            font-size: 15px;
            margin-top: 10px;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        }
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
    
    <p id="name"><?php echo ($list['name']); ?></p>
    <p id="snum"><?php echo ($s_id); ?></p>

    <?php if($ishave == 1): ?><div class="table-responsive" style="margin-top:40px">
        <table class="table mb30">
            <thead align="center">
                <tr>
                    <td>总分</td>
                    <td><?php echo ($list['all_score']); ?></td>
                </tr>
                <tr>
                    <td>班级排名</td>
                    <td><?php echo ($list['class_rank']); ?></td>
                </tr>
                <tr>
                    <td>专业排名</td>
                    <td><?php echo ($list['major_rank']); ?></td>
                </tr>
            </tbody>
        </table>
         <form id="detail" action="personScoreDetail" method="post">
            <input type="hidden" name="s_id" value="<?php echo ($s_id); ?>">
            <input type="hidden" name="c_name" value="<?php echo ($list['class_name']); ?>">
            <div class="btn btn-primary" id="person"  onclick="submitForm(this)">个人详情</div>
            <div class="btn btn-primary" id="class" onclick="submitForm(this)">本班详情</div>
        </form>
         <?php else: ?>
         <h1>没有你的积分数据</h1><?php endif; ?>
       
    </div>


    <div class="footDiv" align="center">
        <a class="admin" href="/Integral/Admin/login">管理员登陆</a>
        <a href="http://www.marchsoft.cn" style="font-size: 10px;color: black;" target="_self">
            <p>&copy;三月软件提供技术支持</p>
        </a>

    </div>
</div>

    <script>
        function submitForm(ele){
            var  val = ele.getAttribute('id');
            var f = document.getElementById('detail');
            if(val == 'person'){
                f.action = 'personScoreDetail';
            }else if(val == 'class'){
                f.action = 'classScoreDetail'
            }
            f.submit();
        }
    </script>

</body>
</html>