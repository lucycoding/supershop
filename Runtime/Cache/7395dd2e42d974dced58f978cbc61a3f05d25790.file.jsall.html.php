<?php /* Smarty version Smarty-3.1.6, created on 2016-03-31 16:48:12
         compiled from "E:\MyEnv\apache\htdocs\supershop\Admin\View\inc\jsall.html" */ ?>
<?php /*%%SmartyHeaderCode:271956fce44c835217-02589702%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7395dd2e42d974dced58f978cbc61a3f05d25790' => 
    array (
      0 => 'E:\\MyEnv\\apache\\htdocs\\supershop\\Admin\\View\\inc\\jsall.html',
      1 => 1456994428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '271956fce44c835217-02589702',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56fce44c8ae3b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56fce44c8ae3b')) {function content_56fce44c8ae3b($_smarty_tpl) {?>	<script src="<?php echo @PUBLIC_URL;?>
Admin/jsall/jquery-1.7.2.min.js"></script>
	<!-- jQuery UI -->
	<script src="<?php echo @PUBLIC_URL;?>
Admin/jsall/jquery-ui-1.8.21.custom.min.js"></script>

	<script src="<?php echo @PUBLIC_URL;?>
Admin/jsall/jquery.blockUI.js"></script>
	
	<!-- transition / effect library -->
	<script src="<?php echo @PUBLIC_URL;?>
Admin/jsall/bootstrap-transition.js"></script>
	<!-- alert enhancer library -->
	<script src="<?php echo @PUBLIC_URL;?>
Admin/jsall/bootstrap-alert.js"></script>
	<!-- modal / dialog library -->
	<script src="<?php echo @PUBLIC_URL;?>
Admin/jsall/bootstrap-modal.js"></script>
	<!-- custom dropdown library -->
	<script src="<?php echo @PUBLIC_URL;?>
Admin/jsall/bootstrap-dropdown.js"></script>
	<!-- scrolspy library -->
	<script src="<?php echo @PUBLIC_URL;?>
Admin/jsall/bootstrap-scrollspy.js"></script>
	<!-- library for creating tabs -->
	<script src="<?php echo @PUBLIC_URL;?>
Admin/jsall/bootstrap-tab.js"></script>
	<!-- library for advanced tooltip -->
	<script src="<?php echo @PUBLIC_URL;?>
Admin/jsall/bootstrap-tooltip.js"></script>
	<!-- popover effect library -->
	<script src="<?php echo @PUBLIC_URL;?>
Admin/jsall/bootstrap-popover.js"></script>
	<!-- button enhancer library -->
	<script src="<?php echo @PUBLIC_URL;?>
Admin/jsall/bootstrap-button.js"></script>
	<!-- autocomplete library -->
	<script src="<?php echo @PUBLIC_URL;?>
Admin/jsall/bootstrap-typeahead.js"></script>
	<!-- library for cookie management -->
	<script src="<?php echo @PUBLIC_URL;?>
Admin/jsall/jquery.cookie.js"></script>
	<!-- calander plugin -->
<!--	<script src="js/fullcalendar.min.js"></script> -->
	<!-- data table plugin -->
	<script src="<?php echo @PUBLIC_URL;?>
Admin/jsall/jquery.dataTables.min.js"></script>

	<!-- chart libraries start -->
<!--    
	<script src="js/excanvas.js"></script>
	<script src="js/jquery.flot.min.js"></script>
	<script src="js/jquery.flot.pie.min.js"></script>
	<script src="js/jquery.flot.stack.js"></script>
	<script src="js/jquery.flot.resize.min.js"></script>
-->

	<!-- chart libraries end -->

	<!-- select or dropdown enhancer -->
	<script src="<?php echo @PUBLIC_URL;?>
Admin/jsall/jquery.chosen.min.js"></script>
	<!-- checkbox, radio, and file input styler -->
	<script src="<?php echo @PUBLIC_URL;?>
Admin/jsall/jquery.uniform.min.js"></script> 
	<!-- plugin for gallery image view -->
<!--	<script src="js/jquery.colorbox.min.js"></script> -->
	<!-- rich text editor library -->
<!--	<script src="js/jquery.cleditor.min.js"></script> -->
	<!-- notification plugin -->
	<script src="<?php echo @PUBLIC_URL;?>
Admin/jsall/jquery.noty.js"></script>
	<!-- file manager library -->
<!-- <script src="js/jquery.elfinder.min.js"></script> -->

	<!-- star rating plugin -->
<!--	<script src="js/jquery.raty.min.js"></script> -->
	<!-- for iOS style toggle switch -->
<!--    
	<script src="js/jquery.iphone.toggle.js"></script>
    -->
	<!-- autogrowing textarea plugin -->
	<script src="<?php echo @PUBLIC_URL;?>
Admin/jsall/jquery.autogrow-textarea.js"></script>
	<!-- multiple file upload plugin 
	<script src="js/jquery.uploadify-3.1.min.js"></script> -->
	
	<!-- history.js for cross-browser state change on ajax -->
	<script src="<?php echo @PUBLIC_URL;?>
Admin/jsall/jquery.history.js"></script>
	 
	<script src="<?php echo @PUBLIC_URL;?>
Admin/jsall/charisma.js"></script> 
	<script src="<?php echo @PUBLIC_URL;?>
Admin/jsall/bootbox.min.js"></script>
	
	
	<script src="<?php echo @PUBLIC_URL;?>
Admin/jsall/custom-validate.js"></script>
	<script type="text/javascript" src="<?php echo @PUBLIC_URL;?>
Admin/jsall/jquery.easyui.min.js"></script>

        
	<script type="text/javascript">
		function selectAll() {
			var deletes =document.getElementsByName("delete");
			var selectAll = document.getElementById("selectAll");
			for(var i = 0;i<deletes.length;i++) {
				if(selectAll.checked == true) {
				 	deletes[i].checked = true;
				}
				else {
					deletes[i].checked = false;
				}
			}
		}
	</script>
        <?php }} ?>