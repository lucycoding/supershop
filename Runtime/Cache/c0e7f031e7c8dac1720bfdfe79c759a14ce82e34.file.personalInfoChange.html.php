<?php /* Smarty version Smarty-3.1.6, created on 2016-04-07 16:08:14
         compiled from "E:/MyEnv/apache/htdocs/supershop/Home/View\User\personalInfoChange.html" */ ?>
<?php /*%%SmartyHeaderCode:970957061304114694-54625010%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0e7f031e7c8dac1720bfdfe79c759a14ce82e34' => 
    array (
      0 => 'E:/MyEnv/apache/htdocs/supershop/Home/View\\User\\personalInfoChange.html',
      1 => 1460016492,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '970957061304114694-54625010',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57061304225dd',
  'variables' => 
  array (
    '(@__MODULE__)' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57061304225dd')) {function content_57061304225dd($_smarty_tpl) {?><?php if ($_SESSION['user']==null){?>
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

  <title>修改用户信息</title>

  <link rel="shortcut icon" href="<?php echo @PUBLIC_URL;?>
favicon.ico">
  <link href="<?php echo @PUBLIC_URL;?>
css/grid.css" media="screen" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?php echo @PUBLIC_URL;?>
css/easyui.css">
 
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
  
	<script type="text/javascript" src="<?php echo @PUBLIC_URL;?>
js/jquery.easyui.min.js"></script>
	<script src="<?php echo @PUBLIC_URL;?>
js/jquery.min.js" ></script>

        <script>
            var WEBROOT = '<?php echo @__MODULE__;?>
';
            </script>	
	<script src="<?php echo @PUBLIC_URL;?>
custom/personalInfoChange.js" ></script>
</head>
<body style="background: none;">
  <br/><br/>
    <div class="container_12">      
		
		<div class="grid_12 adress">
   		<form action="<?php echo $_smarty_tpl->tpl_vars[(@__MODULE__)]->value;?>
/updateUserInfo" method="post" id="infoform" name="infoform" >
			<div class="grid_5" style="float:left;">
				<br/>
                                <?php $_smarty_tpl->tpl_vars['user'] = new Smarty_variable($_SESSION['user'], null, 0);?>
				<span style="font-size: 18px;font-weight: bold;">用&nbsp;户&nbsp;名：</span>
				<input type="text" disabled="disabled" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_name'];?>
"><br/><br/>
				
				<br/>
				<span style="font-size: 18px;font-weight: bold;">邮　　箱：</span>
				<input type="text" name="email" id="email" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_email'];?>
"  onblur="checkMail()" onfocus="clearMail()" /><span id="checkMail"></span><br/><br/>
				
				<br/>
				<span style="font-size: 18px;font-weight: bold;">真　　名：</span>
				<input type="text" name="trueName" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_truename'];?>
"  /><br/><br/>
				
				<br/>
				<span style="font-size: 18px;font-weight: bold;">性　　别：</span>
				<input type="radio" name="sex" value="男" <?php if ($_smarty_tpl->tpl_vars['user']->value['user_gender']=='male'){?>checked="checked"<?php }?> />男
                <input type="radio" name="sex" value="女" <?php if ($_smarty_tpl->tpl_vars['user']->value['user_gender']=='female'){?>checked="checked"<?php }?> />女        <br/><br/>
				
				<br/>
				<span style="font-size: 18px;font-weight: bold;">生　　日：</span>
				<input name="birthday" class="easyui-datebox" data-options="formatter:myformatter,parser:myparser" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['birthday'];?>
"></input><br/><br/>
				<br/><br/>
			</div>	
			<div class="grid_5" style="float:left;">
				<br/>
				<span style="font-size: 18px;font-weight: bold;">地　址：</span>
				<input type="text" name="address" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_address'];?>
"  /><br/><br/>
				
				<br/>
				<span style="font-size: 18px;font-weight: bold;">邮　编：</span>
				<input type="text" id="postcode" name="postcode" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_postcode'];?>
"  onblur="isPostalCode()" onfocus="clearPostR()" /><span id="remindPostCode"></span><br/><br/>
				
				<br/>
				<span style="font-size: 18px;font-weight: bold;">固　话：</span>
				<input type="text" id="phone" name="phone" onblur="checkPhone()" onfocus="clearPhoneR()" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_office_phone'];?>
" /><span id="checkPhone"></span><br/><br/>
				
				<br/>
				<span style="font-size: 18px;font-weight: bold;">手　机：</span>
				<input type="text"  id="mphone" name="mphone" onblur="checkMPhone()" onfocus="clearMphoneR()" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['user_phone'];?>
" /><span id="checkMphone"></span><br/><br/>
				
				<br/>
				<span style="font-size: 18px;font-weight: bold;">验证码：</span>
				<input type="text" id="code" name="code"  style="width: 50px;" onblur="checkCode()" />&nbsp;<image src="<?php echo @__CONTROLLER__;?>
/getVerifyImg" onclick="this.src='<?php echo @__CONTROLLER__;?>
/getVerifyImg/'+Math.random()"/>
				<span id="codeR"></span><br/><br/>
			</div>
		</form>	
        </div><!-- .adress -->
        <br/><br/><br/><br/><br/><br/>
			<div style="margin-left: 600px;">						
				<button onclick="checkForm()" style="width: 80px;height: 30px ;background: #59B7C2;border: 0 none;color: white;">修改</button><br/>
			</div>
       
      <div class="clear"></div>
    </div><!-- .container_12 -->
  
  <div class="clear"></div>
 
</body>
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
</html><?php }} ?>