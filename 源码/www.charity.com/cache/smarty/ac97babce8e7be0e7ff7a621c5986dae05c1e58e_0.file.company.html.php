<?php /* Smarty version 3.1.27, created on 2016-07-19 17:33:40
         compiled from "C:\xampp\htdocs\charity\www.charity.com\application\views\donation\company.html" */ ?>
<?php
/*%%SmartyHeaderCode:11141578df3f403c9a3_05828896%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac97babce8e7be0e7ff7a621c5986dae05c1e58e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\charity\\www.charity.com\\application\\views\\donation\\company.html',
      1 => 1468920749,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11141578df3f403c9a3_05828896',
  'variables' => 
  array (
    'proveInfo' => 0,
    'bankInfo' => 0,
    'vo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_578df3f40a2647_82652751',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_578df3f40a2647_82652751')) {
function content_578df3f40a2647_82652751 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '11141578df3f403c9a3_05828896';
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />
    <title>机构认证</title>
    <link type="text/css" rel="stylesheet" href="/public/css/skin.css" />
    <link type="text/css" rel="stylesheet" href="/public/css/style.css" />
    <link rel="stylesheet" href="/public/css/bootstrap-customfile.css" />
    <link type="text/css" rel="stylesheet" href="/public/css/f-awesome/font-awesome.min.css" />
    <?php echo '<script'; ?>
 type="text/javascript" src="/public/js/jquery-2.1.4.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/public/js/jquery.ajaxfileupload.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/public/js/bootstrap-customfile.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="find_nav">
    <div class="header">
        <div class="return"><a href="/"><img src="/public/images/skin/return.png"></a></div>
        <div class="title">机构认证</div>
        <a href="javascript:void(0);" class="bank_right" id="baseBtn">提交</a>
    </div>
</div>
<form name="baseForm" id="baseForm">
    <input type="hidden" name="checkType" id="checkType" value="1">
<div class="raise_wrapper">
    <div class="raise_header">
        <img src='/public/images/content/raise_begin_three.jpg'>
    </div>
    <div class="raise_content clearafter" >
        <div class="team_header clearafter">
            <label>组织机构资质证明</label>
        </div>
        <div class="pe-spacer size10"></div>
        <div class="slide_text">请提供组织资质照片</div>
        <!---图片上传放这里-->
        <input accept="image/*" type="file" id="upload">
        <div style="padding-top:10px;"><img id="openImg" src="<?php echo $_smarty_tpl->tpl_vars['proveInfo']->value['p_img'];?>
" style="max-width:200px;"/></div>
        <div class="order">
            <input type="hidden" name="p_img" id="p_img" value="<?php echo $_smarty_tpl->tpl_vars['proveInfo']->value['p_img'];?>
" />
        </div>
    </div>
    <div class="pe-spacer size10"></div>
    <div class="raise_content">
        <div class="raise_item clearafter ">
            <label class="color_gray">收款人银行卡</label>
        </div>
        <input type="hidden" name="bankInfo" id="bankInfo" value="<?php echo $_smarty_tpl->tpl_vars['bankInfo']->value;?>
">
        <div class="read_info">
            <a href="javascript:void(0);" id="goBank">
                <p><img src="/public/images/content/bank_icon.jpg">需要提供手持身份证照片</p>
                <div class="info_arrow"><span class="icon icon-angle-right"></span></div>
            </a>
        </div>
    </div>
    <div class="pe-spacer size10"></div>
    <div class="raise_content clearafter">
        <div class="raise_item clearafter">
            <label class="color_gray">资金用途</label>
        </div>
        <div class="pe-spacer size10"></div>
        <div class="slide_text">请提供可以证明需要他人帮助的证明材料</div>
        <input accept="image/*" type="file" id="upload2">
        <div id="imagesList">
            <?php if ($_smarty_tpl->tpl_vars['proveInfo']->value['file']) {?>
            <?php
$_from = $_smarty_tpl->tpl_vars['proveInfo']->value['file'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['vo']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->value) {
$_smarty_tpl->tpl_vars['vo']->_loop = true;
$foreach_vo_Sav = $_smarty_tpl->tpl_vars['vo'];
?>
			<div class="img_left">
				<div><img src="<?php echo $_smarty_tpl->tpl_vars['vo']->value;?>
" style="max-width:200px;"/><a href="javascript:void(0);"  class="removeImg"><i class="icon-remove"></i></a></div>
				<div class="order">
					<input type="hidden" name="file[]" value="<?php echo $_smarty_tpl->tpl_vars['vo']->value;?>
" />
				</div>
			</div>
            <?php
$_smarty_tpl->tpl_vars['vo'] = $foreach_vo_Sav;
}
?>
            <?php }?>
        </div>
    </div>
</div>
</form>
<?php echo '<script'; ?>
 src="/public/js/lrz_index1.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/public/js/lrz_index2.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>


    $(document).ready(function(){
		$(document).on('click','.removeImg',function(){
			$(this).parent().remove();
		})
        $(document).keyup();
        $('#goBank').click(function(){
            $('#checkType').val(2);
            $.ajax({
                cache: true,
                type: "POST",
                url:'/ajax/donation/prove',
                data:$('#baseForm').serialize(),// 你的formid
                async: false,
                dataType: "json",
                error: function(request) {
                    alert("Connection error");
                },
                success: function(data) {
                    if(data.status == 'y'){
                        location.href = '/donation/bank';
                    }else{
                        alert(data.info);
                    }
                }
            });
        })
        $('#baseBtn').click(function(){
            $('#checkType').val(1);
            $.ajax({
                cache: true,
                type: "POST",
                url:'/ajax/donation/prove',
                data:$('#baseForm').serialize(),// 你的formid
                async: false,
                dataType: "json",
                error: function(request) {
                    alert("Connection error");
                },
                success: function(data) {
                    if(data.status == 'y'){
                        location.href = '/donation/success';
                    }else{
                        alert(data.info);
                    }
                }
            });
        })
    });



    function ajaxFileUpload(submitData) {
        $.ajax({
            type: "POST",
            url: "/donation/upload",
            data: submitData,
            dataType:"json",
            success: function(data){
                if(data.status == 'y'){
                    $('#openImg').attr('src', data.info.http);
                    $('#p_img').val(data.info.http);
                    return;
                }else{
                    alert(data.info);
                }
            },
        });

    }

    function ajaxFileUpload2(submitData) {
        $.ajax({
            type: "POST",
            url: "/donation/upload",
            data: submitData,
            dataType:"json",
            success: function(data){
                if(data.status == 'y'){
                    var html = '<div class="img_left">';
                    html += '<div style="position:relative"><img src="'+ data.info.http +'" style="max-width:200px;"/><a href="javascript:void(0);" class="removeImg"><i class="icon-remove" ></i></a></div>';
                    html += '<div class="order">';
                    html += '<input type="hidden" name="file[]" value="'+data.info.http+'" />';
                    html += '</div>';
					html += '</div>';
                    $('#imagesList').append(html);
                    return;
                }else{
                    alert(data.info);
                }
            },
        });

    }

    document.getElementById('upload').addEventListener('change', function () {
        var that = this;
        lrz(that.files[0], {
            width: 800
        })
                .then(function (rst) {
                    var submitData={
                        image:rst.base64,
                        name:rst.origin.name,
                        fileLength:rst.base64.length
                    };

                    ajaxFileUpload(submitData);

                    return rst;
                });

    });

    document.getElementById('upload2').addEventListener('change', function () {
        var that = this;
        lrz(that.files[0], {
            width: 800
        })
                .then(function (rst) {
                    var submitData={
                        image:rst.base64,
                        name:rst.origin.name,
                        fileLength:rst.base64.length
                    };

                    ajaxFileUpload2(submitData);
                    return rst;
                });

    });


<?php echo '</script'; ?>
>
</body>
</html><?php }
}
?>