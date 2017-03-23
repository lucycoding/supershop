<?php /* Smarty version Smarty-3.1.6, created on 2016-04-03 15:41:20
         compiled from "E:/MyEnv/apache/htdocs/supershop/Admin/View\ManageRole\assignAuth.html" */ ?>
<?php /*%%SmartyHeaderCode:274455700c9207a15b9-20460889%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b033a33b742f5a8fe76654f58efc3297a5d58be0' => 
    array (
      0 => 'E:/MyEnv/apache/htdocs/supershop/Admin/View\\ManageRole\\assignAuth.html',
      1 => 1456968266,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '274455700c9207a15b9-20460889',
  'function' => 
  array (
    'printauth' => 
    array (
      'parameter' => 
      array (
        'level' => 0,
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'rinfo' => 0,
    'data' => 0,
    'pid' => 0,
    'v' => 0,
    'level' => 0,
    'fontsize' => 0,
    'fontweight' => 0,
    'auth_info' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5700c92094f11',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5700c92094f11')) {function content_5700c92094f11($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <title>分配权限</title>
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
                                                    <li><i class="icon-lock"></i>权限管理/<a href="<?php echo @__CONTROLLER__;?>
/roleList">角色列表</a>/<a href="<?php echo @__SELF__;?>
">分配权限【<?php echo $_smarty_tpl->tpl_vars['rinfo']->value['role_name'];?>
】</a></li>
                                                </ul>
                                        </div>
                                        <div class="box-content" style="margin-left: 3px;margin-right: 3px;">
                                            <form action="<?php echo @__SELF__;?>
" method="post">
                                                <input type="hidden" name="role_id" value="<?php echo $_smarty_tpl->tpl_vars['rinfo']->value['role_id'];?>
"/>
                                                <div style="margin-left:40%">
                                                    <script>var chklevel = new Array();</script>
                                                    <table>
                                                <?php if (!function_exists('smarty_template_function_printauth')) {
    function smarty_template_function_printauth($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['printauth']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
                                                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                                                    <?php if ($_smarty_tpl->tpl_vars['pid']->value==$_smarty_tpl->tpl_vars['v']->value['auth_pid']){?>
                                                        <?php $_smarty_tpl->tpl_vars['fontsize'] = new Smarty_variable(16-$_smarty_tpl->tpl_vars['level']->value*2, null, 0);?>
                                                        <?php $_smarty_tpl->tpl_vars['fontweight'] = new Smarty_variable(900-$_smarty_tpl->tpl_vars['level']->value*400, null, 0);?>
                                                        <script>chklevel.push(<?php echo $_smarty_tpl->tpl_vars['level']->value;?>
);</script>
                                                        <tr><td><?php echo preg_replace('!^!m',str_repeat('　',$_smarty_tpl->tpl_vars['level']->value),'');?>
┗<span style="font-size:<?php echo $_smarty_tpl->tpl_vars['fontsize']->value;?>
;font-weight:<?php echo $_smarty_tpl->tpl_vars['fontweight']->value;?>
;"><?php echo $_smarty_tpl->tpl_vars['v']->value['auth_name'];?>
</span></td><td><input type="checkbox" class="chk chk<?php echo $_smarty_tpl->tpl_vars['level']->value;?>
" data="<?php echo $_smarty_tpl->tpl_vars['v']->value['auth_pid'];?>
" name="auth_id[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['auth_id'];?>
"></td></tr>
                                                        <?php smarty_template_function_printauth($_smarty_tpl,array('data'=>$_smarty_tpl->tpl_vars['data']->value,'pid'=>$_smarty_tpl->tpl_vars['v']->value['auth_id'],'level'=>$_smarty_tpl->tpl_vars['level']->value+1));?>

                                                    <?php }else{ ?>
                                                        <?php continue 1?>
                                                    <?php }?>
                                                <?php } ?><?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;}}?>

                                                <?php smarty_template_function_printauth($_smarty_tpl,array('data'=>$_smarty_tpl->tpl_vars['auth_info']->value,'pid'=>0,'level'=>0));?>

                                                    </table>
                                                </div>
                                                
					<div align="center">
                                            <input type="checkbox" class="chkall" value="">全选<br/><br/>
                                            <input type="submit" class="btn btn-success" value="保存">　
                                            <a href="javascript:void(0);" onclick="chkrset()" class="btn btn-primary">重置</a>
					</div> 	<br/>
                                            </form>
				</div>
			    </div>  <!-- row-fluid -->				
			</div>
			<!--/#content.span9-->
  		<?php echo $_smarty_tpl->getSubTemplate ("../inc/jsall.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

                <script>
                    var auth_ids = '<?php echo $_smarty_tpl->tpl_vars['rinfo']->value['role_auth_ids'];?>
';
                    var arr_auth_ids = auth_ids.split(',');
                
                    function chkrset() {
                        $('.chk').attr("checked",false);
                        for(var i=0;i<arr_auth_ids.length;i++)
                            $('.chk[value='+arr_auth_ids[i]+']').attr("checked",true);
                    }
//                    function foreachtop(chklevel,id,flag) {
//                        for(var i = 0;i<chklevel.length;i++) {
//                            if(id != 0) {
//                                $('.chk'+chklevel[i]+'[data='+id+']').attr("checked",flag);
//                                var tmp = $('.chk'+chklevel[i]+'[value='+id+']').val();
//                                foreachtop(chklevel,tmp,flag);
//                            } else {
//                                continue;
//                            }
//                        }
//                    }
                    $(function(){
                        chkrset();
                        $(".chk").change(function(){
                            var flag = $(this).is(':checked');
                            var pid = $(this).attr('data');
//                            var ptopid = $(this).attr('data-path').split('-')[0];
                            var id = $(this).val();
//                            $('.chk[value='+ptopid+']').not($(this)).attr("checked",flag);
                            for(var i = 0;i<chklevel.length;i++) {
                                $('.chk'+chklevel[i]+'[data='+id+']').attr("checked",flag);
                            }
                                if($('.chk[data='+pid+']:checked').length >0) {
                                    $('.chk[value='+pid+']').attr("checked",true);
                                } else {
                                    $('.chk[value='+pid+']').attr("checked",false);
                                }
                        });
//                        $(".chkb").click(function(){
//                            var bid = $(this).attr('data');
//                            var a = $('.chka[data='+bid+']');
//                            if($('.chkb[data='+bid+']:checked').length >0) {
//                                a.attr("checked",true);
//                            } else {
//                                a.attr("checked",false);
//                            }
//                        });
                        $(".chkall").click(function(){
                            var flag = $(this).is(':checked');
                            $('.chk').attr("checked",flag);
                        });
                    });
                
                </script>
  </body>
</html>

    	
    	
    	
    	
<?php }} ?>