<?php /*%%SmartyHeaderCode:2833056d8514ee10f02-08358888%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7c0ea7a3dc04d7b0e9e3beed06475105277f1ac' => 
    array (
      0 => 'E:/MyEnv/apache/htdocs/supershop/Admin/View\\ManageInform\\informList.html',
      1 => 1457000350,
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
  'nocache_hash' => '2833056d8514ee10f02-08358888',
  'variables' => 
  array (
    'minfo' => 0,
    'v' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56d8514eea94b',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d8514eea94b')) {function content_56d8514eea94b($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <title>查看公告</title>
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
                                                    <li><i class="icon-user"></i>公告管理/<a href="/supershop/index.php/Admin/ManageInform/informList">查看公告</a></li>
                                                    <li class="pull-right"><a href="/supershop/index.php/Admin/ManageInform/informTrashList"><i class="icon-trash"></i>回收站</a></li>
                                                    <li class="pull-right"><a href="/supershop/index.php/Admin/ManageInform/addInform"><i class="icon-plus-sign"></i>添加公告</a>｜</li>
                                                </ul>
                                        </div>
<!--					<div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i>用户管理/<a href="/supershop/index.php/Admin/ManageUser/userList">普通用户</a></h2>
                                                <a class="pull-right">回收站</a>						
					</div>
					<br/>-->
					<div style="margin-left: 3px;margin-right: 3px">
					<table class="table table-striped table-bordered" id="inform-table" style="font-size: 12px;">
								<tr>
									<th title='全选'><input type="checkbox" id="selectAll" onclick="selectAll()"><i class="icon-th"></i></th>
									<th>公告标题</th>
									<th>公告内容</th>
									<th>创建时间</th>
									<th>操作</th>
								</tr>
	    														<tr>
									<td><input type="checkbox" name="delete" value="10001"></td>
									<td>实力大回馈</td>
									<td>全场打折促销啦，走过路过千万不要错过！</td>
									<td>2015-03-31 00:27:47</td>
									<td>
                                                                            <!--<a href="###" class="btn btn-primary" title="编辑"><i class="icon-edit"></i></a>-->
                                                                            <a href="###" class="btn btn-danger" title="回收"><i class="icon-trash"></i></a>
                                                                        </td>
								</tr>
															<tr>
									<td><input type="checkbox" name="delete" value="10002"></td>
									<td>热烈庆祝网上商城上线</td>
									<td>公告：为庆祝网上商城上线，即日起所有商品一律打折，欢迎选购！</td>
									<td>2015-04-19 13:56:08</td>
									<td>
                                                                            <!--<a href="###" class="btn btn-primary" title="编辑"><i class="icon-edit"></i></a>-->
                                                                            <a href="###" class="btn btn-danger" title="回收"><i class="icon-trash"></i></a>
                                                                        </td>
								</tr>
															<tr>
									<td><input type="checkbox" name="delete" value="10003"></td>
									<td>迎五一疯狂大促销！</td>
									<td>即日起注册网上商城会员，即可享受打折优惠！</td>
									<td>2015-04-30 14:01:25</td>
									<td>
                                                                            <!--<a href="###" class="btn btn-primary" title="编辑"><i class="icon-edit"></i></a>-->
                                                                            <a href="###" class="btn btn-danger" title="回收"><i class="icon-trash"></i></a>
                                                                        </td>
								</tr>
											     </table>
                                            <div><div class="pagination pagination-centered"><ul></li><li><a class="first" href="/supershop/index.php/Admin/ManageInform/informList/p/1.html">首页</a></li><li></li><li class="active"><a>1</a></li><li></li><li><a class="end" href="/supershop/index.php/Admin/ManageInform/informList/p/1.html">末页</a></li><li><a>1/1</a></li><li><a><span class="rows">共 3 条记录</span></a></li></ul></div></div>
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