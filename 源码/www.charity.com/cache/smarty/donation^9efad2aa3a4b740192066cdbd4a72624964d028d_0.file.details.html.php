<?php /* Smarty version 3.1.27, created on 2016-07-14 22:19:11
         compiled from "C:\xampp\htdocs\charity\www.charity.com\application\views\donation\details.html" */ ?>
<?php
/*%%SmartyHeaderCode:945457879f5fc9eb68_85678720%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9efad2aa3a4b740192066cdbd4a72624964d028d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\charity\\www.charity.com\\application\\views\\donation\\details.html',
      1 => 1468315453,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '945457879f5fc9eb68_85678720',
  'variables' => 
  array (
    'memberInfo' => 0,
    'donationInfo' => 0,
    'count' => 0,
    'donationImgList' => 0,
    'vo' => 0,
    'members' => 0,
    'key' => 0,
    'messageList' => 0,
    'pay' => 0,
    'v' => 0,
    'signPackage' => 0,
    'shareConfig' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57879f5fd40336_97715145',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57879f5fd40336_97715145')) {
function content_57879f5fd40336_97715145 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '945457879f5fc9eb68_85678720';
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />
    <title>慈善详情</title>
    <link type="text/css" rel="stylesheet" href="/public/css/skin.css" />
    <link type="text/css" rel="stylesheet" href="/public/css/style.css" />
    <link type="text/css" rel="stylesheet" href="/public/css/weui.min.css" />
    <link type="text/css" rel="stylesheet" href="/public/css/fancybox.css" />
    <link type="text/css" rel="stylesheet" href="/public/css/f-awesome/font-awesome.min.css" />
</head>
<style type="text/css">
    .share_bg{ position: fixed;width:100%;height:100%; background: rgba(0,0,0,.5);top:0;left:0; z-index: 9;}
    .share_home{ position: fixed;width:100%;height:100%;top:30%; font-size: 20vw; text-align: center;color:#fff;z-index:99;}
    h2{color:#fff;}
    .money_bg{ position:fixed;width:100%;height:100%; background: rgba(0,0,0,.5);top:0;left:0; z-index: 999;}
    .money_much{ position: fixed;padding:30px 20px 20px; text-align:center;left:50%;top:50%;width:260px;height:150px;margin:-150px 0 0 -150px; background: #fff;color:#333; z-index: 2999;}
    .money_much input{ width:80%; background: #f5f5f5;padding:10px 5px; text-align: center;}
    .money_much button{ width:80%; background: #c33;color:#fff;margin-top: 30px;height:50px;}
</style>
<body>
<div class="find_nav">
    <div class="header">
        <div class="return"><a href="/"><img src="/public/images/skin/return.png"></a></div>
        <div class="title">慈善详情</div>
    </div>
</div>
<div class="bodies_title">
    <h3>平台已审核该项目,如非真实情况,可举报该项目,归还善款。</h3>
</div>
<div class="modify_wrapper">
    <div class="modify_content">
        <div class="modify_header clearafter"><img src="<?php echo $_smarty_tpl->tpl_vars['memberInfo']->value['m_avatar'];?>
">
            <h2><?php echo $_smarty_tpl->tpl_vars['memberInfo']->value['m_name'];?>
<span><?php echo $_smarty_tpl->tpl_vars['donationInfo']->value['d_addTime'];?>
发布</span> <strong>剩余<span class="list_color"><?php echo $_smarty_tpl->tpl_vars['donationInfo']->value['leftDay'];?>
</span>天</strong></h2>
            <h3><?php echo $_smarty_tpl->tpl_vars['donationInfo']->value['d_title'];
if ($_smarty_tpl->tpl_vars['donationInfo']->value['d_status'] == 2) {?>(<font color="red">未审核</font>)<?php }?></h3>
			            <h3><?php echo $_smarty_tpl->tpl_vars['donationInfo']->value['d_content'];?>
</h3>
        </div>
        <div class="weui_progress_bar  ">
            <div class="weui_progress_inner_bar js_progress" style="width:<?php echo $_smarty_tpl->tpl_vars['donationInfo']->value['percent'];?>
%;"></div>
            <div class="pro_text clearafter">
                <div class="pro_left">
                    <h2><?php echo $_smarty_tpl->tpl_vars['donationInfo']->value['percent'];?>
%</h2>
                    <p>已筹资</p>
                </div>
                <div class="pro_center"><h2>￥<?php echo $_smarty_tpl->tpl_vars['donationInfo']->value['d_collect'];?>
</h2>
                    <p>目标<?php echo $_smarty_tpl->tpl_vars['donationInfo']->value['d_target'];?>
元</p>
                </div>
                <div class="pro_right_in"><h2><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
人</h2>
                    <p>捐助人数</p>
                </div>
            </div>
        </div>
        <div class="pe-spacer size10"></div>
        <div class="modify_img">
            <div class="fancybox_style">
                <ul class="list-unstyled clearafter">
                    <?php if ($_smarty_tpl->tpl_vars['donationImgList']->value) {?>
                        <?php
$_from = $_smarty_tpl->tpl_vars['donationImgList']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['vo']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->value) {
$_smarty_tpl->tpl_vars['vo']->_loop = true;
$foreach_vo_Sav = $_smarty_tpl->tpl_vars['vo'];
?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['vo']->value['di_img'];?>
" title="" class="fancybox" data-fancybox-group="group"><img alt="" src="<?php echo $_smarty_tpl->tpl_vars['vo']->value['di_img'];?>
" /></a></li>
                        <?php
$_smarty_tpl->tpl_vars['vo'] = $foreach_vo_Sav;
}
?>
                    <?php }?>
                </ul>
            </div>
        </div>
    </div>
    <div class="pe-spacer size10"></div>

    <div class="bodies_title">
        <h2>已提交资料</h2>
    </div>
    <div class="modify_content">
        <div class="modify_info">
            <div class="info_show">
                <h2>受助人：<?php echo $_smarty_tpl->tpl_vars['donationInfo']->value['d_target_name'];?>
</h2>
                <p><span class="slide_on"><img src="/public/images/skin/banner_icon.png">身份证已提交</span><span class="slide_on"><img src="/public/images/skin/banner_icon.png">医疗证明已提交</span></p>
            </div>
</div>
    </div>
    <div class="pe-spacer size10"></div>
    <div class="bodies_title">
        <h2>有<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
位爱心人事了解项目 <span class="title_right">我要证实</span></h2>
    </div>
    <div class="bodies_around">
        <ul class="clearafter">
            <!--点击显示down图标--->
            <?php if ($_smarty_tpl->tpl_vars['members']->value) {?>
            <?php
$_from = $_smarty_tpl->tpl_vars['members']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['vo']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['vo']->value) {
$_smarty_tpl->tpl_vars['vo']->_loop = true;
$foreach_vo_Sav = $_smarty_tpl->tpl_vars['vo'];
?>
            <?php if ($_smarty_tpl->tpl_vars['key']->value == 0) {?>
            <li><div class="around_down"></div><img src="<?php echo $_smarty_tpl->tpl_vars['vo']->value['m_avatar'];?>
"></li>
            <?php } else { ?>
            <li><img src="<?php echo $_smarty_tpl->tpl_vars['vo']->value['m_avatar'];?>
"></li>
            <?php }?>
            <?php
$_smarty_tpl->tpl_vars['vo'] = $foreach_vo_Sav;
}
?>
            <li class="around_font"><img src="/public/images/skin/message_font.jpg"></li>
            <li class="around_icon"><a href="#"><span class="icon icon-arrow-right"></span></a></li>
            <?php }?>

        </ul>
        <div class="around_test"></div>
    </div>
    <div class="pe-spacer size10"></div>
    <div class="bodies_title">
        <h2>支持记录</h2>
    </div>
    <div class="bodie_message">
        <ul class="clearafter">
            <?php if ($_smarty_tpl->tpl_vars['messageList']->value) {?>
                <?php
$_from = $_smarty_tpl->tpl_vars['messageList']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['vo']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->value) {
$_smarty_tpl->tpl_vars['vo']->_loop = true;
$foreach_vo_Sav = $_smarty_tpl->tpl_vars['vo'];
?>
                    <li><img src="<?php echo $_smarty_tpl->tpl_vars['vo']->value['m_avatar'];?>
">
                        <div class="message_content">
                            <?php if ($_smarty_tpl->tpl_vars['pay']->value == 1) {?>
                            <a href="javascript:void(0);" class="message_icon"></a>
                            <?php }?>
                            <h2><?php echo $_smarty_tpl->tpl_vars['vo']->value['m_name'];?>
&nbsp;<span class="list_color">支持了<?php echo $_smarty_tpl->tpl_vars['vo']->value['me_price'];?>
元</span></h2>
                            <h3><?php echo $_smarty_tpl->tpl_vars['vo']->value['me_addTime'];?>
</h3>
                            <p><?php echo $_smarty_tpl->tpl_vars['vo']->value['me_content'];?>
</p>
                            <div class="message_send">
                                <div class="message_arrow" id="sonMeg_<?php echo $_smarty_tpl->tpl_vars['vo']->value['me_id'];?>
"></div>
                                <?php if ($_smarty_tpl->tpl_vars['vo']->value['sonList']) {?>
                                    <?php
$_from = $_smarty_tpl->tpl_vars['vo']->value['sonList'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
                                     <p class="send_test"><span class="color_blue"><?php echo $_smarty_tpl->tpl_vars['v']->value['me_name'];?>
</span>:<?php echo $_smarty_tpl->tpl_vars['v']->value['me_content'];?>
</p>

                                    <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
                                <?php }?>
                            </div>
                            <?php if ($_smarty_tpl->tpl_vars['pay']->value == 1) {?>
                            <div class="message_input clearafter"><input type="text" name="message" id="message_<?php echo $_smarty_tpl->tpl_vars['vo']->value['me_id'];?>
" placeholder="请输入评论"/><button type="button" class="replyBtn" rel="<?php echo $_smarty_tpl->tpl_vars['vo']->value['me_id'];?>
">提交</button></div>
                            <?php }?>
                        </div>
                    </li>

                <?php
$_smarty_tpl->tpl_vars['vo'] = $foreach_vo_Sav;
}
?>
            <?php }?>

        </ul>
    </div>
    <div class="pe-spacer size20"></div>
</div>
<div class="pe-spacer size40"></div>
<footer class="qsc-bar bar-fixed bar-support">
<span class="bar-item" id="btn-follow">
<i class="icon icon-heart-empty"></i>关注
<small><?php echo $_smarty_tpl->tpl_vars['donationInfo']->value['d_up'];?>
</small>
</span>
    <?php if ($_smarty_tpl->tpl_vars['donationInfo']->value['m_id'] == @constant('M_ID')) {?>
    <a href="javascript:void(0);" class="bar-item btn-support showManage"><span>项目管理</span></a>

    <?php } else { ?>
    <a href="javascript:void(0);"  rel="" class="bar-item btn-support money_btn"><span>帮助TA</span></a>
    <?php }?>

    <span data-toggle="modal" id="share" data-target="#project-share" class="bar-item"><i class="icon icon-share"></i>分享
<small>
</small>
</span>
</footer>

<div class="share_bg hide"></div>
<div class="share_home hide">
    <h2>点击右上角更多，分享本项目</h2>
</div>
<!---弹窗--->
<!---隐藏添加hide-->
<div class="jump_bg hide" ></div>
<div class="jump_content hide" >
    <ul class="clearafter">
        <li>
            <a href="/donation/up?id=<?php echo $_smarty_tpl->tpl_vars['donationInfo']->value['d_id'];?>
">
                <img src="/public/images/skin/jump_icon01.jpg">
                <h2>支持记录</h2>
            </a>
        </li>
        <li>
            <a href="javascript:void(0);" id="getCashs">
                <img src="/public/images/skin/jump_icon02.jpg">
                <h2>金额提现</h2>
            </a>
        </li>
        <li>
            <a href="javascript:void(0);" class="jump_end">
                <img src="/public/images/skin/jump_icon03.jpg">
                <h2>提前结束</h2>
            </a>
        </li>
        <li>
            <a href="javascript:void(0);" class="jump_move">
                <img src="/public/images/skin/jump_icon04.jpg">
                <h2>删除项目</h2>
            </a>
        </li>
    </ul>
    <div class="jump_bottom"><a href="">取消</a></div>
</div>
<!--捐款金额-->
<div class="money_bg hide"></div>
<div class="money_much hide"><input type="text" id="charity_price" name="charity_price" placeholder="请输入捐款金额"/>
<button type="submit" id="helpCharity">确认支付</button></div>
<!---提前结束弹窗-->
<div class="jump_over hide">
    <h2>确认提前结束</h2>
    <p>项目提前结束后讲无法继续获得帮助,您确定要提前结束吗？</p>
    <div class="over_link clearafter">
        <a href="javascript:void(0);" class="link_close">取消</a>
        <a href="javascript:void(0);" class="link_yes color_orange">确定</a>
    </div>
</div>
<!---删除弹窗-->
<div class="jump_delete hide">
    <h2>确认删除项目？</h2>
    <p>项目提前结束后讲无法继续获得帮助,您确定要删除项目吗？</p>
    <div class="delete_link clearafter">
        <a href="javascript:void(0);" class="delete_close">取消</a>
        <a href="javascript:void(0);" class="delete_yes color_orange">确定</a>
    </div>
</div>
</body>
<?php echo '<script'; ?>
 type="text/javascript" src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/public/js/jquery-2.1.4.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/public/js/jquery.fancybox.min.js"><?php echo '</script'; ?>
>
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
/pay/order/?event=charity&id=<?php echo $_smarty_tpl->tpl_vars['donationInfo']->value['d_id'];?>
";
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    //For Fancy Lightbox:
    jQuery(document).ready(function($) {
	
		$(".fancybox").fancybox({
            openEffect:'elastic',closeEffect:'fade',nextEffect:'fade', prevEffect:'fade'
        });
		
		$('.money_bg').click(function(){
			$('.money_bg,.money_much').hide();
		})
	
        $('#share').click(function(){
            $('.share_bg').removeClass('hide');
            $('.share_home').removeClass('hide');
        })

        $('.share_home').click(function(){
            $('.share_bg').addClass('hide');
            $('.share_home').addClass('hide');
        })

        $('.money_btn').click(function(){
            $('.money_bg, .money_much').show();
        })

        $('.jump_end').click(function(){
            $('.jump_over').removeClass('hide');
        })

        $('.link_close').click(function(){
            $('.jump_over').addClass('hide');
        })

        $('.jump_move').click(function(){
            $('.jump_delete').removeClass('hide');
        })

        $('.delete_close').click(function(){
            $('.jump_delete').addClass('hide');
        })

        $('.link_yes').click(function(){
            var d_id = '<?php echo $_smarty_tpl->tpl_vars['donationInfo']->value['d_id'];?>
';
            $.post('/ajax/donation/close',{d_id : d_id}, function(data){
                if(data.status == 'y'){
                    alert(data.info);
                }else{
                    alert(data.info);
                }
            }, 'json')
        })

        $('.delete_yes').click(function(){
            var d_id = '<?php echo $_smarty_tpl->tpl_vars['donationInfo']->value['d_id'];?>
';
            $.post('/ajax/donation/delete',{d_id : d_id}, function(data){
                if(data.status == 'y'){
                    alert(data.info);
                }else{
                    alert(data.info);
                }
            }, 'json')
        })

        $('#getCashs').click(function(){
            var d_id = '<?php echo $_smarty_tpl->tpl_vars['donationInfo']->value['d_id'];?>
';
            $.post('/ajax/donation/cashs',{d_id : d_id}, function(data){
                if(data.status == 'y'){
                    alert(data.info);
                }else{
                    alert(data.info);
                }
            }, 'json')
        })

        $('.showManage').click(function(){
            $('.jump_bg').removeClass('hide');
            $('.jump_content').removeClass('hide');
        })

        $('.replyBtn').click(function(){
            var rel = $(this).attr('rel');
            var d_id = '<?php echo $_smarty_tpl->tpl_vars['donationInfo']->value['d_id'];?>
';
            var msg = $('#message_' + rel).val();
            var name = '<?php echo @constant('M_NAME');?>
';
            $.post('/ajax/donation/reply',{d_id : d_id,me_id:rel,msg:msg}, function(data){
                if(data.status == 'y'){
                    var html= '<p class="send_test"><span class="color_blue">'+name+'</span>:'+msg+'</p>';
                    $('#sonMeg_'+rel).append(html);
                }else{
                    alert(data.info);
                }
            }, 'json')
        })

        $(".fancybox").fancybox({
            openEffect:'elastic',closeEffect:'fade',nextEffect:'fade', prevEffect:'fade'
        });

        $('#helpCharity').click(function(){
            var rel = $(this).attr('rel');
            var did = '<?php echo $_smarty_tpl->tpl_vars['donationInfo']->value['d_id'];?>
';
            var cid = '<?php echo $_smarty_tpl->tpl_vars['donationInfo']->value['c_id'];?>
';
            var charity_price = $('#charity_price').val();
            $.post('/ajax/pay/charity', {type : 3, cid : cid,did : did, price: charity_price}, function(data){
                if(data.status == 'y'){
                    var jsApiParameters = data.info.param;
                    var orderNo = data.info.orderNo;
                    Pay(jsApiParameters);
                }else{
                    alert(data.info);
                }
            }, 'json')
        })
    });

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
        $.ajax({
            type:'GET',
            url : "/ajax/donation/share?pid=" + pid + '&tid=' + tid,
            dataType: 'json',
            success: function(data){},
            error: function(){
                $.alert('数据错误');
            }
        })
    }


    function Pay(Parameters){
        WeixinJSBridge.invoke(
                'getBrandWCPayRequest', {
                    "appId":Parameters.appId, //公众号名称，由商户传入
                    "timeStamp":Parameters.timeStamp, //时间戳，自 1970 年以来的秒数
                    "nonceStr":Parameters.nonceStr, //随机串
                    "package":Parameters.package,
                    "signType": "MD5", //微信签名方式：
                    "paySign":Parameters.paySign //微信签名
                },
                function(res){
                    if(res.err_msg == "get_brand_wcpay_request:ok" ) {
                        alert('捐款成功');
                    }

                });
    }
<?php echo '</script'; ?>
>
</html><?php }
}
?>