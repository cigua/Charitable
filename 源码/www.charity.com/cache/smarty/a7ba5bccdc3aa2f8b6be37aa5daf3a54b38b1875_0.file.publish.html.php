<?php /* Smarty version 3.1.27, created on 2016-07-19 10:18:07
         compiled from "C:\xampp\htdocs\charity\www.charity.com\application\views\donation\publish.html" */ ?>
<?php
/*%%SmartyHeaderCode:3887578d8ddf6b6300_46970009%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7ba5bccdc3aa2f8b6be37aa5daf3a54b38b1875' => 
    array (
      0 => 'C:\\xampp\\htdocs\\charity\\www.charity.com\\application\\views\\donation\\publish.html',
      1 => 1468894685,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3887578d8ddf6b6300_46970009',
  'variables' => 
  array (
    'baseInfo' => 0,
    'time' => 0,
    'vo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_578d8ddf70ec64_20683509',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_578d8ddf70ec64_20683509')) {
function content_578d8ddf70ec64_20683509 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3887578d8ddf6b6300_46970009';
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />
    <title>发布善筹</title>
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
<style>
    .weui_cell{padding-top:0;}
    .weui_cell::before{border:none!important;}
</style>
<body>
<div class="find_nav">
    <div class="header">
        <div class="return"><a href="/"><img src="/public/images/skin/return.png"></a></div>
        <div class="title">发布善筹</div>
        <a href="javascript:void(0);" class="bank_right" id="baseBtn">提交</a>
    </div>
</div>
<form name="baseForm" id="baseForm" action="">
    <div class="raise_wrapper">
        <div class="raise_header">
            <img src='/public/images/content/raise_begin_one.jpg'>
        </div>
        <div class="raise_content">
            <div class="raise_item clearafter">
                <label>目标资金</label>
                <p><input type="text" id="d_target" name="d_target" value="<?php echo $_smarty_tpl->tpl_vars['baseInfo']->value['d_target'];?>
" placeholder="请填写目标金额"/>元</p>
            </div>
            <div class="raise_item clearafter">
                <label>资金用途</label>
                <p><input type="text" id="d_used_title" value="<?php echo $_smarty_tpl->tpl_vars['baseInfo']->value['d_used_title'];?>
" name="d_used_title" placeholder="请填写资金用途"/></p>
            </div>
            <div class="raise_item clearafter">
                <div class="weui_cell_hd"><label for="d_endTime" class="weui_label">截至日期</label></div>
                <!---新的时间-->
                <div class="weui_cell" style="border-top:none;">
                    <div class="weui_cell_bd weui_cell_primary">
                        <input class="weui_input" id="d_endTime" name="d_endTime" type="text" value="<?php echo $_smarty_tpl->tpl_vars['time']->value;?>
">
                    </div>
                </div>
            </div>
             <!---新的时间选择-->

                <!--<input type="hidden" name="d_endTime" id="d_endTime" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['baseInfo']->value['d_endTime'])===null||$tmp==='' ? 30 : $tmp);?>
">-->
                <!--<p><span id="showDay">2016年5月5日</span>，共<span class="color_orange">30</span>天</p>-->
                <!--<fieldset>-->
                    <!--<dl>-->
                        <!--<div class="slide_left">10天</div>-->
                        <!--<div id="slidercontainer1">-->
                        <!--</div>-->
                        <!--<div class="slide_right">30天</div>-->
                    <!--</dl>-->
                <!--</fieldset>-->
            </div>
        </div>
        <div class="pe-spacer size10"></div>
        <div class="raise_content">
            <div class="raise_name">
                <p><input type="text" name="d_title" id="d_title" value="<?php echo $_smarty_tpl->tpl_vars['baseInfo']->value['d_title'];?>
" placeholder="请填写筹款标题"/></p>
                <p><textarea placeholder="填写详细描述救助情况，资金用途等。" id="d_content" name="d_content"><?php echo $_smarty_tpl->tpl_vars['baseInfo']->value['d_content'];?>
</textarea></p>
            </div>
            <div class="slide_text">项目内容和图片禁止透露任何<span class="color_orange">联系方式</span>和<span class="color_orange">银行卡</span>等收款信息</div>
        </div>
        <div class="raise_content">
            <!---图片上传放这里-->
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
            <div class="pe-spacer size20"></div>
            <p class="daturm_text">建议上传真实，完整的现场拍照，提高项目的可信度</p>
        </div>
        <div class="pe-spacer size10"></div>
        <div class="raise_content">
            <!---icon-ok-sign-->
            <div class="rais_bottom"> <a href="#" class="raise_icon"><span class="icon icon-ok-circle"></span></a>已阅读并同意《<span class="color_orange">平台善筹发起条款</span>》
            </div></div>
    </div>
</form>
<div class="raise_jump hide">
    <h2>项目发起须知</h2>
    <div class="jump_scrrod">
        &nbsp;&nbsp;&nbsp;&nbsp;发起人须对其提交资料的真实性负责，不得虚构事实或者隐瞒真相。平台将重点打击违法诈骗行为，涉及刑事责任的，平台将主动移交相关资料至公安机关立案。<br />
        &nbsp;&nbsp;&nbsp;&nbsp;中华人民共和国刑法第二百六十六条:【诈骗罪】诈骗公私财物，数额较大的，处三年以下有期徒刑、拘役或者管制，并处或者单处罚金;数额巨大或者有其他严重情节的，处三年以上十年以下有期徒刑，并处罚金；数额特别巨大或者有其他特别严重情节的，处十年以上有期徒刑或者无期徒刑，并处罚金或者没收财产。本法另有规定的，依照规定。
        关于办理诈骗刑事案件具体应用法律若干问题的解释：<br />
        第二条: 诈骗公私财物达到本解释第一条规定的数额标准，具有下列情形之一的，可以依照刑法第二百六十六条的规定酌情从严惩处：<br />
        （一）通过发送短信、拨打电话或者利用互联网、广播电视、报刊杂志等发布虚假信息，对不特定多数人实施诈骗的；<br />
        （二）诈骗救灾、抢险、防汛、优抚、扶贫、移民、救济、医疗款物的；<br />
        （三）以赈灾名义实施诈骗的；<br />
        （四）诈骗残疾人、老年人或者丧失劳动能力人的财物的；<br />
        （五）造成被害人自杀、精神失常或者其他严重后果的。</div>
    <div class="pe-spacer size10"></div>
    <h2 class="jump_bottom"><span class="color_orange">我知道了</span></h2>
</div>
<div class="jump_bg hide"></div>
</body>
<!--滚动条-->
<!--<?php echo '<script'; ?>
 type="text/javascript" src="/public/js/jquery-1.2.6.js"><?php echo '</script'; ?>
>-->
<?php echo '<script'; ?>
 src="/public/js/jquery-weui.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/public/js/jquery.ajaxfileupload.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/public/js/bootstrap-customfile.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/public/js/lrz_index1.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/public/js/lrz_index2.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">

    //滚动条
    $(document).ready(function(){
        $("#date").calendar();
        $("#d_endTime").calendar();
        $("#inline-calendar").calendar({
            container: "#inline-calendar",
            input: "#date3"
        });

        var maxFont = 30 - 10;
        var nowDate = new Date();
        var mf = $('#myFont').css('font-size', 30);
        var ysDate = new Date(nowDate.getTime()+30*24*60*60*1000).toLocaleDateString();



        $('#baseBtn').click(function(){
            if(!$('.rais_bottom .icon').hasClass('icon-ok-sign')){
                alert('请同意平台慈善发布条款');return;
            }

            $.ajax({
                cache: true,
                type: "POST",
                url:'/ajax/donation/base',
                data:$('#baseForm').serialize(),// 你的formid
                async: false,
                dataType: "json",
                error: function(request) {
                    alert("Connection error");
                },
                success: function(data) {
                    if(data.status == 'y'){
                        location.href = '/donation/choose';
                    }else{
                        alert(data.info);
                    }
                }
            });
        })
    });



    //弹窗协议
    $(document).ready(function(){
        $('.rais_bottom a').click(function(){
            $('.rais_bottom .icon').removeClass('icon-ok-circle').addClass('icon-ok-sign');
            $('.raise_jump, .jump_bg').show();
        })
        $('.jump_bottom, .jump_bg').click(function(){
            $('.raise_jump, .jump_bg').hide();
            $('.rais_bottom .icon').removeClass('icon-ok-circle').addClass('icon-ok-sign');
        })
		
		$(document).on('click','.removeImg',function(){
			$(this).parent().remove();
		})
    })


    function ajaxFileUpload(submitData) {
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


<?php echo '</script'; ?>
>
</html><?php }
}
?>