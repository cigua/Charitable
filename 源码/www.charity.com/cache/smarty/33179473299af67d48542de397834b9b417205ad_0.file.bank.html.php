<?php /* Smarty version 3.1.27, created on 2016-07-17 01:21:49
         compiled from "C:\xampp\htdocs\charity\www.charity.com\application\views\donation\bank.html" */ ?>
<?php
/*%%SmartyHeaderCode:16422578a6d2d373a21_03542104%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33179473299af67d48542de397834b9b417205ad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\charity\\www.charity.com\\application\\views\\donation\\bank.html',
      1 => 1468510608,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16422578a6d2d373a21_03542104',
  'variables' => 
  array (
    'bankInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_578a6d2d3adde7_92761721',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_578a6d2d3adde7_92761721')) {
function content_578a6d2d3adde7_92761721 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '16422578a6d2d373a21_03542104';
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />
    <title>添加银行卡</title>
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
        <div class="title">添加银行卡</div>
        <a href="javascript:void(0);" class="bank_right">完成</a>
    </div>
</div>
<form name="bankForm" id="bankForm">
<div class="raise_wrapper">
    <div class="raise_content">
        <div class="bank_content clearafter">
            <input type="hidden" name="b_type" id="b_type" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['bankInfo']->value['b_type'])===null||$tmp==='' ? 1 : $tmp);?>
">
            <div class="bank_item" rel="1"><a href="javascript:void(0);" <?php if (!$_smarty_tpl->tpl_vars['bankInfo']->value || $_smarty_tpl->tpl_vars['bankInfo']->value['b_type'] == 1) {?>class="bank_on"<?php }?>>个人银行卡</a></div>
            <div class="bank_item" rel="2"><a href="javascript:void(0);" <?php if ($_smarty_tpl->tpl_vars['bankInfo']->value['b_type'] == 2) {?>class="bank_on"<?php }?>>对公银行卡</a></div>
        </div>
        <div class="raise_item clearafter">
            <label>开户姓名</label>
            <p><input type="text" name="b_name" id="b_name" value="<?php echo $_smarty_tpl->tpl_vars['bankInfo']->value['b_name'];?>
" placeholder="填写开户单位名称"/></p>
        </div>
        <div class="raise_item clearafter">
            <label>银行卡号</label>
            <p><input type="text" name="b_number" id="b_number" value="<?php echo $_smarty_tpl->tpl_vars['bankInfo']->value['b_number'];?>
" placeholder="填写银行卡号"/></p>
        </div>
        <div class="raise_item clearafter">
            <label>开户银行</label>
            <p><input type="text" name="b_bankName" id="b_bankName" value="<?php echo $_smarty_tpl->tpl_vars['bankInfo']->value['b_bankName'];?>
"  placeholder="填写开户银行"/></p>
        </div>
    </div>
    <div class="pe-spacer size10"></div>
</div>
</form>
<?php echo '<script'; ?>
>
    $('.bank_item').click(function(){
        var rel = $(this).attr('rel');
        $('#b_type').val(rel);
        $(this).find('a').addClass('bank_on').parent().siblings().find('a').removeClass('bank_on');
    })

    $('.bank_right').click(function(){
        $.ajax({
            cache: true,
            type: "POST",
            url:'/ajax/donation/bank',
            data:$('#bankForm').serialize(),// 你的formid
            async: false,
            dataType: "json",
            error: function(request) {
                alert("Connection error");
            },
            success: function(data) {
                if(data.status == 'y'){
                    location.href = data.info;
                }else{
                    alert(data.info);
                }
            }
        });
    })
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
?>