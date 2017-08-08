<?php /* Smarty version 3.1.27, created on 2016-08-01 11:14:32
         compiled from "C:\xampp\htdocs\charity\charity\application\views\share\index.html" */ ?>
<?php
/*%%SmartyHeaderCode:11649579ebe98c3b956_10159391%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81c1ddf5e710759829d80edc7abae8bb6e498f02' => 
    array (
      0 => 'C:\\xampp\\htdocs\\charity\\charity\\application\\views\\share\\index.html',
      1 => 1470021270,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11649579ebe98c3b956_10159391',
  'variables' => 
  array (
    'data' => 0,
    'row' => 0,
    'cateList' => 0,
    'baseUrl' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_579ebe98c9e6d9_00986377',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_579ebe98c9e6d9_00986377')) {
function content_579ebe98c9e6d9_00986377 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '11649579ebe98c3b956_10159391';
echo $_smarty_tpl->getSubTemplate ("common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("common/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


    <div id="right">
        <!--面包屑导航-->
        <ol class="breadcrumb">
            <li><a href="javascript:void(0);">慈善管理 </a></li>
            <li class="active">分享管理</li>
        </ol>

        <div class="right_con">
              <button type="button" class="btn btn-default pull-right" onclick="window.location.reload();">刷新界面</button>


            <div class="clear10"></div>

            <!-- 表格 -->
            <table class="table table-bordered table-striped">
                <tr>
                    <td>类型</td>
                    <td>标题</td>
                    <td>内容</td>
                    <td>操作</td>
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
                    <td><?php echo $_smarty_tpl->tpl_vars['cateList']->value[$_smarty_tpl->tpl_vars['row']->value['s_type']];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['s_title'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['s_content'];?>
</td>
                    <td>
                        <a class="glyphicon glyphicon-edit" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/form/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['s_id'];?>
" title="编辑"></a>&nbsp;&nbsp;
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

        <!--&lt;!&ndash;弹窗&ndash;&gt;-->
        <!--<form class="form-horizontal" action="/ajax/case/save/" method="post">-->
            <!--<div class="modal fade" id="adminModal" tabindex="-1" role="dialog"></div>-->
        <!--</form>-->
    </div>
    <div class="clear"></div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>