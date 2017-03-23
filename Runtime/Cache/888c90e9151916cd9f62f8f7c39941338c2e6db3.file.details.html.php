<?php /* Smarty version Smarty-3.1.6, created on 2016-04-03 16:51:06
         compiled from "E:/MyEnv/apache/htdocs/supershop/Home/View\Goods\details.html" */ ?>
<?php /*%%SmartyHeaderCode:188815700d97a64bf89-96217052%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '888c90e9151916cd9f62f8f7c39941338c2e6db3' => 
    array (
      0 => 'E:/MyEnv/apache/htdocs/supershop/Home/View\\Goods\\details.html',
      1 => 1457600379,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '188815700d97a64bf89-96217052',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'types' => 0,
    'v' => 0,
    'vv' => 0,
    'list' => 0,
    'goodsInfo' => 0,
    'goodsLogInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5700d97a8382f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5700d97a8382f')) {function content_5700d97a8382f($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'E:\\MyEnv\\apache\\htdocs\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.replace.php';
?><!DOCTYPE HTML>
<html>
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="UTF-8">

  <meta name="description" content="">
  <meta name="keywords" content="">

  <title>商品详细介绍</title>

  <link rel="shortcut icon" href="favicon.ico">
  <link href="<?php echo @PUBLIC_URL;?>
css/style.css" media="screen" rel="stylesheet" type="text/css">
  <link href="<?php echo @PUBLIC_URL;?>
css/grid.css" media="screen" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="<?php echo @PUBLIC_URL;?>
css/jquery.jqzoom.css" type="text/css">

</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("../inc/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


  <div class="clear"></div>

  <div class="container_12">
    <div class="grid_12">
       <div class="breadcrumbs">
	      <a href="<?php echo @ROOT_URL;?>
">首页</a><span>&#8250;</span><span class="current">商品详情</span>
       </div><!-- .breadcrumbs -->
    </div><!-- .grid_12 -->
  </div><!-- .container_12 -->

  <div class="clear"></div>

  <section id="main">
    <div class="container_12">
       <div id="sidebar" class="grid_3">
	      <aside id="categories_nav">
		    <h3>商品类库</h3>
		     
		     <nav class="left_menu">
			    <ul>
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
                            </li>
                            <?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value){
$_smarty_tpl->tpl_vars['vv']->_loop = true;
?>
                                <?php if ($_smarty_tpl->tpl_vars['vv']->value['type_pid']==$_smarty_tpl->tpl_vars['v']->value['type_id']){?>
                                    <li><a href="###"><?php echo preg_replace('!^!m',str_repeat('　-',$_smarty_tpl->tpl_vars['vv']->value['type_level']),$_smarty_tpl->tpl_vars['vv']->value['type_name']);?>
</a></li>
                                <?php }?>
                            <?php } ?>
                        <?php }?>
                    <?php } ?>
			    </ul>
		     </nav><!-- .left_menu -->
	      </aside><!-- #categories_nav -->

	      <aside id="specials" class="specials">
                  <?php $_smarty_tpl->tpl_vars['list'] = new Smarty_variable($_SESSION['pushListOne'], null, 0);?>
		     <h3><?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
</h3>
		     
		     <ul>
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
			    <li>
				   <div class="prev">
					  <a href="<?php echo @__MODULE__;?>
/Goods/details/id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
"><img src="<?php echo @WEB_URL;?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_thumb_url'];?>
" alt="" title="" /></a>
				   </div>
				   
				   <div class="cont">
					  <a href="<?php echo @__MODULE__;?>
/Goods/details/id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
</a>
					  <div class="prise"><span class="old">￥<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_old_price'];?>
</span>￥<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_now_price'];?>
</div>
				   </div>   
			    </li>
			<?php } ?>
		     </ul>
	      </aside><!-- #specials -->
       </div><!-- .sidebar -->

       <div id="content" class="grid_9">
	      <h1 class="page_title"><?php echo $_smarty_tpl->tpl_vars['goodsInfo']->value['goods_name'];?>
</h1>

		<div class="product_page">
			<div class="grid_4 img_slid" id="products">
				<div class="preview slides_container">
					<div class="prev_bg">
							<img src="<?php echo @WEB_URL;?>
<?php echo $_smarty_tpl->tpl_vars['goodsInfo']->value['goods_image_url'];?>
" title="" alt="" width="290px" height="290px"/>
					</div>
						<img id="detail<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
" src="<?php echo @WEB_URL;?>
<?php echo $_smarty_tpl->tpl_vars['goodsInfo']->value['goods_image_url'];?>
"  title="" alt="" style="width: 100px;height: 35px;display:none;"/>
				</div><!-- .prev -->
			</div><!-- .grid_4 -->

			<div class="grid_5">
				<div class="entry_content">
					<p><?php echo $_smarty_tpl->tpl_vars['goodsInfo']->value['goods_info'];?>
</p>
					<div class="ava_price">
						<div class="availability_sku">
							<div class="sku" style="margin-bottom: 5px">
								已售：　<span><?php echo $_smarty_tpl->tpl_vars['goodsInfo']->value['goods_sold_num'];?>
</span>&nbsp;件
							</div>
							<div class="sku">
								库存：　<span><?php echo $_smarty_tpl->tpl_vars['goodsInfo']->value['goods_num'];?>
</span>&nbsp;件
							</div>
						</div><!-- .availability_sku -->
						
						<div class="price">
							<div class="price_new">￥<?php echo $_smarty_tpl->tpl_vars['goodsInfo']->value['goods_now_price'];?>
</div>
							<div class="price_old">￥<?php echo $_smarty_tpl->tpl_vars['goodsInfo']->value['goods_old_price'];?>
</div>
						</div><!-- .price -->
					</div><!-- .ava_price -->

					<div class="block_cart">

						<div class="cart">
							<a onclick="checkLogin(<?php echo $_smarty_tpl->tpl_vars['goodsInfo']->value['goods_id'];?>
)" href="javascript:;" class="bay" style="float: left;border-radius: 2px;margin-right: 10px;background: url(../img/bg_cart_nav.png) no-repeat 10px 50% #E6E9ED;color: #59B7C2;font-size: 16px;font-weight: bolder">立刻购买</a>
							<a onclick="MoveBox('#detail<?php echo $_smarty_tpl->tpl_vars['goodsInfo']->value['goods_id'];?>
',<?php echo $_smarty_tpl->tpl_vars['goodsInfo']->value['goods_id'];?>
,'addCart')" href="javascript:;" class="bay" style="float: left">加入购物车</a>
						</div>
						<div class="clear"></div>
					</div><!-- .block_cart -->
					<div class="bdsharebuttonbox" style="float:right;margin-top: 15px"><a href="#" class="bds_more" data-cmd="more"></a><a title="分享到微信" href="#" class="bds_weixin" data-cmd="weixin"></a><a title="分享到新浪微博" href="#" class="bds_tsina" data-cmd="tsina"></a><a title="分享到QQ空间" href="#" class="bds_qzone" data-cmd="qzone"></a><a title="分享到人人网" href="#" class="bds_renren" data-cmd="renren"></a><a title="分享到腾讯微博" href="#" class="bds_tqq" data-cmd="tqq"></a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"一站式购物体验，尽在网上商城！","bdMini":"1","bdMiniList":["mshare","qzone","tsina","weixin","renren","tqq","ty","fbook","twi"],"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/{$smarty.const.PUBLIC_URL}js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
				</div><!-- .entry_content -->

			</div><!-- .grid_5 -->

			<div class="clear"></div>

			<div class="grid_9" >
				<div id="wrapper_tab" class="tab1">
					<a href="#" class="tab1 tab_link">详细描述</a>
					<a href="#" class="tab2 tab_link">买家评价</a>
					<a href="#" class="tab3 tab_link">购买记录</a>

					<div class="clear"></div>

					<div class="tab1 tab_body">
						<h4><?php echo $_smarty_tpl->tpl_vars['goodsInfo']->value['goods_name'];?>
</h4>
						<p>产品介绍：<br>　　<?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['goodsInfo']->value['goods_info'],'\n','<br>　　'),' ','　');?>
</p>
						<br/>
						生产日期：<?php echo $_smarty_tpl->tpl_vars['goodsInfo']->value['goods_produce_date'];?>
<br/><br/>
						品牌：　　<?php echo $_smarty_tpl->tpl_vars['goodsInfo']->value['goods_brand'];?>
<br/><br/>
						产地：　　<?php echo $_smarty_tpl->tpl_vars['goodsInfo']->value['goods_produce_place'];?>
<br/><br/>
						
					<div class="clear"></div>
					</div><!-- .tab1 .tab_body -->

					<div class="tab2 tab_body">
						<h4>买家评价</h4>
					<div class="clear"></div>
					<table>
                                            <tr>
                                                    <th class="bg">买家名称</th>
                                                    <th>评价信息</th>
                                                    <th class="bg">评价时间</th>
                                            </tr>
                                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goodsLogInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                                        <?php if (isset($_smarty_tpl->tpl_vars['v']->value['buy_comment'])){?>
                                            <tr>
                                                    <td class="bg"><?php echo $_smarty_tpl->tpl_vars['v']->value['user_name'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['buy_comment'];?>
</td>
                                                    <td class="bg"><?php echo $_smarty_tpl->tpl_vars['v']->value['buy_comment_time'];?>
</td>
                                            </tr>
                                        <?php }?>
                                    <?php } ?>
						</table>
					</div><!-- .tab3 .tab_body -->
					<div class="clear"></div>
                                        
					<div class="tab3 tab_body">
						<h4>购买记录</h4>
					<div class="clear"></div>
					<table>
                                            <tr>
                                                    <th class="bg">买家名称</th>
                                                    <th>购买数量</th>
                                                    <th class="bg">购买时间</th>
                                            </tr>
                                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goodsLogInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                                            <tr>
                                                    <td class="bg"><?php echo $_smarty_tpl->tpl_vars['v']->value['user_name'];?>
</td>
                                                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['buy_count'];?>
</td>
                                                    <td class="bg"><?php echo $_smarty_tpl->tpl_vars['v']->value['buy_time'];?>
</td>
                                            </tr>
                                    <?php } ?>
						</table>
					</div><!-- .tab3 .tab_body -->
                                        
					<div class="clear"></div>
				</div><!-- #wrapper_tab -->
				<div class="clear"></div>
			</div><!-- .grid_9 -->

			<div class="clear"></div>

			<div class="related">
                            <?php $_smarty_tpl->tpl_vars['list'] = new Smarty_variable($_SESSION['pushListTwo'], null, 0);?>
				<div class="c_header">
					<div class="grid_7">
						<h2><?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
</h2>
					</div><!-- .grid_7 -->

					<div class="grid_2">
						<a id="next_c1" class="next arows" href="#"><span>Next</span></a>
						<a id="prev_c1" class="prev arows" href="#"><span>Prev</span></a>
					</div><!-- .grid_2 -->
				</div><!-- .c_header -->

				<div class="list_carousel">

				<ul id="list_product" class="list_product">
                                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
					<li class="">
						<div class="grid_3 product">
							<!-- <img class="sale" src="img/top.png" alt="Sale"/>  -->
							<div class="prev">
								<a href="<?php echo @__MODULE__;?>
/Goods/details/id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
"><img src="<?php echo @WEB_URL;?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_image_url'];?>
" alt="" title="" /></a>
							</div><!-- .prev -->
							<h3 class="title"><?php echo $_smarty_tpl->tpl_vars['v']->value['goods_name'];?>
</h3>
							<div class="cart">
								<div class="price">
									<div class="vert">
										<div class="price_new">￥<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_new_price'];?>
</div>
										<div class="price_old">￥<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_old_price'];?>
</div>
									</div>
								</div>
	                <a href="<?php echo @__MODULE__;?>
/Goods/details/id/<?php echo $_smarty_tpl->tpl_vars['v']->value['goods_id'];?>
" class="bay" style="float: right;"></a>
							</div><!-- .cart -->
						</div><!-- .grid_3 -->
					</li>

				<?php } ?>
			        </ul><!-- #list_product -->
				</div><!-- .list_carousel -->
			</div><!-- .carousel -->
		</div><!-- .product_page -->
		<div class="clear"></div>

       </div><!-- #content -->

      <div class="clear"></div>

    </div><!-- .container_12 -->
  </section><!-- #main -->

  <div class="clear"></div>

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
  <script src="<?php echo @PUBLIC_URL;?>
js/jquery.jqzoom-core.js" ></script>
  <script src="<?php echo @PUBLIC_URL;?>
custom/goodsDetails.js"></script>
<?php echo $_smarty_tpl->getSubTemplate ("../inc/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


</body>
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
</html>

<?php }} ?>