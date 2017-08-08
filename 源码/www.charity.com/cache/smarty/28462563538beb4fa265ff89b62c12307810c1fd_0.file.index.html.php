<?php /* Smarty version 3.1.27, created on 2016-07-21 09:22:39
         compiled from "C:\xampp\htdocs\charity\www.charity.com\application\views\news\index.html" */ ?>
<?php
/*%%SmartyHeaderCode:3081579023dfbab211_77783278%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28462563538beb4fa265ff89b62c12307810c1fd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\charity\\www.charity.com\\application\\views\\news\\index.html',
      1 => 1469064066,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3081579023dfbab211_77783278',
  'variables' => 
  array (
    'companyInfo' => 0,
    'id' => 0,
    'data' => 0,
    'vo' => 0,
    'pageSize' => 0,
    'total' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_579023dfbf6874_59125350',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_579023dfbf6874_59125350')) {
function content_579023dfbf6874_59125350 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3081579023dfbab211_77783278';
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
    <?php echo '<script'; ?>
 type="text/javascript" src="/public/js/dropload/dropload.min.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="bodies_header clearafter">
    <a href="/pay/order/?event=company&id=<?php echo $_smarty_tpl->tpl_vars['companyInfo']->value['c_id'];?>
" class="bodies_left">机构首页</a>
    <a href="/donation/index?id=<?php echo $_smarty_tpl->tpl_vars['companyInfo']->value['c_id'];?>
" class="bodies_center">本市慈善</a>
    <a href="/news/index?id=<?php echo $_smarty_tpl->tpl_vars['companyInfo']->value['c_id'];?>
" class="bodies_right on">机构动态</a>
</div>
<div class="bod_wrapper">
    <div class="dynamic_content" id="list">
        <input type="hidden" name="id" id="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
        <ul class="clearafter" id="news_list">
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
                        <a href="/news/details/id/<?php echo $_smarty_tpl->tpl_vars['vo']->value['a_id'];?>
">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['vo']->value['a_img'];?>
">
                        <div class="dynamic_right">
                            <h3><?php echo $_smarty_tpl->tpl_vars['vo']->value['a_title'];?>
</h3>
                            <p><?php echo $_smarty_tpl->tpl_vars['companyInfo']->value['c_name'];?>
</p>
                            <p><?php echo $_smarty_tpl->tpl_vars['vo']->value['a_addTime'];?>
<span><?php echo $_smarty_tpl->tpl_vars['vo']->value['a_view'];?>
阅读</span></p>
                        </div>
                        </a>
                    </li>
                <?php
$_smarty_tpl->tpl_vars['vo'] = $foreach_vo_Sav;
}
?>
					<?php } else { ?>
				<li><h2 style="text-align:center;">暂无发布</h2></li>
            <?php }?>

        </ul>
    </div>
</div>
  <div class="pe-spacer size60"></div>
    <?php echo $_smarty_tpl->getSubTemplate ("common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

</div>

</body>
<?php echo '<script'; ?>
 type="text/javascript" src="/public/js/jquery-2.1.4.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/public/js/jquery.flexslider-min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
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
            var id = $('#id').val();
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
                        url : "/news/index?page=" + page + '&type=load&id='+id,
                        dataType: 'html',
                        success: function(data){
                            if(data) {
                                //赋值数据
                                $("#news_list").append(data);
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