<?php /* Smarty version 3.1.27, created on 2016-07-06 09:55:07
         compiled from "C:\xampp\htdocs\charity\www.charity.com\application\views\member\more.html" */ ?>
<?php
/*%%SmartyHeaderCode:24932577c64fb2144c0_52176544%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a65eeaafcfd535fb65d16d8ec1dd18bfb5d3181b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\charity\\www.charity.com\\application\\views\\member\\more.html',
      1 => 1467732058,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24932577c64fb2144c0_52176544',
  'variables' => 
  array (
    't' => 0,
    'count' => 0,
    'data' => 0,
    'vo' => 0,
    'pageSize' => 0,
    'total' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_577c64fb256849_14520528',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_577c64fb256849_14520528')) {
function content_577c64fb256849_14520528 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '24932577c64fb2144c0_52176544';
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />
    <title>捐赠记录列表</title>
    <link type="text/css" rel="stylesheet" href="/public/css/skin.css" />
    <link type="text/css" rel="stylesheet" href="/public/css/style.css" />
    <link type="text/css" rel="stylesheet" href="/public/js/dropload/dropload.css" />
    <link type="text/css" rel="stylesheet" href="/public/css/f-awesome/font-awesome.min.css" />
    <?php echo '<script'; ?>
 type="text/javascript" src="/public/js/jquery-2.1.4.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/public/js/dropload/dropload.min.js"><?php echo '</script'; ?>
>
</head>
<body>
<div class="find_nav">
    <div class="header">
        <input type="hidden" name="t" id="t" value="<?php echo $_smarty_tpl->tpl_vars['t']->value;?>
">
        <div class="return"><a href="/"><img src="/public/images/skin/return.png"></a></div>
        <div class="title">捐赠记录列表</div>
        <div class="user">共<span class="list_color"><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</span>次</div>
    </div>
</div>
<div class="ce-wrapper">
    <div class="history_content" id="list">
        <ul class="clearafter" id="more_list">
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
        </ul></div>
</div>
</body>
<?php echo '<script'; ?>
>
    var pageSize= parseInt('<?php echo $_smarty_tpl->tpl_vars['pageSize']->value;?>
');
    var total = parseInt('<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
');

    $(function(){
        var page = 2;
        if(total >= pageSize) {
            var t = $('#t').val();
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
                        url : "/member/more?page=" + page + '&type=load&t='+t,
                        dataType: 'html',
                        success: function(data){
                            if(data) {
                                //赋值数据
                                $("#more_list").append(data);
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