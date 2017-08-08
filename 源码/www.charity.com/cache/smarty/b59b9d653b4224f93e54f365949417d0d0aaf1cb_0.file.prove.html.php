<?php /* Smarty version 3.1.27, created on 2016-07-19 11:06:25
         compiled from "C:\xampp\htdocs\charity\www.charity.com\application\views\donation\prove.html" */ ?>
<?php
/*%%SmartyHeaderCode:5285578d9931298ab4_17588669%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b59b9d653b4224f93e54f365949417d0d0aaf1cb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\charity\\www.charity.com\\application\\views\\donation\\prove.html',
      1 => 1468897583,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5285578d9931298ab4_17588669',
  'variables' => 
  array (
    'proveInfo' => 0,
    'bankInfo' => 0,
    'vo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_578d99312debd8_24522945',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_578d99312debd8_24522945')) {
function content_578d99312debd8_24522945 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '5285578d9931298ab4_17588669';
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />
    <title>基本信息</title>
    <link type="text/css" rel="stylesheet" href="/public/css/skin.css" />
    <link type="text/css" rel="stylesheet" href="/public/css/style.css" />
    <link rel="stylesheet" href="/public/css/bootstrap-customfile.css" />
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
        <a href="javascript:void(0);" class="bank_right" id="baseBtn">提交</a>
    </div>
</div>
<form name="baseForm" id="baseForm">
    <input type="hidden" name="checkType" id="checkType" value="1">
<div class="raise_wrapper">
    <div class="raise_header">
        <img src='/public/images/content/raise_begin_three.jpg'>
    </div>
    <div class="raise_content">
        <div class="raise_item clearafter">
            <label>真实名字</label>
            <p><input type="text" name="p_realname" id="p_realname" value="<?php echo $_smarty_tpl->tpl_vars['proveInfo']->value['p_realname'];?>
" placeholder="填写收款人真实名字"/></p>
        </div>
        <div class="raise_item clearafter">
            <label>身份证号</label>
            <p><input type="text" name="p_idCard" id="p_idCard" value="<?php echo $_smarty_tpl->tpl_vars['proveInfo']->value['p_idCard'];?>
" placeholder="填写收款人身份证号"/></p>
        </div>
        <div class="raise_item clearafter">
            <label>联系电话</label>
            <p><input type="text" name="p_phone" id="p_phone" value="<?php echo $_smarty_tpl->tpl_vars['proveInfo']->value['p_phone'];?>
" placeholder="联系电话"/></p>
        </div>
        <div class="read_name label" style="padding-top:8px;">收款人手持身份证照片</div>
        <div class="pe-spacer size10"></div>
        <div class="slide_text"></div>
        <div class="raise_content">
            <!---图片上传放这里-->
            <input accept="image/*" type="file" id="upload">
            <div style="padding-top:10px;"><img id="openImg" src="<?php echo $_smarty_tpl->tpl_vars['proveInfo']->value['p_img'];?>
" style="max-width:200px;"/></div>
            <div class="order">
                <input type="hidden" name="p_img" id="p_img" value="<?php echo $_smarty_tpl->tpl_vars['proveInfo']->value['p_img'];?>
" />
            </div>
            <div class="pe-spacer size20"></div>
            <p class="daturm_text">身份证上的所有信息必须清晰可见</p>
        </div>
    </div>
    <div class="pe-spacer size10"></div>
    <div class="raise_content">
        <div class="raise_item clearafter">
            <label class="color_gray">收款人银行卡</label>
        </div>
        <input type="hidden" name="bankInfo" id="bankInfo" value="<?php echo $_smarty_tpl->tpl_vars['bankInfo']->value;?>
">
        <div class="read_info">
            <a href="javascript:void(0);" id="goBank">
                <p><img src="/public/images/content/bank_icon.jpg">添加银行卡</p>
                <div class="info_arrow"><span class="icon icon-angle-right"></span></div>
            </a>
        </div>
    </div>
    <div class="pe-spacer size10"></div>
    <div class="raise_content">
        <div class="raise_item clearafter">
            <label class="color_gray">资金用途</label>
        </div>
        <div class="pe-spacer size10"></div>
        <div class="slide_text">请提供可以证明需要他人帮助的证明材料</div>
        <!---图片上传放这里-->
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
	
            <div style="padding-top:10px;"><img src="<?php echo $_smarty_tpl->tpl_vars['vo']->value;?>
" style="max-width:200px;"/></div>
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
        $(document).keyup();
		$(document).on('click','.removeImg',function(){
			$(this).parent().remove();
		})
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