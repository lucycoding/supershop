<?php /* Smarty version Smarty-3.1.6, created on 2016-04-06 23:15:00
         compiled from "E:\MyEnv\apache\htdocs\supershop\Home\View\inc\header.html" */ ?>
<?php /*%%SmartyHeaderCode:1273156fcef98100d06-01759865%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c29c4321f43ba463a97abefabba8830184680f2d' => 
    array (
      0 => 'E:\\MyEnv\\apache\\htdocs\\supershop\\Home\\View\\inc\\header.html',
      1 => 1459955693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1273156fcef98100d06-01759865',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56fcef9821dfc',
  'variables' => 
  array (
    'informs' => 0,
    'v' => 0,
    'user' => 0,
    'cartList' => 0,
    'cartTotalPrice' => 0,
    'k' => 0,
    'type' => 0,
    'types' => 0,
    'vv' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56fcef9821dfc')) {function content_56fcef9821dfc($_smarty_tpl) {?>
<script type="text/javascript">
function MoveBox(obj,goodsId,orderType) {
	var userName='{$smarty.session.name}';
	if(userName=='null'||userName==""){
		alert("请先登录！");
		return;
	}
	$(obj).show();
	var divTop = $(obj).offset().top;
	var divLeft = $(obj).offset().left;
	$(obj).css({ "position": "absolute", "z-index": "500", "left": divLeft + "px", "top": divTop + "px" });
	$(obj).animate({ "left": ($("#collectBox").offset().left - $("#collectBox").width()) + "px", "top": ($(document).scrollTop() + 30) + "px", "width": "100px", "height": "70px" }, 500, function () {
		$(obj).animate({ "left": $("#collectBox").offset().left + "px", "top": $("#collectBox").offset().top + "px" }, 500).fadeTo(0, 0.1).hide(0);
	});
	setTimeout("window.location.href='buyGoodsServlet?GoodsId="+goodsId+"&orderType="+orderType+"'",950);
	
}
</script>

<head><!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <style>
        #msg{ z-index:10000; width:1px; height:40px; line-height:40px; font-size:14px; text-align:center; color:#fff; display:none }
        .u-flyer{ display: block;width: 50px;height: 50px;border-radius: 50px;position: fixed;z-index: 9999; }
    </style>
<!-- /Added by HTTrack --></head>
  <div class="container_12">
    <div id="top" style="">
      <div class="grid_2">
        <div class="phone_top">
          <?php echo $_SESSION['web_lang']['TEL_NAME'];?>
 025-12345678
        </div><!-- .phone_top -->
      </div><!-- .grid_3 -->
      
      <div class="grid_6">
      	<marquee direction="left" scrollamount="4" style="padding-top: 15px;" truespeed="truespeed" onmouseover="this.stop()" onmouseout="this.start()" >
   	 		<?php $_smarty_tpl->tpl_vars['informs'] = new Smarty_variable($_SESSION['informList'], null, 0);?>
                        <?php if (count($_smarty_tpl->tpl_vars['informs']->value)!=0){?>
                                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['informs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?> 
                                    <?php echo $_smarty_tpl->tpl_vars['v']->value['create_time'];?>
&nbsp;<a href="javascript:;" onclick="alert('<?php echo $_smarty_tpl->tpl_vars['v']->value['inform_content'];?>
')"><?php echo $_smarty_tpl->tpl_vars['v']->value['inform_title'];?>
</a>　
                                <?php } ?>
                        <?php }else{ ?>
   	 			<font color="red">暂时没有公告</font>
                        <?php }?>
   	 	</marquee>
      </div>
		<div class="grid_2">
			<div class="welcome">
			</div>
		</div>

      <div class="grid_2">

        <div class="welcome">
            <?php $_smarty_tpl->tpl_vars['user'] = new Smarty_variable($_SESSION['user'], null, 0);?>
            <?php if (isset($_smarty_tpl->tpl_vars['user']->value)){?>
                欢迎光临　 <a href="###"><?php echo $_smarty_tpl->tpl_vars['user']->value['user_name'];?>
</a>
            <?php }else{ ?>
                欢迎光临　 <a href="<?php echo @__MODULE__;?>
/User/login">登录</a> / <a href="<?php echo @__MODULE__;?>
/User/register">注册</a>
            <?php }?>
        </div><!-- .welcome -->
      </div><!-- .grid_3 -->
    </div><!-- #top -->


    <header id="branding">
      <?php if (isset($_smarty_tpl->tpl_vars['user']->value)){?>
      <div class="grid_3">
      <?php }else{ ?>
      <div class="grid_5">
      <?php }?>
        <hgroup>
          <h1 id="site_logo" ><a href="" title=""><img src="<?php echo @PUBLIC_URL;?>
img/logo.png" alt="Online Store Theme Logo"/></a></h1>
          <h2 id="site_description">　　足不出户　疯狂购物</h2>
        </hgroup>
      </div><!-- .grid_3 -->

      <div class="grid_4">
    <form class="search" action="pageSearchServlet" method="post" id="searchForm">
          <input type="text" name="keywords" id="keywords" placeholder="请输入关键字搜索" style="float: left;"/>
          <input type="image" src="<?php echo @PUBLIC_URL;?>
img/bg_search.png" name="submit" style="margin:10px 0 0 5px"/>
          &nbsp;|&nbsp;<span><a href="showSuperTypeServlet">高级搜索</a></span>
	</form>
      </div><!-- .grid_3 -->


      <?php if (isset($_smarty_tpl->tpl_vars['user']->value)){?>
      <div class="grid_5">
      <?php }else{ ?>
      <div class="grid_3">
      <?php }?>
        <ul id="cart_nav">
          <li>
            <a class="cart_li" href="<?php echo @__MODULE__;?>
/Goods/cart" id="collectBox" style="width: 80px">￥<span>
                <?php if ($_smarty_tpl->tpl_vars['cartList']->value!=null){?>
                    <?php echo $_smarty_tpl->tpl_vars['cartTotalPrice']->value;?>

                <?php }else{ ?>
                    0.0
                <?php }?>
    	 	</span></a>
            <ul class="cart_cont">
              <li class="no_border"><p>最近添加的商品</p></li>
              <?php if ($_smarty_tpl->tpl_vars['cartList']->value==null){?>
                    <font color='red'>购物车中还没有商品，请继续购物！</font>
              <?php }else{ ?>
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cartList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                <li>
                  <a href="<?php echo @__MODULE__;?>
/Goods/details/id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
" class="prev_cart"><div class="cart_vert"><img src="<?php echo @WEB_URL;?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_thumb_url'];?>
" alt="" title="" /></div></a>
                  <div class="cont_cart">
                    <h4><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
</h4>
                    <div class="price"><?php echo $_smarty_tpl->tpl_vars['v']->value['count'];?>
 x ￥<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_now_price'];?>
</div>
                  </div>
                  <a title="close" class="close" href="<?php echo @__MODULE__;?>
/Goods/delCart/id/<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"></a>
                  <div class="clear"></div>
                </li>
                <?php } ?>
              
		      <li class="no_border">
			<a href="cart.jsp" class="view_cart">查看购物车</a>
			<a href="submitOrder.jsp" class="checkout">提交订单</a>
		      </li>
              <?php }?>
            </ul>
          </li>
	<span id="msg"></span>
        </ul>

        <nav class="private">
          <ul>
            <li><a href="pageNoteServlet">商城论坛</a></li>
     <?php if (isset($_smarty_tpl->tpl_vars['user']->value)){?>
        <li class="separator">|</li>
            <li class="curent"><a href="<?php echo @__MODULE__;?>
/User/personalCenter">个人中心</a></li>
		<li class="separator">|</li>
            <li><a href="<?php echo @__MODULE__;?>
/User/logout">退出登录</a></li>
     <?php }?>
          </ul>
        </nav><!-- .private -->
      </div><!-- .grid_6 -->
    </header><!-- #branding -->
  </div><!-- .container_12 -->
  


  <div id="block_nav_primary">
    <div class="container_12">
      <div class="grid_12">
        <nav class="primary">
          <ul>
            <li <?php if (!isset($_smarty_tpl->tpl_vars['type']->value)){?> class="curent" <?php }?> ><a href="<?php echo @ROOT_URL;?>
">首页</a></li>
            <?php $_smarty_tpl->tpl_vars['types'] = new Smarty_variable($_SESSION['typeList'], null, 0);?>
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['v']->value['type_pid']==0){?>
                    <li <?php if ($_GET['type']==$_smarty_tpl->tpl_vars['v']->value['type_id']){?> class="curent" <?php }?> >
                        <a href="###"><?php echo $_smarty_tpl->tpl_vars['v']->value['type_name'];?>
</a>
                        <ul class="sub">
                        <?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value){
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['vv']->value['type_pid']==$_smarty_tpl->tpl_vars['v']->value['type_id']){?>
                                <li><a href="###"><?php echo $_smarty_tpl->tpl_vars['vv']->value['type_name'];?>
</a></li>
                            <?php }?>
                        <?php } ?>
                        </ul>
                    </li>
                <?php }?>
            <?php } ?>
          </ul>
        </nav><!-- .primary -->
      </div><!-- .grid_12 -->
    </div><!-- .container_12 -->
  </div><!-- .block_nav_primary -->
<script src="<?php echo @PUBLIC_URL;?>
js/jquery.fly.min.js"></script>
<script>
$(function() { 
	var offset = $("#cart_nav").offset();
	$(".bay").click(function(event){
		var addcar = $(this);
                var goods_id = addcar.attr('data-id');
		var img = addcar.parent().parent().find('img').attr('src');
		var flyer = $('<img class="u-flyer" src="'+img+'">');
		flyer.fly({
			start: {
				left: event.pageX,
				top: event.pageY
			},
			end: {
				left: offset.left+10,
				top: offset.top+10,
				width: 0,
				height: 0
			},
			onEnd: function(){
                                addcart(goods_id);
				this.destory();
                                setTimeout(function () {
                                    location.reload();
                                }, 300);
			}
		});
	});
  
});

function addcart(id) {
    $.ajax({ 
    	url:"<?php echo @__MODULE__;?>
/Goods/addCart/r="+new Date().getTime(), 
    	type:"post", 
    	data:{ id:id },
        async:false,
    	dataType:"json",
    	success:function(data){
    		if(data.retval != "ok"){
			$("#msg").html('加入购物车失败！-'+ data.retinfo).css( 'background', '#FFA8A8').show().animate({ width: '250px' }, 200).fadeOut(1000);
    		} else {
			$("#msg").html('已成功加入购物车！').css( 'background', '#360').show().animate({ width: '250px' }, 200).fadeOut(1000);
                }
    	}
    });	
}
</script>
<?php }} ?>