<?php /* Smarty version 3.1.27, created on 2016-06-17 15:37:28
         compiled from "E:\xampp\htdocs\charity\charity\application\views\company\form.html" */ ?>
<?php
/*%%SmartyHeaderCode:77165763a8b89d8899_44576856%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66a2e5bedd5d42f9f3a67f88faff5de5c80d0843' => 
    array (
      0 => 'E:\\xampp\\htdocs\\charity\\charity\\application\\views\\company\\form.html',
      1 => 1466148778,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77165763a8b89d8899_44576856',
  'variables' => 
  array (
    'id' => 0,
    'row' => 0,
    'checkOption' => 0,
    'statusOption' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5763a8b8a22c32_54302417',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5763a8b8a22c32_54302417')) {
function content_5763a8b8a22c32_54302417 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '77165763a8b89d8899_44576856';
?>
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="passportModalLabel"><?php if ($_smarty_tpl->tpl_vars['id']->value) {?>修改机构<?php } else { ?>添加机构<?php }?></h4>
        </div>
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['c_id'];?>
" />
        <div class="modal-body">
            <div class="alert alert-dismissible" role="alert" style="display: none;">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong></strong>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">机构名称</label>
                <div class="col-sm-6">
                    <input type="text" name="c_name" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['c_name'];?>
" placeholder="机构名称" datatype="*" nullmsg="机构名称" />
                </div>
                <label style="color:red;">*</label>
                <span class="help-inline"></span>
            </div>
            <?php if (!$_smarty_tpl->tpl_vars['row']->value['c_id']) {?>
            <div class="form-group">
                <label class="col-sm-2 control-label">登录密码</label>
                <div class="col-sm-6">
                    <input type="password" name="c_password" class="form-control" value="" placeholder="登录密码" datatype="*6-18" nullmsg="请填写6-18位登录密码" />
                </div>
                <label style="color:red;">*</label>
                <span class="help-inline"></span>
            </div>
            <?php }?>
            <div class="form-group">
                <label class="col-sm-2 control-label">机构简介</label>
                <div class="col-sm-6">
                    <textarea name="c_des" id="c_des" style="width:270px;"><?php echo $_smarty_tpl->tpl_vars['row']->value['c_des'];?>
</textarea>

                </div>
                <label style="color:red;">*</label>
                <span class="help-inline"></span>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">机构创建时间</label>
                <div class="col-sm-6">
                    <input type="text" name="c_createTime" id="c_createTime" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['c_createTime'];?>
" placeholder="机构创建时间" datatype="*" nullmsg="机构创建时间" />
                </div>
                <label style="color:red;">*</label>
                <span class="help-inline"></span>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">机构地址</label>
                <div class="col-sm-6" id="city">
                    <select class="prov" name="prov" datatype="*" nullmsg="省"></select>
                    <select class="city" name="city" disabled="disabled" datatype="*" nullmsg="市"></select>
                    </div>
                <label style="color:red;">*</label>
                <span class="help-inline"></span>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">机构详细地址</label>
                <div class="col-sm-6">
                    <input type="text" name="c_addr" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['c_addr'];?>
" placeholder="机构详细地址" datatype="*" nullmsg="机构详细地址" />
                </div>
                <label style="color:red;">*</label>
                <span class="help-inline"></span>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">登记人姓名</label>
                <div class="col-sm-6">
                    <input type="text" name="c_username" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['c_username'];?>
" placeholder="登记人姓名" datatype="*" nullmsg="登记人姓名" />
                </div>
                <label style="color:red;">*</label>
                <span class="help-inline"></span>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">登记人电话</label>
                <div class="col-sm-6">
                    <input type="text" name="c_userphone" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['c_userphone'];?>
" placeholder="登记人电话" datatype="*" nullmsg="登记人电话" />
                </div>
                <label style="color:red;">*</label>
                <span class="help-inline"></span>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">登记人身份证</label>
                <div class="col-sm-6">
                    <input type="text" name="c_userID" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['c_userID'];?>
" placeholder="登记人身份证" datatype="*" nullmsg="登记人身份证" />
                </div>
                <label style="color:red;">*</label>
                <span class="help-inline"></span>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">开户许可证</label>
                <div class="col-sm-4">
                    <input type="file" name="upload_open" id="upload_open" onchange="return ajaxFileUpload();" />
                    <?php if ($_smarty_tpl->tpl_vars['row']->value['c_open_img']) {?>
                    <div style="padding-top:10px;"><img src="<?php echo @constant('IMAGE_URL');
echo $_smarty_tpl->tpl_vars['row']->value['c_open_img'];?>
" id="upload-img_open" style="max-width:200px;"/></div>
                    <input type="hidden" name="c_open_img" id="file_open"  value="<?php echo $_smarty_tpl->tpl_vars['row']->value['c_open_img'];?>
" datatype="*" nullmsg="请上传开户许可证"/>
                    <?php } else { ?>
                    <input type="hidden" name="c_open_img" id="file_open" datatype="*" nullmsg="请上传开户许可证" />
                    <div style="padding-top:10px;"><img src="" id="upload-img_open" style="max-width:200px; display:none"/></div>
                    <?php }?>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">机构组织代码证</label>
                <div class="col-sm-4">
                    <input type="file" name="upload" id="upload" onchange="return ajaxFileUpload2();" />
                    <?php if ($_smarty_tpl->tpl_vars['row']->value['c_company_img']) {?>
                    <div style="padding-top:10px;"><img src="<?php echo @constant('IMAGE_URL');
echo $_smarty_tpl->tpl_vars['row']->value['c_company_img'];?>
" id="upload-img" style="max-width:200px;"/></div>
                    <input type="hidden" name="c_company_img" id="file"  value="<?php echo $_smarty_tpl->tpl_vars['row']->value['c_company_img'];?>
" datatype="*" nullmsg="请上传机构组织代码证"/>
                    <?php } else { ?>
                    <input type="hidden" name="c_company_img" id="file" datatype="*" nullmsg="请上传机构组织代码证" />
                    <div style="padding-top:10px;"><img src="" id="upload-img" style="max-width:200px; display:none"/></div>
                    <?php }?>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">审批状态</label>
                <div class="col-sm-6">
                    <select name="c_check_status" id="c_check_status" style="width:270px;" datatype="*" nullmsg="请选择审批状态">
                        <?php echo $_smarty_tpl->tpl_vars['checkOption']->value;?>

                    </select>
                </div>
                <label style="color:red;">*</label>
                <span class="help-inline"></span>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">机构状态</label>
                <div class="col-sm-6">
                    <select name="c_status" id="c_status" style="width:270px;" datatype="*" nullmsg="请选择机构状态">
                        <?php echo $_smarty_tpl->tpl_vars['statusOption']->value;?>

                    </select>
                </div>
                <label style="color:red;">*</label>
                <span class="help-inline"></span>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
            <button type="submit" class="btn btn-primary btn-submit">确认修改</button>
        </div>
    </div>
</div>
<?php echo '<script'; ?>
 src="/public/js/umeditor/umeditor.config.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/public/js/umeditor/umeditor.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/public/js/umeditor/lang/zh-cn/zh-cn.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/public/js/jquery.ajaxfileupload.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/public/js/bootstrap-customfile.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/public/js/bootstrap-datetimepicker.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/public/js/jquery.cityselect.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $(document).ready(function(){
        /*初始化上传文件*/
        $("#upload").customFileInput();
        $("#upload_open").customFileInput();
        $("#c_createTime").datetimepicker({
            format: "yyyy-mm-dd hh:ii",
            autoclose: 1,
            pickerPosition: "bottom-left"
        });

        $("#city").citySelect({prov:'<?php echo $_smarty_tpl->tpl_vars['row']->value['c_prov'];?>
', city : '<?php echo $_smarty_tpl->tpl_vars['row']->value['c_city'];?>
'});
    })


    var processing = false;
    function ajaxFileUpload2() {
        if ( processing == true ) {
            return false;
        }

        var dialog = $.dialog.loading('上传中，请稍等！').show();
        processing = true;
        $.ajaxFileUpload({
            url:'/company/upload2/',
            secureuri:false,
            fileElementId:'upload',
            dataType: 'json',
            success: function (data, status){
                setTimeout( function() {
                    processing = false;
                }, 500);
                dialog.close();

                if ( data.status == 'y' ) {
                    $("#upload-img").attr('src', data.info.http).show();
                    $('#file').val(data.info.file);
                    return;
                }

                $.dialog.error(data.info);
                return false;
            },
            error: function (data, status, e){
                $.dialog.error(e);
            }
        });
    }

    function ajaxFileUpload() {
        if ( processing == true ) {
            return false;
        }

        var dialog = $.dialog.loading('上传中，请稍等！').show();
        processing = true;
        $.ajaxFileUpload({
            url:'/company/upload/',
            secureuri:false,
            fileElementId:'upload_open',
            dataType: 'json',
            success: function (data, status){
                setTimeout( function() {
                    processing = false;
                }, 500);
                dialog.close();

                if ( data.status == 'y' ) {
                    $("#upload-img_open").attr('src', data.info.http).show();
                    $('#file_open').val(data.info.file);
                    return;
                }

                $.dialog.error(data.info);
                return false;
            },
            error: function (data, status, e){
                $.dialog.error(e);
            }
        });
    }
<?php echo '</script'; ?>
><?php }
}
?>