<?php /* Smarty version 3.1.27, created on 2016-07-19 16:57:19
         compiled from "C:\xampp\htdocs\charity\www.charity.com\application\views\company\success.html" */ ?>
<?php
/*%%SmartyHeaderCode:7615578deb6fa1dd82_73879310%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7817b67077274cc9183edb9485c2040abc7e3f42' => 
    array (
      0 => 'C:\\xampp\\htdocs\\charity\\www.charity.com\\application\\views\\company\\success.html',
      1 => 1468918638,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7615578deb6fa1dd82_73879310',
  'variables' => 
  array (
    'account' => 0,
    'password' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_578deb6fa45ac8_88676398',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_578deb6fa45ac8_88676398')) {
function content_578deb6fa45ac8_88676398 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '7615578deb6fa1dd82_73879310';
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />
    <title>机构审核</title>
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
        <div class="title">等待审核</div>
    </div>
</div>
<div class="raise_wrapper">
    <div class="pe-spacer size10"></div>
    <div class="raise_content">
        <div class="success_info">
            <img src="/public/images/skin/success_icon.jpg">
            <h2>您提交的注册信息将在审核后发布</h2>
            <h2>账号<?php echo $_smarty_tpl->tpl_vars['account']->value;?>
</h2>
            <h2>密码<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
</h2>
			<h2>后台地址<br/><a href="http://y.weimingzhong.com:82" target="_blank" style="color:#fb880c">http://y.weimingzhong.com:82</a></h2>
			<br/>
            <p style=" font-size:14px; background:#fb880c;padding:10px;color:#fff;border-raidus:5px;">请及时点击右上角图标收藏页面，<br/>保存账户密码以及后台地址，<br/>并及时登入后台地址完善机构信息。<br/></p>
            <a href="/" class='sc_link'>返回首页</a>
        </div>
    </div>
</div>
</body>
</html><?php }
}
?>