<?php /* Smarty version Smarty-3.1.6, created on 2017-03-24 00:34:55
         compiled from "E:/MyEnv/apache/htdocs/supershop/Admin/View\ManageNote\noteList.html" */ ?>
<?php /*%%SmartyHeaderCode:775658d3f92f637ef8-16976162%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1e9534b7668e56f9b31cfe907795bc5821feb43' => 
    array (
      0 => 'E:/MyEnv/apache/htdocs/supershop/Admin/View\\ManageNote\\noteList.html',
      1 => 1457510113,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '775658d3f92f637ef8-16976162',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ninfo' => 0,
    'v' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58d3f92f6f75a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d3f92f6f75a')) {function content_58d3f92f6f75a($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <title>查看用户帖子</title>
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
                                                    <li><i class="icon-comment"></i>论坛管理/<a href="<?php echo @__CONTROLLER__;?>
/noteList">查看用户帖子</a></li>
                                                </ul>
                                        </div>
<!--					<div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i>用户管理/<a href="<?php echo @__MODULE__;?>
/ManageUser/userList">普通用户</a></h2>
                                                <a class="pull-right">回收站</a>						
					</div>
					<br/>-->
					<div style="margin-left: 3px;margin-right: 3px">
					<table class="table table-striped table-bordered" id="inform-table" style="font-size: 12px;">
								<tr>
									<th title='全选'><input type="checkbox" id="selectAll" onclick="selectAll()"><i class="icon-th"></i></th>
									<th>帖子标题</th>
									<th>帖子内容</th>
									<th>发帖用户</th>
									<th>发帖时间</th>
									<th>操作</th>
								</tr>
	    						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ninfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
								<tr>
									<td><input type="checkbox" name="delete" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['inform_id'];?>
"></td>
									<td><?php echo $_smarty_tpl->tpl_vars['v']->value['note_title'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['v']->value['note_content'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['v']->value['user_name'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['v']->value['create_time'];?>
</td>
									<td>
                                                                            <!--<a href="###" class="btn btn-primary" title="编辑"><i class="icon-edit"></i></a>-->
                                                                            <a href="###" class="btn btn-danger" title="删除"><i class="icon-remove-sign"></i></a>
                                                                        </td>
								</tr>
							<?php } ?>
				     </table>
                                            <?php echo $_smarty_tpl->tpl_vars['page']->value;?>

					 <div class="pull-right">
						<a onclick="" href="javascript:void(0);" class="btn btn-danger"><i class="icon-remove-sign icon-white"></i>批量删除</a>　　
						</div> 	<br/><br/><br/>
					 </div>
			    </div>  <!-- row-fluid -->				
			</div>
			<!--/#content.span9-->
  		<?php echo $_smarty_tpl->getSubTemplate ("../inc/jsall.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  </body>
</html>

    	
    	
    	
    	
<?php }} ?>