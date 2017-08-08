<?php /* Smarty version 3.1.27, created on 2016-07-05 23:27:38
         compiled from "C:\xampp\htdocs\charity\charity\application\views\donationlog\index.html" */ ?>
<?php
/*%%SmartyHeaderCode:30460577bd1eae9d886_43135215%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b4a721455cdf3c923d0442215d6b5839cd12ae3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\charity\\charity\\application\\views\\donationlog\\index.html',
      1 => 1467512833,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30460577bd1eae9d886_43135215',
  'variables' => 
  array (
    'name' => 0,
    'data' => 0,
    'row' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_577bd1eaee5ea9_82798815',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_577bd1eaee5ea9_82798815')) {
function content_577bd1eaee5ea9_82798815 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '30460577bd1eae9d886_43135215';
echo $_smarty_tpl->getSubTemplate ("common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("common/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


    <div id="right">
        <!--面包屑导航-->
        <ol class="breadcrumb">
            <li><a href="javascript:void(0);">慈善捐赠分享记录 </a></li>
            <!--<li><a href="/admin/index/">帐号管理</a></li>-->
            <li class="active">分享记录列表</li>
        </ol>

        <div class="right_con">
            <!--搜索区域-->
            <form class="form-inline pull-left">
                <div class="form-group">
                    <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" class="form-control" placeholder="项目名称关键字">
                </div>
                <button type="submit" class="btn btn-default">搜索</button>
            </form>
            <button type="button" class="btn btn-default pull-right" onclick="window.location.reload();">刷新界面</button>
            <div class="clear10"></div>

            <!-- 表格 -->
            <table class="table table-bordered table-striped">
                <tr>
                    <td>用户名称</td>
                    <td>慈善项目名称</td>
                    <td>分享时间</td>
                </tr>
                <?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
                <?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$foreach_row_Sav = $_smarty_tpl->tpl_vars['row'];
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['m_name'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['dl_title'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['dl_addtime'];?>
</td>
                </tr>
                <?php
$_smarty_tpl->tpl_vars['row'] = $foreach_row_Sav;
}
?>
                <?php }?>
            </table>
            <!-- 分页 -->
            <?php if ($_smarty_tpl->tpl_vars['data']->value) {?>
            <nav>
                <ul class="pagination pull-right"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</ul>
            </nav>
            <?php }?>
        </div>
    </div>
    <div class="clear"></div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>