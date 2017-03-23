<?php /* Smarty version Smarty-3.1.6, created on 2016-03-31 17:04:16
         compiled from "E:/MyEnv/apache/htdocs/supershop/Admin/View\ManageGoodsType\goodsTypeList.html" */ ?>
<?php /*%%SmartyHeaderCode:1178756fce810935d29-34654730%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8cba4e0a31ebcedd394d916fe43468c5d3b51c45' => 
    array (
      0 => 'E:/MyEnv/apache/htdocs/supershop/Admin/View\\ManageGoodsType\\goodsTypeList.html',
      1 => 1457059495,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1178756fce810935d29-34654730',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tinfo' => 0,
    'v' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56fce810a1866',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56fce810a1866')) {function content_56fce810a1866($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <title>类别列表</title>
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
                                                    <li><i class="icon-lock"></i>商品管理/<a href="<?php echo @__CONTROLLER__;?>
/goodsTypeList">类别管理</a></li>
                                                    <li class="pull-right"><a href="<?php echo @__CONTROLLER__;?>
/addGoodsType"><i class="icon-plus-sign"></i>添加类别</a></li>
                                                </ul>
                                        </div>
                                       <div class="box-content" style="margin-left: 3px;margin-right: 3px">
					<table class="table table-striped table-bordered" id="user-table" style="font-size: 12px;">
								<tr>
									<th title='全选'><input type="checkbox" id="selectAll" onclick="selectAll()"><i class="icon-th"></i></th>
									<th>类别id</th>
									<th>类别名称</th>
									<th>父级id</th>
									<th>全路径</th>
									<th>创建时间</th>
									<th>等级</th>
									<th>操作</th>
								</tr>
								<form method="post" name="deleteForm">
	    						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tinfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
								<tr>
									<td><input type="checkbox" name="delete" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['type_id'];?>
"></td>
									<td><?php echo $_smarty_tpl->tpl_vars['v']->value['type_id'];?>
</td>
									<td><?php echo preg_replace('!^!m',str_repeat("--/",$_smarty_tpl->tpl_vars['v']->value['type_level']),$_smarty_tpl->tpl_vars['v']->value['type_name']);?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['v']->value['type_pid'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['v']->value['type_path'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['v']->value['create_time'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['v']->value['type_level'];?>
</td>
									<td>
                                                                            <a href="###" class="btn btn-primary">编辑</a>
                                                                            <a href="###" class="btn btn-danger" title="删除"><i class="icon-remove-sign"></i></a>
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