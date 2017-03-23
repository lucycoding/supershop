<?php /* Smarty version Smarty-3.1.6, created on 2016-04-06 01:55:07
         compiled from "E:/MyEnv/apache/htdocs/supershop/Home/View\User\login.html" */ ?>
<?php /*%%SmartyHeaderCode:111035700c9d60d47c2-28085061%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '13fc87f56e53f117709a0e59b888369661f6f30c' => 
    array (
      0 => 'E:/MyEnv/apache/htdocs/supershop/Home/View\\User\\login.html',
      1 => 1459878629,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111035700c9d60d47c2-28085061',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5700c9d620918',
  'variables' => 
  array (
    'verflag' => 0,
    'reterr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5700c9d620918')) {function content_5700c9d620918($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="UTF-8">

  <meta name="description" content="">
  <meta name="keywords" content="">

  <title>用户登录</title>

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

  <script>
	$(document).ready(function() {
		$("select").selectBox();
	});
  </script>
  <script>
       $(document).ready(function(){
	      $("button").click(function(){
		     $(this).addClass('click')
	      });             
       })
  </script>
    
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("../inc/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  <section id="main" class="entire_width">
    <div class="container_12">      
       <div id="content">
		<div class="grid_12">
			<h1 class="page_title">登录 或 注册一个账号</h1>
		</div><!-- .grid_12 -->
		
		<div class="grid_6 new_customers">
			<h2>注册账号</h2>
			<p>通过创建网上商城的帐号，您可以享受更快的购物流程，保存送货地址，在您的个人中心查看和跟踪您的订单。</p>
			<div class="clear"></div>
			<button class="account" onclick="window.location='register.jsp'">注册</button>
                </div><!-- .grid_6 -->
		
		<div class="grid_6">
			<form class="registed" name="login" action="<?php echo @__SELF__;?>
" method="post">
				<h2>用户登录</h2>
							
				<p>如果您已有网上商城账号，请登录！</p>
							
				<div class="email">
					<strong>账号:</strong><sup class="surely">*</sup><br/>
					<input type="text" name="name" />
				</div><!-- .email -->
							
				<div class="password">
					<strong>密码:</strong><sup class="surely">*</sup><br/>
					<input type="password" name="password" />
					<a class="forgot" href="PwdIndex.jsp">忘记密码？</a>
				</div><!-- .password -->
				<?php if ($_smarty_tpl->tpl_vars['verflag']->value){?>		
				<div class="vcode">
					<strong>验证码:</strong><sup class="surely">*</sup><br/>
                                        <input type="text" name="vcode" style="width:80px"/>
                                        <image src="<?php echo @__CONTROLLER__;?>
/getVerifyImg" onclick="this.src='<?php echo @__CONTROLLER__;?>
/getVerifyImg/'+Math.random()"/>
				</div><!-- .password -->
				<?php }?>
				<div class="remember">
					<input class="niceCheck" type="checkbox" name="cookie" />
					<span class="rem">7天内自动登录</span>
				</div><!-- .remember -->
				
				<div class="submit">										
					<input type="submit" value="登录" />
				</div><!-- .submit -->
			</form><!-- .registed -->
                </div><!-- .grid_6 -->
       </div><!-- #content -->
       
      <div class="clear"></div>
    </div><!-- .container_12 -->
  </section><!-- #main -->
  
  <div class="clear"></div>
    
<?php echo $_smarty_tpl->getSubTemplate ("../inc/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->tpl_vars['reterr']->value;?>

</body>
</html>
<?php }} ?>