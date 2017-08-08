<?php /* Smarty version 3.1.27, created on 2016-06-14 15:10:31
         compiled from "E:\xampp\htdocs\runda\runda\application\views\index\index.html" */ ?>
<?php
/*%%SmartyHeaderCode:4126575fade7d60848_31547908%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '717660c3a70a57912b524f0fda528ae7e95a9dbc' => 
    array (
      0 => 'E:\\xampp\\htdocs\\runda\\runda\\application\\views\\index\\index.html',
      1 => 1465887354,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4126575fade7d60848_31547908',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_575fade7d87955_18130087',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_575fade7d87955_18130087')) {
function content_575fade7d87955_18130087 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '4126575fade7d60848_31547908';
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