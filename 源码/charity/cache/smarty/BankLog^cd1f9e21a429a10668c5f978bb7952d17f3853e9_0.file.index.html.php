<?php /* Smarty version 3.1.27, created on 2016-07-28 17:06:22
         compiled from "C:\xampp\htdocs\charity\charity\application\views\banklog\index.html" */ ?>
<?php
/*%%SmartyHeaderCode:293915799cb0e88f140_06040121%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd1f9e21a429a10668c5f978bb7952d17f3853e9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\charity\\charity\\application\\views\\banklog\\index.html',
      1 => 1469696774,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '293915799cb0e88f140_06040121',
  'variables' => 
  array (
    'typeOption' => 0,
    'cashInfo' => 0,
    'data' => 0,
    'row' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5799cb0e917925_63325425',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5799cb0e917925_63325425')) {
function content_5799cb0e917925_63325425 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '293915799cb0e88f140_06040121';
echo $_smarty_tpl->getSubTemplate ("common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("common/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


    <div id="right">
        <!--面包屑导航-->
        <ol class="breadcrumb">
            <li><a href="javascript:void(0);">银行卡提现记录 </a></li>
            <!--<li><a href="/admin/index/">帐号管理</a></li>-->
            <li class="active">提现记录列表</li>
        </ol>

        <div class="right_con">
            <?php if (@constant('A_ROLE') == 0) {?>
            <form class="form-inline pull-left">
                <div class="form-group">
                    提现角色：
                    <select name="type" id="type" class="form-control">
                        <?php echo $_smarty_tpl->tpl_vars['typeOption']->value;?>

                    </select>
                </div>
                <button type="submit" class="btn btn-default">搜索</button>
            </form>
            <?php }?>
			
			<button type="button" data-toggle="modal" data-target="#adminModal" href="/banklog/form/"  class="btn btn-default pull-right" >提现</button>
			
            <button type="button" class="btn btn-default pull-right" onclick="window.location.reload();">刷新界面</button>
            <div class="clear10"></div>
			<?php if (@constant('A_ROLE') > 0) {?>
			总金额：<font color='red'><?php echo (($tmp = @$_smarty_tpl->tpl_vars['cashInfo']->value['ca_total'])===null||$tmp==='' ? 0 : $tmp);?>
</font>,已提现金额：<font color='red'><?php echo (($tmp = @$_smarty_tpl->tpl_vars['cashInfo']->value['ca_used'])===null||$tmp==='' ? 0 : $tmp);?>
</font>,未提现金额：<font color='red'><?php echo (($tmp = @$_smarty_tpl->tpl_vars['cashInfo']->value['ca_left'])===null||$tmp==='' ? 0 : $tmp);?>
</font>
			<?php }?>
            <!-- 表格 -->
            <table class="table table-bordered table-striped">
                <tr>
                    <td>提现角色</td>
                    <td>开户人名（机构为支付宝姓名）</td>
                    <td>开户银行（机构为空）</td>
                    <td>银行卡号（机构为支付宝账号）</td>
                    <td>提现价格</td>
                    <td>提现时间</td>
                    <td>提现状态</td>
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
                    <?php if (@constant('A_ROLE') != 0) {?> <td><?php echo $_smarty_tpl->tpl_vars['row']->value['c_name'];?>
</td><?php } else { ?> <td><?php if ($_smarty_tpl->tpl_vars['row']->value['bl_type'] == 1) {?><span class="label label-success"><?php echo $_smarty_tpl->tpl_vars['row']->value['c_name'];?>
</span><?php } else { ?><span class="label label-danger">个人申请</span><?php }?></td><?php }?>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['bl_bank_name'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['bl_bank'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['bl_card_numb'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['bl_price'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['bl_addtime'];?>
</td>
                    <td><span class="label label-success">已提现</span></td>
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
	        <!--弹窗-->
        <form class="form-horizontal" action="/ajax/company/fund" method="post">
            <div class="modal fade" id="adminModal" tabindex="-1" role="dialog"></div>
        </form>
</div>
<?php echo '<script'; ?>
>
	function funds(){
		$.post('/ajax/company/fund', {}, function(data){
			if(data.status == 'y'){
				alert(data.info);
				location.reload();
			}else{
				alert(data.info);
			}
		
		}, 'json')
	}

<?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->getSubTemplate ("common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>