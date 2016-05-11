<?php /* Smarty version Smarty-3.1.13, created on 2015-11-17 12:25:02
         compiled from "tpl/email_spam_enquiry.tpl" */ ?>
<?php /*%%SmartyHeaderCode:167208849564aac1e4510c1-95158058%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c61fa86c85d4fad8053a05bb2c7e2c146261391' => 
    array (
      0 => 'tpl/email_spam_enquiry.tpl',
      1 => 1389249248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '167208849564aac1e4510c1-95158058',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_564aac1e4bf3d3_24732505',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564aac1e4bf3d3_24732505')) {function content_564aac1e4bf3d3_24732505($_smarty_tpl) {?>We have a new enquiry, however we believe it is spam. Therefore it has NOT been pushed to the Green Sheet.

Here are all the information we have.

<?php echo $_smarty_tpl->getSubTemplate ('tpl/client_info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>