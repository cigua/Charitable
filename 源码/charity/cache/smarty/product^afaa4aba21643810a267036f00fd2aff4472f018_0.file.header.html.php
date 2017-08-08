<?php /* Smarty version 3.1.27, created on 2016-07-05 23:27:18
         compiled from "C:\xampp\htdocs\charity\charity\application\views\common\header.html" */ ?>
<?php
/*%%SmartyHeaderCode:8036577bd1d64e5f35_11856696%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afaa4aba21643810a267036f00fd2aff4472f018' => 
    array (
      0 => 'C:\\xampp\\htdocs\\charity\\charity\\application\\views\\common\\header.html',
      1 => 1467512833,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8036577bd1d64e5f35_11856696',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_577bd1d64f6234_11448070',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_577bd1d64f6234_11448070')) {
function content_577bd1d64f6234_11448070 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '8036577bd1d64e5f35_11856696';
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>慈善管理系统</title>
    <link href="/public/css/bootstrap.min.css" rel="stylesheet">
    <link href="/public/css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/public/css/bootstrap-customfile.css" />
    <link rel="stylesheet" href="/public/css/bootstrap-datetimepicker.css" />
    <?php echo '<script'; ?>
 src="/public/js/jquery.12.0.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/public/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/public/js/Headroom.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/public/js/Validform_v5.3.2_min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/public/js/jquery.artDialog-4.1.7.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/public/js/common.js"><?php echo '</script'; ?>
>
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="/public/js/jquery.12.0.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/public/js/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
    <?php echo '<script'; ?>
 src="/public/js/bootstrap-datetimepicker.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/public/js/bootstrap-datetimepicker.zh-CN.js"><?php echo '</script'; ?>
>
</head>


<body>
<div class="nav">
<div style='float:left;width:400px;height:90px; font-size:22px;padding:30px 0 0 30px; color:#fff;'><?php if (@constant('A_ROLE') == 0) {?>慈善管理后台<?php } else {
echo @constant('C_NAME');?>
.管理后台<?php }?></div>
    <div class="btn-group pull-right" id="yonghu">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
            <?php if (@constant('A_ROLE') == 0) {?>管理员<?php } else {
echo @constant('C_NAME');?>
机构<?php }?> <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="/index/password/" data-toggle="modal" data-target="#passportModal">修改密码</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="/login/logout/">退出系统</a></li>
        </ul>
    </div>
</div>

<form class="form-horizontal" action="/ajax/passport/password/" method="post">
    <div class="modal fade" id="passportModal" tabindex="-1" role="dialog" aria-labelledby="passportModalLabel"></div>
</form><?php }
}
?>