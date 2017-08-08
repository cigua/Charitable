<?php /* Smarty version 3.1.27, created on 2016-07-26 22:23:29
         compiled from "C:\xampp\htdocs\charity\charity\application\views\banklog\form.html" */ ?>
<?php
/*%%SmartyHeaderCode:565857977261186ac8_39439841%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6367289f40e1643abfa8c85c7d0f5f51d5835691' => 
    array (
      0 => 'C:\\xampp\\htdocs\\charity\\charity\\application\\views\\banklog\\form.html',
      1 => 1469542746,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '565857977261186ac8_39439841',
  'variables' => 
  array (
    'id' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_579772611bfab7_90605512',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_579772611bfab7_90605512')) {
function content_579772611bfab7_90605512 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '565857977261186ac8_39439841';
?>
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="passportModalLabel">提现</h4>
        </div>
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
        <div class="modal-body">
            <div class="alert alert-dismissible" role="alert" style="display: none;">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong></strong>
            </div>
            <div class="form-group">
                        <label class="col-sm-2 control-label">支付宝</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="f_card_numb" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['f_card_numb'];?>
" placeholder="支付宝账户" datatype="*" nullmsg="请填写支付宝账户" style="width: 200px;"/>
                        </div>
                <label style="color:red;">*</label>
                <span class="help-inline"></span>
            </div>

            <div class="form-group">
                     <label class="col-sm-2 control-label">开户姓名</label>
                        <div class="col-sm-4">
						<input type="text" class="form-control" name="f_name" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['f_name'];?>
" placeholder="开户人姓名" datatype="*" nullmsg="请填写开户人姓名" style="width: 200px;"/>
                        </div>
                <label style="color:red;">*</label>
                <span class="help-inline"></span>
            </div>

            <div class="form-group">
                        <label class="col-sm-2 control-label">联系电话</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="f_phone" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['f_phone'];?>
" placeholder="联系电话" datatype="*" nullmsg="请填写联系电话" style="width: 200px;"/>
                        </div>
                <label style="color:red;">*</label>
                <span class="help-inline"></span>
            </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
            <button type="submit" class="btn btn-primary btn-submit">申请</button>
        </div>
    </div>
</div>


<?php }
}
?>