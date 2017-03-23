<?php /* Smarty version Smarty-3.1.6, created on 2016-03-31 17:03:40
         compiled from "E:/MyEnv/apache/htdocs/supershop/Admin/View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:606956fce7ecc688f1-81383938%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65472b905ca7cd6100ea2a96620ff65e98402647' => 
    array (
      0 => 'E:/MyEnv/apache/htdocs/supershop/Admin/View\\Index\\index.html',
      1 => 1457523368,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '606956fce7ecc688f1-81383938',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'auth_infoA' => 0,
    'v' => 0,
    'auth_infoB' => 0,
    'vv' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56fce7ecd4352',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56fce7ecd4352')) {function content_56fce7ecd4352($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <title><?php echo $_SESSION['lang']['INDEX_TITLE'];?>
</title>
    <link rel="shortcut icon" href="<?php echo @PUBLIC_URL;?>
favicon.ico">
    
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="0">    
	<meta http-equiv="keywords" content="keyword1,keyword2,keyword3">
	<script type="text/javascript" src="<?php echo @PUBLIC_URL;?>
Admin/js/admin.js"></script>
	<?php echo $_smarty_tpl->getSubTemplate ("../inc/cssall.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        
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
						<i class="icon-user"></i><span><?php echo $_SESSION['admin_name'];?>
</span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="Admin/pages/updatePassword.jsp" target="contentIframe"><i class="icon-lock"></i>修改密码</a></li>
						<li class="divider"></li>
						
						<li><a href="javascript:void(0);" onclick="javascript:confirm('确定要退出吗？')?location.href='<?php echo @__CONTROLLER__;?>
/logout':''"><i class="icon-retweet"></i>退出</a></li>
					</ul>
				</div>
                                <span class="pull-right" style="margin-top: 6px;margin-right: 5px;cursor: pointer">
                                <a style="color:white;">欢迎页</a>|
                                <a style="color:white;">欢迎页</a>|
                                <a style="color:white;" href="<?php echo @__CONTROLLER__;?>
/defaultPage" target="contentIframe">欢迎页</a>
                                </span>
                                <h3 style="color:black;font-size: 20px;font-weight:bolder;"><?php echo $_SESSION['lang']['WEB_NAME'];?>
</h3>
                                <div class="pull-right">
                                    <?php if ($_SESSION['lang_type']!='zh-cn'){?>
                                    <a href="?l=zh-cn" style='color: white'><?php echo $_SESSION['lang']['ZH_CN'];?>
</a>
                                    <?php }else{ ?><?php echo $_SESSION['lang']['ZH_CN'];?>
<?php }?>|
                                    <?php if ($_SESSION['lang_type']!='en-us'){?>
                                    <a href="?l=en-us" style='color: white'><?php echo $_SESSION['lang']['EN_US'];?>
</a>
                                    <?php }else{ ?><?php echo $_SESSION['lang']['EN_US'];?>
<?php }?>
                                </div>
				<div id="timeId"></div>
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
                                            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['auth_infoA']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                                <li class="nav-header hidden-tablet"><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_name'];?>
</li>
                                                <?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_smarty_tpl->tpl_vars['kk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['auth_infoB']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value){
$_smarty_tpl->tpl_vars['vv']->_loop = true;
 $_smarty_tpl->tpl_vars['kk']->value = $_smarty_tpl->tpl_vars['vv']->key;
?>
                                                    <?php if ($_smarty_tpl->tpl_vars['vv']->value['auth_pid']==$_smarty_tpl->tpl_vars['v']->value['auth_id']){?>
                                                    <li><a class="ajax-link" href="<?php echo @__MODULE__;?>
/<?php echo $_smarty_tpl->tpl_vars['vv']->value['auth_c'];?>
/<?php echo $_smarty_tpl->tpl_vars['vv']->value['auth_a'];?>
" target="contentIframe"><?php if ($_smarty_tpl->tpl_vars['vv']->value['auth_icon']){?><i class="icon-<?php echo $_smarty_tpl->tpl_vars['vv']->value['auth_icon'];?>
"></i><?php }?><span class="hidden-tablet">&nbsp;<?php echo $_smarty_tpl->tpl_vars['vv']->value['auth_name'];?>
</span></a></li>
                                                    <?php }?>
                                                <?php } ?>
                                            <?php } ?>
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
				<iframe name="contentIframe" scrolling="auto" frameborder="0" width="112%" height="150%" src="<?php echo @__CONTROLLER__;?>
/defaultPage"></iframe>		
			</div>


		</div>
		<!--/fluid-row-->
	<!-- <<?php ?>?php include ("user-form.php"); ?<?php ?>>-->
		<hr>
        <footer>
			<p align="center">Copyright &copy; 2016 <a href="#"><?php echo $_SESSION['lang']['COPYRIGHT_INFO'];?>
</a></p>
		</footer>	
	</div>
	<?php echo $_smarty_tpl->getSubTemplate ("../inc/jsall.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  </body>
</html><?php }} ?>