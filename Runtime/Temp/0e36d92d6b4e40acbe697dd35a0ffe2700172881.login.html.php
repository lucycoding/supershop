<?php /*%%SmartyHeaderCode:1104056d84d090b4c24-87365060%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e36d92d6b4e40acbe697dd35a0ffe2700172881' => 
    array (
      0 => 'E:/MyEnv/apache/htdocs/supershop/Admin/View\\Index\\login.html',
      1 => 1456725404,
      2 => 'file',
    ),
    '663311b1748e2136024211eac0563596202bfd2d' => 
    array (
      0 => 'E:\\MyEnv\\apache\\htdocs\\supershop\\Admin\\View\\inc\\cssall.html',
      1 => 1456765354,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1104056d84d090b4c24-87365060',
  'variables' => 
  array (
    'reterr' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56d84d09187b5',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d84d09187b5')) {function content_56d84d09187b5($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="0">    
	<meta http-equiv="keywords" content="keyword1,keyword2,keyword3">
	<title>网上商城管理系统</title>
    <link rel="shortcut icon" href="/supershop/Public/favicon.ico">
	
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
		<div class="container-fluid">
		<div class="row-fluid">
		
			<div class="row-fluid">
				<div class="span12 center login-header">
					<h2>网上商城管理系统</h2>
				</div><!--/span-->
			</div><!--/row-->
			<div class="row-fluid">
				<div class="well span5 center login-box">
									<div class="alert alert-success">
					请输入用户名和密码登录
					</div>
				                <br/><br/>
					<form class="form-horizontal" action="/supershop/index.php/admin/index/login" method="post" name="form" id="form">
						<fieldset>
							<div class="input-prepend" title="用户名" data-rel="tooltip">
								<span class="add-on"><i class="icon-user"></i></span><input autofocus class="input-large span10" id="name" name="name" type="text" placeholder="用户名/手机号/邮箱" value=""/>
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="密码" data-rel="tooltip">
								<span class="add-on"><i class="icon-lock"></i></span><input class="input-large span10" name="password" id="password" type="password" placeholder="登录密码"/>
							</div>
							<div class="clearfix"></div>
                                                        
                                                        <div class="input-prepend" title="验证码" data-rel="tooltip">
								<span class="add-on"><i class="icon-picture"></i></span><input class="input-large span10" id="vcode" name="vcode" type="text"  placeholder="验证码"/>
							</div>
							<div class="clearfix"></div>
                                                        
                                                        <img src="/supershop/index.php/admin/index/getVerifyImg" onclick="this.src='/supershop/index.php/admin/index/getVerifyImg/'+Math.random()"/>
<!-- 
							<div class="input-prepend">
							<label class="remember" for="remember"><input type="checkbox" id="remember" name="rememberme"/>记住用户名</label>
							</div>
							<div class="clearfix"></div>
 -->
							<p class="center span5">
							<button type="submit" class="btn btn-primary">登录</button>
							</p>
						</fieldset>
					</form>
				</div><!--/span-->
			</div><!--/row-->
				</div><!--/fluid-row-->
		
	</div><!--/.fluid-container-->

	<hr>
	<footer>
		<p align="center">Copyright &copy; 2016 <a href="#">lucy网上商城团队</a> 版权所有</p>
	</footer>	
</body>
</html>

<?php }} ?>