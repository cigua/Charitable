<?php /* Smarty version 3.1.27, created on 2016-06-14 15:19:53
         compiled from "E:\xampp\htdocs\runda\runda\application\views\productscreen\form.html" */ ?>
<?php
/*%%SmartyHeaderCode:8309575fb01901efb1_63356640%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e4e3d94837a02846122e2931fb4ba4a73cc60b6' => 
    array (
      0 => 'E:\\xampp\\htdocs\\runda\\runda\\application\\views\\productscreen\\form.html',
      1 => 1465888782,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8309575fb01901efb1_63356640',
  'variables' => 
  array (
    'menuList' => 0,
    'key' => 0,
    'vo' => 0,
    'row' => 0,
    'categoryOption' => 0,
    'count' => 0,
    'imglist' => 0,
    'statusOption' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_575fb01909df39_17733891',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_575fb01909df39_17733891')) {
function content_575fb01909df39_17733891 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '8309575fb01901efb1_63356640';
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
            <li><a href="/productscreen/index">产品管理 </a></li>
            <li class="active">显示屏管理</li>
        </ol>

        <div class="right_con">

            <form class="form-horizontal" id="form-save" action="/productscreen/save/">

                <?php if ($_smarty_tpl->tpl_vars['menuList']->value) {?>
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
                            <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['p_id'];?>
" />
                            <div class="form-group">
                                <label class="col-sm-2 control-label">商品标题中文</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="p_title_cn" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['p_title_cn'];?>
" placeholder="商品名称" datatype="*" nullmsg="请填写商品名称" style="width: 500px;"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">商品标题英文</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="p_title_en" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['p_title_en'];?>
" placeholder="商品名称" datatype="*" nullmsg="请填写商品名称" style="width: 500px;"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">所在分类</label>
                                <div class="col-sm-4">
                                    <select datatype="*"  nullmsg="请选择所在分类" id="p_type" name="p_type">
                                        <?php echo $_smarty_tpl->tpl_vars['categoryOption']->value;?>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">封面图片</label>
                                <div class="col-sm-4">
                                    <input type="file" name="upload" id="upload" onchange="return ajaxFileUpload2();" />
                                    <?php if ($_smarty_tpl->tpl_vars['row']->value['p_img']) {?>
                                    <div style="padding-top:10px;"><img src="<?php echo @constant('IMAGE_URL');
echo $_smarty_tpl->tpl_vars['row']->value['p_img'];?>
" id="upload-img" style="max-width:200px;"/></div>
                                    <input type="hidden" name="p_img" id="file"  value="<?php echo $_smarty_tpl->tpl_vars['row']->value['p_img'];?>
" datatype="*" nullmsg="请上传封面图片"/>
                                    <?php } else { ?>
                                    <input type="hidden" name="p_img" id="file" datatype="*" nullmsg="请上传封面图片" />
                                    <div style="padding-top:10px;"><img src="" id="upload-img" style="max-width:200px; display:none"/></div>
                                    <?php }?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">主图</label>
                                <div class="col-sm-4">
                                    <input id="uploadCover" type="file" onchange="return ajaxFileUpload();" name="uploadCover">
                                    <input id="uploadImgs" type="hidden" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['count']->value)===null||$tmp==='' ? 0 : $tmp);?>
" name="uploadImgs">
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
                                                    <div style="padding-top:10px;"><img src="/upload/<?php echo $_smarty_tpl->tpl_vars['vo']->value['pm_img'];?>
" style="max-width:200px;"/></div>

                                                    <input type="hidden" name="file[]" value="<?php echo $_smarty_tpl->tpl_vars['vo']->value['pm_img'];?>
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
                                <label class="col-sm-2 control-label">状态</label>
                                <div class="col-sm-4">
                                    <select name="p_status" datatype="*" null="请选择状态">
                                        <?php echo $_smarty_tpl->tpl_vars['statusOption']->value;?>

                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">排序</label>
                                <div class="col-sm-4">
                                    <input type="text" style="width:100px;" class="form-control" name="p_order" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['p_order'];?>
" placeholder="排序" datatype="n" nullmsg="请填写排序" />
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane" id="product_right">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">产品详情中文</label>
                                <div class="col-sm-4">
                                    <textarea name="p_content_cn" id="p_content_cn" style="width:800px; height:250px;" ><?php echo $_smarty_tpl->tpl_vars['row']->value['p_content_cn'];?>
</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">产品详情英文</label>
                                <div class="col-sm-4">
                                    <textarea name="p_content_en" id="p_content_en" style="width:800px; height:250px;" ><?php echo $_smarty_tpl->tpl_vars['row']->value['p_content_en'];?>
</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="params_right">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">参数介绍中文</label>
                                <div class="col-sm-4">
                                    <textarea name="p_params_cn" id="p_params_cn" style="width:800px; height:250px;" ><?php echo $_smarty_tpl->tpl_vars['row']->value['p_params_cn'];?>
</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">参数介绍英文</label>
                                <div class="col-sm-4">
                                    <textarea name="p_params_en" id="p_params_en" style="width:800px; height:250px;" ><?php echo $_smarty_tpl->tpl_vars['row']->value['p_params_en'];?>
</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="solution_right">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">解决方案中文</label>
                                <div class="col-sm-4">
                                    <textarea name="p_solution_cn" id="p_solution_cn" style="width:800px; height:250px;"><?php echo $_smarty_tpl->tpl_vars['row']->value['p_solution_cn'];?>
</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">解决方案英文</label>
                                <div class="col-sm-4">
                                    <textarea name="p_solution_en" id="p_solution_en" style="width:800px; height:250px;" ><?php echo $_smarty_tpl->tpl_vars['row']->value['p_solution_en'];?>
</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="case_right">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">项目案例中文</label>
                                <div class="col-sm-4">
                                    <textarea name="p_case_cn" id="p_case_cn" style="width:800px; height:250px;"  ><?php echo $_smarty_tpl->tpl_vars['row']->value['p_case_cn'];?>
</textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">项目案例英文</label>
                                <div class="col-sm-4">
                                    <textarea name="p_case_en" id="p_case_en" style="width:800px; height:250px;"  ><?php echo $_smarty_tpl->tpl_vars['row']->value['p_case_en'];?>
</textarea>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <?php }?>
                <div class="form-group">
                    <label class="control-label"></label>
                    <div class="controls">
                        <button class="btn btn-primary" type="submit">保存</button>
                    </div>
                </div>
            </form>
        </div>

        <!--&lt;!&ndash;弹窗&ndash;&gt;-->
        <!--<form class="form-horizontal" action="/ajax/productscreen/save/" method="post">-->
        <!--<div class="modal fade" id="adminModal" tabindex="-1" role="dialog"></div>-->
        <!--</form>-->
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
        editor = UM.getEditor('p_content_cn');
        UM.getEditor('p_content_en');
        UM.getEditor('p_params_cn');
        UM.getEditor('p_params_en');
        UM.getEditor('p_solution_cn');
        UM.getEditor('p_solution_en');
        UM.getEditor('p_case_cn');
        UM.getEditor('p_case_en');

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
    $("#uploadCover").customFileInput();

    var processing = false;
    function ajaxFileUpload2() {
        if ( processing == true ) {
            return false;
        }

        var dialog = $.dialog.loading('上传中，请稍等！').show();
        processing = true;
        $.ajaxFileUpload({
            url:'/productscreen/upload/',
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


        var count = parseInt($('#uploadImgs').val());
        var rel = count + 1;
        var dialog = $.dialog.loading('上传中，请稍等！').show();
        processing = true;
        $.ajaxFileUpload({
            url:'/productscreen/uploadImg/',
            secureuri:false,
            fileElementId:'uploadCover',
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
                    html += '<input type="hidden" name="file[]" value="'+data.info.file+'" />';
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