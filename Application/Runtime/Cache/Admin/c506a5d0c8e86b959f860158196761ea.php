<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="/Integral/Public/Admin/bracket/images/favicon.png" type="image/png">

    <title>Bracket Responsive Bootstrap3 Admin</title>

    <link href="/Integral/Public/Admin/bracket/css/style.default.css" rel="stylesheet">
    
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
    <!--弹出框-->
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



<!-- Preloader -->
<div id="preloader">
    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
</div>

<section>

    <div class="leftpanel">

        <div class="logopanel">
            <h1><span>[</span> 积分管理系统 <span>]</span></h1>
        </div><!-- logopanel -->

        <div class="leftpanelinner">

            <!-- This is only visible to small devices -->
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
                    <li><a href="profile.html"><i class="fa fa-user"></i> <span>Profile</span></a></li>
                    <li><a href=""><i class="fa fa-cog"></i> <span>Account Settings</span></a></li>
                    <li><a href=""><i class="fa fa-question-circle"></i> <span>Help</span></a></li>
                    <li><a href="signout.html"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
                </ul>
            </div>

            <h5 class="sidebartitle">Navigation</h5>
            <ul class="nav nav-pills nav-stacked nav-bracket">
                <li class="active"><a href="index.html"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
                <li><a href="input.html"><span class="pull-right badge badge-success">2</span><i class="fa fa-envelope-o"></i> <span>input</span></a></li>
                <li class="nav-parent"><a href=""><i class="fa fa-edit"></i> <span>Forms</span></a>
                    <ul class="children">
                        <li><a href="general-forms.html"><i class="fa fa-caret-right"></i> General Forms</a></li>
                        <li><a href="form-layouts.html"><i class="fa fa-caret-right"></i> Form Layouts</a></li>
                        <li><a href="form-validation.html"><i class="fa fa-caret-right"></i> Form Validation</a></li>
                        <li><a href="form-wizards.html"><i class="fa fa-caret-right"></i> Form Wizards</a></li>
                        <li><a href="wysiwyg.html"><i class="fa fa-caret-right"></i> Text Editor</a></li>
                        <li><a href="code-editor.html"><i class="fa fa-caret-right"></i> Code Editor</a></li>
                        <li><a href="x-editable.html"><i class="fa fa-caret-right"></i> X-Editable</a></li>
                    </ul>
                </li>
                <li class="nav-parent"><a href=""><i class="fa fa-suitcase"></i> <span>UI Elements</span></a>
                    <ul class="children">
                        <li><a href="buttons.html"><i class="fa fa-caret-right"></i> Buttons</a></li>
                        <li><a href="icons.html"><span class="pull-right badge badge-danger">updated</span><i class="fa fa-caret-right"></i> Icons</a></li>
                        <li><a href="typography.html"><i class="fa fa-caret-right"></i> Typography</a></li>
                        <li><a href="alerts.html"><i class="fa fa-caret-right"></i> Alerts &amp; Notifications</a></li>
                        <li><a href="modals.html"><i class="fa fa-caret-right"></i> Modals</a></li>
                        <li><a href="tabs-accordions.html"><i class="fa fa-caret-right"></i> Tabs &amp; Accordions</a></li>
                        <li><a href="sliders.html"><i class="fa fa-caret-right"></i> Sliders</a></li>
                        <li><a href="graphs.html"><i class="fa fa-caret-right"></i> Graphs &amp; Charts</a></li>
                        <li><a href="widgets.html"><i class="fa fa-caret-right"></i> Panels &amp; Widgets</a></li>
                        <li><a href="extras.html"><i class="fa fa-caret-right"></i> Extras</a></li>
                    </ul>
                </li>
                <li><a href="tables.html"><i class="fa fa-th-list"></i> <span>Tables</span></a></li>
                <li class="nav-parent"><a href=""><i class="fa fa-bug"></i> <span>Bug Tracker</span></a>
                    <ul class="children">
                        <li><a href="bug-tracker.html"><i class="fa fa-caret-right"></i> Summary</a></li>
                        <li><a href="bug-issues.html"><i class="fa fa-caret-right"></i> Issues</a></li>
                        <li><a href="view-issue.html"><i class="fa fa-caret-right"></i> View Issue</a></li>
                    </ul>
                </li>
                <li><a href="maps.html"><i class="fa fa-map-marker"></i> <span>Maps</span></a></li>
                <li class="nav-parent"><a href=""><i class="fa fa-file-text"></i> <span>Pages</span></a>
                    <ul class="children">
                        <li><a href="calendar.html"><i class="fa fa-caret-right"></i> Calendar</a></li>
                        <li><a href="media-manager.html"><i class="fa fa-caret-right"></i> Media Manager</a></li>
                        <li><a href="timeline.html"><i class="fa fa-caret-right"></i> Timeline</a></li>
                        <li><a href="blog-list.html"><i class="fa fa-caret-right"></i> Blog List</a></li>
                        <li><a href="blog-single.html"><i class="fa fa-caret-right"></i> Blog Single</a></li>
                        <li><a href="people-directory.html"><i class="fa fa-caret-right"></i> People Directory</a></li>
                        <li><a href="profile.html"><i class="fa fa-caret-right"></i> Profile</a></li>
                        <li><a href="invoice.html"><i class="fa fa-caret-right"></i> Invoice</a></li>
                        <li><a href="search-results.html"><i class="fa fa-caret-right"></i> Search Results</a></li>
                        <li><a href="blank.html"><i class="fa fa-caret-right"></i> Blank Page</a></li>
                        <li><a href="notfound.html"><i class="fa fa-caret-right"></i> 404 Page</a></li>
                        <li><a href="locked.html"><i class="fa fa-caret-right"></i> Locked Screen</a></li>
                        <li><a href="signin.html"><i class="fa fa-caret-right"></i> Sign In</a></li>
                        <li><a href="signup.html"><i class="fa fa-caret-right"></i> Sign Up</a></li>
                    </ul>
                </li>
                <li class="nav-parent"><a href="layouts.html"><i class="fa fa-laptop"></i> <span>Skins &amp; Layouts</span></a>
                    <ul class="children">
                        <li><a href="layouts.html"><i class="fa fa-caret-right"></i> General Layouts</a></li>
                        <li><a href="horizontal-menu.html"><i class="fa fa-caret-right"></i> Top Menu</a></li>
                        <li><a href="horizontal-menu2.html"><i class="fa fa-caret-right"></i> Top Menu w/ Sidebar</a></li>
                        <li><a href="fixed-width.html"><i class="fa fa-caret-right"></i> Fixed Width Page</a></li>
                        <li><a href="fixed-width2.html"><i class="fa fa-caret-right"></i> Fixed Width w/ Menu</a></li>
                    </ul>
                </li>
            </ul>

        </div><!-- leftpanelinner -->
    </div><!-- leftpanel -->

    <div class="mainpanel">

        <div class="headerbar">

            <a class="menutoggle"><i class="fa fa-bars"></i></a>


            <div class="header-right">
                <ul class="headermenu">
                    <li>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                <img src="/Integral/Public/Admin/bracket/images/photos/loggeduser.png" alt="" />
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
                   
      <div class="panel panel-default">
        <div class="panel-heading">
          <div class="panel-btns">
          </div><!-- panel-btns -->
          <h3 class="panel-title">Data Tables</h3>
        </div>
        <div class="panel-body">
          <div class="clearfix mb30"></div>
            <div class="search">
              <form id="searchForm" name="searchform" class="well form-search" action="" method="post"  onSubmit="check();" enctype="multipart/form-data">
                <span>班级：
                  <input type="text" name="search[c_name]" value="<?php echo ($search['c_name']); ?>" placeholder="请输入班级" class="input-medium">
                </span>               
                <span>年级：
                  <input type="text" name="search[s_id]" value="<?php echo ($search['s_id']); ?>" placeholder="格式：如 2015"  class="input-medium">
                </span>             
                <span>部室：
                  <input type="text" name="search[sc_union]" value="<?php echo ($search['sc_union']); ?>" placeholder="请输入部室"  class="input-medium">
                </span>    
                  <input type="submit" class="btn" value="搜索" onclick="checkaction(1);"/>
                  <input type="submit" id="btn" class="btn" value="导出" onclick="checkaction(0);"/>   
              </form>
            </div>
          <div class="table-responsive">
          <a class="btn btn-xs btn-info pull-left mr-5" style="float:left;" id="discard" href="javascript:;">删除</a>
          <form>
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
                    <th class="noExl">操作</th>
                 </tr>
              </thead>
              <tbody>
              <?php if($list): if(is_array($list)): foreach($list as $key=>$vo): ?><tr class="odd gradeX">
                      <td><input name="delete[]" type="checkbox" value="<?php echo ($vo["id"]); ?>" /></td>
                      <td><?php echo ($vo["s_id"]); ?></td>
                      <td><?php echo ($vo["s_name"]); ?></td>
                      <td><?php echo ($vo["c_name"]); ?></td>
                      <td><?php echo ($vo["sc_number"]); ?></td>
                      <td><?php echo ($vo["sc_reason"]); ?></td>
                      <td class="center"><?php echo (date("Y-m-d",$vo["sc_time"])); ?></td>
                      <td class="center"><?php echo ($vo["sc_who"]); ?></td>
                      <td class="center"><?php echo ($vo["sc_union"]); ?></td>
                      <td class="noExl">
                        <a id="edit" class="btn btn-xs btn-info mr-5" href="javascript:;" onclick="edit();">修改</a>
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
      

<script src="/Integral/Public/Admin/bracket/js/jquery-1.11.0.min.js" type="text/javascript"></script>
<!-- <script src="/Integral/Public/Admin/bracket/js/jquery.table2excel.js"></script> -->
<script src="/Integral/Public/Admin/bracket/js/tableExport.js"></script>
<script src="/Integral/Public/Admin/bracket/js/jquery.base64.js"></script>

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
  document.searchform.action="<?php echo U('admin/Tables/index');?>"; 
  } 
  searchform.submit(); 
} 
</script>

<script type="text/javascript">
$(function(){
    //搜索
    $("#search").click(function(){
        $("#anu").val('apply/admin');
        $("#searchForm").submit();
    });
    //导出
    $("#export").click(function(){
        $("#anu").val('apply/admin/export');
        $("#searchForm").submit();
    });
});
</script>

<script>
  function edit() {
    //
    layer.open({
    type: 2,
    skin: 'layui-layer-rim', //加上边框
    area: ['960px', '640px'], //宽高
    content: ['./Application/Admin/View/Tables/tablesEdit.html', 'yes']
  });
}
</script>


        </div>

    </div><!-- mainpanel -->

</section>


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




</body>
</html>