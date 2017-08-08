<?php /* Smarty version 3.1.27, created on 2016-07-03 21:47:05
         compiled from "C:\xampp\htdocs\charity\charity\application\views\login\index.html" */ ?>
<?php
/*%%SmartyHeaderCode:1794057791759099df0_19934770%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad9026f9b734ddff6d3839d64e289cecf7117490' => 
    array (
      0 => 'C:\\xampp\\htdocs\\charity\\charity\\application\\views\\login\\index.html',
      1 => 1467512833,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1794057791759099df0_19934770',
  'variables' => 
  array (
    'token' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_577917590cd3b0_60679592',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_577917590cd3b0_60679592')) {
function content_577917590cd3b0_60679592 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1794057791759099df0_19934770';
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>慈善台管理系统</title>
    <link  rel="stylesheet" type="text/css" href="/public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/public/css/style.css">
    <link rel="stylesheet" type="text/css" href="/public/css/plugs.css">
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
    <!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="/public/js/jQuery v1.12.0.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
</head>
<body style="background:#191919;">

<div class="login_logo"></div>

<div class="login_con">
    <form action="/login/passport/" class="form-process">
        <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" />
        <div class="input-group input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input type="text" class="form-control" name="username" placeholder="请输入您的用户名" aria-describedby="sizing-addon2" datatype="*" nullmsg="请输入登录用户名" />
        </div>
        <div class="input-group input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input type="password" class="form-control" name="password" placeholder="请输入您的登录密码" aria-describedby="sizing-addon2" datatype="*" nullmsg="请输入登录密码" />
        </div>
        <button type="submit" class="btn btn-primary btn btn-block">登录系统</button>
    </form>
    <p>Copyright © 2014-2015 慈善. All Rights Reserved </p>
</div>
<?php echo '<script'; ?>
 type="application/javascript">
    $(".form-process").Validform({
        btnSubmit: '.btn',
        ajaxPost: true,
        tipSweep: true,
        tiptype:function(msg,o,cssctl){
            if(o.type == 3) {
                $.dialog.tips(msg);
            }

        },
        callback:function(json){
            $.dialog.tips(json.info);
            if ( json.status == 'y' ) {
                window.location.href = '/';
            }
            return false;
        }
    });
<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
?>