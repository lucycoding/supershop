<?php /* Smarty version Smarty-3.1.6, created on 2016-04-03 15:41:57
         compiled from "E:/MyEnv/apache/htdocs/supershop/Admin/View\ManageGoods\addGoods.html" */ ?>
<?php /*%%SmartyHeaderCode:316905700c945d61498-51441889%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eec2360c884a348ea53e6fda1c65b0cb96657966' => 
    array (
      0 => 'E:/MyEnv/apache/htdocs/supershop/Admin/View\\ManageGoods\\addGoods.html',
      1 => 1457421356,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '316905700c945d61498-51441889',
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
  'unifunc' => 'content_5700c945e055b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5700c945e055b')) {function content_5700c945e055b($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <title>添加商品</title>
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
/addGoods">添加商品</a></li>
                                                    <li class="pull-right"><a href="<?php echo @__CONTROLLER__;?>
/goodsList"><i class="icon-search"></i>查看商品</a></li>
                                                </ul>
                                        </div>
                                       <form action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">
					<fieldset style="margin-left: 30%">
						<div class="control-group">
                                                    类别:　　&nbsp;<span id="gtype"><select style="width: 100px" name="goods_type[]">
								<option value="0">--选择类别--</option>
								<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tinfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['type_id'];?>
"><?php echo preg_replace('!^!m',str_repeat('-/',$_smarty_tpl->tpl_vars['v']->value['type_level']),$_smarty_tpl->tpl_vars['v']->value['type_name']);?>
</option>
								<?php } ?>
                                                        </select></span><i class="icon-plus-sign icon-large addtype" style="cursor: pointer"></i>
						</div>
						<div class="control-group">
							商品名:　
							  <input style="height: 25px" class="input-large focused" type="text" id="goodsName" name="goods_name"/>
						</div>
						
						<div class="control-group">
							商品介绍:
							  <textarea rows="3" cols="20" id="goodsInfo" name="goods_info"></textarea>
						</div>
						
						<div class="control-group">
							产地:　　
							  <input style="height: 25px" class="input-large focused" type="text"  id="goodsProducePlace" name="goods_produce_place"/>
						</div>
						
						<div class="control-group">
							生产日期:
							  <input style="height: 25px" class="input-large focused" type="text"  id="goodsProduceDate" name="goods_produce_date"/>
						</div>
						
						<div class="control-group">
							品牌:　　
							  <input style="height: 25px" class="input-large focused" type="text"  id="goodsBrand" name="goods_brand"/>
						</div>
						
						<div class="control-group">
							原价:　　
							  <input style="height: 25px" class="input-large focused" type="text"  id="goodsOldPrice" name="goods_old_price"/>
						</div>
						
						<div class="control-group">
                                                    <label class="control-label">现价:　　
                                                        <span class="control"><input style="height: 25px" class="input-large focused" type="text" id="goodsNowPrice" name="goods_now_price"/></span>
						</div>
						
						<div class="control-group">
							图片:　　
							  <input style="height: 25px" class="input-large focused" type="file" id="goodsImageUrl" name="goods_img"/>
						</div>
						
						<div class="control-group">
							数量:　　
							  <input style="height: 25px" class="input-large focused" type="text" id="goodsNum" name="goods_num"/>
						</div>
						
						<div class="form-actions" style="background-color: white;border: 0;margin-left: 20%">
                                                    <input type="submit" class="btn btn-primary" value="添加">
						</div> <!-- /form-actions -->
					</fieldset>
    	</form>
			    </div>  <!-- row-fluid -->				
			</div>
  		<?php echo $_smarty_tpl->getSubTemplate ("../inc/jsall.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                <script>
                    $(function(){
                        var html = $('#gtype').html();
                        $(document).on('click', '.addtype', function(){
                            var select = '<span></br>　　　　&nbsp;&nbsp;' + html + '<i class="icon-minus-sign icon-large removetype" style="cursor: pointer"></i></span>';
                            $(this).after(select);
                        });
                        $(document).on('click', '.removetype', function(){
                            $(this).parent().remove();
                        });
                    });
                </script>
  </body>
</html>
<?php }} ?>