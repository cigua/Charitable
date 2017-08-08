<?php /* Smarty version 3.1.27, created on 2016-07-21 09:23:47
         compiled from "C:\xampp\htdocs\charity\www.charity.com\application\views\news\details.html" */ ?>
<?php
/*%%SmartyHeaderCode:35985790242315de81_61408855%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de1c3470313d7dcbabc324a26788fd87426c132a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\charity\\www.charity.com\\application\\views\\news\\details.html',
      1 => 1469064049,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35985790242315de81_61408855',
  'variables' => 
  array (
    'info' => 0,
    'companyInfo' => 0,
    'signPackage' => 0,
    'shareConfig' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_579024231ada50_92711398',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_579024231ada50_92711398')) {
function content_579024231ada50_92711398 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '35985790242315de81_61408855';
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />
    <title>动态详情</title>
    <link type="text/css" rel="stylesheet" href="/public/css/skin.css" />
    <link type="text/css" rel="stylesheet" href="/public/css/style.css" />
    <link type="text/css" rel="stylesheet" href="/public/css/f-awesome/font-awesome.min.css" />
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
</head>
<style type="text/css">
    .share_bg{ position: fixed;width:100%;height:100%; background: rgba(0,0,0,.5);top:0;left:0; z-index: 9;}
    .share_home{ position: fixed;width:100%;height:100%;top:30%; font-size: 20vw; text-align: center;color:#fff;z-index:99;}
	.share_home h2{ font-size:14px;}
    h2{color:#fff;}
    .money_bg{ position:fixed;width:100%;height:100%; background: rgba(0,0,0,.5);top:0;left:0; z-index: 999;}
    .money_much{ position: fixed;padding:30px 20px 20px; text-align:center;left:50%;top:50%;width:260px;height:150px;margin:-150px 0 0 -150px; background: #fff;color:#333; z-index: 2999;}
    .money_much input{ width:80%; background: #f5f5f5;padding:10px 5px; text-align: center;}
    .money_much button{ width:80%; background: #c33;color:#fff;margin-top: 30px;height:50px;}
</style>
<body style=" background: #f3f3f3;">
<div class="find_nav">
    <div class="header">
        <div class="title">动态详情</div>
    </div>
</div>
<div class="article_body ">
    <h2><?php echo $_smarty_tpl->tpl_vars['info']->value['a_title'];?>
</h2>
    <div class="article_info"><p class="clearafter"><img src="/public/images/skin/article_icon01.jpg"><?php echo $_smarty_tpl->tpl_vars['info']->value['a_addTime'];?>
</p></div>
    <div class="article_info"><p class="clearafter"><img src="/public/images/skin/article_icon02.jpg"><?php echo $_smarty_tpl->tpl_vars['companyInfo']->value['c_name'];?>
</p></div>
    <div class="article_info"><p class="clearafter"><img src="/public/images/skin/article_icon03.jpg"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['info']->value['a_view'])===null||$tmp==='' ? 0 : $tmp);?>
人看过</p></div>
    <div class="article_content">
        <img src="<?php echo $_smarty_tpl->tpl_vars['info']->value['a_img'];?>
">
    </div>
    <div class="pe-spacer size20"></div>
    <div class="article_share"><button type="submit" class="" id="share">分享</button></div>
</div>
</div>


<div class="share_bg hide"></div>
<div class="share_home hide">
    <h2>点击右上角更多，分享本项目</h2>
</div>
<?php echo '<script'; ?>
 type="text/javascript" src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/public/js/jquery-2.1.4.js"><?php echo '</script'; ?>
>
</body>
<?php echo '<script'; ?>
>
    var appId      = '<?php echo $_smarty_tpl->tpl_vars['signPackage']->value['appId'];?>
';var timestamp = '<?php echo $_smarty_tpl->tpl_vars['signPackage']->value['timestamp'];?>
';
    var nonceStr   = '<?php echo $_smarty_tpl->tpl_vars['signPackage']->value['nonceStr'];?>
';var signature = '<?php echo $_smarty_tpl->tpl_vars['signPackage']->value['signature'];?>
';
    var title      = "<?php echo $_smarty_tpl->tpl_vars['shareConfig']->value['s_title'];?>
";
    var main_title = "<?php echo $_smarty_tpl->tpl_vars['shareConfig']->value['s_content'];?>
";
    var imgurl = "<?php echo $_smarty_tpl->tpl_vars['shareConfig']->value['s_img'];?>
";
    var url = "<?php echo @constant('APP_DOMAIN');?>
/news/details/id/<?php echo $_smarty_tpl->tpl_vars['info']->value['a_id'];?>
";
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    //For Fancy Lightbox:
    jQuery(document).ready(function($) {
                $('#share').click(function () {
                    $('.share_bg').removeClass('hide');
                    $('.share_home').removeClass('hide');
                })

                $('.share_home').click(function () {
                    $('.share_bg').addClass('hide');
                    $('.share_home').addClass('hide');
                })
            })

    wx.config({
        appId: appId,
        timestamp:timestamp,
        nonceStr: nonceStr,
        signature: signature,
        jsApiList: [
            'onMenuShareTimeline',
            'onMenuShareAppMessage',
            'onMenuShareQQ'
        ]
    });

    wx.ready(function () {
        wx.onMenuShareTimeline({
            title: main_title,
            desc:  title,
            link:  url,
            imgUrl: imgurl,
            trigger: function (res) {
            },
            success: function (res) {
                getShareBack();
            },
            cancel: function (res) {
            },
            fail: function (res) {
            }
        });

        wx.onMenuShareAppMessage({
            title: main_title,
            desc:  title,
            link: url,
            imgUrl: imgurl,
            trigger: function (res) {
            },
            success: function (res) {
                getShareBack();
            },
            cancel: function (res) {
            },
            fail: function (res) {
            }
        });

        wx.onMenuShareQQ({
            title: main_title,
            desc:  title,
            link:  url ,
            imgUrl: imgurl,
            trigger: function (res) {
            },
            success: function (res) {
                getShareBack();
            },
            cancel: function (res) {
            },
            fail: function (res) {
            }
        });
    });

    //分享回调数据
    function getShareBack(){
        //分享完成 回调数据
//        $.ajax({
//            type:'GET',
//            url : "/ajax/product/share?pid=" + pid + '&tid=' + tid,
//            dataType: 'json',
//            success: function(data){},
//            error: function(){
//                $.alert('数据错误');
//            }
//        })
    }

<?php echo '</script'; ?>
>
</html><?php }
}
?>