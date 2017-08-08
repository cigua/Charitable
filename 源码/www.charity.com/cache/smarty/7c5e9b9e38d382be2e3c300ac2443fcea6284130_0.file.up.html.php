<?php /* Smarty version 3.1.27, created on 2016-07-08 12:51:46
         compiled from "C:\xampp\htdocs\charity\www.charity.com\application\views\donation\up.html" */ ?>
<?php
/*%%SmartyHeaderCode:3533577f31627ffa84_06182267%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c5e9b9e38d382be2e3c300ac2443fcea6284130' => 
    array (
      0 => 'C:\\xampp\\htdocs\\charity\\www.charity.com\\application\\views\\donation\\up.html',
      1 => 1467788261,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3533577f31627ffa84_06182267',
  'variables' => 
  array (
    'count' => 0,
    'data' => 0,
    'vo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_577f3162840607_37225410',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_577f3162840607_37225410')) {
function content_577f3162840607_37225410 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3533577f31627ffa84_06182267';
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />
    <title>捐赠记录列表</title>
    <link type="text/css" rel="stylesheet" href="/public/css/skin.css" />
    <link type="text/css" rel="stylesheet" href="/public/css/style.css" />
    <link type="text/css" rel="stylesheet" href="/public/js/dropload/dropload.css" />
    <link type="text/css" rel="stylesheet" href="/public/css/f-awesome/font-awesome.min.css" />
    <?php echo '<script'; ?>
 type="text/javascript" src="/public/js/jquery-2.1.4.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/public/js/dropload/dropload.min.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="find_nav">
    <div class="header">
        <div class="return"><a href="/"><img src="/public/images/skin/return.png"></a></div>
        <div class="title">捐赠记录列表</div>
        <div class="user">共<span class="list_color"><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</span>次</div>
    </div>
</div>
<div class="ce-wrapper">
    <div class="history_content" id="list">
        <ul class="clearafter" id="more_list">
            <?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
            <?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['vo']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->value) {
$_smarty_tpl->tpl_vars['vo']->_loop = true;
$foreach_vo_Sav = $_smarty_tpl->tpl_vars['vo'];
?>
            <li><span class="list_color"><?php echo $_smarty_tpl->tpl_vars['vo']->value['c_name'];?>
</span>捐赠<span class="list_color">￥<?php echo $_smarty_tpl->tpl_vars['vo']->value['c_price'];?>
</span>感谢！
                <div class="list_jz list_gray"><?php echo $_smarty_tpl->tpl_vars['vo']->value['c_addtime'];?>
</div>
            </li>
            <?php
$_smarty_tpl->tpl_vars['vo'] = $foreach_vo_Sav;
}
?>
            <?php }?>
        </ul></div>
</div>
</body>

</html><?php }
}
?>