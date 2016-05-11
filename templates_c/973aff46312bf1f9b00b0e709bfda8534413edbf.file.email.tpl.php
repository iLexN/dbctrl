<?php /* Smarty version Smarty-3.1.13, created on 2015-11-17 10:56:03
         compiled from "tpl/email.tpl" */ ?>
<?php /*%%SmartyHeaderCode:223592890564a97432715c9-33452090%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '973aff46312bf1f9b00b0e709bfda8534413edbf' => 
    array (
      0 => 'tpl/email.tpl',
      1 => 1389325379,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '223592890564a97432715c9-33452090',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'allValues' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_564a9743297309_19951195',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564a9743297309_19951195')) {function content_564a9743297309_19951195($_smarty_tpl) {?>We have a new enquiry!

Here are all the information we have.

<?php echo $_smarty_tpl->getSubTemplate ('tpl/client_info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<?php echo $_smarty_tpl->tpl_vars['allValues']->value;?>
<?php }} ?>