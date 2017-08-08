<?php /* Smarty version 3.1.27, created on 2016-08-08 09:35:02
         compiled from "C:\xampp\htdocs\charity\www.charity.com\application\views\company\product.html" */ ?>
<?php
/*%%SmartyHeaderCode:2771457a7e1c64c2953_28701152%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8341c1069cadf792b87b30910383ce17eb7ce5ee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\charity\\www.charity.com\\application\\views\\company\\product.html',
      1 => 1470620063,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2771457a7e1c64c2953_28701152',
  'variables' => 
  array (
    'productInfo' => 0,
    'signPackage' => 0,
    'shareConfig' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57a7e1c6511654_43498556',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57a7e1c6511654_43498556')) {
function content_57a7e1c6511654_43498556 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2771457a7e1c64c2953_28701152';
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />
    <title>商品详情</title>
    <link type="text/css" rel="stylesheet" href="/public/css/skin.css" />
    <link type="text/css" rel="stylesheet" href="/public/css/style.css" />
    <link type="text/css" rel="stylesheet" href="/public/css/f-awesome/font-awesome.min.css" />
</head>
<body>
<div class="find_nav">
    <div class="header">
        <div class="return"><a href="/"><img src="/public/images/skin/return.png"></a></div>
        <div class="title">商品详情</div>
    </div>
</div>
<div class="bodies_details">
    <img src="<?php echo $_smarty_tpl->tpl_vars['productInfo']->value['p_img'];?>
">
    <h2>￥<?php echo $_smarty_tpl->tpl_vars['productInfo']->value['p_price'];?>
</h2>
    <div class="bd_test">
        <p><?php echo $_smarty_tpl->tpl_vars['productInfo']->value['p_title'];?>
</p>
        <a href="javascript:void(0);" class="buyProduct" pid="<?php echo $_smarty_tpl->tpl_vars['productInfo']->value['p_id'];?>
">捐赠</a>
    </div>
    <div class="pe-spacer size20"></div>
</div>
<?php echo '<script'; ?>
 type="text/javascript" src="/public/js/jquery-2.1.4.js"><?php echo '</script'; ?>
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
/pay/order/event/product/id/<?php echo $_smarty_tpl->tpl_vars['productInfo']->value['p_id'];?>
";
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
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

    $('.buyProduct').click(function(){
        var rel = $(this).attr('rel');
        var pid = $(this).attr('pid');
        var cid = '<?php echo $_smarty_tpl->tpl_vars['productInfo']->value['c_id'];?>
';
        $.post('/ajax/pay/charity', {type : 2, cid : cid,pid : pid}, function(data){
            if(data.status == 'y'){
                var jsApiParameters = data.info.param;
                var orderNo = data.info.orderNo;
                Pay(jsApiParameters);
            }else{
                alert(data.info);
            }
        }, 'json')
    })

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
</body>

</html><?php }
}
?>