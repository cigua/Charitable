<?php /* Smarty version 3.1.27, created on 2016-08-01 20:39:23
         compiled from "C:\xampp\htdocs\charity\www.charity.com\application\views\company\index.html" */ ?>
<?php
/*%%SmartyHeaderCode:3091579f42fbefe4a7_52346546%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'abea58a8fcb91d5e7585d13fd88ca3921a57e827' => 
    array (
      0 => 'C:\\xampp\\htdocs\\charity\\www.charity.com\\application\\views\\company\\index.html',
      1 => 1470055097,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3091579f42fbefe4a7_52346546',
  'variables' => 
  array (
    'companyInfo' => 0,
    'companyImgs' => 0,
    'vo' => 0,
    'contributeList' => 0,
    'productList' => 0,
    'signPackage' => 0,
    'shareConfig' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_579f42fc0565c2_00071640',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_579f42fc0565c2_00071640')) {
function content_579f42fc0565c2_00071640 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3091579f42fbefe4a7_52346546';
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<meta name="author" content="" />
<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />
<title><?php echo $_smarty_tpl->tpl_vars['companyInfo']->value['c_name'];?>
</title>
<link type="text/css" rel="stylesheet" href="/public/css/skin.css" />
<link type="text/css" rel="stylesheet" href="/public/css/style.css" />
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
<div class="bodies_header clearafter"> <a href="/pay/order/?event=company&id=<?php echo $_smarty_tpl->tpl_vars['companyInfo']->value['c_id'];?>
" class="bodies_left on">机构首页</a> <a href="/donation/index?id=<?php echo $_smarty_tpl->tpl_vars['companyInfo']->value['c_id'];?>
" class="bodies_center">本市慈善</a> <a href="/news/index?id=<?php echo $_smarty_tpl->tpl_vars['companyInfo']->value['c_id'];?>
" class="bodies_right">机构动态</a> </div>
<div class="bodies_banner">
    <div class="block_home_slider">
        <div id="home_slider" class="flexslider">
            <ul class="slides">
                <?php if ($_smarty_tpl->tpl_vars['companyImgs']->value) {?>
                    <?php
$_from = $_smarty_tpl->tpl_vars['companyImgs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['vo']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->value) {
$_smarty_tpl->tpl_vars['vo']->_loop = true;
$foreach_vo_Sav = $_smarty_tpl->tpl_vars['vo'];
?>
                     <li>
                         <div class="slide"> <img src="<?php echo $_smarty_tpl->tpl_vars['vo']->value['ci_img'];?>
" alt="" />
                             <div class="caption">
                                 <p class="title"><?php echo $_smarty_tpl->tpl_vars['companyInfo']->value['c_name'];
if ($_smarty_tpl->tpl_vars['companyInfo']->value['c_check_status'] == 1) {?><span class="slide_on"><img src="/public/images/skin/banner_icon.png">已认证</span><?php }?></p>
                             </div>
                         </div>
                     </li>
                     <?php
$_smarty_tpl->tpl_vars['vo'] = $foreach_vo_Sav;
}
?>
                <?php }?>

            </ul>
    </div>
  </div>
</div>
<div class="bodies_content">
  <div class="bodies_title">
    <h2>机构简介</h2>
  </div>
  <div class="bodies_list">
    <p>成立时间：<?php echo $_smarty_tpl->tpl_vars['companyInfo']->value['c_createTime'];?>
</p>
    <div class="in_line"></div>
    <p>地理位置：<?php echo $_smarty_tpl->tpl_vars['companyInfo']->value['c_prov'];?>
省<?php echo $_smarty_tpl->tpl_vars['companyInfo']->value['c_city'];?>
市</p>
    <div class="in_line"></div>
    <p>机构特色：<?php echo $_smarty_tpl->tpl_vars['companyInfo']->value['c_des'];?>
</p>
  </div>
  <div class="bodies_title">
    <h2>捐助箱</h2>
  </div>
  <!--捐款金额-->
	<div class="money_bg hide"></div>
	<div class="money_much hide"><input type="text" id="charity_price" name="charity_price" placeholder="请输入捐款金额"/>
	<button type="submit" id="helpCharity">确认支付</button></div>
  <div class="mar_body clearafter">
      <marquee direction="up" height="200" class="mar_left marquee" onmouseout="this.start()" onmouseover="this.stop()" scrollAmount="2" scrollDelay="5" style=" -moz-binding:none;">
      <ul>
      <?php if ($_smarty_tpl->tpl_vars['contributeList']->value) {?>
          <?php
$_from = $_smarty_tpl->tpl_vars['contributeList']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['vo']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->value) {
$_smarty_tpl->tpl_vars['vo']->_loop = true;
$foreach_vo_Sav = $_smarty_tpl->tpl_vars['vo'];
?>
          <li class="clearfix"> <span class="list_color"><?php echo $_smarty_tpl->tpl_vars['vo']->value['c_name'];?>
</span>捐赠<span class="list_color"><?php if ($_smarty_tpl->tpl_vars['vo']->value['c_type'] == 2) {
echo $_smarty_tpl->tpl_vars['vo']->value['c_content'];
} else { ?>￥<?php echo $_smarty_tpl->tpl_vars['vo']->value['c_price'];
}?></span>感谢!</li>
          <?php
$_smarty_tpl->tpl_vars['vo'] = $foreach_vo_Sav;
}
?>
      <?php }?>
      </ul>
    </marquee>
    <div class="mar_right" id="payBox"><img src="/public/images/skin/modies_box.jpg"></div>
  </div>
  <div class="bodies_title">
    <h2>点击一次图标代表捐赠一次</h2>
  </div>
  <div class="wx_content"> <a href="#">
    <div class="wx_top"><img src="/public/images/skin/wz_01.jpg">
      <!--<h2>医药</h2>-->
      <!--<p>查看详情</p>-->
    </div>
    </a> </div>

   <div class="wx_list clearafter">
      <div class="pe-spacer size30"></div>
          <?php if ($_smarty_tpl->tpl_vars['productList']->value) {?>
                <?php
$_from = $_smarty_tpl->tpl_vars['productList']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['vo']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->value) {
$_smarty_tpl->tpl_vars['vo']->_loop = true;
$foreach_vo_Sav = $_smarty_tpl->tpl_vars['vo'];
?>
                   <div class="wx_item">  <img class="buyProduct" pid="<?php echo $_smarty_tpl->tpl_vars['vo']->value['p_id'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['vo']->value['p_img'];?>
" rel="<?php echo $_smarty_tpl->tpl_vars['vo']->value['p_price'];?>
">
                       <h2><?php echo $_smarty_tpl->tpl_vars['vo']->value['p_title'];?>
</h2>
                       <p><a href="/pay/order/?event=product&id=<?php echo $_smarty_tpl->tpl_vars['vo']->value['p_id'];?>
">查看详情</a> </p>
                   </div>
                <?php
$_smarty_tpl->tpl_vars['vo'] = $foreach_vo_Sav;
}
?>
          <?php }?>

  </div>
  <!--<div class="wx_list clearafter">-->
    <!--<div class="pe-spacer size30"></div>-->
    <!--<div class="wx_item"> <a href="#"> <img src="/public/images/skin/wz_05.jpg">-->
      <!--<h2>食品</h2>-->
      <!--<p>查看详情</p>-->
      <!--</a> </div>-->
    <!--<div class="wx_item"> <a href="#"> <img src="/public/images/skin/wz_06.jpg">-->
      <!--<h2>水</h2>-->
      <!--<p>查看详情</p>-->
      <!--</a> </div>-->
    <!--<div class="wx_item"> <a href="#"> <img src="/public/images/skin/wz_07.jpg">-->
      <!--<h2>住宿</h2>-->
      <!--<p>查看详情</p>-->
      <!--</a> </div>-->
  <!--</div>-->
  <!--<div class="wx_list clearafter">-->
    <!--<div class="pe-spacer size30"></div>-->
    <!--<div class="wx_item"> <a href="#"> <img src="/public/images/skin/wz_08.jpg">-->
      <!--<h2>资金</h2>-->
      <!--<p>查看详情</p>-->
      <!--</a> </div>-->
    <!--<div class="wx_item"> <a href="#"> <img src="/public/images/skin/wz_09.jpg">-->
      <!--<h2>书籍</h2>-->
      <!--<p>查看详情</p>-->
      <!--</a> </div>-->
    <!--<div class="wx_item"> <a href="#"> <img src="/public/images/skin/wz_10.jpg">-->
      <!--<h2>交通</h2>-->
      <!--<p>查看详情</p>-->
      <!--</a> </div>-->
      <!--<div class="pe-spacer size20"></div>-->
  <!--</div>-->
  <div class="wx_bottom">如机构身份有虚假,可联系平台举报,电话,400-800-800</div>
  <div class="pe-spacer size60"></div>
    <?php echo $_smarty_tpl->getSubTemplate ("common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</div>

</body>
<?php echo '<script'; ?>
 type="text/javascript" src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/public/js/jquery-2.1.4.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/public/js/jquery.flexslider-min.js"><?php echo '</script'; ?>
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
/pay/order/?event=company&id=<?php echo $_smarty_tpl->tpl_vars['companyInfo']->value['c_id'];?>
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
										slideshow : true,
										useCSS : false,
										slideshowSpeed:3000
        });

        $('#helpCharity').click(function(){
            var cid = '<?php echo $_smarty_tpl->tpl_vars['companyInfo']->value['c_id'];?>
';
			var price = $('#charity_price').val();
            $.post('/ajax/pay/charity', {type : 1, cid : cid,price:price}, function(data){
				$('.money_bg').addClass('hide');
				$('.money_much').addClass('hide');
			
                if(data.status == 'y'){
                    var jsApiParameters = data.info.param;
                    var orderNo = data.info.orderNo;
                    Pay(jsApiParameters);
                }else{
                    alert(data.info);
                }
            }, 'json')
        })

		$('#payBox').click(function(){
			$('.money_bg').removeClass('hide');
			$('.money_much').removeClass('hide');
		})
		
        $('.buyProduct').click(function(){
            var rel = $(this).attr('rel');
            var pid = $(this).attr('pid');
            var cid = '<?php echo $_smarty_tpl->tpl_vars['companyInfo']->value['c_id'];?>
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
    });


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