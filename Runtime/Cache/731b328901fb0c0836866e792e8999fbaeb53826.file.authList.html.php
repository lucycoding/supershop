<?php /* Smarty version Smarty-3.1.6, created on 2016-04-03 15:41:12
         compiled from "E:/MyEnv/apache/htdocs/supershop/Admin/View\ManageAuth\authList.html" */ ?>
<?php /*%%SmartyHeaderCode:210235700c918839b15-21930292%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '731b328901fb0c0836866e792e8999fbaeb53826' => 
    array (
      0 => 'E:/MyEnv/apache/htdocs/supershop/Admin/View\\ManageAuth\\authList.html',
      1 => 1457020397,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '210235700c918839b15-21930292',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ainfo' => 0,
    'v' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5700c91897dee',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5700c91897dee')) {function content_5700c91897dee($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'E:\\MyEnv\\apache\\htdocs\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.replace.php';
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <title>权限列表</title>
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
                                                    <li><i class="icon-lock"></i>权限管理/<a href="<?php echo @__MODULE__;?>
/ManageAuth/authList">权限列表</a></li>
                                                    <li class="pull-right"><a href="<?php echo @__MODULE__;?>
/ManageAuth/addAuth"><i class="icon-plus-sign"></i>添加权限</a></li>
                                                </ul>
                                        </div>
                                       <div class="box-content" style="margin-left: 3px;margin-right: 3px">
					<table class="table table-striped table-bordered" id="user-table" style="font-size: 12px;">
								<tr>
									<th title='全选'><input type="checkbox" id="selectAll" onclick="selectAll()"><i class="icon-th"></i></th>
									<th>权限id</th>
									<th>权限名称</th>
									<th>bootstrap图标</th>
									<th>父级id</th>
									<th>控制器</th>
									<th>操作方法</th>
									<th>全路径</th>
									<th>状态</th>
									<th>创建时间</th>
									<th>等级</th>
									<th>操作</th>
								</tr>
								<form method="post" name="deleteForm">
	    						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ainfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
								<tr>
									<td><input type="checkbox" name="delete" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['auth_id'];?>
"></td>
									<td><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_id'];?>
</td>
									<td><?php echo preg_replace('!^!m',str_repeat("--/",$_smarty_tpl->tpl_vars['v']->value['auth_level']),$_smarty_tpl->tpl_vars['v']->value['auth_name']);?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_icon'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_pid'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_c'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_a'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_path'];?>
</td>
									<td><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['v']->value['valid_flag'],'1','正常'),'0','禁用');?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['v']->value['create_time'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_level'];?>
</td>
									<td>
                                                                            <a href="###" class="btn btn-primary">编辑</a>
                                                                            <?php if ($_smarty_tpl->tpl_vars['v']->value['status']==1){?>
                                                                            <a href="###" class="btn btn-warning" title="禁用"><i class="icon-ban-circle"></i></a>
                                                                            <?php }elseif($_smarty_tpl->tpl_vars['v']->value['status']==0){?>
                                                                            <a href="###" class="btn btn-success" title="启用"><i class="icon-ok-circle"></i></a>
                                                                            <?php }?>
                                                                        </td>
								</tr>
							<?php } ?>
				     </table>
                                            <?php echo $_smarty_tpl->tpl_vars['page']->value;?>

					 <div class="pull-right">
						<a onclick="" href="javascript:void(0);" class="btn btn-warning"><i class="icon-remove-sign icon-white"></i>批量禁用</a>　　
						</div> 	<br/><br/><br/>
					 </div>
			    </div>  <!-- row-fluid -->				
			</div>
			<!--/#content.span9-->
  		<?php echo $_smarty_tpl->getSubTemplate ("../inc/jsall.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  </body>
</html>

    	
    	
    	
    	
<?php }} ?>