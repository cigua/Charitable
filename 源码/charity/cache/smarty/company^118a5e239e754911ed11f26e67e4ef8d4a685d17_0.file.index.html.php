<?php /* Smarty version 3.1.27, created on 2016-06-27 09:03:33
         compiled from "E:\xampp\htdocs\charity\charity\application\views\company\index.html" */ ?>
<?php
/*%%SmartyHeaderCode:2191957707b650e7930_61518660%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '118a5e239e754911ed11f26e67e4ef8d4a685d17' => 
    array (
      0 => 'E:\\xampp\\htdocs\\charity\\charity\\application\\views\\company\\index.html',
      1 => 1466989032,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2191957707b650e7930_61518660',
  'variables' => 
  array (
    'name' => 0,
    'data' => 0,
    'row' => 0,
    'check' => 0,
    'baseUrl' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57707b6512de57_41365235',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57707b6512de57_41365235')) {
function content_57707b6512de57_41365235 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2191957707b650e7930_61518660';
echo $_smarty_tpl->getSubTemplate ("common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<link href="/public/js/umeditor/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
<style>
    #right .nav-tabs { margin-bottom:0;}
    #right .tab-content { border:1px solid #ddd; border-top:none; padding:20px 20px 0;}
    .news{display:none;}
    .img_left { position: relative; float: left; margin-right: 10px;}
    .img_left .order { margin-top: 5px; line-height: 30px;}
    .img_left .order span { margin-right: 5px;}
    .img_left a { position: absolute; top: 14px; right: 2px; display: block; width: 20px; height: 20px; background: #fff; color: #fff; text-align: center; line-height: 20px; font-size: 12px;  border-radius: 999px; opacity: .8;}

    .news{display:none;}
    .img_left { position: relative; float: left; margin-right: 10px;}
    .img_left .order { margin-top: 5px; line-height: 30px;}
    .img_left .order span { margin-right: 5px;}
    .img_left a { position: absolute; top: 14px; right: 2px; display: block; width: 20px; height: 20px; background: #fff; color: #fff; text-align: center; line-height: 20px; font-size: 12px;  border-radius: 999px; opacity: .8;}
    #productProfile .controls { margin-top: 20px; margin-bottom: 10px; padding-bottom: 30px; border-bottom: 1px solid #E8E8E8; overflow: auto;}
    .ppinfo_col { float: left; margin-right: 20px; margin-bottom: 10px;}
    .ppinfo_col span { display: block; float: left; height: 30px; line-height: 30px;}
    .ppinfo_col input { margin-left:4px;}
    .icon-remove-sign{background-position:-48px -96px}.
</style>
<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("common/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


    <div id="right">
        <!--面包屑导航-->
        <ol class="breadcrumb">
            <li><a href="javascript:void(0);">机构管理 </a></li>
            <!--<li><a href="/admin/index/">帐号管理</a></li>-->
            <li class="active">机构管理</li>
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
            <button type="button" class="btn btn-primary pull-right"  onclick="location.href='/company/form/'">添加机构</button>
            <div class="clear10"></div>

            <!-- 表格 -->
            <table class="table table-bordered table-striped">
                <tr>
                    <td>机构名称</td>
                    <!--<td>注册电话</td>-->
                    <td>登记人</td>
                    <td>登记人电话</td>
                    <td>审核状态</td>
                    <td>机构状态</td>
                    <td>添加时间</td>
                    <td>修改密码</td>
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
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['c_name'];?>
</td>
                    <!--<td><?php echo $_smarty_tpl->tpl_vars['row']->value['c_phone'];?>
</td>-->
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['c_username'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['c_userphone'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['check']->value[$_smarty_tpl->tpl_vars['row']->value['c_check_status']];?>
</td>
                    <td>
                        <a href="#" data-json="确认要更改状态吗？" data-href="/ajax/company/status/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['c_id'];?>
/status/<?php echo $_smarty_tpl->tpl_vars['row']->value['c_status'];?>
">
                            <i class="glyphicon <?php if ($_smarty_tpl->tpl_vars['row']->value['c_status'] == 1) {?>glyphicon-eye-open<?php } else { ?>glyphicon-eye-close<?php }?>" title="<?php if ($_smarty_tpl->tpl_vars['row']->value['c_status'] == 2) {?>禁用<?php } else { ?>正常<?php }?>"></i>
                            <?php if ($_smarty_tpl->tpl_vars['row']->value['c_status'] == 1) {?><span class="label label-success">正常</span><?php } else { ?><span class="label label-warning">禁用</span><?php }?>
                        </a>
                    </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['c_addTime'];?>
</td>
                    <td>
                        <a data-toggle="modal" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
formPassword/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['c_id'];?>
" data-target="#formPasswordModal" title="修改密码"><i class="glyphicon glyphicon-lock"></i></a>
                    </td>
                    <td>
                        <a class="glyphicon glyphicon-edit"  href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/form/id/<?php echo $_smarty_tpl->tpl_vars['row']->value['c_id'];?>
" title="编辑机构"></a>&nbsp;&nbsp;
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

        <!--弹窗-->
        <form class="form-horizontal" action="/ajax/company/save/" method="post">
            <div class="modal fade" id="adminModal" tabindex="-1" role="dialog"></div>
        </form>

        <form class="form-horizontal" method="post" action="/ajax/company/editPassword/" >
            <div class="modal fade" id="formPasswordModal" tabindex="-1" role="dialog"></div>
        </form>
    </div>
    <div class="clear"></div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>