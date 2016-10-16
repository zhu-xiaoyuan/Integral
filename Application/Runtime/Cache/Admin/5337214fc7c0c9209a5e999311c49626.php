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
    <!--弹出框-->
    <script src="/Integral/Public/static/layer/layer.js"></script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="/Integral/Public/Admin/bracket/js/html5shiv.js"></script>
    <script src="/Integral/Public/Admin/bracket/js/respond.min.js"></script>
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
                        <li><a href=""><i class="fa fa-caret-right"></i> 积分信息录入</a></li>

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

                
                    <?php if($_SESSION['is_power'] == 1): ?><li id="member"><a href="member"><i class="fa fa-th-list"></i> <span>成员管理</span></a></li><?php endif; ?>

                
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
            
 <div class="contentpanel">
      
      <div class="panel panel-default">
        <div class="panel-heading">
          <div class="panel-btns">
            <a href="" class="panel-close">&times;</a>
            <a href="" class="minimize">&minus;</a>
          </div>
          <h2 class="panel-title">积分录入</h2>
        </div>
        <div class="panel-body panel-body-nopadding">
          
          <form class="form-horizontal form-bordered">
            
            <div class="form-group">
              <label class="col-sm-3 control-label" > 学号 </label>
              <div class="col-sm-6">
                <input type="text" placeholder="学生学号" class="form-control" id="s_id" maxlength="11" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label"> 姓名 </label>
              <div class="col-sm-6">
                <input type="text" placeholder="学生姓名" class="form-control" id="s_name" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label"> 班级 </label>
              <div class="col-sm-6">
                <input type="text" placeholder="学生班级" class="form-control" id="c_name" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label"> 积分 </label>
              <div class="col-sm-6">
                <input type="text" placeholder="积分分数" class="form-control" id="sc_number" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label"> 原因 </label>
              <div class="col-sm-6">
                <input type="text" placeholder="积分原因" class="form-control" id="sc_reason" />
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-3 control-label"> 部室 </label>
              <div class="col-sm-6">
                <input type="text" placeholder="积分统计的部室" class="form-control" id="sc_union" />
              </div>
            </div>
             <div class="form-group">
 				<label class="col-sm-3 control-label" for="disabledinput"> 时间 </label>
 				<div class="col-sm-6">
 					<input type="text" class="form-control" placeholder="月/日/年"  id="sc_time" />
 				</div>
 			</div>            
            <div class="form-group">
				<label class="col-sm-3 control-label" for="disabledinput"> 录入者</label>
				<div class="col-sm-6">
					<input type="text" placeholder="Disabled Input" class="form-control" disabled="" id="sc_who" />
				</div>

			</div>       
			</div> 
          </form>       
        </div><!-- panel-body -->
        
        <div class="panel-footer">
			 <div class="row">
				<div class="col-sm-6 col-sm-offset-3">
				  <button class="btn btn-primary" id="input"> 录 入 </button>&nbsp;
				  <button class="btn btn-default" id="cancel"> 取 消 </button>
				</div>
			 </div>
		  </div><!-- panel-footer -->     
      </div><!-- panel -->

      <div class="panel panel-default">
        <div class="panel-heading">
          <div class="panel-btns">
            <a href="" class="panel-close">&times;</a>
            <a href="" class="minimize">&minus;</a>
          </div>
          <h4 class="panel-title">报表录入</h4>
        </div>
        <div class="panel-body">
          <h4>报表格式为 .xls或.xlsx</h4>
          <br />
          <form action="input/upload/table/scoredetail" class="dropzone" id="dropzone">
            <div class="fallback">
              <input name="file" type="file" multiple />
            </div>
          </form>
        </div>
      </div>

  
      <script>

          Dropzone.options.dropzone = {
            //maxFilesize: 2, // MB
            acceptedFiles: ".xlsx,.xls" ,

          }
      <script>

          $("#sc_who").val("Hello World");
          jQuery('#sc_time').datepicker({
            numberOfMonths: 3,
            showButtonPanel: true
          });
          $("#input").click(function(){
          		$.ajax({
          			type:'POST',
          			url:"<?php echo U('Input/input');?>",
          			data:{
          				's_id':$('#s_id').val(),
          				's_name':$('#s_name').val(),
                  'c_name':$('#c_name').val(),
          				'sc_number':$('#sc_number').val(),
          				'sc_reason':$('#sc_reason').val(),
          				'sc_time':$('#sc_time').val(),
          				'sc_who':$('#sc_who').val(),
          				'sc_union':$('#sc_union').val(),
          			},
          			success:function(data){
          				 if(data.status==0){
                         layer.msg(data.info,{icon:2});
                     }else{
                         layer.msg(data.info,{icon:1});

                         setTimeout(function(){
                             window.location.reload();
                         },2000);
                     }  
          			}
          		});
          }); 
          $("#cancel").click(function(){
                  $('#s_id').val("");
                  $('#s_name').val("");
                  $('#sc_number').val("");
                  $('#sc_reason').val("");
                  $('#sc_time').val("");
                  $('#sc_union').val("");
          });         
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