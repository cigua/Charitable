<?php /* Smarty version 3.1.27, created on 2016-07-14 22:14:49
         compiled from "C:\xampp\htdocs\charity\www.charity.com\application\views\company\prove.html" */ ?>
<?php
/*%%SmartyHeaderCode:940457879e59bc5eb8_57257489%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6448b0ebf54988a1fa4fffdae130c116a819932c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\charity\\www.charity.com\\application\\views\\company\\prove.html',
      1 => 1468504795,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '940457879e59bc5eb8_57257489',
  'variables' => 
  array (
    'proveInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57879e59bfbc57_84552196',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57879e59bfbc57_84552196')) {
function content_57879e59bfbc57_84552196 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '940457879e59bc5eb8_57257489';
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />
    <title>机构申请</title>
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
        <div class="return"><a href="/company/register"><img src="/public/images/skin/return.png"></a></div>
        <div class="title">证明材料</div>
        <a href="javascript:void(0);" class="bank_right" id="proveBtn">提交</a>
    </div>
</div>
<div class="daturm_header">
    <h2>证件照片需要保证清晰度,否着可能影响通过率</h2>
</div>
<form id="proveForm">
<div class="raise_wrapper">
    <div class="pe-spacer size10"></div>
    <div class="raise_content">
        <div class="daturm_item clearafter">
            <h2>开户许可证</h2>
        </div>
        <!---图片上传放这里-->
        <input accept="image/*" type="file" id="upload">
        <div style="padding-top:10px;"><img id="openImg" src="<?php echo $_smarty_tpl->tpl_vars['proveInfo']->value['c_open_img'];?>
" style="max-width:200px;"/></div>
        <div class="order">
            <input type="hidden" name="c_open_img" id="c_open_img" value="<?php echo $_smarty_tpl->tpl_vars['proveInfo']->value['c_open_img'];?>
" />
        </div>


        <div class="pe-spacer size20"></div>
        <p class="daturm_text">如缺失可用机关辅助材料</p>
    </div>
    <div class="pe-spacer size10"></div>
    <div class="raise_content">
        <div class="daturm_item clearafter">
            <h2>组织机构证明码</h2>
        </div>
        <!---图片上传放这里-->
        <input accept="image/*" type="file" id="upload2">
        <div style="padding-top:10px;"><img id="companyImg" src="<?php echo $_smarty_tpl->tpl_vars['proveInfo']->value['c_company_img'];?>
" style="max-width:200px;"/></div>
        <div class="order">
            <input type="hidden" name="c_company_img" id="c_company_img" value="<?php echo $_smarty_tpl->tpl_vars['proveInfo']->value['c_company_img'];?>
" />
        </div>
        <div class="pe-spacer size20"></div>
        <p class="daturm_text">如缺失可用机关辅助材料</p>
    </div>
    <div class="pe-spacer size10"></div>
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
        $('#proveBtn').click(function(){
            $.ajax({
                cache: true,
                type: "POST",
                url:'/ajax/company/prove',
                data:$('#proveForm').serialize(),// 你的formid
                async: false,
                dataType: "json",
                error: function(request) {
                    alert("Connection error");
                },
                success: function(data) {
                    if(data.status == 'y'){
                        location.href = '/company/register';
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
            url: "/company/upload",
            data: submitData,
            dataType:"json",
            success: function(data){
                if(data.status == 'y'){
                    $('#openImg').attr('src', data.info.http);
                    $('#c_open_img').val(data.info.http);
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
            url: "/company/upload",
            data: submitData,
            dataType:"json",
            success: function(data){
                if(data.status == 'y'){
                    $('#companyImg').attr('src', data.info.http);
                    $('#c_company_img').val(data.info.http);
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