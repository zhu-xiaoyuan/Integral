<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="refresh">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/Integral/Public/Admin/bracket/images/logo.png" type="image/png">
    <title>信息工程学院积分管理系统</title>
    <link href="/Integral/Public/Admin/bracket/css/style.default.css" rel="stylesheet">
      <link rel="stylesheet" href="/Integral/Public/Admin/bracket/css/dropzone.css" />
    <script src="/Integral/Public/Admin/bracket/js/dropzone.min.js"></script>
    <script src="/Integral/Public/Admin/bracket/js/jquery-1.11.1.min.js"></script>
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
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="/Integral/Public/Admin/bracket/js/html5shiv.js"></script>
    <script src="/Integral/Public/Admin/bracket/js/respond.min.js"></script>
    <![endif]-->
    
    <link href="/Integral/Public/Admin/bracket/css/jquery.datatables.css" rel="stylesheet">
    <link href="/Integral/Public/Admin/bracket/css/pagelist.css" rel="stylesheet">


</head>
<body>


<div id="preloader">
    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
</div>

<section>

    <div class="leftpanel">
        <div class="logopanel" align="center">
            <h1>
                <!--<img style="height: 30px;width: 30px;" src="/Integral/Public/Admin/bracket/images/photos/xgxy_logo.jpg" />-->
                <span>积分管理系统</span>
            </h1>
        </div>

        <div class="leftpanelinner">
            <div class="visible-xs hidden-sm hidden-md hidden-lg">
                <div class="media userlogged">
                    <img alt="" src="/Integral/Public/Admin/bracket/images/photos/loggeduser.png" class="media-object">
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
                        <li><a href="/Integral/Admin/input"><i class="fa fa-caret-right"></i> 积分信息录入</a></li>
                        <li><a href="/Integral/Admin/class"><i class="fa fa-caret-right"></i> 学生信息录入</a></li>
                    </ul>
                </li>
                
  <li class="active"><a href="../Tables"><i class="fa fa-home"></i> <span>查看积分信息</span></a></li>
   
            
                <!--<li><a href="show"><span class="pull-right badge badge-success">2</span><i class="fa fa-envelope-o"></i> <span>Email</span></a></li>-->

                <li class="nav-parent"><a href=""><i class="glyphicon glyphicon-cog"></i> <span>UI</span></a>
                    <ul class="children">
                        <li><a href=""><i class="fa fa-caret-right"></i></a></li>
                    </ul>
                </li>

                
                    <?php if($_SESSION['is_power'] == 1): ?><li id="member"><a href="/Integral/Admin/Manage/member"><i class="fa fa-th-list"></i> <span>成员管理</span></a></li><?php endif; ?>
                
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
                                <img src="/Integral/Public/Admin/bracket/images/photos/loggeduser.png" alt="" />
                                <?php echo ($_SESSION['o_name']); ?>
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                                <li><a href='#'  data-toggle="modal" data-target="#mymodal-data"><i class="glyphicon glyphicon-user"></i>修改密码</a></li>
                                <li><a href="#" id="logout_a" onclick="logOut()"><i class="glyphicon glyphicon-log-out"></i>退出</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div><!-- header-right -->
        </div><!-- headerbar -->
        <div class="contentpanel">
                   
      <div class="panel panel-default">
        <div class="panel-heading">
          <div class="panel-btns">
            <a href="" class="minimize">&minus;</a>
          </div><!-- panel-btns -->
          <h3 class="panel-title">Data Tables</h3>
          <div class="search">
              <form id="searchForm" name="searchform" class="well form-search" method="post"  onSubmit="check();" enctype="multipart/form-data" style="background-color:white;margin-top:15px;">
              <div style="float:left;">
                <span>班级：
                  <input type="text" name="search[c_name]" value="<?php echo ($search['c_name']); ?>" placeholder="请输入班级" class="input-medium">
                </span> 
              </div>
              <div style="float:left;">                
                <span>年级：
                  <input type="text" name="search[s_id]" value="<?php echo ($search['s_id']); ?>" placeholder="格式：如 2015" class="input-medium">
                  <!-- <select name="schoolyear" id="term">
                  <?php if(is_array($list)): foreach($list as $key=>$vo): ?><option value="<?php echo ($vo["schoolyear"]); ?>"></option><?php endforeach; endif; ?>
                  </select> -->
                </span>
              </div>
              <div style="float:left;">               
                <span>部室：
                  <input type="text" name="search[sc_union]" value="<?php echo ($search['sc_union']); ?>" placeholder="请输入部室" class="input-medium">
                </span>
              </div>
                <div style="float:right;">      
                  <input type="submit" class="btn" value="搜索" onclick="checkaction(1);"/>
                  <input type="submit" id="btn" class="btn" value="导出" onclick="checkaction(0);"/>
                </div>     
              </form>
        </div>
        <br>
        <hr>
        <div class="panel-body">         
          <div class="table-responsive" id="list">         
          <form style="min-width:1030px;">
          <a class="btn btn-xs btn-info pull-left mr-5" style="float:left;" id="discard" href="javascript:;">删除</a>        
          <table class="table table-striped" id="table2">
              <thead>
                  <tr>
                    <th><input class="all" type="checkbox"/></th>
                    <th>学号</th>
                    <th>姓名</th>
                    <th>班级</th>
                    <th>分数</th>
                    <th>原因</th>
                    <th>时间</th>
                    <th>记录者</th>
                    <th>部室</th>
                    <th>操作</th>
                  </tr>
              </thead>
              <tbody>
              <?php if($list): if(is_array($list)): foreach($list as $key=>$vo): ?><tr class="odd gradeX">
                      <td><input name="delete[]" type="checkbox" value="<?php echo ($vo["id"]); ?>"/></td>
                      <td><?php echo ($vo["s_id"]); ?></td>
                      <td><?php echo ($vo["s_name"]); ?></td>
                      <td><?php echo ($vo["c_name"]); ?></td>
                      <td><?php echo ($vo["sc_number"]); ?></td>
                      <td><?php echo ($vo["sc_reason"]); ?></td>
                      <td class="center"><?php echo ($vo["sc_time"]); ?></td>
                      <td class="center"><?php echo ($vo["sc_who"]); ?></td>
                      <td class="center"><?php echo ($vo["sc_union"]); ?></td>
                      <td class="center">
                        <!-- <a id="edit" class="btn btn-xs btn-info mr-5" href="javascript:;" onclick="edit()">修改</a> -->
                        <a class="btn btn-xs btn-info mr-5" href="javascript:void(0);" data-toggle="modal" data-target="#myModal" onclick="tables(this)" data-id="<?php echo ($vo["id"]); ?>">修改</a>
                        <!-- <a class="btn btn-xs btn-info right mr-5" href="javascript:;" id="discard" data-id="{vo.id}">删除</a> -->
                      </td>
                  </tr><?php endforeach; endif; ?>
                <?php else: ?>
                  <tr><td colspan="xx" style="">暂无相关信息</td></tr><?php endif; ?>            
              </tbody>
           </table>
          </form> 
          </div><!-- table-responsive -->
          <div class="pagelist"><?php echo ($page); ?></div>
        </div><!-- panel-body -->
      </div><!-- panel -->        
    </div><!-- contentpanel -->
<!-- 修改 -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">积分修改</h4>
          </div>
          <div class="modal-body">
            <form class="form-horizontal form-bordered" method="post">
              <div class="form-group">
                <input type="hidden" name="id">
                <label class="col-sm-3 control-label" ></label>
                <div class="col-sm-6">
                   学号 <input type="text" disabled="" name="s_id" class="form-control" id="s_id" maxlength="11" />
                  <span class="Validform_checktip"></span> 
                  <br>
                   姓名 <input type="text" disabled="" name="s_name" class="form-control" id="s_name" maxlength="11"/>
                  <span class="Validform_checktip"></span>
                  <br>
                   班级 <input type="text" disabled="" name="c_name" class="form-control" id="c_name"/>
                  <span class="Validform_checktip"></span>
                  <br>
                   积分 <input type="text" name="sc_number" class="form-control" id="sc_number"  nullmsg="请填写积分！"/>
                  <span class="Validform_checktip"></span>
                  <br>
                   原因 <input type="text" name="sc_reason" class="form-control" id="sc_reason"/>
                  <span class="Validform_checktip"></span>
                  <br>
                   部室 <input type="text" disabled="" name="sc_union" class="form-control" id="sc_union"/>
                  <span class="Validform_checktip"></span>
                  <br>
                   时间 <input type="text" naem="sc_time" class="form-control" id="sc_time"/>
                  <span class="Validform_checktip"></span>
                  <br>
                  修改人<input type="text" name="sc_who" class="form-control" id="sc_who"/>
                  <span class="Validform_checktip"></span>
                  <input type="hidden" id="edit_id_update">
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" id="editform">Save changes</button>
          </div>
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->
    </div><!-- modal -->
  

<!-- <script src="/Integral/Public/Admin/bracket/js/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="/Integral/Public/static/layer/layer.js"></script> -->
<script src="/Integral/Public/Admin/bracket/js/jquery.datatables.min.js"></script>
<script src="/Integral/Public/Admin/bracket/js/select2.min.js"></script>
<script>
 $('.all').click(function() {
    if($(this).is(':checked')) {
      $(':checkbox').attr('checked', 'checked');
    } else {
      $(':checkbox').removeAttr('checked');
    }
  });

  // 删除操作
  $('#discard').click(function() {
    if($(':checked').size() > 0) {
      alert($(':checked').size() );
      layer.confirm('确定要删除吗？', {
        btn: ['确定','取消'],
        shade: false 
      }, function(){
        $.post("<?php echo U('Tables/delete');?>", {data: $('form').serializeArray()}, function(res) {
          if(res.state == 1) {
            layer.msg(res.message, {icon: 1, time: 1000});
          } else {
            layer.msg(res.message, {icon: 2, time: 1000});
          }
          setTimeout(function() {
            location.reload();
          }, 1000);
        });
      }, function(){
        layer.msg('取消了删除操作！', {time: 1000});
        $(':checkbox').removeAttr('checked');
      });
    } else {
      layer.alert('没有选择！');
    }
  });
</script>

<script>
function checkaction(v){ 
  if(v==0){ 
  document.searchform.action="<?php echo U('admin/Tables/export');?>"; 
  }else{ 
  document.searchform.action="<?php echo U('admin/Tables/tables');?>"; 
  } 
  searchform.submit(); 
} 
</script>

<script type="text/javascript">
    function tables(ss){
      var edit_id = $(ss).data('id');
      var url = "<?php echo U('Tables/edit');?>";
      $.post(url,{
        'edit_id':edit_id
      },function(msg){
        // if (msg != null ) {
        //   alert(msg);
        // };
        $("#s_id").val(msg.s_id);
        $("#s_name").val(msg.s_name);
        $("#c_name").val(msg.c_name);
        $("#sc_number").val(msg.sc_number);
        $("#sc_reason").val(msg.sc_reason);
        $("#sc_time").val(msg.sc_time);
        $("#sc_union").val(msg.sc_union);
        $("#sc_who").val(msg.sc_who);
        $("#edit_id_update").val(msg.id);
      });
    };

    $("#editform").click(function(){
      var url = "<?php echo U('Tables/save');?>";
      $.post(url,{
        'id':$("#edit_id_update").val(),
        's_id':$("#s_id").val(),
        's_name':$("#s_name").val(),
        'c_name':$("#c_name").val(),
        'sc_number':$("#sc_number").val(),
        'sc_reason':$("#sc_reason").val(),
        'sc_time':$("#sc_time").val(),
        'sc_union':$("#sc_union").val(),
        'sc_who':$("#sc_who").val()
      },function(msg){
        // layer.confirm('确定修改吗？',{
        //   btn: ['确定','取消'],
        //   shade: false 
        // });
        layer.alert(msg);
          
      });
      layer.close();
      // window.location.href = 'tables';
    });
</script>
<script>
  // function list (id) {
  //   var id = id;
  //     $.get('Tables/_empty', {'p':id}, function(data){ 
  //       $("#list").replaceWith("<div  id='list'>"+data+"</div>"); //user一定要和tpl中的一致
  //   });
  // }
</script>


        </div>
    </div><!-- mainpanel -->

</section>
<!-- 模态弹出窗内容 -->
<div class="modal fade" id="mymodal-data" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">用户 <?php echo ($_SESSION['o_name']); ?> 修改密码</h4>
            </div>
            <div class="modal-body">
                <div class="row" >
                    <div class="col-md-5" >
                        <form method="post">
                            <br>
                            <p class="form-control changeUName" style="cursor: not-allowed;"><?php echo ($_SESSION['o_id']); ?></p>
                            <br>
                            <input type="password" class="form-control " id="oldPsd" placeholder="请输入原密码" /><br>
                            <input type="password" class="form-control " id="changeNewPsd" placeholder="请输入要修改的密码" /><br>
                            <input type="password" class="form-control " id="changeNewPsdAgain" placeholder="请再次输入要修改的密码" /><br>
                            <p id="showMsg" style="color:red;height: 21px;"> </p>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                <button type="button" class="btn btn-primary" onclick="checkBtn()">保存</button>
            </div>
        </div>
    </div>
</div>
<script>
    function logOut(){
        layer.open({
            content: '您确定退出本系统吗?',
            btn: ['确认', '取消'],
            shadeClose: false,
            yes: function(){
                window.location.href = '/Integral/index.php/Admin/login/logout';
            }, no: function(){

            }
        });
    }
    document.onkeydown=function(event){
        var e = event || window.event || arguments.callee.caller.arguments[0];
        if(e && e.keyCode==13){
            checkBtn();
        }
    };
    function checkBtn(){
        var oldPsd = $("#oldPsd").val();
        var changeNewPsd = $("#changeNewPsd").val();
        var changeNewPsdAgain = $("#changeNewPsdAgain").val();

        if ($.trim(oldPsd) == '') {
            $("#showMsg").html(checkMsg(1));
            clearMsg();
        }else{
            if ($.trim(changeNewPsd) == '') {
                $("#showMsg").html(checkMsg(2));
                clearMsg();
            }else if ($.trim(changeNewPsdAgain) == '') {
                $("#showMsg").html(checkMsg(3));
                clearMsg();
            }else if($.trim(oldPsd)==$.trim(changeNewPsdAgain)){
                $("#showMsg").html(checkMsg(4));
                clearMsg();
            }else {
                $.post(
                        "/Integral/index.php/Admin/index/changePass",
                        {
                            c_Psd:oldPsd,
                            c_NewPsd:changeNewPsd,
                            c_NewPsdAgain:changeNewPsdAgain
                        },function(data){
                            if(data==5) {
                                alert("密码修改成功");
                                window.location.href="";
                            }else if(data==6) {
                                $("#showMsg").html(checkMsg(6));
                                clearMsg();
                            }else if(data==7) {
                                $("#showMsg").html(checkMsg(7));
                                clearMsg();
                            }else if(data==8){
                                $("#showMsg").html(checkMsg(8));
                                clearMsg();
                            }else if(data==9){
                                $("#showMsg").html(checkMsg(9));
                                clearMsg();
                            }
                        }
                );
            }
        }
    }
    function checkMsg($msg){
        if ($msg == 1) {
            return "原始密码不能为空";
        }else if($msg==2){
            return "修改的密码不能为空";
        }else if($msg==3){
            return "再次输入修改的密码不能为空";
        }else if($msg==4){
            return "不能和原始的密码相同";
        }else if($msg==6){
            return "密码修改失败";
        }else if($msg==7){
            return "原密码输入有误";
        }else if($msg==8){
            return "两次密码不一致";
        }else if($msg==9){
            return "数据错误";
        }
    }
    function clearMsg(){
        setTimeout(function(){
            $("#showMsg").html(" ");
        },3000);
    }
</script>

<script type="text/javascript">
    var strUrl=window.location.href;
    var arrUrl=strUrl.split("/");
    var strPage=arrUrl[arrUrl.length-1];
    var nm = strPage.split('.');
    var ele = document.getElementById(nm[0]);

    ele.className = 'active';
</script>
6


</body>
</html>