<?php /* Smarty version Smarty-3.1.6, created on 2016-04-03 15:40:37
         compiled from "E:/MyEnv/apache/htdocs/supershop/Admin/View\Index\login.html" */ ?>
<?php /*%%SmartyHeaderCode:4465700c8f5d5d949-63013618%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e36d92d6b4e40acbe697dd35a0ffe2700172881' => 
    array (
      0 => 'E:/MyEnv/apache/htdocs/supershop/Admin/View\\Index\\login.html',
      1 => 1457520662,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4465700c8f5d5d949-63013618',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'reterr' => 0,
    'name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5700c8f61112f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5700c8f61112f')) {function content_5700c8f61112f($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="0">    
	<meta http-equiv="keywords" content="keyword1,keyword2,keyword3">
	<title><?php echo $_SESSION['lang']['WEB_NAME'];?>
</title>
    <link rel="shortcut icon" href="<?php echo @PUBLIC_URL;?>
favicon.ico">
	
	<?php echo $_smarty_tpl->getSubTemplate ("../inc/cssall.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</head>

<body>
		<div class="container-fluid">
		<div class="row-fluid">
		
			<div class="row-fluid">
				<div class="span12 center login-header">
					<h2><?php echo $_SESSION['lang']['WEB_NAME'];?>
</h2>
				</div><!--/span-->
			</div><!--/row-->
			<div class="row-fluid">
				<div class="well span5 center login-box">
				<?php if ($_smarty_tpl->tpl_vars['reterr']->value){?>
					<div class="alert alert-error">
                                        <?php echo $_smarty_tpl->tpl_vars['reterr']->value;?>

					</div>
				<?php }else{ ?>
					<div class="alert alert-success">
					<?php echo $_SESSION['lang']['LOGIN_INFO'];?>

					</div>
				<?php }?>
                <br/><br/>
					<form class="form-horizontal" action="<?php echo @__CONTROLLER__;?>
/login" method="post" name="form" id="form">
						<fieldset>
							<div class="input-prepend" title="用户名" data-rel="tooltip">
								<span class="add-on"><i class="icon-user"></i></span><input autofocus class="input-large span10" id="name" name="name" type="text" placeholder="<?php echo $_SESSION['lang']['LOGIN_NAME'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"/>
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="密码" data-rel="tooltip">
								<span class="add-on"><i class="icon-lock"></i></span><input class="input-large span10" name="password" id="password" type="password" placeholder="<?php echo $_SESSION['lang']['LOGIN_PWD'];?>
"/>
							</div>
							<div class="clearfix"></div>
                                                        
                                                        <div class="input-prepend" title="验证码" data-rel="tooltip">
								<span class="add-on"><i class="icon-picture"></i></span><input class="input-large span10" id="vcode" name="vcode" type="text"  placeholder="<?php echo $_SESSION['lang']['LOGIN_CODE'];?>
"/>
							</div>
							<div class="clearfix"></div>
                                                        
                                                        <img src="<?php echo @__CONTROLLER__;?>
/getVerifyImg" onclick="this.src='<?php echo @__CONTROLLER__;?>
/getVerifyImg/'+Math.random()"/>
<!-- 
							<div class="input-prepend">
							<label class="remember" for="remember"><input type="checkbox" id="remember" name="rememberme"/>记住用户名</label>
							</div>
							<div class="clearfix"></div>
 -->
							<p class="center span5">
							<button type="submit" class="btn btn-primary"><?php echo $_SESSION['lang']['LOGIN_BUTTON'];?>
</button>
							</p>
						</fieldset>
					</form>
				</div><!--/span-->
			</div><!--/row-->
				</div><!--/fluid-row-->
		
	</div><!--/.fluid-container-->

	<hr>
	<footer>
		<p align="center">Copyright &copy; 2016 <a href="#"><?php echo $_SESSION['lang']['COPYRIGHT_INFO'];?>
</a></p>
	</footer>	
<?php $_smarty_tpl->tpl_vars['reterr'] = new Smarty_variable('', null, 0);?>
</body>
</html>

<?php }} ?>