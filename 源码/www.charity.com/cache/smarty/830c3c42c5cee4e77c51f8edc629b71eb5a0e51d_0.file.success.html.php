<?php /* Smarty version 3.1.27, created on 2016-07-06 09:57:55
         compiled from "C:\xampp\htdocs\charity\www.charity.com\application\views\donation\success.html" */ ?>
<?php
/*%%SmartyHeaderCode:1785577c65a356ddd1_21344011%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '830c3c42c5cee4e77c51f8edc629b71eb5a0e51d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\charity\\www.charity.com\\application\\views\\donation\\success.html',
      1 => 1467513216,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1785577c65a356ddd1_21344011',
  'variables' => 
  array (
    'd_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_577c65a359dde2_24158658',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_577c65a359dde2_24158658')) {
function content_577c65a359dde2_24158658 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1785577c65a356ddd1_21344011';
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />
    <title>成功</title>
    <link type="text/css" rel="stylesheet" href="/public/css/skin.css" />
    <link type="text/css" rel="stylesheet" href="/public/css/style.css" />
    <link type="text/css" rel="stylesheet" href="/public/css/f-awesome/font-awesome.min.css" />
    <?php echo '<script'; ?>
 type="text/javascript" src="/public/js/jquery-2.1.4.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="find_nav">
    <div class="header">
        <div class="return"><a href="/"><img src="/public/images/skin/return.png"></a></div>
        <div class="title">个人验证</div>
    </div>
</div>
<div class="raise_wrapper">
    <div class="raise_header">
        <img src='/public/images/content/raise_begin_two.jpg'>
    </div>

    <div class="pe-spacer size10"></div>
    <div class="raise_content">
        <div class="success_info">
            <img src="/public/images/skin/success_icon.jpg">
            <h2>项目发起成功</h2>
            <a href="/donation/details/?id=<?php echo $_smarty_tpl->tpl_vars['d_id']->value;?>
">查看项目</a>
        </div>
    </div>
</div>
</body>
</html><?php }
}
?>