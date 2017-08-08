<?php /* Smarty version 3.1.27, created on 2016-06-15 11:23:58
         compiled from "E:\xampp\htdocs\charity\charity\application\views\index\index.html" */ ?>
<?php
/*%%SmartyHeaderCode:35475760ca4e484148_70108159%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21846d62aa7ac22328d2081d32fcc862aeb9caf9' => 
    array (
      0 => 'E:\\xampp\\htdocs\\charity\\charity\\application\\views\\index\\index.html',
      1 => 1465887354,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35475760ca4e484148_70108159',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5760ca4e4af0d1_16679250',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5760ca4e4af0d1_16679250')) {
function content_5760ca4e4af0d1_16679250 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '35475760ca4e484148_70108159';
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