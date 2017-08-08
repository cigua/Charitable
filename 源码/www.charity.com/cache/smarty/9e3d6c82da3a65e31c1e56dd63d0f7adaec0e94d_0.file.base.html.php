<?php /* Smarty version 3.1.27, created on 2016-07-19 10:08:02
         compiled from "C:\xampp\htdocs\charity\www.charity.com\application\views\company\base.html" */ ?>
<?php
/*%%SmartyHeaderCode:20795578d8b821001e7_23640194%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e3d6c82da3a65e31c1e56dd63d0f7adaec0e94d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\charity\\www.charity.com\\application\\views\\company\\base.html',
      1 => 1468894041,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20795578d8b821001e7_23640194',
  'variables' => 
  array (
    'baseInfo' => 0,
    'time' => 0,
    'vo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_578d8b82157c01_69794522',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_578d8b82157c01_69794522')) {
function content_578d8b82157c01_69794522 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '20795578d8b821001e7_23640194';
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
    <link type="text/css" rel="stylesheet" href="/public/css/f-awesome/font-awesome.min.css" />
    <link rel="stylesheet" href="/public/css/bootstrap-customfile.css" />
    <link rel="stylesheet" href="/public/css/bootstrap-datetimepicker.css" />
    <link rel="stylesheet" href="/public/css/weui.min.css">
    <link rel="stylesheet" href="/public/css/jquery-weui.css">
    <?php echo '<script'; ?>
 type="text/javascript" src="/public/js/jquery-2.1.4.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/public/js/jquery-weui.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/public/js/city-picker.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/public/js/bootstrap-datetimepicker.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/public/js/bootstrap-datetimepicker.zh-CN.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/public/js/jquery.ajaxfileupload.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/public/js/bootstrap-customfile.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/public/js/bootstrap-datetimepicker.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/public/js/jquery.artDialog-4.1.7.min.js"><?php echo '</script'; ?>
>
</head>
<body>
<style>
    .weui_cell{padding-top:0;}
    .weui_cell::before{border:none!important;}
</style>
<div class="find_nav">
    <div class="header">
        <div class="return"><a href="/company/register"><img src="/public/images/skin/return.png"></a></div>
        <div class="title">基本信息</div>
        <a href="javascript:void(0);" class="bank_right" id="baseBtn">提交</a>
    </div>
</div>
<div class="daturm_header">
    <h2>证件照片需要保证清晰度,否着可能影响通过率</h2>
</div>
<form id="baseForm" >
<div class="raise_wrapper">
    <!--新加图片上传插件-->

    <div class="pe-spacer size10"></div>
    <div class="raise_content base_style">
        <div class="raise_item clearafter">
            <label>机构名称：</label>
            <p><input type="text" name="c_name" id="c_name" value="<?php echo $_smarty_tpl->tpl_vars['baseInfo']->value['c_name'];?>
" placeholder="请输入机构名称"/></p>
        </div>
        <div class="raise_item clearafter">
            <div class="weui_cell_hd"><label for="c_createTime" class="weui_label">成立时间：</label></div>
            <!---新的时间-->
            <div class="weui_cell" style="border-top:none;">
                <div class="weui_cell_bd weui_cell_primary">
                    <input class="weui_input" id="c_createTime" name="c_createTime" type="text" value="<?php echo $_smarty_tpl->tpl_vars['time']->value;?>
">
                </div>
            </div>
        </div>
        <!--<div class="raise_item clearafter">-->
            <!--<label>所在地：</label>-->
            <!--<p><input type="text" placeholder="福建福州"/></p>-->
        <!--</div>-->
        <input type="hidden" name="c_city" id="c_city" value="<?php echo $_smarty_tpl->tpl_vars['baseInfo']->value['c_city'];?>
">
        <div class="raise_item clearafter">
            <div class="weui_cells weui_cells_form search_city">
                <div class="weui_cell">
                    <div class="weui_cell_hd"><label class="weui_label" for="home-city">所在地：</label></div>
                    <div class="weui_cell_bd weui_cell_primary">
                        <input class="weui_input" id="home-city" type="text" value="<?php echo $_smarty_tpl->tpl_vars['baseInfo']->value['c_city'];?>
" placeholder="请选择城市">
                    </div>
                </div>
                <div class="base_postion"><span class="icon icon-angle-right"></span></div>
            </div>
        </div>
    </div>
    <div class="pe-spacer size10"></div>
    <div class="raise_content " id="edit_myfrom">
        <div class="raise_item clearafter">
            <label>机构简介</label>
        </div>
        <div class="base_test">   <textarea name="c_des" cols="" rows="" maxlength="200"><?php echo $_smarty_tpl->tpl_vars['baseInfo']->value['c_des'];?>
</textarea></div>
        <div class="base_test_much">  <p id="numtj"><var style="color:#fb6c03">--</var><span class="color_gray">/200</span></p></div>
    </div>
    <div class="pe-spacer size10"></div>
    <div class="raise_content">
        <div class="daturm_item clearafter">
            <h2>主图与轮播图片</h2>
        </div>

        <!---图片上传放这里-->
        <!--<input type="file" name="upload" id="upload" onchange="return ajaxFileUpload();">-->
        <input accept="image/*" type="file" id="upload">
        <div id="imagesList">
            <?php if ($_smarty_tpl->tpl_vars['baseInfo']->value['file']) {?>
                <?php
$_from = $_smarty_tpl->tpl_vars['baseInfo']->value['file'];
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
        <div class="pe-spacer size20"></div>
        <p class="daturm_text">建议第一张上传机构LOGO或标志性图片</p>
    </div>
    <div>
    <div class="pe-spacer size10"></div>
</div>
    </form>
</body>
<?php echo '<script'; ?>
 src="/public/js/lrz_index1.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/public/js/lrz_index2.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>

    $("#c_createTime").calendar();

    $("#home-city").cityPicker({
        title: "请选择城市",
        showDistrict: false
    });

    $(document).on('click', '.close-picker',function(){
        $('#c_city').val($('#home-city').val());
        $('#searchForm').submit();
    })

    $(document).ready(function(){
        $(document).keyup();
//        $("#upload").customFileInput();
        var text=$("#edit_myfrom textarea").val();
        var counter=text.length;
        $("#numtj var").text(200-counter);
        $(document).keyup(function() {
            var text=$("#edit_myfrom textarea").val();
            var counter=text.length;
            $("#numtj var").text(200-counter);
        });

        $('#baseBtn').click(function(){
            $.ajax({
                cache: true,
                type: "POST",
                url:'/ajax/company/base',
                data:$('#baseForm').serialize(),// 你的formid
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
		
		$(document).on('click','.removeImg',function(){
			$(this).parent().remove();
		})
    });

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

    function ajaxFileUpload(submitData) {
        $.ajax({
            type: "POST",
            url: "/company/upload",
            data: submitData,
            dataType:"json",
            success: function(data){
                if(data.status == 'y'){
                    if ( data.status == 'y' ) {
                        var html = '<div class="img_left">';
                    html += '<div style="position:relative"><img src="'+ data.info.http +'" style="max-width:200px;"/><a href="javascript:void(0);" class="removeImg"><i class="icon-remove" ></i></a></div>';
                        html += '<div class="order">';
                        html += '<input type="hidden" name="file[]" value="'+data.info.http+'" />';
                        html += '</div>';
						html += '</div>';
                        $('#imagesList').append(html);
                        return;
                    }
                }else{
                    alert(data.info);
                }
            },
        });
    }
<?php echo '</script'; ?>
>

</html><?php }
}
?>