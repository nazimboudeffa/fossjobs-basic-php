<?php
/* Smarty version 4.2.1, created on 2022-10-13 22:34:45
  from 'D:\GitHub-My-Projects\neofreelance\public\_templates\bootstrap\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63488475d9bff9_78885853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c6483f0d961eb5136eea69e56af3ee1b0cfa2084' => 
    array (
      0 => 'D:\\GitHub-My-Projects\\neofreelance\\public\\_templates\\bootstrap\\index.tpl',
      1 => 1664402623,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:sidebar.tpl' => 1,
    'file:home.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_63488475d9bff9_78885853 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		
		<div class="row jobmain">
			<?php $_smarty_tpl->_subTemplateRender("file:sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			<?php $_smarty_tpl->_subTemplateRender("file:home.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		</div><!-- #content -->

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
