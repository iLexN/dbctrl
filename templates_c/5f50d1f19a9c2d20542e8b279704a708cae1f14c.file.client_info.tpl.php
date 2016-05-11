<?php /* Smarty version Smarty-3.1.13, created on 2015-11-17 10:56:03
         compiled from "tpl/client_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1938304228564a9743091f84-72776756%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f50d1f19a9c2d20542e8b279704a708cae1f14c' => 
    array (
      0 => 'tpl/client_info.tpl',
      1 => 1389249248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1938304228564a9743091f84-72776756',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'source' => 0,
    'uid' => 0,
    'email' => 0,
    'previousenquiries' => 0,
    'type' => 0,
    'groupname' => 0,
    'firstname' => 0,
    'lastname' => 0,
    'phone' => 0,
    'phone2' => 0,
    'contact_method' => 0,
    'nationality' => 0,
    'countryofcover' => 0,
    'countryofenquiry' => 0,
    'lengthofcover' => 0,
    'outpatient' => 0,
    'dental' => 0,
    'maternity' => 0,
    'Everyone' => 0,
    'k' => 0,
    'person' => 0,
    'comments' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_564a9743244c69_22809754',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564a9743244c69_22809754')) {function content_564a9743244c69_22809754($_smarty_tpl) {?>
<?php echo $_smarty_tpl->tpl_vars['source']->value;?>
 Enquiry - <?php echo $_smarty_tpl->tpl_vars['uid']->value;?>


From: <?php echo $_smarty_tpl->tpl_vars['email']->value;?>

Referrer: <?php echo $_smarty_tpl->tpl_vars['previousenquiries']->value;?>

Enquiry Type: <?php echo $_smarty_tpl->tpl_vars['type']->value;?>



Contact Details:
<?php if ($_smarty_tpl->tpl_vars['groupname']->value!=''){?>
Group name: <?php echo $_smarty_tpl->tpl_vars['groupname']->value;?>

<?php }?>
Name: <?php echo $_smarty_tpl->tpl_vars['firstname']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['lastname']->value;?>

Daytime Number: <?php echo $_smarty_tpl->tpl_vars['phone']->value;?>

<?php if ($_smarty_tpl->tpl_vars['phone2']->value!=''){?> / <?php echo $_smarty_tpl->tpl_vars['phone2']->value;?>
<?php }?>
Email Address: <?php echo $_smarty_tpl->tpl_vars['email']->value;?>

Contact method: <?php echo $_smarty_tpl->tpl_vars['contact_method']->value;?>



Insurance Details:
Nationality: <?php echo $_smarty_tpl->tpl_vars['nationality']->value;?>

Country in which you require coverage: <?php echo $_smarty_tpl->tpl_vars['countryofcover']->value;?>

Country where you now live: <?php echo $_smarty_tpl->tpl_vars['countryofenquiry']->value;?>

Length of Coverage: <?php echo $_smarty_tpl->tpl_vars['lengthofcover']->value;?>

<?php if ($_smarty_tpl->tpl_vars['outpatient']->value!=''){?>
I require hospitalization benefits as well as outpatient benefits
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['dental']->value!=''){?>
I require dental coverage
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['maternity']->value!=''){?>
I require maternity coverage
<?php }?>


Insured Details:
Person(s):
<?php  $_smarty_tpl->tpl_vars['person'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['person']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['Everyone']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['person']->key => $_smarty_tpl->tpl_vars['person']->value){
$_smarty_tpl->tpl_vars['person']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['person']->key;
?>
Person <?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
:
Name: <?php echo $_smarty_tpl->tpl_vars['person']->value['name'];?>

Birth Date: <?php echo $_smarty_tpl->tpl_vars['person']->value['dateofbirth'];?>

Age: <?php echo $_smarty_tpl->tpl_vars['person']->value['age'];?>

Gender: <?php echo $_smarty_tpl->tpl_vars['person']->value['gender'];?>

Occupation: <?php echo $_smarty_tpl->tpl_vars['person']->value['occupation'];?>


<?php } ?>

Comments:
<?php echo $_smarty_tpl->tpl_vars['comments']->value;?>



<?php }} ?>