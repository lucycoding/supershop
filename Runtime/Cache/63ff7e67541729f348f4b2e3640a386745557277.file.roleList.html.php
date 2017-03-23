<?php /* Smarty version Smarty-3.1.6, created on 2016-04-03 15:41:17
         compiled from "E:/MyEnv/apache/htdocs/supershop/Admin/View\ManageRole\roleList.html" */ ?>
<?php /*%%SmartyHeaderCode:65085700c91d63a6b6-83500123%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63ff7e67541729f348f4b2e3640a386745557277' => 
    array (
      0 => 'E:/MyEnv/apache/htdocs/supershop/Admin/View\\ManageRole\\roleList.html',
      1 => 1457428716,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '65085700c91d63a6b6-83500123',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rinfo' => 0,
    'v' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5700c91d7346f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5700c91d7346f')) {function content_5700c91d7346f($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'E:\\MyEnv\\apache\\htdocs\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.replace.php';
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <title>角色列表</title>
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
/ManageRole/roleList">角色列表</a></li>
                                                </ul>
                                        </div>
                                        <div class="box-content" style="margin-left: 3px;margin-right: 3px">
					<table class="table table-striped table-bordered" id="role-table" style="font-size: 12px;">
								<tr>
									<!--<th title='全选'><input type="checkbox" id="selectAll" onclick="selectAll()"><i class="icon-th"></i></th>-->
                                                                        <th>角色id</th>
									<th title="点击值编辑；按下ESC还原值">角色名称</th>
									<th>状态</th>
									<th>操作</th>
								</tr>
								<form method="post" name="deleteForm">
	    						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rinfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
								<tr>
									<!--<td><input type="checkbox" name="delete" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['role_id'];?>
"></td>-->
									<td><?php echo $_smarty_tpl->tpl_vars['v']->value['role_id'];?>
</td>
									<td class="enable-edit" data="<?php echo $_smarty_tpl->tpl_vars['v']->value['role_id'];?>
" data-column="role_name"><?php echo $_smarty_tpl->tpl_vars['v']->value['role_name'];?>
</td>
									<td><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['v']->value['valid_flag'],'1','正常'),'0','禁用');?>
</td>
									<td>
                                                                            <a href="<?php echo @__CONTROLLER__;?>
/assignAuth/role_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['role_id'];?>
" class="btn btn-success">分配权限</a>
                                                                            <?php if ($_smarty_tpl->tpl_vars['v']->value['valid_flag']=='1'){?>
                                                                            <a href="javascript:void(0);" class="btn btn-warning" onclick="saveData(<?php echo $_smarty_tpl->tpl_vars['v']->value['role_id'];?>
, 'valid_flag', 0)">禁用</a>
                                                                            <?php }else{ ?>
                                                                            <a href="javascript:void(0);" class="btn btn-info" onclick="saveData(<?php echo $_smarty_tpl->tpl_vars['v']->value['role_id'];?>
, 'valid_flag', 1)">启用</a>
                                                                            <?php }?>
                                                                        </td>
								</tr>
							<?php } ?>
    							</form>
				     </table>
                                            <?php echo $_smarty_tpl->tpl_vars['page']->value;?>

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
    var input = $("<input class='input-small'>");
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
    if(!/^\d{4}$/.test(id)||!/^[A-Za-z_]+$/.test(name))
        return;
    $.ajax({ 
	url:controller_path+"/saveRole/r="+new Date().getTime(), 
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