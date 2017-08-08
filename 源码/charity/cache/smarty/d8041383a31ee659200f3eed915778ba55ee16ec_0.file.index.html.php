<?php /* Smarty version 3.1.27, created on 2016-07-04 10:35:46
         compiled from "C:\xampp\htdocs\charity\charity\application\views\index\index.html" */ ?>
<?php
/*%%SmartyHeaderCode:38565779cb8227ca44_57618031%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8041383a31ee659200f3eed915778ba55ee16ec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\charity\\charity\\application\\views\\index\\index.html',
      1 => 1467512833,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38565779cb8227ca44_57618031',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5779cb822bc9f8_18097194',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5779cb822bc9f8_18097194')) {
function content_5779cb822bc9f8_18097194 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '38565779cb8227ca44_57618031';
echo $_smarty_tpl->getSubTemplate ("common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("common/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


    <div id="right">
        <!--面包屑导航-->
        <ol class="breadcrumb">
            <li><a href="/">管理首页 </a></li>
            <li class="active">用户中心</li>
        </ol>

        <div class="right_con">
            <!--<div class="index_img"><img src="/public/images/welcome.jpg"></div>-->
        </div>

        <!--弹窗区域-->
        <?php echo $_smarty_tpl->getSubTemplate ("index/modal.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    </div>
    <div class="clear"></div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>