<?php /* Smarty version 3.1.27, created on 2016-07-06 15:04:05
         compiled from "C:\xampp\htdocs\charity\www.charity.com\application\views\member\index.html" */ ?>
<?php
/*%%SmartyHeaderCode:15226577cad658b71a5_80083732%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b3aa9049764484f6b4905c0653aff319375f2ae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\charity\\www.charity.com\\application\\views\\member\\index.html',
      1 => 1467786122,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15226577cad658b71a5_80083732',
  'variables' => 
  array (
    'memberInfo' => 0,
    'boxCount' => 0,
    'box' => 0,
    'vo' => 0,
    'thingCount' => 0,
    'thing' => 0,
    'fundCount' => 0,
    'fund' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_577cad6591bdd5_08190233',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_577cad6591bdd5_08190233')) {
function content_577cad6591bdd5_08190233 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '15226577cad658b71a5_80083732';
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />
    <title>个人中心</title>
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
        <div class="title">会员中心</div>
    </div>
</div>
<div class="ce-wrapper">
    <div class="personal">
        <div class="head">
            <div class="img"> <img src="<?php echo @constant('M_AVATAR');?>
">

            </div>
            <h4><?php echo @constant('M_NAME');?>
</h4>
            <!--      <div class="address">会员等级：超级vip<i></i></div>-->
        </div>
    </div>
    <div class="sall_item">
        <ul class="clearafter">
            <li><a href="/donation/index?mid=1"><?php echo $_smarty_tpl->tpl_vars['memberInfo']->value['m_publish'];?>

                <p>我的发布</p>
            </a> </li>
            <li><a href="javascript:void(0);"><?php echo $_smarty_tpl->tpl_vars['memberInfo']->value['m_focus'];?>

                <p>我的关注</p>
            </a> </li>
        </ul>
    </div>
    <div class="center_list">
        <ul class="clear">
            <li><a href="#">
                <p>我的分享值<span class="list_orange">每次分享被阅读增加1善缘</span></p>
                <!--灰色字加list_gray  默认红色字-->
                <div class="list_text list_gray"><span class="list_color"><?php echo $_smarty_tpl->tpl_vars['memberInfo']->value['m_share'];?>
</span>善缘</div>
            </a></li>
            <li><a href="javascript:void(0);" id="jz_click">
                <p>捐赠箱捐赠记录</p>
                <!--灰色字加list_gray  默认红色字-->
                <div class="list_text list_gray">共<span class="list_color"><?php echo $_smarty_tpl->tpl_vars['boxCount']->value;?>
</span>次</div>
            </a>
                <div class="jz_content hide" >
                    <ul class="clearafter">
                        <?php if ($_smarty_tpl->tpl_vars['box']->value) {?>
                            <?php
$_from = $_smarty_tpl->tpl_vars['box']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['vo']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->value) {
$_smarty_tpl->tpl_vars['vo']->_loop = true;
$foreach_vo_Sav = $_smarty_tpl->tpl_vars['vo'];
?>
                                <li><span class="list_color"><?php echo $_smarty_tpl->tpl_vars['vo']->value['c_name'];?>
</span>捐赠<span class="list_color">￥<?php echo $_smarty_tpl->tpl_vars['vo']->value['c_price'];?>
</span>感谢！
                                    <div class="list_jz list_gray"><?php echo $_smarty_tpl->tpl_vars['vo']->value['c_addtime'];?>
</div>
                                </li>
                            <?php
$_smarty_tpl->tpl_vars['vo'] = $foreach_vo_Sav;
}
?>
                        <?php }?>

                    </ul>
                    <a href="/member/more?t=1" class="jz_btn">点击查看更多</a> </div>
            </li>
            <li><a href="javascript:void(0);" id="wz_click">
                <p>物资捐赠记录</p>
                <!--灰色字加list_gray  默认红色字-->
                <div class="list_text list_gray">共<span class="list_color"><?php echo $_smarty_tpl->tpl_vars['thingCount']->value;?>
</span>次</div>
            </a>
                <div class="wz_content hide" >
                    <ul class="clearafter">
                        <?php if ($_smarty_tpl->tpl_vars['thing']->value) {?>
                        <?php
$_from = $_smarty_tpl->tpl_vars['thing']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['vo']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->value) {
$_smarty_tpl->tpl_vars['vo']->_loop = true;
$foreach_vo_Sav = $_smarty_tpl->tpl_vars['vo'];
?>
                        <li><span class="list_color"><?php echo $_smarty_tpl->tpl_vars['vo']->value['c_name'];?>
</span>捐赠<span class="list_color">￥<?php echo $_smarty_tpl->tpl_vars['vo']->value['c_price'];?>
</span>感谢！
                            <div class="list_jz list_gray"><?php echo $_smarty_tpl->tpl_vars['vo']->value['c_addtime'];?>
</div>
                        </li>
                        <?php
$_smarty_tpl->tpl_vars['vo'] = $foreach_vo_Sav;
}
?>
                        <?php }?>
                    </ul>
                    <a href="/member/more?t=2" class="wz_btn">点击查看更多</a> </div>
            </li>
            <li><a href="javascript:void(0);" id="sc_click">
                <p>善筹捐助记录</p>
                <!--灰色字加list_gray  默认红色字-->
                <div class="list_text list_gray">共<span class="list_color"><?php echo $_smarty_tpl->tpl_vars['fundCount']->value;?>
</span>次</div>
            </a>
                <div class="sc_content hide" >
                    <ul class="clearafter">
                        <?php if ($_smarty_tpl->tpl_vars['fund']->value) {?>
                        <?php
$_from = $_smarty_tpl->tpl_vars['fund']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['vo']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->value) {
$_smarty_tpl->tpl_vars['vo']->_loop = true;
$foreach_vo_Sav = $_smarty_tpl->tpl_vars['vo'];
?>
                        <li><span class="list_color"><?php echo $_smarty_tpl->tpl_vars['vo']->value['c_name'];?>
</span>捐赠<span class="list_color">￥<?php echo $_smarty_tpl->tpl_vars['vo']->value['c_price'];?>
</span>感谢！
                            <div class="list_jz list_gray"><?php echo $_smarty_tpl->tpl_vars['vo']->value['c_addtime'];?>
</div>
                        </li>
                        <?php
$_smarty_tpl->tpl_vars['vo'] = $foreach_vo_Sav;
}
?>
                        <?php }?>
                    </ul>
                    <a href="/member/more?t=3" class="sc_btn">点击查看更多</a> </div>
            </li>
        </ul>
        <div class="pe-spacer size20"></div>
        <div class="value_detail clearafter"><a type="button" onclick="javascript:window.location.href='/member/logout'" class="value_link">退出登录</a></div>
        <div class="pe-spacer size20"></div>
        <div class="pe-spacer size20"></div>
    </div>
</div>
</body>
<?php echo '<script'; ?>
>
    $("#jz_click").click(function(){
        $(".jz_content").toggle();
    });
    $("#wz_click").click(function(){
        $(".wz_content").toggle();
    });
    $("#sc_click").click(function(){
        $(".sc_content").toggle();
    });
<?php echo '</script'; ?>
>
</html><?php }
}
?>