<?php /* Smarty version 3.1.27, created on 2016-07-06 15:14:25
         compiled from "C:\xampp\htdocs\charity\charity\application\views\member\index.html" */ ?>
<?php
/*%%SmartyHeaderCode:28452577cafd1b88020_78577503%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6afbd045a937fc9c830cf4254856cbf3c93b2f3f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\charity\\charity\\application\\views\\member\\index.html',
      1 => 1467789249,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28452577cafd1b88020_78577503',
  'variables' => 
  array (
    'name' => 0,
    'data' => 0,
    'row' => 0,
    'v' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_577cafd1beaaf5_18463823',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_577cafd1beaaf5_18463823')) {
function content_577cafd1beaaf5_18463823 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '28452577cafd1b88020_78577503';
echo $_smarty_tpl->getSubTemplate ("common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("common/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


    <div id="right">
        <!--面包屑导航-->
        <ol class="breadcrumb">
            <li><a href="javascript:void(0);">用户管理 </a></li>
            <!--<li><a href="/admin/index/">帐号管理</a></li>-->
            <li class="active">用户列表</li>
        </ol>

        <div class="right_con">
            <!--搜索区域-->
            <form class="form-inline pull-left">
                <div class="form-group">
                    <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" class="form-control" placeholder="用户名">
                </div>
                <button type="submit" class="btn btn-default">搜索</button>
            </form>
            <button type="button" class="btn btn-default pull-right" onclick="window.location.reload();">刷新界面</button>
            <button type="button" class="btn btn-primary pull-right"  onclick="location.href='/member/addlog/'">添加捐赠记录</button>
            <div class="clear10"></div>

            <!-- 表格 -->
            <table class="table table-bordered table-striped">
                <tr>
                    <td>账号</td>
                    <td>电话</td>
                    <td>状态</td>
                    <td>捐赠记录列表</td>
                    <td>物资捐赠列表</td>
                    <td>善筹捐赠列表</td>
                    <td>已提现金额</td>
                    <td>账户余额</td>
                    <td>添加时间</td>
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
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['m_phone'];?>
</td>
                    <td>
                        <a href="#" data-json="确认要更改状态吗？" data-href="/ajax/member/status/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['m_id'];?>
/status/<?php echo $_smarty_tpl->tpl_vars['row']->value['m_status'];?>
">
                            <i class="glyphicon <?php if ($_smarty_tpl->tpl_vars['row']->value['m_status'] == 1) {?>glyphicon-eye-open<?php } else { ?>glyphicon-eye-close<?php }?>" title="<?php if ($_smarty_tpl->tpl_vars['row']->value['m_status'] == 2) {?>禁用<?php } else { ?>正常<?php }?>"></i>
                            <?php if ($_smarty_tpl->tpl_vars['row']->value['m_status'] == 1) {?><span class="label label-success">正常</span><?php } else { ?><span class="label label-warning">禁用</span><?php }?>
                        </a>
                    </td>
                    <td> <a title="捐赠记录列表" href="/member/list/?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['m_id'];?>
&type=1"><i class="glyphicon glyphicon-th-list"></i>查看捐赠箱</a></td>
                    <td> <a title="物资捐赠列表" href="/member/list/?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['m_id'];?>
&type=2"><i class="glyphicon glyphicon-th-list"></i>查看物资列表</a></td>
                    <td> <a title="善筹捐赠列表" href="/member/list/?id=<?php echo $_smarty_tpl->tpl_vars['v']->value['m_id'];?>
&type=3"><i class="glyphicon glyphicon-th-list"></i>查看善筹列表</a></td>
                    <td><span class="label label-success"><?php echo $_smarty_tpl->tpl_vars['row']->value['ca_used'];?>
</span></td>
                    <td><span class="label label-danger"><?php echo $_smarty_tpl->tpl_vars['row']->value['ca_left'];?>
</span></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['m_addtime'];?>
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