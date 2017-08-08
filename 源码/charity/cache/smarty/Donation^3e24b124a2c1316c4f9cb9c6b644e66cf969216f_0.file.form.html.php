<?php /* Smarty version 3.1.27, created on 2016-07-06 09:44:58
         compiled from "C:\xampp\htdocs\charity\charity\application\views\donation\form.html" */ ?>
<?php
/*%%SmartyHeaderCode:32488577c629a22fb12_30149554%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e24b124a2c1316c4f9cb9c6b644e66cf969216f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\charity\\charity\\application\\views\\donation\\form.html',
      1 => 1467512833,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32488577c629a22fb12_30149554',
  'variables' => 
  array (
    'menuList' => 0,
    'key' => 0,
    'vo' => 0,
    'row' => 0,
    'companyOption' => 0,
    'count' => 0,
    'imglist' => 0,
    'statusOption' => 0,
    'personInfo' => 0,
    'moneycount' => 0,
    'moneyList' => 0,
    'bankInfo' => 0,
    'bankOption' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_577c629a2f0494_82988432',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_577c629a2f0494_82988432')) {
function content_577c629a2f0494_82988432 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '32488577c629a22fb12_30149554';
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
            <li><a href="/donation/index">慈善产品管理 </a></li>
            <li class="active">慈善产品</li>
        </ol>

        <div class="right_con">

            <form class="form-horizontal" id="form-save" action="/donation/save/">

                <!--<input type="hidden" value="<?php echo $_GET['uid'];?>
" name="uid" />-->
                <div  class="tabbable" style="margin-top:30px;">
                    <ul class="nav nav-tabs" style=' background:#f0f0f0;'>
                        <?php
$_from = $_smarty_tpl->tpl_vars['menuList']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['vo']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['__foreach_top'] = new Smarty_Variable(array('iteration' => 0));
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['vo']->value) {
$_smarty_tpl->tpl_vars['vo']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_top']->value['iteration']++;
$_smarty_tpl->tpl_vars['__foreach_top']->value['first'] = $_smarty_tpl->tpl_vars['__foreach_top']->value['iteration'] == 1;
$foreach_vo_Sav = $_smarty_tpl->tpl_vars['vo'];
?>
                        <li <?php if ((isset($_smarty_tpl->tpl_vars['__foreach_top']->value['first']) ? $_smarty_tpl->tpl_vars['__foreach_top']->value['first'] : null)) {?>class="active"<?php }?>><a target="rightTop" tag="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
_right" href="#<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
_right" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['vo']->value;?>
</a></li>
                        <?php
$_smarty_tpl->tpl_vars['vo'] = $foreach_vo_Sav;
}
?>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active" id="basic_right">
                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['d_id'];?>
" />
                            <div class="form-group">
                                <label class="col-sm-2 control-label">所在机构</label>
                                <div class="col-sm-4">
                                    <select datatype="*"  nullmsg="请选择所在机构" id="c_id" name="c_id" class="form-control">
                                        <?php echo $_smarty_tpl->tpl_vars['companyOption']->value;?>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">商品标题</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="d_title" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['d_title'];?>
" placeholder="商品标题" datatype="*" nullmsg="请填写商品标题" style="width: 500px;"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">商品详情</label>
                                <div class="col-sm-4">
                                    <textarea name="d_content" datatype="*" nullmsg="请填写商品详情" id="d_content" style="width:800px; height:250px;" ><?php echo $_smarty_tpl->tpl_vars['row']->value['d_content'];?>
</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">封面图片</label>
                                <div class="col-sm-4">
                                    <input type="file" name="upload" id="upload" onchange="return ajaxFileUpload2();" />
                                    <?php if ($_smarty_tpl->tpl_vars['row']->value['d_img']) {?>
                                    <div style="padding-top:10px;"><img src="<?php echo $_smarty_tpl->tpl_vars['row']->value['d_img'];?>
" id="upload-img" style="max-width:200px;"/></div>
                                    <input type="hidden" name="d_img" id="file"  value="<?php echo $_smarty_tpl->tpl_vars['row']->value['d_img'];?>
" datatype="*" nullmsg="请上传封面图片"/>
                                    <?php } else { ?>
                                    <input type="hidden" name="d_img" id="file" datatype="*" nullmsg="请上传封面图片" />
                                    <div style="padding-top:10px;"><img src="" id="upload-img" style="max-width:200px; display:none"/></div>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">组织机构证明</label>
                                <div class="col-sm-4">
                                    <input type="file" name="upload_company" id="upload_company" onchange="return ajaxFileUpload();" />
                                    <?php if ($_smarty_tpl->tpl_vars['row']->value['d_company_img']) {?>
                                    <div style="padding-top:10px;"><img src="<?php echo $_smarty_tpl->tpl_vars['row']->value['d_company_img'];?>
" id="upload-img_company" style="max-width:200px;"/></div>
                                    <input type="hidden" name="d_company_img" id="file_company"  value="<?php echo $_smarty_tpl->tpl_vars['row']->value['d_img'];?>
" datatype="*" nullmsg="请上传组织机构证明"/>
                                    <?php } else { ?>
                                    <input type="hidden" name="d_company_img" id="file_company" datatype="*" nullmsg="请上传组织机构证明" />
                                    <div style="padding-top:10px;"><img src="" id="upload-img_company" style="max-width:200px; display:none"/></div>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">善筹图片</label>
                                <div class="col-sm-4">
                                    <input id="upload_Donation" type="file" onchange="return ajaxFileUpload4();" name="upload_Donation">
                                    <input id="uploadDonation" type="hidden" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['count']->value)===null||$tmp==='' ? 0 : $tmp);?>
" name="uploadDonation">
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
                                                <div style="padding-top:10px;"><img src="<?php echo $_smarty_tpl->tpl_vars['vo']->value['di_img'];?>
" style="max-width:200px;"/></div>
                                                <input type="hidden" name="file[]" value="<?php echo $_smarty_tpl->tpl_vars['vo']->value['di_img'];?>
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
                            <div class="form-group">
                                <label class="col-sm-2 control-label">目标金额</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="d_target" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['d_target'];?>
" placeholder="目标金额" datatype="*" nullmsg="请填写目标金额" style="width: 500px;"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">截止时间</label>
                                <div class="col-sm-4">
                                    <input type="text" name="d_endTime" id="d_endTime" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['d_endTime'];?>
" placeholder="截止时间" datatype="*" nullmsg="截止时间" style="width:250px;" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">状态</label>
                                <div class="col-sm-4">
                                    <select name="d_status" datatype="*" nullmsg="请选择慈善状态" class="form-control">
                                        <?php echo $_smarty_tpl->tpl_vars['statusOption']->value;?>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="personal_right">
                            <input type="hidden" name="p_id" id="p_id" value="<?php echo $_smarty_tpl->tpl_vars['personInfo']->value['p_id'];?>
">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">真实姓名</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="p_realname" value="<?php echo $_smarty_tpl->tpl_vars['personInfo']->value['p_realname'];?>
" placeholder="真实姓名" datatype="*" nullmsg="请填写真实姓名" style="width: 500px;"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">身份证</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="p_idCard" value="<?php echo $_smarty_tpl->tpl_vars['personInfo']->value['p_idCard'];?>
" placeholder="身份证" datatype="*" nullmsg="请填写身份证" style="width: 500px;"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">联系电话</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="p_phone" value="<?php echo $_smarty_tpl->tpl_vars['personInfo']->value['p_phone'];?>
" placeholder="联系电话" datatype="*" nullmsg="请填写联系电话" style="width: 500px;"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">证件照</label>
                                <div class="col-sm-4">
                                    <input type="file" name="upload_personal" id="upload_personal" onchange="return ajaxFileUpload3();" />
                                    <?php if ($_smarty_tpl->tpl_vars['personInfo']->value['p_img']) {?>
                                    <div style="padding-top:10px;"><img src="<?php echo $_smarty_tpl->tpl_vars['personInfo']->value['p_img'];?>
" id="upload-img_personal" style="max-width:200px;"/></div>
                                    <input type="hidden" name="p_img" id="file_personal"  value="<?php echo $_smarty_tpl->tpl_vars['personInfo']->value['p_img'];?>
" datatype="*" nullmsg="请上传证件照"/>
                                    <?php } else { ?>
                                    <input type="hidden" name="p_img" id="file_personal" datatype="*" nullmsg="请上传证件照" />
                                    <div style="padding-top:10px;"><img src="" id="upload-img_personal" style="max-width:200px; display:none"/></div>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">资金用途照片</label>
                                <div class="col-sm-4">
                                    <input id="upload_PersonalUsed" type="file" onchange="return ajaxFileUpload5();" name="upload_PersonalUsed">
                                    <input id="uploadPersonal" type="hidden" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['moneycount']->value)===null||$tmp==='' ? 0 : $tmp);?>
" name="uploadPersonal">
                                    <div class="customfile-wrap">
                                        <div id="imagesList_Personal">
                                            <?php if ($_smarty_tpl->tpl_vars['moneyList']->value) {?>
                                            <?php
$_from = $_smarty_tpl->tpl_vars['moneyList']->value;
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
                                            <div id="picPersonalRow_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="img_left">
                                                <a href="javascript:void(0);" rel="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" class="removePersonalImg"><i class="glyphicon glyphicon-remove" rel="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">x</i></a>
                                                <div style="padding-top:10px;"><img src="<?php echo $_smarty_tpl->tpl_vars['vo']->value['mu_img'];?>
" style="max-width:200px;"/></div>

                                                <input type="hidden" name="file_money[]" value="<?php echo $_smarty_tpl->tpl_vars['vo']->value['mu_img'];?>
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
                            <div class="form-group">
                                <label class="col-sm-2 control-label">个人信息状态</label>
                                <div class="col-sm-4">
                                    <select name="p_status" datatype="*" nullmsg="请选择个人信息状态" class="form-control">
                                        <?php echo $_smarty_tpl->tpl_vars['statusOption']->value;?>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="bank_right">
                            <div class="form-group">
                                <input type="hidden" name="b_id" id="b_id" value="<?php echo $_smarty_tpl->tpl_vars['bankInfo']->value['b_id'];?>
">
                                <label class="col-sm-2 control-label">银行类型</label>
                                <div class="col-sm-4">
                                    <select name="b_type" datatype="*" nullmsg="请选择银行类型" class="form-control">
                                        <?php echo $_smarty_tpl->tpl_vars['bankOption']->value;?>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">开户姓名</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="b_name" value="<?php echo $_smarty_tpl->tpl_vars['bankInfo']->value['b_name'];?>
" placeholder="开户姓名" datatype="*" nullmsg="请填写开户姓名" style="width: 500px;"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">银行卡号</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="b_number" value="<?php echo $_smarty_tpl->tpl_vars['bankInfo']->value['b_number'];?>
" placeholder="银行卡号" datatype="*" nullmsg="请填写银行卡号" style="width: 500px;"/>
                                 </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">开户银行</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="b_bankName" value="<?php echo $_smarty_tpl->tpl_vars['bankInfo']->value['b_bankName'];?>
" placeholder="开户银行" datatype="*" nullmsg="请填写开户银行" style="width: 500px;"/>
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
>
    var editor =  '';
    var count  =  '<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
';
    var url = '<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
';
    $(function(){
        editor = UM.getEditor('d_content');
        $("#d_endTime").datetimepicker({
            format: "yyyy-mm-dd hh:ii",
            autoclose: 1,
            pickerPosition: "bottom-left"
        });
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


    /*初始化上传文件*/
    $("#upload").customFileInput();
    $("#upload_company").customFileInput();
    $("#upload_personal").customFileInput();
    $("#upload_Donation").customFileInput();
    $("#upload_PersonalUsed").customFileInput();
    var processing = false;
    function ajaxFileUpload2() {
        if ( processing == true ) {
            return false;
        }

        var dialog = $.dialog.loading('上传中，请稍等！').show();
        processing = true;
        $.ajaxFileUpload({
            url:'/donation/upload/',
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
            url:'/donation/uploadImg/',
            secureuri:false,
            fileElementId:'upload_company',
            dataType: 'json',
            success: function (data, status){
                setTimeout( function() {
                    processing = false;
                }, 500);
                dialog.close();

                if ( data.status == 'y' ) {
                    $("#upload-img_company").attr('src', data.info.http).show();
                    $('#file_company').val(data.info.http);
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
            url:'/donation/uploadPersonal/',
            secureuri:false,
            fileElementId:'upload_personal',
            dataType: 'json',
            success: function (data, status){
                setTimeout( function() {
                    processing = false;
                }, 500);
                dialog.close();

                if ( data.status == 'y' ) {
                    $("#upload-img_personal").attr('src', data.info.http).show();
                    $('#file_personal').val(data.info.http);
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


        var count = parseInt($('#uploadDonation').val());
        var rel = count + 1;
        var dialog = $.dialog.loading('上传中，请稍等！').show();
        processing = true;
        $.ajaxFileUpload({
            url:'/donation/uploadDonation/',
            secureuri:false,
            fileElementId:'upload_Donation',
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



    function ajaxFileUpload5() {
        if ( processing == true ) {
            return false;
        }


        var count = parseInt($('#uploadPersonal').val());
        var rel = count + 1;
        var dialog = $.dialog.loading('上传中，请稍等！').show();
        processing = true;
        $.ajaxFileUpload({
            url:'/donation/uploadPersonalUsed/',
            secureuri:false,
            fileElementId:'upload_PersonalUsed',
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
                    html += '<div id="picPersonalRow_'+count+'" class="img_left">';
                    html += '<a href="javascript:void(0);" rel="'+count+'" class="removePersonalImg"><i class="glyphicon glyphicon-remove" rel="'+count+'">x</i></a>';
                    html += '<div style="padding-top:10px;"><img src="'+ data.info.http +'" style="max-width:200px;"/></div>';
                    html += '<div class="order">';
                    html += '<input type="hidden" name="file_money[]" value="'+data.info.http+'" />';
                    html += '</div>';
                    html += '</div>';
                    $('#imagesList_Personal').append(html);
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
    $(document).on("click",".removePersonalImg",function(){
        var rel = $(this).attr('rel');
        $('#picPersonalRow_' + rel).remove();
    });
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ("common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>