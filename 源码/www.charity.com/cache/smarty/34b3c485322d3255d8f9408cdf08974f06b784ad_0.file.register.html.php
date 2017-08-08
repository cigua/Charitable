<?php /* Smarty version 3.1.27, created on 2016-07-06 15:03:08
         compiled from "C:\xampp\htdocs\charity\www.charity.com\application\views\company\register.html" */ ?>
<?php
/*%%SmartyHeaderCode:2641577cad2cd32256_25170565%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34b3c485322d3255d8f9408cdf08974f06b784ad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\charity\\www.charity.com\\application\\views\\company\\register.html',
      1 => 1467787644,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2641577cad2cd32256_25170565',
  'variables' => 
  array (
    'baseInfo' => 0,
    'persionInfo' => 0,
    'proveInfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_577cad2cd78fa2_06431783',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_577cad2cd78fa2_06431783')) {
function content_577cad2cd78fa2_06431783 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2641577cad2cd32256_25170565';
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />
    <title>机构注册</title>
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
        <div class="return"><a href="/company/index"><img src="/public/images/skin/return.png"></a></div>
        <div class="title">机构注册</div>
    </div>
</div>

<div class="raise_wrapper">
    <div class="pe-spacer size10"></div>
    <input type="hidden" name="baseInfo" id="baseInfo" value="<?php echo $_smarty_tpl->tpl_vars['baseInfo']->value;?>
">
    <input type="hidden" name="persionInfo" id="persionInfo" value="<?php echo $_smarty_tpl->tpl_vars['persionInfo']->value;?>
">
    <input type="hidden" name="proveInfo" id=$proveInfo" value="<?php echo $_smarty_tpl->tpl_vars['proveInfo']->value;?>
">
    <div class="fit_content">
        <div class="outfit_item">
            <a href="/company/base">
                <h2>机构信息<?php if ($_smarty_tpl->tpl_vars['baseInfo']->value) {?><span class="color_orange">（已填写）</span><?php } else { ?>（未填写）<?php }?></h2>
                <p>已填写基本信息</p>
                <div class="fit_icon_right"><span class="icon icon-angle-right"></span></div>
            </a>
        </div>
        <div class="outfit_item">
            <a href="/company/persionInfo">
                <h2>登记人信息<?php if ($_smarty_tpl->tpl_vars['persionInfo']->value) {?><span class="color_orange">（已填写）</span><?php } else { ?>（未填写）<?php }?></h2>
                <p>需要填写登记人基本信息</p>
                <div class="fit_icon_right"><span class="icon icon-angle-right"></span></div>
            </a>
        </div>
        <div class="outfit_item">
            <a href="/company/prove">
                <h2>证明材料<?php if ($_smarty_tpl->tpl_vars['proveInfo']->value) {?><span class="color_orange">（已填写）</span><?php } else { ?>（未填写）<?php }?></h2>
                <p>需要提供机构证明材料</p>
                <div class="fit_icon_right"><span class="icon icon-angle-right"></span></div>
            </a>
        </div>
    </div>
    <div class="pe-spacer size40"></div>
    <div class="raise_content">
        <!---icon-ok-sign-->
        <div class="rais_bottom">
            <div class="pe-spacer size20"></div>
            <a href="#" class="raise_icon"><span class="icon icon-ok-circle"></span></a>
            已阅读并同意《<span class="color_orange">平台善筹发起条款</span>》
        </div>
        <div class="pe-spacer size20"></div>
        <!---未选中状态 去掉 btn-large-->
        <div class="fit_btn"><button type="button" id="registerBtn" class="btn">注册</button></div>
        <div class="pe-spacer size40"></div>
    </div>
</div>
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
    <h2 class="jump_bottom"><span class="color_orange" id="know">我知道了</span></h2>
</div>
<div class="jump_bg hide"></div>
</body>
<!--滚动条-->
<?php echo '<script'; ?>
 type="text/javascript" src="/public/js/jquery-1.2.6.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/public/js/jquery.jslider_line.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
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

        $('#know').click(function(){
            $('#registerBtn').addClass('btn-large');
        })

        $('#registerBtn').click(function(){
            if(!$(this).hasClass('btn-large')){
                alert('请同意平台善筹发起条款');return;
            }

            var baseInfo = $('#baseInfo').val();
            var persionInfo = $('#persionInfo').val();
            var proveInfo = $('#proveInfo').val();
            if(baseInfo == ''){
                alert('请填写基本信息');
                return false;
            }

            if(persionInfo == ''){
                alert('请填写登记人信息');
                return false;
            }

            if(proveInfo == ''){
                alert('请填写证明资料');
                return false;
            }

            $.post('/ajax/company/save',{}, function(data){
                if(data.status == 'y'){
                    location.href = '/company/success?password=' + data.info.password+'&account='+data.info.account;
                }else{
                    alert(data.info);
                }
            }, 'json')
        })
    })
<?php echo '</script'; ?>
>
</html><?php }
}
?>