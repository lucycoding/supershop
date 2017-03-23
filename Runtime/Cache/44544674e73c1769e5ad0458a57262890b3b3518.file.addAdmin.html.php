<?php /* Smarty version Smarty-3.1.6, created on 2017-03-24 00:35:02
         compiled from "E:/MyEnv/apache/htdocs/supershop/Admin/View\ManageAdmin\addAdmin.html" */ ?>
<?php /*%%SmartyHeaderCode:1602158d3f936c1f0b2-70008506%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44544674e73c1769e5ad0458a57262890b3b3518' => 
    array (
      0 => 'E:/MyEnv/apache/htdocs/supershop/Admin/View\\ManageAdmin\\addAdmin.html',
      1 => 1457580746,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1602158d3f936c1f0b2-70008506',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rinfo' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58d3f936ca7c5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d3f936ca7c5')) {function content_58d3f936ca7c5($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <title>添加管理员</title>
    <link rel="shortcut icon" href="favicon.ico">
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="expires" content="0">    
	<meta http-equiv="keywords" content="keyword1,keyword2,keyword3">
	<?php echo $_smarty_tpl->getSubTemplate ("../inc/cssall.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  </head>
   <body>
				<div class="row-fluid">
			   	   <div class="box span12" style="margin-top:0">
                                        <div>
                                                <ul class="breadcrumb">
                                                    <li><i class="icon-lock"></i>ADMIN管理/<a href="<?php echo @__CONTROLLER__;?>
/addAdmin">添加管理员</a></li>
                                                    <li class="pull-right"><a href="<?php echo @__CONTROLLER__;?>
/adminList"><i class="icon-search"></i>所有管理员</a></li>
                                                </ul>
                                        </div>
                                       <form action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">
					<fieldset style="margin-left: 30%">
						<div class="control-group">
                                                    角色:　　&nbsp;<select style="width: 100px" name="role">
								<option value="0">--选择角色--</option>
								<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rinfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['role_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['role_name'];?>
</option>
								<?php } ?>
                                                        </select>
						</div>
						<div class="control-group">
							登录名:　
							  <input style="height: 25px" class="input-large focused" type="text" name="loginname"/>
						</div>
						
						<div class="control-group">
							登录密码:
							  <input style="height: 25px" class="input-large focused" type="password" name="loginpwd"/>
						</div>
						
						<div class="form-actions" style="background-color: white;border: 0;margin-left: 20%">
                                                    <input type="submit" class="btn btn-primary" value="添加">
						</div> <!-- /form-actions -->
					</fieldset>
    	</form>
			    </div>  <!-- row-fluid -->				
			</div>
  		<?php echo $_smarty_tpl->getSubTemplate ("../inc/jsall.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  </body>
</html>
<?php }} ?>