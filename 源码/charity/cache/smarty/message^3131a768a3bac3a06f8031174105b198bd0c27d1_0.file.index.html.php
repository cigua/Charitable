<?php /* Smarty version 3.1.27, created on 2016-07-05 23:27:40
         compiled from "C:\xampp\htdocs\charity\charity\application\views\message\index.html" */ ?>
<?php
/*%%SmartyHeaderCode:1768577bd1ec9eba74_36221011%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3131a768a3bac3a06f8031174105b198bd0c27d1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\charity\\charity\\application\\views\\message\\index.html',
      1 => 1467512833,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1768577bd1ec9eba74_36221011',
  'variables' => 
  array (
    'title' => 0,
    'donationOption' => 0,
    'data' => 0,
    'row' => 0,
    'donationData' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_577bd1eca375c8_70274579',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_577bd1eca375c8_70274579')) {
function content_577bd1eca375c8_70274579 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1768577bd1ec9eba74_36221011';
echo $_smarty_tpl->getSubTemplate ("common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("common/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


    <div id="right">
        <!--面包屑导航-->
        <ol class="breadcrumb">
            <li><a href="javascript:void(0);">留言记录列表 </a></li>
            <!--<li><a href="/admin/index/">帐号管理</a></li>-->
            <li class="active">慈善项目留言列表</li>
        </ol>

        <div class="right_con">
            <!--搜索区域-->
            <form class="form-inline pull-left">

                <div class="form-group">留言人姓名：
                    <input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" class="form-control" placeholder="留言人姓名">
                </div>
                <div class="form-group">
                    慈善项目
                    <select name="did" id="did" class="form-control">
                        <?php echo $_smarty_tpl->tpl_vars['donationOption']->value;?>

                    </select>
                </div>
                <button type="submit" class="btn btn-default">搜索</button>
            </form>

            <button type="button" class="btn btn-default pull-right" onclick="window.location.reload();">刷新界面</button>
            <div class="clear10"></div>

            <!-- 表格 -->
            <table class="table table-bordered table-striped">
                <tr>
                    <td>慈善项目名称</td>
                    <td>留言人姓名</td>
                    <td>留言内容</td>
                    <td>留言时间</td>
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
                    <td><?php echo $_smarty_tpl->tpl_vars['donationData']->value[$_smarty_tpl->tpl_vars['row']->value['d_id']];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['me_name'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['me_content'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['me_addTime'];?>
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