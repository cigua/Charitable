<?php /* Smarty version 3.1.27, created on 2016-07-05 23:27:24
         compiled from "C:\xampp\htdocs\charity\charity\application\views\member\list.html" */ ?>
<?php
/*%%SmartyHeaderCode:27631577bd1dc8e9c21_59647261%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d461550377719de2f9c9e5b42784a64a78ac857' => 
    array (
      0 => 'C:\\xampp\\htdocs\\charity\\charity\\application\\views\\member\\list.html',
      1 => 1467512833,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27631577bd1dc8e9c21_59647261',
  'variables' => 
  array (
    'data' => 0,
    'row' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_577bd1dc947908_55912479',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_577bd1dc947908_55912479')) {
function content_577bd1dc947908_55912479 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '27631577bd1dc8e9c21_59647261';
echo $_smarty_tpl->getSubTemplate ("common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("common/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


    <div id="right">
        <!--面包屑导航-->
        <ol class="breadcrumb">
            <li><a href="/member/index">用户管理</a></li>
            <!--<li><a href="/admin/index/">帐号管理</a></li>-->
            <li class="active">捐赠记录列表</li>
        </ol>

        <div class="right_con">
            <button type="button" class="btn btn-default pull-right" onclick="window.location.reload();">刷新界面</button>
            <div class="clear10"></div>

            <!-- 表格 -->
            <table class="table table-bordered table-striped">
                <tr>
                    <td>捐赠类型</td>
                    <td>捐赠人名称</td>
                    <td>善筹名称</td>
                    <td>金额</td>
                    <td>是否匿名</td>
                    <td>捐赠状态</td>
                    <td>捐赠时间</td>
                    <td>数据来源</td>
                    <td>编辑</td>
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
                    <td><?php if ($_smarty_tpl->tpl_vars['row']->value['c_type'] == 1) {?>
                        <span class="label label-success">捐赠箱</span>
                        <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['c_type'] == 2) {?>
                        <span class="label label-info">物资捐赠</span>
                        <?php } elseif ($_smarty_tpl->tpl_vars['row']->value['c_type'] == 3) {?>
                        <span class="label label-danger">善筹捐赠</span>
                        <?php }?></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['c_name'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['d_title'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['c_price'];?>
</td>
                    <td><?php if ($_smarty_tpl->tpl_vars['row']->value['c_anonymous'] == 1) {?><span class="label label-success">正常</span><?php } elseif ($_smarty_tpl->tpl_vars['row']->value['c_anonymous'] == 2) {?><span class="label label-important">匿名</span><?php }?></td>
                    <td><?php if ($_smarty_tpl->tpl_vars['row']->value['c_status'] == 1) {?><span class="label label-success">成功</span><?php } elseif ($_smarty_tpl->tpl_vars['row']->value['c_status'] == 2) {?><span class="label label-danger">失败</span><?php }?></td>
                     <td><?php echo $_smarty_tpl->tpl_vars['row']->value['c_addtime'];?>
</td>
                    <td><?php if ($_smarty_tpl->tpl_vars['row']->value['c_mid']) {?>
                        <span class="label label-success">正常数据</span>
                        <?php } else { ?>
                        <span class="label label-danger">自定义添加</span>
                    <?php }?>
                    </td>
                    <td>
                        <a class="glyphicon glyphicon-edit" href="/member/addlog/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['c_id'];?>
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
    </div>
    <div class="clear"></div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>