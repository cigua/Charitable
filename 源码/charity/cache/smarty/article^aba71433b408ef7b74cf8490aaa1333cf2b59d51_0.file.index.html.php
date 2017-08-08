<?php /* Smarty version 3.1.27, created on 2016-06-17 17:07:31
         compiled from "E:\xampp\htdocs\charity\charity\application\views\article\index.html" */ ?>
<?php
/*%%SmartyHeaderCode:99985763bdd38f8447_55025983%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aba71433b408ef7b74cf8490aaa1333cf2b59d51' => 
    array (
      0 => 'E:\\xampp\\htdocs\\charity\\charity\\application\\views\\article\\index.html',
      1 => 1466154448,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '99985763bdd38f8447_55025983',
  'variables' => 
  array (
    'companyOption' => 0,
    'title' => 0,
    'statusOption' => 0,
    'data' => 0,
    'row' => 0,
    'companyList' => 0,
    'baseUrl' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5763bdd39502a9_87220643',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5763bdd39502a9_87220643')) {
function content_5763bdd39502a9_87220643 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '99985763bdd38f8447_55025983';
echo $_smarty_tpl->getSubTemplate ("common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("common/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


    <div id="right">
        <!--面包屑导航-->
        <ol class="breadcrumb">
            <li><a href="javascript:void(0);">慈善管理 </a></li>
            <li class="active">文章列表</li>
        </ol>

        <div class="right_con">
            <!--搜索区域-->
            <form class="form-inline pull-left">
                <div class="form-group">分类：
                    <select name="type" id="type">
                        <?php echo $_smarty_tpl->tpl_vars['companyOption']->value;?>

                    </select>
                </div>
                <div class="form-group">标题：
                    <input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" class="form-control" placeholder="标题">
                </div>
                <div class="form-group">状态：
                    <select name="status" id="status">
                        <?php echo $_smarty_tpl->tpl_vars['statusOption']->value;?>

                    </select>
                </div>
                <button type="submit" class="btn btn-default">搜索</button>
            </form>
            <button type="button" class="btn btn-default pull-right" onclick="window.location.reload();">刷新界面</button>
            <button type="button" class="btn btn-primary pull-right"  onclick="location.href='/article/form/'">添加文章</button>

            <div class="clear10"></div>

            <!-- 表格 -->
            <table class="table table-bordered table-striped">
                <tr>
                    <td>机构</td>
                    <td>标题</td>
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
                    <td><?php echo $_smarty_tpl->tpl_vars['companyList']->value[$_smarty_tpl->tpl_vars['row']->value['c_id']];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['a_title'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['a_addTime'];?>
</td>
                    <td>
                        <a class="glyphicon glyphicon-edit" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/form/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['a_id'];?>
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