<?php /* Smarty version 3.1.27, created on 2016-07-28 16:31:08
         compiled from "C:\xampp\htdocs\charity\charity\application\views\funds\index.html" */ ?>
<?php
/*%%SmartyHeaderCode:32755799c2cc1f5412_88249351%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2e31da5c31946d789371b67b112ebd961df213c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\charity\\charity\\application\\views\\funds\\index.html',
      1 => 1469694665,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32755799c2cc1f5412_88249351',
  'variables' => 
  array (
    'typeOption' => 0,
    'title' => 0,
    'statusOption' => 0,
    'data' => 0,
    'row' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5799c2cc2684f3_80624665',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5799c2cc2684f3_80624665')) {
function content_5799c2cc2684f3_80624665 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '32755799c2cc1f5412_88249351';
echo $_smarty_tpl->getSubTemplate ("common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("common/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


    <div id="right">
        <!--面包屑导航-->
        <ol class="breadcrumb">
            <li><a href="javascript:void(0);">提现申请管理 </a></li>
            <li class="active">提现申请列表</li>
        </ol>

        <div class="right_con">
            <!--搜索区域-->
            <?php if (@constant('A_ROLE') == 0) {?>
            <form class="form-inline pull-left">
                <div class="form-group">
                    提现角色：
                    <select name="type" id="type" class="form-control">
                        <?php echo $_smarty_tpl->tpl_vars['typeOption']->value;?>

                    </select>
                </div>
                <div class="form-group">开户人名字：
                    <input type="text" name="title" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" class="form-control" placeholder="开户人名字">
                </div>
                <div class="form-group">
                    审核状态：
                    <select name="status" id="status" class="form-control">
                        <?php echo $_smarty_tpl->tpl_vars['statusOption']->value;?>

                    </select>
                </div>

                <button type="submit" class="btn btn-default">搜索</button>
            </form>
            <button type="button" class="btn btn-default pull-right" onclick="window.location.reload();">刷新界面</button>
<?php }?>
            <div class="clear10"></div>

            <!-- 表格 -->
            <table class="table table-bordered table-striped">
                <tr>
                    <td>提现角色</td>
                    <td>提现金额</td>
                    <td>姓名（开户人）</td>
                    <td>开户银行</td>
                    <td>账号（银行卡号）</td>
					<td>联系电话</td>
                    <td>审核时间</td>
                    <td>申请时间</td>
                    <td>审核状态</td>
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
                    <td><?php if ($_smarty_tpl->tpl_vars['row']->value['f_type'] == 1) {?><span class="label label-success"><?php echo $_smarty_tpl->tpl_vars['row']->value['c_name'];?>
</span><?php } else { ?><span class="label label-danger">个人申请</span><?php }?></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['f_price'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['f_name'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['f_bank'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['f_card_numb'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['row']->value['f_phone'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['f_editTime'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['f_addTime'];?>
</td>
                    <td>
                        <?php if ($_smarty_tpl->tpl_vars['row']->value['f_check_status'] == 2) {?>
                        <a href="javascript:void(0);" data-json="此操作涉及金额,请确保已经打款在操作此状态" data-href="/funds/status/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['f_id'];?>
/status/<?php echo $_smarty_tpl->tpl_vars['row']->value['f_check_status'];?>
/fid/<?php echo $_smarty_tpl->tpl_vars['row']->value['f_id'];?>
">
                            <i class="glyphicon <?php if ($_smarty_tpl->tpl_vars['row']->value['f_check_status'] == 1) {?>glyphicon-eye-open<?php } else { ?>glyphicon-eye-close<?php }?>" title="<?php if ($_smarty_tpl->tpl_vars['row']->value['f_check_status'] == 2) {?>待通过<?php } else { ?>已通过<?php }?>"></i>
                            <?php if ($_smarty_tpl->tpl_vars['row']->value['f_check_status'] == 1) {?><span class="label label-success">已通过</span><?php } else { ?><span class="label label-warning">待通过</span><?php }?>
                        </a>
                        <?php } else { ?>
                        <span class="label label-success">已通过</span>
                        <?php }?>
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