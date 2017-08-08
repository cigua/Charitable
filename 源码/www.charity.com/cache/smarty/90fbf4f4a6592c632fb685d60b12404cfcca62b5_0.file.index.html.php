<?php /* Smarty version 3.1.27, created on 2016-08-08 09:34:32
         compiled from "C:\xampp\htdocs\charity\www.charity.com\application\views\index\index.html" */ ?>
<?php
/*%%SmartyHeaderCode:1821257a7e1a8ccd722_97016582%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90fbf4f4a6592c632fb685d60b12404cfcca62b5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\charity\\www.charity.com\\application\\views\\index\\index.html',
      1 => 1470620058,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1821257a7e1a8ccd722_97016582',
  'variables' => 
  array (
    'search' => 0,
    'prov_city' => 0,
    'prov' => 0,
    'city' => 0,
    'data' => 0,
    'vo' => 0,
    'signPackage' => 0,
    'shareConfig' => 0,
    'pageSize' => 0,
    'total' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57a7e1a8d3fee7_98535839',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57a7e1a8d3fee7_98535839')) {
function content_57a7e1a8d3fee7_98535839 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1821257a7e1a8ccd722_97016582';
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />
    <title>慈善机构智慧平台</title>
    <link type="text/css" rel="stylesheet" href="/public/css/skin.css" />
    <link type="text/css" rel="stylesheet" href="/public/css/style.css" />
    <link type="text/css" rel="stylesheet" href="/public/css/f-awesome/font-awesome.min.css" />
    <link rel="stylesheet" href="/public/css/weui.min.css">
    <link rel="stylesheet" href="/public/css/jquery-weui.css">
    <link type="text/css" rel="stylesheet" href="/public/js/dropload/dropload.css" />
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
 type="text/javascript" src="/public/js/dropload/dropload.min.js"><?php echo '</script'; ?>
>
</head>
<body style=" background: #f3f3f3;">
<div class="find_nav">
    <div class="header">
        <div class="title">慈善机构名称</div>
    </div>
</div>
<form action="" method="get" id="searchForm">
<div class="search_header">
    <input type="text" name="search" id="search" value="<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
" placeholder="请输入机构名称进行搜索" />
    <input type="hidden" name="city" id="city" value="<?php echo $_smarty_tpl->tpl_vars['prov_city']->value;?>
">
</div>
</form>
<div class="search_wrapper" id="list">
    <div class="weui_cells weui_cells_form search_city">
        <div class="weui_cell">
            <div class="weui_cell_hd" ><label class="weui_label" for="home-city">点击选择城市:</label></div>
            <div class="weui_cell_bd weui_cell_primary">
                <input class="weui_input" id="home-city" type="text" value="<?php if ($_smarty_tpl->tpl_vars['prov']->value) {
echo $_smarty_tpl->tpl_vars['prov']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['city']->value;
} else { ?>全国<?php }?>" placeholder="全国">
            </div>
        </div>
        <!--<span class="city_postion">城市选中 ></span>-->
    </div>
    <ul class="search_item clearafter" id="company_list">
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
                <li class="clearafter">
                    <a href="/pay/order/?event=company&id=<?php echo $_smarty_tpl->tpl_vars['vo']->value['c_id'];?>
">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['vo']->value['c_avatar'];?>
">
                    <div class="search_item_right">
                        <h2><?php echo $_smarty_tpl->tpl_vars['vo']->value['c_name'];
if ($_smarty_tpl->tpl_vars['vo']->value['c_check_status'] == 1) {?><span class="slide_on"><img src="/public/images/skin/banner_icon.png">已认证</span><?php }?></h2>
                        <p><?php echo $_smarty_tpl->tpl_vars['vo']->value['c_des'];?>
</p>
                    </div>
                    </a>
                </li>
            <?php
$_smarty_tpl->tpl_vars['vo'] = $foreach_vo_Sav;
}
?>
        <?php }?>


    </ul>
</div>
<div class="pe-spacer size60"></div>
<?php echo $_smarty_tpl->getSubTemplate ("common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</body>
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
";
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $(document).ready(function(){
        $("#home-city").cityPicker({
            title: "请选择城市",
            showDistrict: false,

        });

        $(document).on('click', '.close-picker',function(){
            $('#city').val($('#home-city').val());
            $('#searchForm').submit();
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
    }

    var pageSize= parseInt('<?php echo $_smarty_tpl->tpl_vars['pageSize']->value;?>
');
    var total = parseInt('<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
');
    var operation = true;
    $(function(){
        var page = 2;
        if(total >= pageSize) {
            var search = $('#search').val();
            var city = $('#city').val();
            $("#list").dropload({
                domDown : {
                    domClass   : 'dropload-down',
                    domRefresh : '<div class="dropload-refresh">↑上拉加载更多</div>',
                    domLoad    : '<div class="dropload-load"><span class="loading"></span>加载中...</div>',
                    domNoData  : '<div class="dropload-noData">没有啦╮(╯_╰)╭</div>'
                },
                scrollArea : window,
                loadDownFn : function(me){
                    if(!operation){
                        return false;
                    }

                    $.ajax({
                        type: 'GET',
                        url : "/index/index?page=" + page + '&type=load&search='+search+'&city='+city,
                        dataType: 'html',
                        success: function(data){
                            if(data) {
                                //赋值数据
                                $("#company_list").append(data);
                                page++;
                            } else {
                                operation = false;
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