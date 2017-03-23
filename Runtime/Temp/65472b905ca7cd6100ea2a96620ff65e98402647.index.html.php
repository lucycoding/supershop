<?php /*%%SmartyHeaderCode:169456d84fc3894335-96727002%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65472b905ca7cd6100ea2a96620ff65e98402647' => 
    array (
      0 => 'E:/MyEnv/apache/htdocs/supershop/Admin/View\\Index\\index.html',
      1 => 1456982552,
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
  'nocache_hash' => '169456d84fc3894335-96727002',
  'variables' => 
  array (
    'auth_infoA' => 0,
    'v' => 0,
    'auth_infoB' => 0,
    'vv' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56d84fc39dc58',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d84fc39dc58')) {function content_56d84fc39dc58($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <title>网上商城后台主页</title>
    <link rel="shortcut icon" href="favicon.ico">
    
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="0">    
	<meta http-equiv="keywords" content="keyword1,keyword2,keyword3">
	<script type="text/javascript" src="/supershop/Public/Admin/js/admin.js"></script>
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
        
	<script type="text/javascript">
	function showTime(){
		
		var timeId = document.getElementById("timeId");
		var x  = new Array("星期日", "星期一", "星期二","星期三","星期四", "星期五","星期六");
		var now = new Date();
		var d = now.getDay();
		var year = now.getFullYear();       //年
        var month = now.getMonth() + 1;     //月
        var day = now.getDate();            //日
       
        var hh = now.getHours();            //时
        var mm = now.getMinutes();          //分
        var ss = now.getSeconds();          //分
		var clock = year + "-";
        if(month < 10)
            clock += "0";
        clock += month + "-";
        if(day < 10)
            clock += "0";
        clock += day + "   ";
        if(hh < 10)
            clock += "0";
        clock += hh + ":";
        if (mm < 10) clock += '0'; 
        clock += mm + ":"; 
        if (ss < 10) clock += '0'; 
        clock += ss; 
		timeId.innerHTML = clock+"   " +x[d];
		window.setTimeout(showTime,1000);
	}
	</script>
        
  </head>
  
  <body onload="showTime()">
  		<div class="navbar" style="background: #5795BA;">
		<div class="navbar-inner" style="background: #5795BA;">
			<div class="container-fluid">

                            <div class="btn-group pull-right" style="margin: 0;padding: 0">
                                    <a class="btn dropdown-toggle" data-toggle="dropdown" href="#" style="padding: 3px">
						<i class="icon-user"></i><span>admin</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="Admin/pages/updatePassword.jsp" target="contentIframe"><i class="icon-lock"></i>修改密码</a></li>
						<li class="divider"></li>
						
						<li><a href="javascript:void(0);" onclick="javascript:confirm('确定要退出吗？')?location.href='/supershop/index.php/Admin/Index/logout':''"><i class="icon-retweet"></i>退出</a></li>
					</ul>
				</div>
                                <span class="pull-right" style="margin-top: 6px;margin-right: 5px;cursor: pointer">
                                <a style="color:white;">欢迎页</a>|
                                <a style="color:white;">欢迎页</a>|
                                <a style="color:white;">欢迎页</a>|
                                </span>
                                <h3 style="color:black;font-size: 20px;font-weight:bolder;">网上商城管理系统</h3>
				<div id="timeId" class="pull-right"></div>
<!--				<div class="top-nav nav-collapse">
					<ul class="nav">
						<li><h3 style="color:black;font-size: 20px;font-weight:bolder;">网上商城管理系统</h3></li>									
					</ul>
				</div>/.nav-collapse -->
			</div>
		</div>
	</div>
    <div class="container-fluid">
		<div class="row-fluid">
		
            <div class="span2">
				<div class="well sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
                                                                                            <li class="nav-header hidden-tablet">用户管理</li>
                                                                                                                                                        <li><a class="ajax-link" href="/supershop/index.php/Admin/ManageUser/userList" target="contentIframe"><i class="icon-user"></i><span class="hidden-tablet">&nbsp;普通用户</span></a></li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <li class="nav-header hidden-tablet">订单管理</li>
                                                                                                                                                                                                                                                            <li><a class="ajax-link" href="/supershop/index.php/Admin/ManageOrder/allOrder" target="contentIframe"><i class="icon-zoom-in"></i><span class="hidden-tablet">&nbsp;全部订单</span></a></li>
                                                                                                                                                                                                            <li><a class="ajax-link" href="/supershop/index.php/Admin/ManageOrder/notSendOrder" target="contentIframe"><i class="icon-remove-circle"></i><span class="hidden-tablet">&nbsp;未发货订单</span></a></li>
                                                                                                                                                                                                            <li><a class="ajax-link" href="/supershop/index.php/Admin/ManageOrder/sendOrderList" target="contentIframe"><i class="icon-ok-circle"></i><span class="hidden-tablet">&nbsp;已发货订单</span></a></li>
                                                                                                                                                                                                            <li><a class="ajax-link" href="/supershop/index.php/Admin/ManageOrder/confirmOrderList" target="contentIframe"><i class="icon-ban-circle"></i><span class="hidden-tablet">&nbsp;已确认收货订单</span></a></li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <li class="nav-header hidden-tablet">商品管理</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <li><a class="ajax-link" href="/supershop/index.php/Admin/ManageGoods/goodsTypeList" target="contentIframe"><i class="icon-list"></i><span class="hidden-tablet">&nbsp;类别管理</span></a></li>
                                                                                                                                                                                                            <li><a class="ajax-link" href="/supershop/index.php/Admin/ManageGoods/addGoods" target="contentIframe"><i class="icon-plus-sign"></i><span class="hidden-tablet">&nbsp;添加商品</span></a></li>
                                                                                                                                                                                                            <li><a class="ajax-link" href="/supershop/index.php/Admin/ManageGoods/goodsList" target="contentIframe"><i class="icon-search"></i><span class="hidden-tablet">&nbsp;查看商品</span></a></li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <li class="nav-header hidden-tablet">公告管理</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <li><a class="ajax-link" href="/supershop/index.php/Admin/ManageInform/addInform" target="contentIframe"><i class="icon-plus-sign"></i><span class="hidden-tablet">&nbsp;添加公告</span></a></li>
                                                                                                                                                                                                            <li><a class="ajax-link" href="/supershop/index.php/Admin/ManageInform/informList" target="contentIframe"><i class="icon-search"></i><span class="hidden-tablet">&nbsp;查看公告</span></a></li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <li class="nav-header hidden-tablet">论坛管理</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <li><a class="ajax-link" href="/supershop/index.php/Admin/ManageNote/noteList" target="contentIframe"><i class="icon-comment"></i><span class="hidden-tablet">&nbsp;查看用户帖子</span></a></li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <li class="nav-header hidden-tablet">Admin管理</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <li><a class="ajax-link" href="/supershop/index.php/Admin/ManageAdmin/addAdmin" target="contentIframe"><i class="icon-plus-sign"></i><span class="hidden-tablet">&nbsp;添加管理员</span></a></li>
                                                                                                                                                                                                            <li><a class="ajax-link" href="/supershop/index.php/Admin/ManageAdmin/adminList" target="contentIframe"><i class="icon-align-justify"></i><span class="hidden-tablet">&nbsp;所有管理员</span></a></li>
                                                                                                                                                                                                                                                                                                                                                                                                        <li class="nav-header hidden-tablet">权限管理</li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <li><a class="ajax-link" href="/supershop/index.php/Admin/ManageRole/roleList" target="contentIframe"><i class="icon-lock"></i><span class="hidden-tablet">&nbsp;角色列表</span></a></li>
                                                                                                                                                                                                            <li><a class="ajax-link" href="/supershop/index.php/Admin/ManageAuth/authList" target="contentIframe"><i class="icon-lock"></i><span class="hidden-tablet">&nbsp;权限列表</span></a></li>
                                                                                                                                                                                            <!--
						<li class="nav-header hidden-tablet">用户管理</li>
						
                                <li><a class="ajax-link" href="getUserPagerServlet" target="contentIframe"><i class="icon-user"></i><span class="hidden-tablet">&nbsp;普通用户</span></a></li>
 						<li class="nav-header hidden-tablet">订单管理</li>
 						
								<li><a class="ajax-link" href="getOrderPagerServlet" target="contentIframe"><i class="icon-zoom-in"></i><span class="hidden-tablet">&nbsp;所有订单</span></a></li>
								<li><a class="ajax-link" href="getOrderNotSendPagerServlet" target="contentIframe"><i class="icon-remove-circle"></i><span class="hidden-tablet">&nbsp;未发货订单</span></a></li>
								<li><a class="ajax-link" href="getOrderSendPagerServlet" target="contentIframe"><i class="icon-ok-circle"></i><span class="hidden-tablet">&nbsp;已发货订单</span></a></li>
								<li><a class="ajax-link" href="getOrderFreezePagerServlet" target="contentIframe"><i class="icon-ban-circle"></i><span class="hidden-tablet">&nbsp;已确认收货订单</span></a></li>
								
						<li class="nav-header hidden-tablet">商品管理</li>
                         
						        <li><a class="ajax-link" href="allowAddSuperServlet" target="contentIframe"><i class="icon-list"></i><span class="hidden-tablet">&nbsp;类别管理</span></a></li>
								<li><a class="ajax-link" href="allowAddGoodsServlet" target="contentIframe"><i class="icon-plus-sign"></i><span class="hidden-tablet">&nbsp;添加商品</span></a></li>
								<li><a class="ajax-link" href="getGoodsPagerServlet" target="contentIframe"><i class="icon-search"></i><span class="hidden-tablet">&nbsp;查看商品</span></a></li>
								
                          <li class="nav-header hidden-tablet">公告管理</li>
                          
                         		<li><a class="ajax-link" href="Admin/pages/addInform.jsp" target="contentIframe"><i class="icon-plus-sign"></i><span class="hidden-tablet">&nbsp;添加公告</span></a></li>
								<li><a class="ajax-link" href="getInformPagerServlet" target="contentIframe"><i class="icon-search"></i><span class="hidden-tablet">&nbsp;查看公告</span></a></li>
			             <li class="nav-header hidden-tablet">论坛管理</li>
			             
                                <li><a class="ajax-link" href="getNotePagerServlet" target="contentIframe"><i class="icon-comment"></i><span class="hidden-tablet">&nbsp;查看用户帖子</span></a></li>

						<li class="nav-header hidden-tablet">admin管理</li>		
								<li><a class="ajax-link" href="allowAddAdminServlet" target="contentIframe"><i class="icon-plus-sign"></i><span class="hidden-tablet">&nbsp;添加管理员</span></a></li>
								<li><a class="ajax-link" href="getAdminPagerServlet" target="contentIframe"><i class="icon-align-justify"></i><span class="hidden-tablet">&nbsp;所有管理员</span></a></li>
                                            -->
					</ul>
				</div><!--/.well -->
			</div><!--/span-->
			<!-- left menu ends -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">浏览器必须支持Javascript</h4>
					<p></p>
				</div>
			</noscript>

                        <div id="content" class="span9" style="margin-top: 0">
				<iframe name="contentIframe" scrolling="auto" frameborder="0" width="112%" height="150%" src="/supershop/index.php/Admin/Index/defaultPage"></iframe>		
			</div>


		</div>
		<!--/fluid-row-->
	<!-- <?php echo '<?php'; ?> include ("user-form.php"); <?php echo '?>'; ?>-->
		<hr>
        <footer>
			<p align="center">&copy; 2016 <a href='' target="_blank">lucy网上商城团队</a> 版权所有</p>
		</footer>	
	</div>
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
</html><?php }} ?>