<?php /* Smarty version 3.1.27, created on 2016-07-08 12:50:45
         compiled from "C:\xampp\htdocs\charity\www.charity.com\application\views\donation\choose.html" */ ?>
<?php
/*%%SmartyHeaderCode:25053577f3125bb2292_45040045%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f90aed30341e25395daff3cccfd9ef4530df12d9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\charity\\www.charity.com\\application\\views\\donation\\choose.html',
      1 => 1467595854,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25053577f3125bb2292_45040045',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_577f3125bdd128_61604366',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_577f3125bdd128_61604366')) {
function content_577f3125bdd128_61604366 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '25053577f3125bb2292_45040045';
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />
    <title>资质认证</title>
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
        <div class="title">收款人</div>
    </div>
</div>
<div class="raise_wrapper">
    <div class="raise_content">
        <div class="raise_find"><h2>收款主体资质认证</h2></div>
    </div>
    <div class="pe-spacer size10"></div>
    <div class="find_item">
        <div class="find_info">
            <a href="/donation/prove">
                <h3>个人</h3>
                <p>需要提供手持身份证照片</p>
                <div class="info_arrow"><span class="icon icon-angle-right"></span></div>
            </a>
        </div>
        <div class="find_info">
            <a href="/donation/company">
                <h3>组织机构</h3>
                <p>需要提供组织机构证明</p>
                <div class="info_arrow"><span class="icon icon-angle-right"></span></div>
            </a>
        </div>
    </div>
</div>
</body>
</html><?php }
}
?>