<?php /* Smarty version Smarty-3.1.6, created on 2016-03-31 17:04:24
         compiled from "E:/MyEnv/apache/htdocs/supershop/Admin/View\ManageGoodsType\addGoodsType.html" */ ?>
<?php /*%%SmartyHeaderCode:944856fce818bbf6e2-72400116%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd55495956604c6868d30c63adadcd7122b56e10c' => 
    array (
      0 => 'E:/MyEnv/apache/htdocs/supershop/Admin/View\\ManageGoodsType\\addGoodsType.html',
      1 => 1457071517,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '944856fce818bbf6e2-72400116',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tinfo' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56fce818c53e0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56fce818c53e0')) {function content_56fce818c53e0($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <title>添加分类</title>
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
                                                    <li><i class="icon-user"></i>商品管理/<a href="<?php echo @__CONTROLLER__;?>
/goodsTypeList"></a>类别管理/<a href="<?php echo @__CONTROLLER__;?>
/addGoodsType">添加类别</a></li>
                                                </ul>
                                        </div>
                                       <form name="addGoodsType_form" method="post" action="<?php echo @__SELF__;?>
">  
					<fieldset style="margin-left: 30%">
						
						<div class="control-group">
                                                    <label class="control-label">类别名称:</label>
                                                    <input style="height: 25px" class="input-large focused" type="text" id="goodsTypeName" name="type_name"/>
						</div>
                                            
						<div class="control-group">
							<label class="control-label">类别父级:</label>
                                                        <select id="goodsTypePid" name="type_pid">
								<option value="0">请选择(默认顶级)</option>
							<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tinfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['type_id'];?>
"><?php echo preg_replace('!^!m',str_repeat('-/',$_smarty_tpl->tpl_vars['v']->value['type_level']),$_smarty_tpl->tpl_vars['v']->value['type_name']);?>
</option>
							<?php } ?>
							</select>
						</div>
                                            
						<div class="form-actions" style="background-color: white;border: 0;margin-left: 20%">
							<button class="btn btn-primary" type="submit"><i class="icon-plus-sign icon-white"></i>添加</button><br/>
						</div> <!-- /form-actions -->
					</fieldset>
    	</form>
						<br/><br/>
					
			    </div>  <!-- row-fluid -->				
			</div>
			<!--/#content.span9-->
  		<?php echo $_smarty_tpl->getSubTemplate ("../inc/jsall.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  </body>
</html>


<?php }} ?>