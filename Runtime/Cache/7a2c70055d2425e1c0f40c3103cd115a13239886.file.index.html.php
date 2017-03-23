<?php /* Smarty version Smarty-3.1.6, created on 2016-04-06 03:04:13
         compiled from "E:/MyEnv/apache/htdocs/supershop/Home/View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2823456fcef9803d7d6-91326929%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a2c70055d2425e1c0f40c3103cd115a13239886' => 
    array (
      0 => 'E:/MyEnv/apache/htdocs/supershop/Home/View\\Index\\index.html',
      1 => 1459881983,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2823456fcef9803d7d6-91326929',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56fcef980f517',
  'variables' => 
  array (
    'v' => 0,
    'vv' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56fcef980f517')) {function content_56fcef980f517($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="UTF-8">

  <meta name="description" content="">
  <meta name="keywords" content="">

  <title>网上商城首页</title>

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
js/jquery.carouFredSel-5.2.2-packed.js"></script>

	<script src="<?php echo @PUBLIC_URL;?>
custom/index.js"></script>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ('../inc/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  <section id="main" class="home">
    <div class="container_12">

      <div class="clear"></div>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_SESSION['showGoodsList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
    <?php if (count($_smarty_tpl->tpl_vars['v']->value['values'])>0){?>
      <div class="carousel">
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
<?php } ?>

      <div class="clear"></div>

    </div><!-- .container_12 -->
  </section><!-- #main -->

  <div class="clear"></div>

<?php echo $_smarty_tpl->getSubTemplate ('../inc/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html>
<?php }} ?>