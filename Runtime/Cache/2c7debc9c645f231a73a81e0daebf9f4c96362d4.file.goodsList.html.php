<?php /* Smarty version Smarty-3.1.6, created on 2016-04-03 15:42:10
         compiled from "E:/MyEnv/apache/htdocs/supershop/Admin/View\ManageGoods\goodsList.html" */ ?>
<?php /*%%SmartyHeaderCode:289875700c95244bd84-78727602%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c7debc9c645f231a73a81e0daebf9f4c96362d4' => 
    array (
      0 => 'E:/MyEnv/apache/htdocs/supershop/Admin/View\\ManageGoods\\goodsList.html',
      1 => 1457428695,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '289875700c95244bd84-78727602',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ginfo' => 0,
    'v' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5700c952643c7',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5700c952643c7')) {function content_5700c952643c7($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'E:\\MyEnv\\apache\\htdocs\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.replace.php';
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <title>查看商品</title>
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
/goodsList">查看商品</a></li>
                                                    <li class="pull-right"><a href="<?php echo @__CONTROLLER__;?>
/goodsTrashList"><i class="icon-trash"></i>回收站</a></li>
                                                    <li class="pull-right"><a href="<?php echo @__CONTROLLER__;?>
/addGoods"><i class="icon-plus-sign"></i>添加商品</a>｜</li>
                                                </ul>
                                        </div>
                                       <div class="box-content" style="margin-left: 3px;margin-right: 3px">
					<table class="table table-striped table-bordered" id="user-table" style="font-size: 12px;">
                                                        <?php if (count($_smarty_tpl->tpl_vars['ginfo']->value)==0){?>
                                                            <tr><th  style="width: 35%;border:none"></th><th style=" border:none;font-size:14px">暂无记录！</th></tr>
                                                        <?php }else{ ?>
								<tr>
									<th title='全选'><input type="checkbox" id="selectAll" onclick="selectAll()"><i class="icon-th"></i></th>
									<th>商品缩略图</th>
									<th title="点击值编辑；按下ESC还原值">商品名称</th>
									<th title="点击值编辑；按下ESC还原值">原价</th>
									<th title="点击值编辑；按下ESC还原值">现价</th>
									<th title="点击值编辑；按下ESC还原值">产地</th>
									<th title="点击值编辑；按下ESC还原值">品牌</th>
									<th title="点击值编辑；按下ESC还原值">库存</th>
									<th>状态</th>
									<th>生产日期</th>
									<th>创建时间</th>
									<th>上次更新</th>
									<th>操作</th>
								</tr>
	    						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ginfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
								<tr>
									<td><input type="checkbox" name="delete" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
"></td>
                                                                        <td><img src="<?php echo @WEB_URL;?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_thumb_url'];?>
" alt='pic'/></td>
									<td class="enable-edit" data="<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
" data-column="goods_name" style="max-width: 250px"><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
</td>
									<td class="enable-edit" data="<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
" data-column="goods_old_price"><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_old_price'];?>
</td>
									<td class="enable-edit" data="<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
" data-column="goods_now_price"><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_now_price'];?>
</td>
									<td class="enable-edit" data="<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
" data-column="goods_produce_place"><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_produce_place'];?>
</td>
									<td class="enable-edit" data="<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
" data-column="goods_brand"><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_brand'];?>
</td>
									<td class="enable-edit" data="<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
" data-column="goods_num"><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_num'];?>
</td>
									<td><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['v']->value['status'],'1','显示'),'0','下架');?>

                                                                            <?php if ($_smarty_tpl->tpl_vars['v']->value['status']==1){?>
                                                                            <a href="javascript:void(0);" title="下架" onclick="saveData('<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
','status','0')"><i class="icon-cloud-download"></i></a>
                                                                            <?php }elseif($_smarty_tpl->tpl_vars['v']->value['status']==0){?>
                                                                            <a href="javascript:void(0);" title="显示" onclick="saveData('<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
','status','1')"><i class="icon-cloud-upload"></i></a>
                                                                            <?php }?>
                                                                        </td>
									<td><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_produce_date'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['v']->value['create_time'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['v']->value['last_update_time'];?>
</td>
									<td>
                                                                            <a href="###" class="btn btn-primary" title="编辑"><i class="icon-edit"></i></a>
                                                                            <a href="javascript:void(0);" class="btn btn-danger" title="回收" onclick="saveData('<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
','valid_flag','0')"><i class="icon-trash"></i></a>
                                                                        </td>
								</tr>
							<?php } ?>
                                                        <?php }?>
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

<script>
    var controller_path = '<?php echo @__CONTROLLER__;?>
';

$(document).ready(function(){
    $('td[class="enable-edit"]').click(tdClick);
});

//td的点击事件
function tdClick(){
    //将td的文本内容保存
    var td = $(this);
    var tdText = td.text();
    //将td的内容清空
    td.empty();
    //新建一个输入框
    var input = $("<input class='input-block-level'>");
    //将保存的文本内容赋值给输入框
    input.attr("value",tdText);
    //将输入框添加到td中
    td.append(input);
    //给输入框注册事件，当失去焦点时就可以将文本保存起来
    input.blur(function(){
        //将输入框的文本保存
        var input = $(this);
        var inputText = input.val();
        //将td的内容，即输入框去掉,然后给td赋值
        var td = input.parent("td");
        // 保存数据
        saveData(td.attr('data'), td.attr('data-column'), inputText);
        td.html(inputText);
        
        //让td重新拥有点击事件
        td.click(tdClick);
    });
    input.keyup(function(event){
        //1.获取当前用户按下的键值
              //解决不同浏览器获得事件对象的差异,
             // IE用自动提供window.event，而其他浏览器必须显示的提供，即在方法参数中加上event
           var myEvent = event || window.event;
           var keyCode = myEvent.keyCode;
           //2.判断是否是ESC键按下
           if(keyCode == 27){
               //将input输入框的值还原成修改之前的值
               input.val(tdText);
           }
    });
    //将输入框中的文本高亮选中
    //将jquery对象转化为DOM对象
    var inputDom = input.get(0);
    inputDom.select();
    //将td的点击事件移除
    td.unbind("click");
}

function saveData(id, column, value) {
    if(!/^\d{7}$/.test(id)||!/^[A-Za-z_]+$/.test(name))
        return;
    $.ajax({ 
	url:controller_path+"/saveGoodsOneField/r="+new Date().getTime(), 
	type:"post", 
	data:{id:id,column:column,value:value},
	async:false,
	dataType:"json",
	success:function(data){
		if(data.retval == 'ok'){
                    location.reload();
		} else {
                    alert(data.retinfo);
                    return;
                }
	}
    });
}

</script>
  </body>
</html>

    	
    	
    	
    	
<?php }} ?>