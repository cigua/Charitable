<?php /* Smarty version 3.1.27, created on 2016-06-14 15:19:56
         compiled from "E:\xampp\htdocs\runda\runda\application\views\productscreen\index.html" */ ?>
<?php
/*%%SmartyHeaderCode:10250575fb01cf037f6_16398764%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d52c193e00cc34ab53d6761243592a5f460e07b' => 
    array (
      0 => 'E:\\xampp\\htdocs\\runda\\runda\\application\\views\\productscreen\\index.html',
      1 => 1465887354,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10250575fb01cf037f6_16398764',
  'variables' => 
  array (
    'categoryOption' => 0,
    'title' => 0,
    'statusOption' => 0,
    'data' => 0,
    'row' => 0,
    'cateList' => 0,
    'baseUrl' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_575fb01d003aa5_42549706',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_575fb01d003aa5_42549706')) {
function content_575fb01d003aa5_42549706 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10250575fb01cf037f6_16398764';
echo $_smarty_tpl->getSubTemplate ("common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("common/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


    <div id="right">
        <!--面包屑导航-->
        <ol class="breadcrumb">
            <li><a href="javascript:void(0);">产品管理 </a></li>
            <li class="active">显示屏管理</li>
        </ol>

        <div class="right_con">
            <!--搜索区域-->
            <form class="form-inline pull-left">
                <div class="form-group">分类：
                    <select name="pid" id="pid">
                        <?php echo $_smarty_tpl->tpl_vars['categoryOption']->value;?>

                    </select>
                </div>
                <div class="form-group">标题：
                    <input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" class="form-control" placeholder="标题">
                </div>
                <div class="form-group">
                    状态：
                    <select name="status" id="status">
                        <?php echo $_smarty_tpl->tpl_vars['statusOption']->value;?>

                    </select>
                </div>
                <button type="submit" class="btn btn-default">搜索</button>
            </form>
            <button type="button" class="btn btn-default pull-right" onclick="window.location.reload();">刷新界面</button>
            <button type="button" class="btn btn-primary pull-right"  onclick="location.href='/productscreen/form/'">添加显示屏</button>

            <div class="clear10"></div>

            <!-- 表格 -->
            <table class="table table-bordered table-striped">
                <tr>
                    <td>分类</td>
                    <td>标题(中文)</td>
                    <td>状态</td>
                    <td>添加时间</td>
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
                    <td><?php echo $_smarty_tpl->tpl_vars['cateList']->value[$_smarty_tpl->tpl_vars['row']->value['p_type']];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['p_title_cn'];?>
</td>
                    <td>
                        <a href="#" data-json="确认要更改状态吗？" data-href="/productscreen/status/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['p_id'];?>
/status/<?php echo $_smarty_tpl->tpl_vars['row']->value['p_status'];?>
">
                            <i class="glyphicon <?php if ($_smarty_tpl->tpl_vars['row']->value['p_status'] == 1) {?>glyphicon-eye-open<?php } else { ?>glyphicon-eye-close<?php }?>" title="<?php if ($_smarty_tpl->tpl_vars['row']->value['p_status'] == 2) {?>禁用<?php } else { ?>正常<?php }?>"></i>
                            <?php if ($_smarty_tpl->tpl_vars['row']->value['p_status'] == 1) {?><span class="label label-success">正常</span><?php } else { ?><span class="label label-warning">禁用</span><?php }?>
                        </a>
                    </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['p_addtime'];?>
</td>
                    <td>
                        <a class="glyphicon glyphicon-edit" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/form/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['p_id'];?>
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
        <!--<form class="form-horizontal" action="/ajax/productscreen/save/" method="post">-->
            <!--<div class="modal fade" id="adminModal" tabindex="-1" role="dialog"></div>-->
        <!--</form>-->
    </div>
    <div class="clear"></div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>