<?php /* Smarty version 3.1.27, created on 2016-06-15 11:23:58
         compiled from "E:\xampp\htdocs\charity\charity\application\views\error\error.html" */ ?>
<?php
/*%%SmartyHeaderCode:317805760ca4e881b14_77596929%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6dfd3531bfcb9bc7da730462ac663f0c7fc7c364' => 
    array (
      0 => 'E:\\xampp\\htdocs\\charity\\charity\\application\\views\\error\\error.html',
      1 => 1465887354,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '317805760ca4e881b14_77596929',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5760ca4e89efe0_25934098',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5760ca4e89efe0_25934098')) {
function content_5760ca4e89efe0_25934098 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '317805760ca4e881b14_77596929';
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>可米生活-页面不存在</title>
</head>
<style>
    .cuowu  { margin:0 auto; margin-top:14%; width:565px; font-family:"微软雅黑";}
    .cuowu .img { height:212px; background:url("/public/images/404.png") no-repeat;}
    .cuowu .txt  { font-size:14px; color:#fff; line-height:55px;}
    .cuowu .txt span { margin-left:120px; margin-right:30px;}
    .cuowu .txt a { margin-right:20px; color:#fff;}
    .cuowu .txt i { margin-right:5px;}
</style>
<body style="background:#191919;">
<div>
    <div class="cuowu">
        <div class="img"></div>
        <div class="txt"><span>您访问的页面不存在</span><i class="glyphicon glyphicon-home"></i><a href="/">返回首页</a><i class="glyphicon glyphicon-share-alt"></i><a href="javascript:history.go(-1);">返回上级</a></div>
    </div>
</div>
</body>
</html>
<?php }
}
?>