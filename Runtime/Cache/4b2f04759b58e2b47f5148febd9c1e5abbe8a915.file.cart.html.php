<?php /* Smarty version Smarty-3.1.6, created on 2016-04-06 13:00:23
         compiled from "E:/MyEnv/apache/htdocs/supershop/Home/View\Goods\cart.html" */ ?>
<?php /*%%SmartyHeaderCode:163055704961c82e1f3-60384500%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b2f04759b58e2b47f5148febd9c1e5abbe8a915' => 
    array (
      0 => 'E:/MyEnv/apache/htdocs/supershop/Home/View\\Goods\\cart.html',
      1 => 1459918806,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163055704961c82e1f3-60384500',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5704961c9b4c5',
  'variables' => 
  array (
    'cartList' => 0,
    'v' => 0,
    'k' => 0,
    'cartTotalPrice' => 0,
    'vv' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5704961c9b4c5')) {function content_5704961c9b4c5($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="UTF-8">

  <meta name="description" content="">
  <meta name="keywords" content="">

  <title>我的购物车</title>

  <link rel="shortcut icon" href="<?php echo @PUBLIC_URL;?>
favicon.ico">
  <link href="<?php echo @PUBLIC_URL;?>
css/style.css" media="screen" rel="stylesheet" type="text/css">
  <link href="<?php echo @PUBLIC_URL;?>
css/grid.css" media="screen" rel="stylesheet" type="text/css">

  <script src="<?php echo @PUBLIC_URL;?>
js/jquery-1.7.2.min.js" ></script>
  <script src="<?php echo @PUBLIC_URL;?>
js/html5.js" ></script>
  <script src="<?php echo @PUBLIC_URL;?>
js/jflow.plus.js" ></script>
  <script src="<?php echo @PUBLIC_URL;?>
js/jquery.carouFredSel-5.2.2-packed.js"></script>
  <script src="<?php echo @PUBLIC_URL;?>
js/checkbox.js"></script>
  <script src="<?php echo @PUBLIC_URL;?>
js/radio.js"></script>
  <script src="<?php echo @PUBLIC_URL;?>
js/selectBox.js"></script>

  <script>
       $(function() {
	  $('#list_product').carouFredSel({
		prev: '#prev_c1',
		next: '#next_c1',
		circular: false,
		auto: false
	  });
	  $(window).resize();
	});
  </script>
  <script>
       $(document).ready(function(){
	      $("button").click(function(){
		     $(this).addClass('click')
	      });
       })
  </script>
  <script>
       $(document).ready(function() {
	      $("select").selectBox();
       });
  </script>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("../inc/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


  <section id="main" class="entire_width">
    <div class="container_12">
       <div class="grid_12">
       <h1 class="page_title">购物车</h1>

       <table class="cart_product">
	      <tr>
		     <th class="img"></th>
		     <th class="bg name">商品名称</th>
		     <th class="price">单价</th>
		     <th class="bg qty">数量</th>
		     <th class="subtotal">总价</th>
		     <th class="bg close">删除</th>
	      </tr>
              <?php if ($_smarty_tpl->tpl_vars['cartList']->value==null){?>
              <tr><td colspan='6'><font color='red'>购物车中还没有商品，请继续购物！</font></td></tr>
              <?php }else{ ?>
              <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['cartList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
			<form action="<?php echo @__MODULE__;?>
/Goods/updateCart/id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
" method="post" name="cartForm" id="cartForm<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
">
		      <tr>
			     <td class="img"><a href="<?php echo @__MODULE__;?>
/Goods/details/id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
"><img src="<?php echo @WEB_URL;?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_thumb_url'];?>
" alt="Product 6"></a></td>
			     <td class="bg name"><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
</td>
			     <td class="price">￥<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_now_price'];?>
</td>
			     <td class="bg qty"><input type="text" name="count" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['count'];?>
" size="4" /><a title="Edit" href="#" onclick="$('#cartForm<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
').submit();return false">修改</a></td>
			     <td class="subtotal">￥<?php echo $_smarty_tpl->tpl_vars['v']->value['amount'];?>
</td>
			     <td class="bg close"><a title="close" class="close" href="<?php echo @__MODULE__;?>
/Goods/delCart/id/<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"></a></td>
		      </tr>
	      </form>
              <?php } ?>
              <?php }?>
	      <tr>
		     <td colspan="7" class="cart_but">
			    <button class="continue" onclick="window.location.href='<?php echo @__MODULE__;?>
/Index/index';"><span>icon</span>继续购物</button>
			    <button class="update" onclick="window.location.reload();"><span>icon</span>刷新购物车</button>
		     </td>
	      </tr>
       </table>
       </div><!-- .grid_12 -->

       <div id="content_bottom">
           <?php if ($_smarty_tpl->tpl_vars['cartTotalPrice']->value>0){?>
        <div class="grid_4" style="float: right;">
          <div class="bottom_block total">
	      <table class="subtotal">
		     <tr>
			    <td>总计</td><td class="price">￥<?php echo $_smarty_tpl->tpl_vars['cartTotalPrice']->value;?>
</td>
		     </tr>
		     <tr class="grand_total">
			    <td>应付金额</td><td class="price">￥<?php echo $_smarty_tpl->tpl_vars['cartTotalPrice']->value;?>
</td>
		     </tr>
	      </table>
	    <button class="checkout" onclick="window.location.href='submitOrder.jsp'">提交订单</button>
          </div><!-- .total -->
        </div><!-- .grid_4 -->
        <?php }?>
        <div class="clear"></div>
      </div><!-- #content_bottom -->
      <div class="clear"></div>

      <div class="clear"></div>


<?php $_smarty_tpl->tpl_vars['v'] = new Smarty_variable($_SESSION['pushListOne'], null, 0);?>
    <?php if (count($_smarty_tpl->tpl_vars['v']->value['values'])>0){?>
      <div class="carousel" id="following">
        <div class="c_header">
          <div class="grid_10">
            <h2><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</h2>
          </div><!-- .grid_10 -->

          <div class="grid_2">
            <a id="next_c1" class="next arows" href="#"><span>Next</span></a>
            <a id="prev_c1" class="prev arows" href="#"><span>Prev</span></a>
           </div><!-- .grid_2 -->
        </div><!-- .c_header -->

        <div class="list_carousel">

        <ul id="list_product" class="list_product">
	        <?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['v']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value){
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?> 
	          <li class="">
	            <div class="grid_3 product">
	              <!-- <img class="sale" src="img/top.png" alt="Sale"/> -->
	              <div class="prev">
	                <a href="<?php echo @__MODULE__;?>
/Goods/details/id/<?php echo $_smarty_tpl->tpl_vars['vv']->value['goods_id'];?>
"><img src="<?php echo @WEB_URL;?>
<?php echo $_smarty_tpl->tpl_vars['vv']->value['goods_image_url'];?>
" alt="" title="" /></a>
	              </div><!-- .prev -->
	              <h3 class="title"><?php echo $_smarty_tpl->tpl_vars['vv']->value['goods_name'];?>
</h3>
	              <div class="cart">
	                <div class="price">
	                <div class="vert">
	                  <div class="price_new">￥<?php echo $_smarty_tpl->tpl_vars['vv']->value['goods_now_price'];?>
</div>
	                  <div class="price_old">￥<?php echo $_smarty_tpl->tpl_vars['vv']->value['goods_old_price'];?>
</div>
	                </div>
	                </div>
	               
	                <a href="javascript:void(0);" class="bay" data-id="<?php echo $_smarty_tpl->tpl_vars['vv']->value['goods_id'];?>
" style="float: right;"></a>
	              </div><!-- .cart -->
	            </div><!-- .grid_3 -->
	          </li>
                  <?php } ?>
        </ul><!-- #list_product -->
        </div><!-- .list_carousel -->
      </div><!-- .carousel -->
      <?php }?>

    </div><!-- .container_12 -->
  </section><!-- #main -->

  <div class="clear"></div>

<?php echo $_smarty_tpl->getSubTemplate ("../inc/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


</body>
</html>
<?php }} ?>