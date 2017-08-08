<?php /* Smarty version 3.1.27, created on 2016-06-16 17:15:25
         compiled from "E:\xampp\htdocs\charity\charity\application\views\admin\formpassword.html" */ ?>
<?php
/*%%SmartyHeaderCode:277157626e2d8b8268_02404427%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61d8b1ea1e9955d438f988d896c2a58caed2eb02' => 
    array (
      0 => 'E:\\xampp\\htdocs\\charity\\charity\\application\\views\\admin\\formpassword.html',
      1 => 1465887354,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '277157626e2d8b8268_02404427',
  'variables' => 
  array (
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57626e2d8e12b0_55241883',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57626e2d8e12b0_55241883')) {
function content_57626e2d8e12b0_55241883 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '277157626e2d8b8268_02404427';
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