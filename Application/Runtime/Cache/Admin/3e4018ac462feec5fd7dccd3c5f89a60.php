<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="refresh">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/MyWWW/Integral/Public/Admin/bracket/images/favicon.png" type="image/png">
    <title>信息工程学院积分管理系统</title>
    <link href="/MyWWW/Integral/Public/Admin/bracket/css/style.default.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="/MyWWW/Integral/Public/Admin/bracket/js/html5shiv.js"></script>
    <script src="/MyWWW/Integral/Public/Admin/bracket/js/respond.min.js"></script>
    <![endif]-->
    

    

</head>
<body>


<div id="preloader">
    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
</div>

<section>

    <div class="leftpanel">
        <div class="logopanel" align="center">
            <h1>
                <!--<img style="height: 30px;width: 30px;" src="/MyWWW/Integral/Public/Admin/bracket/images/photos/xgxy_logo.jpg" />-->
                <span>积分管理系统</span>
            </h1>
        </div>

        <div class="leftpanelinner">
            <div class="visible-xs hidden-sm hidden-md hidden-lg">
                <div class="media userlogged">
                    <img alt="" src="/MyWWW/Integral/Public/Admin/bracket/images/photos/loggeduser.png" class="media-object">
                    <div class="media-body">
                        <h4>John Doe</h4>
                        <span>"Life is so..."</span>
                    </div>
                </div>

                <h5 class="sidebartitle actitle">Account</h5>
                <ul class="nav nav-pills nav-stacked nav-bracket mb30">
                    <li><a href=""><i class="fa fa-user"></i> <span>Profile</span></a></li>
                    <li><a href=""><i class="fa fa-cog"></i> <span>Account Settings</span></a></li>
                    <li><a href=""><i class="fa fa-question-circle"></i> <span>Help</span></a></li>
                    <li><a href=""><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
                </ul>
            </div>

            <h5 class="sidebartitle">信息工程学院</h5>
            <ul class="nav nav-pills nav-stacked nav-bracket">
                <!-- 导入-->
                <li class="nav-parent"><a href=""><i class="fa fa-edit"></i> <span>信息录入</span></a>
                    <ul class="children">
                        <li class="active"><a href=""><i class="fa fa-caret-right"></i> 积分信息录入</a></li>
                        <li><a href=""><i class="fa fa-caret-right"></i> 学生信息录入</a></li>
                    </ul>
                </li>

                <li><a href=""><i class="fa fa-home"></i> <span>查看积分信息</span></a></li>
                <!--<li><a href="show"><span class="pull-right badge badge-success">2</span><i class="fa fa-envelope-o"></i> <span>Email</span></a></li>-->

                <li class="nav-parent"><a href=""><i class="glyphicon glyphicon-cog"></i> <span>UI</span></a>
                    <ul class="children">
                        <li><a href=""><i class="fa fa-caret-right"></i></a></li>
                    </ul>
                </li>

                
    <li id="member"><a href="member"><i class="fa fa-th-list"></i> <span>成员管理</span></a></li>

            </ul>
        </div><!-- leftpanelinner -->
    </div><!-- leftpanel -->

    <div class="mainpanel">
        <div class="headerbar">
            <a class="menutoggle"><i class="fa fa-bars">
            </i></a>
            <div class="header-right">
                <ul class="headermenu">
                    <li>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                <img src="/MyWWW/Integral/Public/Admin/bracket/images/photos/loggeduser.png" alt="" />

                                John Doe
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                                <li><a href="#"><i class="glyphicon glyphicon-user"></i>修改密码</a></li>
                                <li><a href="#" id="logout_a"><i class="glyphicon glyphicon-log-out"></i>退出</a></li>
                            </ul>
                        </div>
                    </li>

                </ul>
            </div><!-- header-right -->
        </div><!-- headerbar -->
        <div class="contentpanel">
            
    <p>成员信息</p>
    <script src="/MyWWW/Integral/Public/Admin/bracket/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" href="">
        const MODIFY_PASSWORD_FAILED      = "修改密码失败!";
        var table = document.getElementById("member_table");
        /*
        * 添加成员
        * */
        function add_member(){
            var id = document.getElementById('o_id').value;
            var name = document.getElementById('o_name').value;

            var hxr = new XMLHttpRequest();
            hxr.onreadystatechange = function (){
                if(hxr.readyState == 4){
                    var table = document.getElementById("member_table");
                    var  rlt = JSON.parse(hxr.responseText);

                    if(rlt.status ==1 ){
                        table.innerHTML = rlt.data;
                        set_input_null();
                        dismiss_fade_modal();
                    }else{
                        show_add_Warning(rlt.warn);
                    }

                }
            };
            var pram = 's_id='+id+'&s_name='+name;
            hxr.open('post','add');
            hxr.setRequestHeader('content-type','application/x-www-form-urlencoded');
            hxr.send(pram);
        }
        /*
        * 删除成员
        * */
        function delete_member() {
            var objs = document.getElementsByName("member");
            var prams   = "";
            for (var i = 0; i < objs.length; i++) {
                if (objs[i].checked) {
                    prams = prams+ "&"+objs[i].value+"="+objs[i].value;
                }
            }
            var hxr = new XMLHttpRequest();
            hxr.onreadystatechange= function (){
                if(hxr.readyState == 4){
                    var table = document.getElementById("member_table");
                    var rlst = hxr.responseText;

                    table.innerHTML = rlst;

                }
            };
            hxr.open('post','delete');
            hxr.setRequestHeader('content-type','application/x-www-form-urlencoded');
            hxr.send(prams);
        }
        function exchange(ele){
            var info         = ele.getAttribute('id');
            var doc          = document.getElementById('h_id');
            var title        = document.getElementById('h5_name');
            var infos        = info.split(":");
            doc.value        = infos[1];
            title.innerHTML  = "修改"+infos[0]+"的密码";
        }
        /*
         * 修改密码
         * */
        function modify(){

            var o_id = document.getElementById('h_id').value;
            var psd  = document.getElementById('new_psd').value;
            var psd_again = document.getElementById('psd_again').value;

            psd = psd.trim();
            psd_again.trim();

            var ajax = new XMLHttpRequest();
            ajax.onreadystatechange = function (){

                if(ajax.readyState == 4){
                    var  rlt = ajax.responseText;

                    if(rlt == "success"){
                        set_input_null();
                        dismiss_fade_modal();
                    }else if(rlt == "fail"){
                        showWarning(MODIFY_PASSWORD_FAILED);
                    }else{
                        showWarning(rlt);
                    }
                }
            };

            var info_str = "id=" + o_id + "&psd=" + psd +"&psd_again=" + psd_again;

            ajax.open('post','modify_psd');
            ajax.setRequestHeader('content-type','application/x-www-form-urlencoded');
            ajax.send(info_str);
        }
        /*
        *显示警告
        * */
        function showWarning(warning){

            var doc = document.getElementById('warning');

            doc.innerHTML = warning;
            doc.style.display = "inline";

            var time = setTimeout(function (){
                doc.innerHTML = "";
                doc.style.display = "none";
                clearTimeout(time);
                return;
            },5000);
        }
        function show_add_Warning(warning){

            var doc = document.getElementById('add_warning');

            doc.innerHTML = warning;
            doc.style.display = "inline";

            var time = setTimeout(function (){
                doc.innerHTML = "";
                doc.style.display = "none";
                clearTimeout(time);
                return;
            },5000);
        }
        /*
        *消失fade
        * */
        function dismiss_fade_modal(){
            var fade = document.getElementById('dismiss_modal');
            var fade1 = document.getElementById('Enter');
            fade.click();
            fade1.click();
        }
        function set_input_null(){
            document.getElementById('new_psd').value = "";
            document.getElementById('psd_again').value = "";
        }
    </script>

    <table class="table table-dark md30" id="member_table">
        <tbody>

            <!--<form action="delete" method="post">-->
                    <?php if(is_array($list)): foreach($list as $key=>$v): ?><tr id="<?php echo ($v["o_id"]); ?>">
                            <td>
                                <div class="ckbox ckbox-success">
                                    <input type="checkbox" name="member" value="<?php echo ($v["o_id"]); ?>" id="<?php echo ($v["o_id"]); ?>+1">
                                    <label for="<?php echo ($v["o_id"]); ?>+1"></label>
                                </div>
                            </td>
                            <td>
                                <?php echo ($v["o_id"]); ?>
                            </td>
                            <td>
                                <?php echo ($v["o_name"]); ?>
                            </td>
                            <td align="right">
                                <div onclick="exchange(this)" id="<?php echo ($v["o_name"]); ?>:<?php echo ($v["o_id"]); ?>" class="btn btn-primary btn-xs" data-toggle="modal" data-target=".bs-example-modal-sm" style="height: 30px;">修改密码</div>
                            </td>
                        </tr><?php endforeach; endif; ?>
                <tr>
                    <td colspan="4" align="center">
                        <input style="width: 100px" class="btn btn-primary" onclick="delete_member()" type="button" value="删除">
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                            添加账户
                        </div>
                    </td>
                </tr>
            <!--</form>-->
        </tbody>
    </table>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">添加账户</h4>
                </div>
                <form action="add" method="post">
                    <div class="modal-body">
                            <input type="text" id="o_id" placeholder="学号" class="form-control mb15" name="s_id">
                            <input type="text" id="o_name" placeholder="姓名" class="form-control mb15" name="s_name">
                        <p id="add_warning" style="color: red;margin-top: 0px;display: none;"></p><br/>
                    </div>

                    <div class="modal-footer">
                        <div type="button" id="Enter" class="btn btn-default" data-dismiss="modal">关闭</div>
                        <input  type="button" onclick="add_member()" class="btn btn-primary" value="提交">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div  class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">&times;</button>
                    <h5 align="center" id="h5_name" class="modal-title">修改密码</h5>
                </div>
                <div class="modal-body" align="center">
                    <form action="">
                        <input type="hidden" id="h_id">
                        <input type="password" id="new_psd"  placeholder="新密码" class="form-control mb15" name="new_psd">
                        <input type="password" id="psd_again"  placeholder="验证新密码" class="form-control mb15" name="psd_again">
                        <p id="warning" style="color: red;margin-top: 0px;display: none;"></p><br/>
                        <div type="button" id="dismiss_modal" class="btn btn-default" data-dismiss="modal">关闭</div>
                        <input  type="button"  onclick="modify()" class="btn btn-primary" value="提交">
                    </form>
                </div>
            </div>
        </div>
    </div>

        </div>
    </div><!-- mainpanel -->

</section>

<script src="/MyWWW/Integral/Public/Admin/bracket/js/jquery-1.11.1.min.js"></script>
<script src="/MyWWW/Integral/Public/Admin/bracket/js/jquery-migrate-1.2.1.min.js"></script>
<script src="/MyWWW/Integral/Public/Admin/bracket/js/jquery-ui-1.10.3.min.js"></script>
<script src="/MyWWW/Integral/Public/Admin/bracket/js/bootstrap.min.js"></script>
<script src="/MyWWW/Integral/Public/Admin/bracket/js/modernizr.min.js"></script>
<script src="/MyWWW/Integral/Public/Admin/bracket/js/jquery.sparkline.min.js"></script>
<script src="/MyWWW/Integral/Public/Admin/bracket/js/toggles.min.js"></script>
<script src="/MyWWW/Integral/Public/Admin/bracket/js/retina.min.js"></script>
<script src="/MyWWW/Integral/Public/Admin/bracket/js/jquery.cookies.js"></script>

<script src="/MyWWW/Integral/Public/Admin/bracket/js/morris.min.js"></script>
<script src="/MyWWW/Integral/Public/Admin/bracket/js/raphael-2.1.0.min.js"></script>

<script src="/MyWWW/Integral/Public/Admin/bracket/js/custom.js"></script>
<!--弹出框-->
<script src="/MyWWW/Integral/Public/static/layer/layer.js"></script>
<script>
    $('#logout_a').on('click',function(e){
        e.preventDefault();
        layer.open({
            content: '您确定退出本系统吗?',
            btn: ['确认', '取消'],
            shadeClose: false,
            yes: function(){
                window.location.href = 'adsf';
            }, no: function(){

            }
        });
    })

</script>

<script type="text/javascript">
    var strUrl=window.location.href;
    var arrUrl=strUrl.split("/");
    var strPage=arrUrl[arrUrl.length-1];
    var nm = strPage.split('.');
    var ele = document.getElementById(nm[0]);
    ele.className = 'active';
</script>



</body>
</html>