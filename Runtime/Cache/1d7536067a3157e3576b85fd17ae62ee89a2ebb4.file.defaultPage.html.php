<?php /* Smarty version Smarty-3.1.6, created on 2016-03-31 17:03:40
         compiled from "E:/MyEnv/apache/htdocs/supershop/Admin/View\Index\defaultPage.html" */ ?>
<?php /*%%SmartyHeaderCode:2709856fce7ecedd801-57591952%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d7536067a3157e3576b85fd17ae62ee89a2ebb4' => 
    array (
      0 => 'E:/MyEnv/apache/htdocs/supershop/Admin/View\\Index\\defaultPage.html',
      1 => 1456740195,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2709856fce7ecedd801-57591952',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56fce7ed000d2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56fce7ed000d2')) {function content_56fce7ed000d2($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <title>登录信息</title>
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="0">    
	<meta http-equiv="keywords" content="keyword1,keyword2,keyword3">
  </head>
  
  <body>
      <div>当前位置：登录成功页</br>
        <img src="<?php echo @PUBLIC_URL;?>
/img/lock.png"/>
        <?php echo $_SESSION['admin_name'];?>
 欢迎进入网站管理中心
      </div>
      <div>
          <div><img src="<?php echo $_SESSION['admin']['admin_logo_url'];?>
" alt="头像"/></div>
          <div>登录账号：<?php echo $_SESSION['admin']['admin_name'];?>
</div>
          <div>昵称：<?php echo $_SESSION['admin']['admin_nickname'];?>
</div>
          <div>邮箱：<?php echo $_SESSION['admin']['admin_email'];?>
</div>
          <div>电话：<?php echo $_SESSION['admin']['admin_phone'];?>
</div>
          <div>创建时间：<?php echo $_SESSION['admin']['create_time'];?>
</div>
          <div>上次登录：<?php echo $_SESSION['admin']['last_login_time'];?>
</div>
          <div>上次登录ip：<?php echo $_SESSION['admin']['last_login_ip'];?>
</div>
      </div>
  </body>
</html><?php }} ?>