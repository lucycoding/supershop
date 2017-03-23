<?php /*%%SmartyHeaderCode:2395756d84fd869d0d4-17615457%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a011a3d8fe4c1b955b13ffb542afde2415282c9' => 
    array (
      0 => 'E:/MyEnv/apache/htdocs/supershop/Admin/View\\ManageUser\\userList.html',
      1 => 1456997831,
      2 => 'file',
    ),
    '663311b1748e2136024211eac0563596202bfd2d' => 
    array (
      0 => 'E:\\MyEnv\\apache\\htdocs\\supershop\\Admin\\View\\inc\\cssall.html',
      1 => 1456765354,
      2 => 'file',
    ),
    '7395dd2e42d974dced58f978cbc61a3f05d25790' => 
    array (
      0 => 'E:\\MyEnv\\apache\\htdocs\\supershop\\Admin\\View\\inc\\jsall.html',
      1 => 1456994428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2395756d84fd869d0d4-17615457',
  'variables' => 
  array (
    'uinfo' => 0,
    'v' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56d84fd87ae81',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d84fd87ae81')) {function content_56d84fd87ae81($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <title>普通用户</title>
    <link rel="shortcut icon" href="favicon.ico">
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="0">    
	<meta http-equiv="keywords" content="keyword1,keyword2,keyword3">
		<link id="bs-css" href="/supershop/Public/Admin/cssall/bootstrap-cerulean.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	  
	  .table td {
	  	vertical-align:middle;
	  }
	  
	  .input-append button.add-on {
    	height: inherit !important;
	  }
	  
	.control-label2 { float:left; width:90px;padding-top:5px; }
	.row-fluid-m5 { width:99%; margin: 5px 5px 5px 5px; }
    .bar {
            height: 18px;
                background: green;
    }

    .table-striped tbody tr.highlight td {
            background-color: #ADB5FF;
    }
	</style>
	<link href="/supershop/Public/Admin/cssall/bootstrap-responsive.css" rel="stylesheet">
	<link href="/supershop/Public/Admin/cssall/charisma-app.css" rel="stylesheet">
	<link href="/supershop/Public/Admin/cssall/jquery-ui-1.8.21.custom.css" rel="stylesheet">
	<link href="/supershop/Public/Admin/cssall/chosen.css" rel='stylesheet'>
	<link href="/supershop/Public/Admin/cssall/uniform.default.css" rel='stylesheet'>
	<link href="/supershop/Public/Admin/cssall/jquery.noty.css" rel='stylesheet'>
	<link href="/supershop/Public/Admin/cssall/noty_theme_default.css" rel='stylesheet'>
	<link href="/supershop/Public/Admin/cssall/opa-icons.css" rel='stylesheet'>
	<link href="/supershop/Public/Admin/cssall/uploadify.css" rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="/supershop/Public/Admin/cssall/easyui.css">
	<link rel="stylesheet" type="text/css" href="/supershop/Public/Admin/cssall/font-awesome.min.css">
	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="/admin/js/html5.js"></script>
	<![endif]-->

	<!-- The fav icon -->
	<!--  <link rel="shortcut icon" href="img/favicon.ico"> -->
        <style>
            div.checker span { background-image:url(''); }
            div.checker input { width: 13px;height: 13px;opacity: 1 ! important; }
        </style>
  </head>
  
  <body>
				<div class="row-fluid">
			   	   <div class="box span12" style="margin-top:0">
                                       
                                        <div>
                                                <ul class="breadcrumb">
                                                    <li><i class="icon-user"></i>用户管理/<a href="/supershop/index.php/Admin/ManageUser/userList">普通用户</a></li>
                                                    <li class="pull-right"><a href="/supershop/index.php/Admin/ManageUser/userTrashList"><i class="icon-trash"></i>回收站</a></li>
                                                    <li class="pull-right"><a href="/supershop/index.php/Admin/ManageUser/userList"><i class="icon-plus-sign"></i>添加用户</a>｜</li>
                                                </ul>
                                        </div>
<!--					<div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i>用户管理/<a href="/supershop/index.php/Admin/ManageUser/userList">普通用户</a></h2>
                                                <a class="pull-right">回收站</a>						
					</div>
					<br/>-->
					<div style="margin-left: 3px;margin-right: 3px">
					<table class="table table-striped table-bordered" id="user-table" style="font-size: 12px;">
								<tr>
									<th title='全选'><input type="checkbox" id="selectAll" onclick="selectAll()"><i class="icon-th"></i></th>
									<th>用户id</th>
									<th>用户名</th>
                                                                        <th>昵称</th>
									<th>手机</th>
									<th>邮箱</th>
									<th>真名</th>
									<th>状态</th>
									<th>创建时间</th>
									<th>上次登录</th>
									<th>上次登录IP</th>
									<th>操作</th>
								</tr>
	    														<tr>
									<td><input type="checkbox" name="delete" value="100000"></td>
									<td>100000</td>
									<td>lucy</td>
									<td style="max-width: 50px">根本停不下来的小陆</td>
									<td>13951755802</td>
									<td>136055326@qq.com</td>
									<td>陆晨阳</td>
									<td>正常</td>
                                                                        <td>2016-03-02</br>09:23:12</td>
									<td>0000-00-00</br>00:00:00</td>
									<td>0.0.0.0</td>
									<td>
                                                                            <a href="###" class="btn btn-primary" title="编辑"><i class="icon-edit"></i></a>
                                                                                                                                                        <a href="###" class="btn btn-warning" title="禁用"><i class="icon-ban-circle"></i></a>
                                                                                                                                                        <a href="###" class="btn btn-danger" title="回收"><i class="icon-trash"></i></a>
                                                                        </td>
								</tr>
											     </table>
                                            <div><div class="pagination pagination-centered"><ul></li><li><a class="first" href="/supershop/index.php/Admin/ManageUser/userList/p/1.html">首页</a></li><li></li><li class="active"><a>1</a></li><li></li><li><a class="end" href="/supershop/index.php/Admin/ManageUser/userList/p/1.html">末页</a></li><li><a>1/1</a></li><li><a><span class="rows">共 1 条记录</span></a></li></ul></div></div>
					 <div class="pull-right">
						<a onclick="" href="javascript:void(0);" class="btn btn-warning"><i class="icon-remove-sign icon-white"></i>批量禁用</a>　　
						</div> 	<br/><br/><br/>
					 </div>
			    </div>  <!-- row-fluid -->				
			</div>
			<!--/#content.span9-->
  			<script src="/supershop/Public/Admin/jsall/jquery-1.7.2.min.js"></script>
	<!-- jQuery UI -->
	<script src="/supershop/Public/Admin/jsall/jquery-ui-1.8.21.custom.min.js"></script>

	<script src="/supershop/Public/Admin/jsall/jquery.blockUI.js"></script>
	
	<!-- transition / effect library -->
	<script src="/supershop/Public/Admin/jsall/bootstrap-transition.js"></script>
	<!-- alert enhancer library -->
	<script src="/supershop/Public/Admin/jsall/bootstrap-alert.js"></script>
	<!-- modal / dialog library -->
	<script src="/supershop/Public/Admin/jsall/bootstrap-modal.js"></script>
	<!-- custom dropdown library -->
	<script src="/supershop/Public/Admin/jsall/bootstrap-dropdown.js"></script>
	<!-- scrolspy library -->
	<script src="/supershop/Public/Admin/jsall/bootstrap-scrollspy.js"></script>
	<!-- library for creating tabs -->
	<script src="/supershop/Public/Admin/jsall/bootstrap-tab.js"></script>
	<!-- library for advanced tooltip -->
	<script src="/supershop/Public/Admin/jsall/bootstrap-tooltip.js"></script>
	<!-- popover effect library -->
	<script src="/supershop/Public/Admin/jsall/bootstrap-popover.js"></script>
	<!-- button enhancer library -->
	<script src="/supershop/Public/Admin/jsall/bootstrap-button.js"></script>
	<!-- autocomplete library -->
	<script src="/supershop/Public/Admin/jsall/bootstrap-typeahead.js"></script>
	<!-- library for cookie management -->
	<script src="/supershop/Public/Admin/jsall/jquery.cookie.js"></script>
	<!-- calander plugin -->
<!--	<script src="js/fullcalendar.min.js"></script> -->
	<!-- data table plugin -->
	<script src="/supershop/Public/Admin/jsall/jquery.dataTables.min.js"></script>

	<!-- chart libraries start -->
<!--    
	<script src="js/excanvas.js"></script>
	<script src="js/jquery.flot.min.js"></script>
	<script src="js/jquery.flot.pie.min.js"></script>
	<script src="js/jquery.flot.stack.js"></script>
	<script src="js/jquery.flot.resize.min.js"></script>
-->

	<!-- chart libraries end -->

	<!-- select or dropdown enhancer -->
	<script src="/supershop/Public/Admin/jsall/jquery.chosen.min.js"></script>
	<!-- checkbox, radio, and file input styler -->
	<script src="/supershop/Public/Admin/jsall/jquery.uniform.min.js"></script> 
	<!-- plugin for gallery image view -->
<!--	<script src="js/jquery.colorbox.min.js"></script> -->
	<!-- rich text editor library -->
<!--	<script src="js/jquery.cleditor.min.js"></script> -->
	<!-- notification plugin -->
	<script src="/supershop/Public/Admin/jsall/jquery.noty.js"></script>
	<!-- file manager library -->
<!-- <script src="js/jquery.elfinder.min.js"></script> -->

	<!-- star rating plugin -->
<!--	<script src="js/jquery.raty.min.js"></script> -->
	<!-- for iOS style toggle switch -->
<!--    
	<script src="js/jquery.iphone.toggle.js"></script>
    -->
	<!-- autogrowing textarea plugin -->
	<script src="/supershop/Public/Admin/jsall/jquery.autogrow-textarea.js"></script>
	<!-- multiple file upload plugin 
	<script src="js/jquery.uploadify-3.1.min.js"></script> -->
	
	<!-- history.js for cross-browser state change on ajax -->
	<script src="/supershop/Public/Admin/jsall/jquery.history.js"></script>
	 
	<script src="/supershop/Public/Admin/jsall/charisma.js"></script> 
	<script src="/supershop/Public/Admin/jsall/bootbox.min.js"></script>
	
	
	<script src="/supershop/Public/Admin/jsall/custom-validate.js"></script>
	<script type="text/javascript" src="/supershop/Public/Admin/jsall/jquery.easyui.min.js"></script>

        
	<script type="text/javascript">
		function selectAll() {
			var deletes =document.getElementsByName("delete");
			var selectAll = document.getElementById("selectAll");
			for(var i = 0;i<deletes.length;i++) {
				if(selectAll.checked == true) {
				 	deletes[i].checked = true;
				}
				else {
					deletes[i].checked = false;
				}
			}
		}
	</script>
        
  </body>
</html>

    	
    	
    	
    	
<?php }} ?>