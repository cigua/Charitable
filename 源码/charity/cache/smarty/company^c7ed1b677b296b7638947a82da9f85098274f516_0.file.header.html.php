<?php /* Smarty version 3.1.27, created on 2016-06-16 17:34:49
         compiled from "E:\xampp\htdocs\charity\charity\application\views\common\header.html" */ ?>
<?php
/*%%SmartyHeaderCode:29961576272b97f21c1_72505916%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7ed1b677b296b7638947a82da9f85098274f516' => 
    array (
      0 => 'E:\\xampp\\htdocs\\charity\\charity\\application\\views\\common\\header.html',
      1 => 1465887354,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29961576272b97f21c1_72505916',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_576272b97ffc90_31472847',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_576272b97ffc90_31472847')) {
function content_576272b97ffc90_31472847 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '29961576272b97f21c1_72505916';
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>吉上润达后台管理系统</title>
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
<div style='float:left;width:300px;height:90px; font-size:25px;padding:20px 0 0 30px; color:#fff;'>吉上润达管理后台</div>
    <div class="btn-group pull-right" id="yonghu">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
            管理员：<?php echo @constant('A_REALNAME');?>
 <span class="caret"></span>
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