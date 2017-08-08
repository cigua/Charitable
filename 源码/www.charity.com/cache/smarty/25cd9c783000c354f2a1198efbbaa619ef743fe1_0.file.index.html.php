<?php /* Smarty version 3.1.27, created on 2016-08-08 09:37:26
         compiled from "C:\xampp\htdocs\charity\www.charity.com\application\views\donation\index.html" */ ?>
<?php
/*%%SmartyHeaderCode:2568357a7e256e9f118_75304916%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25cd9c783000c354f2a1198efbbaa619ef743fe1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\charity\\www.charity.com\\application\\views\\donation\\index.html',
      1 => 1470620216,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2568357a7e256e9f118_75304916',
  'variables' => 
  array (
    'companyInfo' => 0,
    'data' => 0,
    'vo' => 0,
    'v' => 0,
    'signPackage' => 0,
    'shareConfig' => 0,
    'pageSize' => 0,
    'total' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57a7e256f21ae8_93567108',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57a7e256f21ae8_93567108')) {
function content_57a7e256f21ae8_93567108 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2568357a7e256e9f118_75304916';
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="author" content="" />
<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />
<title>本市慈善</title>
<link type="text/css" rel="stylesheet" href="/public/css/skin.css" />
<link type="text/css" rel="stylesheet" href="/public/css/style.css" />
    <link type="text/css" rel="stylesheet" href="/public/js/dropload/dropload.css" />
<link type="text/css" rel="stylesheet" href="/public/css/f-awesome/font-awesome.min.css" />
</head>
<body>
<div class="bodies_header clearafter">
    <a href="/pay/order/?event=company&id=<?php echo $_smarty_tpl->tpl_vars['companyInfo']->value['c_id'];?>
" class="bodies_left">机构首页</a>
    <a href="/donation/index?id=<?php echo $_smarty_tpl->tpl_vars['companyInfo']->value['c_id'];?>
" class="bodies_center on">本市慈善</a>
    <a href="/news/index?id=<?php echo $_smarty_tpl->tpl_vars['companyInfo']->value['c_id'];?>
" class="bodies_right">机构动态</a>
</div>
<div id="list">
<div class="bod_wrapper" id="donation_list">
    <?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
    <?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['vo']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->value) {
$_smarty_tpl->tpl_vars['vo']->_loop = true;
$foreach_vo_Sav = $_smarty_tpl->tpl_vars['vo'];
?>
    <a href="/pay/order/?event=charity&id=<?php echo $_smarty_tpl->tpl_vars['vo']->value['d_id'];?>
">
    <div class="bod_center">
        <div class="bod_header"><img src="<?php echo $_smarty_tpl->tpl_vars['vo']->value['m_avatar'];?>
">
            <h2><?php echo $_smarty_tpl->tpl_vars['vo']->value['m_name'];?>
<span><?php echo $_smarty_tpl->tpl_vars['vo']->value['d_addTime'];?>
发布</span></h2>
        </div>
        <div class="banner_img"><img src="<?php echo $_smarty_tpl->tpl_vars['vo']->value['d_img'];?>
"></div>
        <div class="bod_content">
            <h2><?php echo $_smarty_tpl->tpl_vars['vo']->value['d_title'];
if ($_smarty_tpl->tpl_vars['vo']->value['d_status'] == 2) {?>(<font color="red">未审核</font>)<?php }?></h2>
            <p class="brief_text">简介：<?php echo $_smarty_tpl->tpl_vars['vo']->value['d_content'];?>
</p>
            <div class="bod_like clearafter">
                <div class="like_left">
                    <ul class="clearafter">
                        <?php if ($_smarty_tpl->tpl_vars['vo']->value['members']) {?>
                            <?php
$_from = $_smarty_tpl->tpl_vars['vo']->value['members'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$foreach_v_Sav = $_smarty_tpl->tpl_vars['v'];
?>
                                <li><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['m_avatar'];?>
"></li>
                            <?php
$_smarty_tpl->tpl_vars['v'] = $foreach_v_Sav;
}
?>
                        <?php }?>

                    </ul>
                </div>
                <div class="like_right"><span class="list_color"><?php echo $_smarty_tpl->tpl_vars['vo']->value['d_up'];?>
</span>人支持</div>
            </div>
            <div class="like_much clearafter">
                <div class="much_left"><span>目标</span><?php echo $_smarty_tpl->tpl_vars['vo']->value['d_target'];?>
元</div>
                <div class="much_center"><span>已筹</span><?php echo $_smarty_tpl->tpl_vars['vo']->value['d_collect'];?>
元</div>
                <div class="much_right"><span>剩余</span><?php echo $_smarty_tpl->tpl_vars['vo']->value['leftDay'];?>
天</div>
            </div>
        </div>
    </div>
        </a>
    <?php
$_smarty_tpl->tpl_vars['vo'] = $foreach_vo_Sav;
}
?>
	<?php } else { ?>
		<h2 style="text-align:center;">暂无发布</h2>
    <?php }?>

</div>

</div>
  <div class="pe-spacer size60"></div>
<div class="wx_menu clearafter">
    <div class="menu_left">
        <a href="/member/index">
            <img src="<?php echo @constant('M_AVATAR');?>
">
            <div class="menu_info">
                <p><?php echo @constant('M_NAME');?>
</p><p class="color_blue">个人中心</p></div>
        </a>
    </div>
    <div class="menu_right"><a href='/donation/publish?id=<?php echo $_smarty_tpl->tpl_vars['companyInfo']->value['c_id'];?>
'>发布慈善</a></div>
</div>
</div>

</body>
<?php echo '<script'; ?>
 type="text/javascript" src="/public/js/jquery-2.1.4.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/public/js/jquery.flexslider-min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/public/js/dropload/dropload.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"><?php echo '</script'; ?>
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
/donation/index/id/<?php echo $_smarty_tpl->tpl_vars['companyInfo']->value['c_id'];?>
";
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
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
    }

    $(function () {
        $('#home_slider').flexslider({
            animation : 'slide',
            controlNav : true,
            directionNav : true,
            animationLoop : true,
            slideshow : false,
            useCSS : false
        });
									
    });

    var pageSize= parseInt('<?php echo $_smarty_tpl->tpl_vars['pageSize']->value;?>
');
    var total = parseInt('<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
');

    $(function(){
        var page = 2;
        if(total >= pageSize) {
            $("#list").dropload({
                domDown : {
                    domClass   : 'dropload-down',
                    domRefresh : '<div class="dropload-refresh">↑上拉加载更多</div>',
                    domLoad    : '<div class="dropload-load"><span class="loading"></span>加载中...</div>',
                    domNoData  : '<div class="dropload-noData">没有啦╮(╯_╰)╭</div>'
                },
                scrollArea : window,
                loadDownFn : function(me){
                    $.ajax({
                        type: 'GET',
                        url : "/donation/index?id=<?php echo $_smarty_tpl->tpl_vars['companyInfo']->value['c_id'];?>
&page=" + page + '&type=load',
                        dataType: 'html',
                        success: function(data){
                            if(data) {
                                //赋值数据
                                $("#donation_list").append(data);
                                page++;
                            } else {
                                // 锁定
                                me.lock();
                                // 无数据
                                me.noData();
                                //$('.dropload-noData').hide();
                            }
                            // 每次数据加载完，必须重置
                            me.resetload();
                        },
                        error: function(xhr, type){
                            // 即使加载出错，也得重置
                            me.resetload();
                        }
                    });
                }
            });
        }

    });




<?php echo '</script'; ?>
>
</html><?php }
}
?>