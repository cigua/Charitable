<?php /* Smarty version 3.1.27, created on 2016-07-06 16:35:15
         compiled from "C:\xampp\htdocs\charity\charity\application\views\company\formpassword.html" */ ?>
<?php
/*%%SmartyHeaderCode:23701577cc2c3b9ec42_22352759%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfad6e72ab6c76af49a43aa46275a450eb250ccb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\charity\\charity\\application\\views\\company\\formpassword.html',
      1 => 1467512833,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23701577cc2c3b9ec42_22352759',
  'variables' => 
  array (
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_577cc2c3c82ad7_52484164',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_577cc2c3c82ad7_52484164')) {
function content_577cc2c3c82ad7_52484164 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '23701577cc2c3b9ec42_22352759';
?>
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="passportModalLabel">修改密码</h4>
        </div>
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
        <div class="modal-body">
            <div class="alert alert-dismissible" role="alert" style="display: none;">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong></strong>
            </div>
            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
            <div class="form-group">
                <label class="col-sm-2 control-label">登录密码</label>
                <div class="col-sm-6">
                    <input type="password" name="password" class="form-control" value="" placeholder="登录密码" datatype="*6-18" nullmsg="请填写登录密码" />
                </div>
                <span class="help-inline"></span>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
            <button type="submit" class="btn btn-primary btn-submit">确认修改</button>
        </div>
    </div>
</div><?php }
}
?>