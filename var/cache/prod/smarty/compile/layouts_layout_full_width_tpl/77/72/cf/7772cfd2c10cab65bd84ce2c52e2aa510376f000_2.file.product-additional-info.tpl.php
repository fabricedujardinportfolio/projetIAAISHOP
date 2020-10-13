<?php
/* Smarty version 3.1.33, created on 2020-10-13 14:48:49
  from 'C:\wamp64\www\presta\prestashop_1.7.6.5\themes\classic\templates\catalog\_partials\product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f8523a1554b75_47728935',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7772cfd2c10cab65bd84ce2c52e2aa510376f000' => 
    array (
      0 => 'C:\\wamp64\\www\\presta\\prestashop_1.7.6.5\\themes\\classic\\templates\\catalog\\_partials\\product-additional-info.tpl',
      1 => 1602539968,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8523a1554b75_47728935 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
