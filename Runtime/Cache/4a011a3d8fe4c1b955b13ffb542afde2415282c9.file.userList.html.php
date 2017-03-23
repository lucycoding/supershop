<?php /* Smarty version Smarty-3.1.6, created on 2016-03-31 16:48:12
         compiled from "E:/MyEnv/apache/htdocs/supershop/Admin/View\ManageUser\userList.html" */ ?>
<?php /*%%SmartyHeaderCode:946556fce44c4974c6-40706467%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a011a3d8fe4c1b955b13ffb542afde2415282c9' => 
    array (
      0 => 'E:/MyEnv/apache/htdocs/supershop/Admin/View\\ManageUser\\userList.html',
      1 => 1457506912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '946556fce44c4974c6-40706467',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'uinfo' => 0,
    'v' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56fce44c70855',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56fce44c70855')) {function content_56fce44c70855($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'E:\\MyEnv\\apache\\htdocs\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.replace.php';
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <title>普通用户</title>
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
                                                    <li><i class="icon-user"></i>用户管理/<a href="<?php echo @__MODULE__;?>
/ManageUser/userList">普通用户</a></li>
                                                    <li class="pull-right"><a href="<?php echo @__MODULE__;?>
/ManageUser/userTrashList"><i class="icon-trash"></i>回收站</a></li>
                                                    <li class="pull-right"><a href="#modal-user-add" data-toggle="modal"><i class="icon-plus-sign"></i>添加用户</a>｜</li>
                                                </ul>
                                        </div>
<!--					<div class="box-header well" data-original-title>
						<h2><i class="icon-user"></i>用户管理/<a href="<?php echo @__MODULE__;?>
/ManageUser/userList">普通用户</a></h2>
                                                <a class="pull-right">回收站</a>						
					</div>
					<br/>-->
					<div style="margin-left: 3px;margin-right: 3px">
					<table class="table table-striped table-bordered" id="user-table" style="font-size: 12px;">
                                                        <?php if (count($_smarty_tpl->tpl_vars['uinfo']->value)==0){?>
                                                            <tr><th  style="width: 35%;border:none"></th><th style=" border:none;font-size:14px">暂无记录！</th></tr>
                                                        <?php }else{ ?>
								<tr>
									<th title='全选'><input type="checkbox" id="selectAll" onclick="selectAll()"><i class="icon-th"></i></th>
									<th>用户id</th>
									<th>用户名</th>
                                                                        <th>昵称</th>
									<th>手机</th>
									<th>邮箱</th>
									<th>真名</th>
									<th>状态</th>
									<th>创建时间</th>
									<th>上次登录</th>
									<th>上次登录IP</th>
									<th>操作</th>
								</tr>
	    						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['uinfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
								<tr>
									<td><input type="checkbox" name="delete" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['user_id'];?>
"></td>
									<td><?php echo $_smarty_tpl->tpl_vars['v']->value['user_id'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['v']->value['user_name'];?>
</td>
									<td style="max-width: 50px" class="enable-edit" data="<?php echo $_smarty_tpl->tpl_vars['v']->value['user_id'];?>
" date-column="user_nickname"><?php echo $_smarty_tpl->tpl_vars['v']->value['user_nickname'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['v']->value['user_phone'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['v']->value['user_email'];?>
</td>
									<td style="max-width: 50px" class="enable-edit" data="<?php echo $_smarty_tpl->tpl_vars['v']->value['user_id'];?>
" date-column="user_truename"><?php echo $_smarty_tpl->tpl_vars['v']->value['user_truename'];?>
</td>
									<td><?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['v']->value['status'],'1','正常'),'0','禁用');?>

                                                                            <?php if ($_smarty_tpl->tpl_vars['v']->value['status']==1){?>
                                                                            <a href="javascript:void(0);" title="禁用" onclick="saveData('<?php echo $_smarty_tpl->tpl_vars['v']->value['user_id'];?>
','status','0')"><i class="icon-ban-circle"></i></a>
                                                                            <?php }elseif($_smarty_tpl->tpl_vars['v']->value['status']==0){?>
                                                                            <a href="javascript:void(0);" title="启用" onclick="saveData('<?php echo $_smarty_tpl->tpl_vars['v']->value['user_id'];?>
','status','1')"><i class="icon-ok-circle"></i></a>
                                                                            <?php }?>
                                                                        </td>
                                                                        <td><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['v']->value['create_time'],' ','</br>');?>
</td>
									<td><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['v']->value['last_login_time'],' ','</br>');?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['v']->value['last_login_ip'];?>
</td>
									<td>
                                                                            <a href="###" class="btn btn-primary" title="编辑"><i class="icon-edit"></i></a>
                                                                            <a href="javascript:void(0);" class="btn btn-danger" title="回收" onclick="saveData('<?php echo $_smarty_tpl->tpl_vars['v']->value['user_id'];?>
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
<!-- add user -->
<div id="modal-user-add" class="modal hide fade in" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
    	<a class="close" data-dismiss="modal" aria-hidden="true">×</a>
    	<h3 id="myModalLabel-add">
    		添加用户
    	</h3>
    </div>
    
	<form id="user-form-add" class="form-horizontal">
    <div class="modal-body">
	<fieldset>
    	<div class="control-group">											
    		<label class="control-label" for="username-add">用户名：</label>
    		<input type="text" class="input-medium" id="tr-username"/>
                <font color="red">*字母数字下划线，长度不超过32</font>
    	</div> <!-- /control-group -->
										
    	<div class="control-group">											
    		<label class="control-label" for="userpwd-add">密码：</label>
    		<input type="password" class="input-medium" id="tr-userpwd"/>
                <font color="red">*密码不少于6位</font>
    	</div> <!-- /control-group -->	
	</fieldset>
	
    <div class="modal-footer" style="background-color: white">
		<button class="btn btn-primary" type="reset">重置</button>
        <a href="javascript:void(0);" class="btn btn-success" id="submit-user-add">保存</a>
    </div>
    </div>
    
	</form>
</div>
			<!--/#content.span9-->
  		<?php echo $_smarty_tpl->getSubTemplate ("../inc/jsall.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script>
    var controller_path = '<?php echo @__CONTROLLER__;?>
';

$(document).ready(function(){
    $('td[class="enable-edit"]').click(tdClick);
    $('#submit-user-add').click(add_user);
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
        saveData(td.attr('data'), td.attr('date-column'), inputText);
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
    if(!/^\d{6}$/.test(id)||!/^[A-Za-z_]+$/.test(name))
        return;
    $.ajax({ 
	url:controller_path+"/saveUserOneField/r="+new Date().getTime(), 
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
function add_user() {
    var name = $('#tr-username').val();
    var pwd = $('#tr-userpwd').val();
    if( !/^\w{1,32}$/.test(name) ) {
        bootbox.alert('用户名格式错误！');
        return;
    }
    if( pwd.length <6 ) {
        bootbox.alert('密码不能少于6位！');
        return;
    }
    $.ajax({ 
	url:controller_path+"/addUser/r="+new Date().getTime(), 
	type:"post", 
	data:{name:name,pwd:pwd},
	async:false,
	dataType:"json",
	success:function(data){
		if(data.retval == 'ok'){
                    location.reload();
		} else {
                    bootbox.alert(data.retinfo);
                    return;
                }
	}
    });
    
}

</script>
  </body>
</html>

    	
    	
    	
    	
<?php }} ?>