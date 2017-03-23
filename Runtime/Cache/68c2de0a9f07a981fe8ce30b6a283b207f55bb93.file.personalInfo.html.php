<?php /* Smarty version Smarty-3.1.6, created on 2016-04-07 15:57:53
         compiled from "E:/MyEnv/apache/htdocs/supershop/Home/View\User\personalInfo.html" */ ?>
<?php /*%%SmartyHeaderCode:123115705281dda4d10-62021856%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68c2de0a9f07a981fe8ce30b6a283b207f55bb93' => 
    array (
      0 => 'E:/MyEnv/apache/htdocs/supershop/Home/View\\User\\personalInfo.html',
      1 => 1460009434,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123115705281dda4d10-62021856',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5705281de549c',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5705281de549c')) {function content_5705281de549c($_smarty_tpl) {?><?php if ($_SESSION['user']==null){?>
<script>alert('会话已过期，请登录!');top.window.location.href='<?php echo @__CONTROLLER__;?>
/login';</script>
<?php }?>
<!DOCTYPE HTML>
<html>
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="UTF-8">

  <meta name="description" content="">
  <meta name="keywords" content="">

  <title>用户信息</title>

  <link rel="shortcut icon" href="<?php echo @PUBLIC_URL;?>
favicon.ico">
  <link href="<?php echo @PUBLIC_URL;?>
css/style.css" media="screen" rel="stylesheet" type="text/css">
  <link href="<?php echo @PUBLIC_URL;?>
css/grid.css" media="screen" rel="stylesheet" type="text/css">
 
  <script src="<?php echo @PUBLIC_URL;?>
js/jquery-1.7.2.min.js" ></script>
  <script src="<?php echo @PUBLIC_URL;?>
js/html5.js" ></script>
  <script src="<?php echo @PUBLIC_URL;?>
js/jflow.plus.js"></script>
  <script src="<?php echo @PUBLIC_URL;?>
js/jquery.carouFredSel-5.2.2-packed.js"></script>
  <script src="<?php echo @PUBLIC_URL;?>
js/checkbox.js"></script>
  <script src="<?php echo @PUBLIC_URL;?>
js/radio.js"></script>
  <script src="<?php echo @PUBLIC_URL;?>
js/selectBox.js"></script>

</head>
<body style="background: none">
  
    <div class="container_12">      

		<div class="grid_12 adress">
			<div class="grid_5" style="float:left;">
				<br/>
                                <?php $_smarty_tpl->tpl_vars['user'] = new Smarty_variable($_SESSION['user'], null, 0);?>
				<span style="font-size: 20px;font-weight: bold;">用户名：</span>
				<?php echo $_smarty_tpl->tpl_vars['user']->value['user_name'];?>
<br/><br/>
				<hr>
				
				<br/>
				<span style="font-size: 20px;font-weight: bold;">邮　箱：</span>
				<?php echo $_smarty_tpl->tpl_vars['user']->value['user_email'];?>
<br/><br/>
				<hr>
				
				<br/>
				<span style="font-size: 20px;font-weight: bold;">真　名：</span>
				<?php echo $_smarty_tpl->tpl_vars['user']->value['user_truename'];?>
<br/><br/>
				<hr>
				
				<br/>
				<span style="font-size: 20px;font-weight: bold;">性　别：</span>
				<?php echo $_smarty_tpl->tpl_vars['user']->value['user_gender'];?>
<br/><br/>
				<hr>
				
				<br/>
				<span style="font-size: 20px;font-weight: bold;">生　日：</span>
				<?php echo $_smarty_tpl->tpl_vars['user']->value['user_birth'];?>
<br/><br/>
				<hr>
			</div>	
			<div class="grid_5" style="float:left;">
				<br/>
				<span style="font-size: 20px;font-weight: bold;">地　　址：</span>
				<?php echo $_smarty_tpl->tpl_vars['user']->value['user_address'];?>
<br/><br/>
				<hr>
				
				<br/>
				<span style="font-size: 20px;font-weight: bold;">邮　　编：</span>
				<?php echo $_smarty_tpl->tpl_vars['user']->value['user_postcode'];?>
<br/><br/>
				<hr>
				
				<br/>
				<span style="font-size: 20px;font-weight: bold;">固　　话：</span>
				<?php echo $_smarty_tpl->tpl_vars['user']->value['user_office_phone'];?>
<br/><br/>
				<hr>
				
				<br/>
				<span style="font-size: 20px;font-weight: bold;">手　　机：</span>
				<?php echo $_smarty_tpl->tpl_vars['user']->value['user_phone'];?>
<br/><br/>
				<hr>
				
				<br/>
				<span style="font-size: 20px;font-weight: bold;">密保问题：</span>
				<?php echo $_smarty_tpl->tpl_vars['user']->value['safe_question'];?>
<br/><br/>
				<hr>
			</div>
        </div><!-- .adress -->
       
      <div class="clear"></div>
    </div><!-- .container_12 -->
  
  <div class="clear"></div>
</body>
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
</html><?php }} ?>