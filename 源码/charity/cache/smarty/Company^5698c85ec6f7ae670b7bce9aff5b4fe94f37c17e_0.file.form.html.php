<?php /* Smarty version 3.1.27, created on 2016-07-05 23:26:01
         compiled from "C:\xampp\htdocs\charity\charity\application\views\company\form.html" */ ?>
<?php
/*%%SmartyHeaderCode:16863577bd189034a32_04006248%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5698c85ec6f7ae670b7bce9aff5b4fe94f37c17e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\charity\\charity\\application\\views\\company\\form.html',
      1 => 1467512833,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16863577bd189034a32_04006248',
  'variables' => 
  array (
    'id' => 0,
    'row' => 0,
    'checkOption' => 0,
    'statusOption' => 0,
    'count' => 0,
    'imglist' => 0,
    'key' => 0,
    'vo' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_577bd1890d6c16_86585567',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_577bd1890d6c16_86585567')) {
function content_577bd1890d6c16_86585567 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '16863577bd189034a32_04006248';
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
            <li><a href="/company/index">机构管理 </a></li>
            <li class="active"><?php if (!$_smarty_tpl->tpl_vars['id']->value) {?>修改机构<?php } else { ?>添加机构<?php }?></li>
        </ol>

        <div class="right_con">

            <form class="form-horizontal" id="form-save" action="/ajax/company/save/">

                <!--<input type="hidden" value="<?php echo $_GET['uid'];?>
" name="uid" />-->
                <div  class="tabbable" style="margin-top:30px;">
                    <div class="tab-content">
                        <div class="tab-pane active" id="basic_right">
                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['c_id'];?>
" />
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
                                    <textarea name="c_des" class="form-control" id="c_des" style="width:270px;"><?php echo $_smarty_tpl->tpl_vars['row']->value['c_des'];?>
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
                                    <select class="prov" name="prov" datatype="*" nullmsg="省" class="form-control"></select>
                                    <select class="city" name="city" disabled="disabled" datatype="*" nullmsg="市" class="form-control"></select>
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
                                <label class="col-sm-2 control-label">机构logo</label>
                                <div class="col-sm-4">
                                    <input type="file" name="upload_avatar" id="upload_avatar" onchange="return ajaxFileUpload3();" />
                                    <?php if ($_smarty_tpl->tpl_vars['row']->value['c_avatar']) {?>
                                    <div style="padding-top:10px;"><img src="<?php echo $_smarty_tpl->tpl_vars['row']->value['c_avatar'];?>
" id="upload-img_avatar"   style="max-width:200px;"/></div>
                                    <input type="hidden" name="c_avatar" id="file_avatar"  value="<?php echo $_smarty_tpl->tpl_vars['row']->value['c_avatar'];?>
" datatype="*" nullmsg="请上传logo"/>
                                    <?php } else { ?>
                                    <input type="hidden" name="c_avatar" id="file_avatar" datatype="*" nullmsg="请上传logo" />
                                    <div style="padding-top:10px;"><img src="" id="upload-img_avatar" style="max-width:200px; display:none"/></div>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">开户许可证</label>
                                <div class="col-sm-4">
                                    <input type="file" name="upload_open" id="upload_open" onchange="return ajaxFileUpload();" />
                                    <?php if ($_smarty_tpl->tpl_vars['row']->value['c_open_img']) {?>
                                    <div style="padding-top:10px;"><img src="<?php echo $_smarty_tpl->tpl_vars['row']->value['c_open_img'];?>
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
                                    <div style="padding-top:10px;"><img src="<?php echo $_smarty_tpl->tpl_vars['row']->value['c_company_img'];?>
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
                            <div class="form-group">
                                <label class="col-sm-2 control-label">机构图片</label>
                                <div class="col-sm-4">
                                    <input id="upload_Company" type="file" onchange="return ajaxFileUpload4();" name="upload_Company">
                                    <input id="uploadCompany" type="hidden" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['count']->value)===null||$tmp==='' ? 0 : $tmp);?>
" name="uploadCompany">
                                    <div class="customfile-wrap">
                                        <div id="imagesList">
                                            <?php if ($_smarty_tpl->tpl_vars['imglist']->value) {?>
                                            <?php
$_from = $_smarty_tpl->tpl_vars['imglist']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['vo']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['vo']->value) {
$_smarty_tpl->tpl_vars['vo']->_loop = true;
$foreach_vo_Sav = $_smarty_tpl->tpl_vars['vo'];
?>
                                            <div id="picRow_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="img_left">
                                                <a href="javascript:void(0);" rel="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="removeImg"><i class="glyphicon glyphicon-remove" rel="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">x</i></a>
                                                <div style="padding-top:10px;"><img src="<?php echo $_smarty_tpl->tpl_vars['vo']->value['ci_img'];?>
" style="max-width:200px;"/></div>

                                                <input type="hidden" name="file[]" value="<?php echo $_smarty_tpl->tpl_vars['vo']->value['ci_img'];?>
" />

                                            </div>
                                            <?php
$_smarty_tpl->tpl_vars['vo'] = $foreach_vo_Sav;
}
?>

                                            <?php }?>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label"></label>
                    <div class="controls">
                        <button class="btn btn-primary" type="submit">保存</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
    <div class="clear"></div>
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
    var editor =  '';
    var count  =  '<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
';
    var url = '<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
';
    $(function(){
        /*初始化上传文件*/
        $("#upload").customFileInput();
        $("#upload_open").customFileInput();
        $("#upload_avatar").customFileInput();
        $("#upload_Company").customFileInput();
        $("#c_createTime").datetimepicker({
            format: "yyyy-mm-dd hh:ii",
            autoclose: 1,
            pickerPosition: "bottom-left"
        });

        $("#city").citySelect({prov:'<?php echo $_smarty_tpl->tpl_vars['row']->value['c_prov'];?>
', city : '<?php echo $_smarty_tpl->tpl_vars['row']->value['c_city'];?>
'});
    });

    $("#form-save").Validform({
        ajaxPost: true,
        tipSweep: true,
        tiptype:function(msg,o,cssctl){
            if(o.type == 3)
                $.dialog.tips(msg);
        },
        beforeSubmit:function(curform){
        },
        callback:function(response){
            $.dialog.tips(response.info);
            if ( response.status == 'y' ) {
                window.setTimeout(function(){
                    if(url){
                        location.href = url;
                    }else{
                        location.reload();
                    }

                }, 2000)
            }
        }
    });


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
                    $('#file').val(data.info.http);
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
                    $('#file_open').val(data.info.http);
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

    function ajaxFileUpload3() {
        if ( processing == true ) {
            return false;
        }

        var dialog = $.dialog.loading('上传中，请稍等！').show();
        processing = true;
        $.ajaxFileUpload({
            url:'/company/uploadAvatar/',
            secureuri:false,
            fileElementId:'upload_avatar',
            dataType: 'json',
            success: function (data, status){
                setTimeout( function() {
                    processing = false;
                }, 500);
                dialog.close();

                if ( data.status == 'y' ) {
                    $("#upload-img_avatar").attr('src', data.info.http).show();
                    $('#file_avatar').val(data.info.http);
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
    function ajaxFileUpload4() {
        if ( processing == true ) {
            return false;
        }


        var count = parseInt($('#uploadCompany').val());
        var rel = count + 1;
        var dialog = $.dialog.loading('上传中，请稍等！').show();
        processing = true;
        $.ajaxFileUpload({
            url:'/company/uploadCompany/',
            secureuri:false,
            fileElementId:'upload_Company',
            dataType: 'json',
            success: function (data, status){
                setTimeout( function() {
                    processing = false;
                }, 500);
                dialog.close();

                if ( data.status == 'y' ) {
//                    $("#upload-img").attr('src', data.info.http).show();
//                    $('#file').val(data.info.file);

                    var html = '';
                    html += '<div id="picRow_'+count+'" class="img_left">';
                    html += '<a href="javascript:void(0);" rel="'+count+'" class="removeImg"><i class="glyphicon glyphicon-remove" rel="'+count+'">x</i></a>';
                    html += '<div style="padding-top:10px;"><img src="'+ data.info.http +'" style="max-width:200px;"/></div>';
                    html += '<div class="order">';
                    html += '<input type="hidden" name="file[]" value="'+data.info.http+'" />';
                    html += '</div>';
                    html += '</div>';
                    $('#imagesList').append(html);
                    return;


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
    $(document).on("click",".removeImg",function(){
        var rel = $(this).attr('rel');
        $('#picRow_' + rel).remove();
    });



<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ("common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>