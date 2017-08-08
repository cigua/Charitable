<?php /* Smarty version 3.1.27, created on 2016-06-14 15:47:05
         compiled from "E:\xampp\htdocs\runda\runda\application\views\article\form.html" */ ?>
<?php
/*%%SmartyHeaderCode:6777575fb679746389_60883550%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a956a22689e226a442a4ccef7a05d4e28c8d1ab5' => 
    array (
      0 => 'E:\\xampp\\htdocs\\runda\\runda\\application\\views\\article\\form.html',
      1 => 1465887354,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6777575fb679746389_60883550',
  'variables' => 
  array (
    'row' => 0,
    'categoryOption' => 0,
    'statusOption' => 0,
    'count' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_575fb6797a2075_74752723',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_575fb6797a2075_74752723')) {
function content_575fb6797a2075_74752723 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '6777575fb679746389_60883550';
echo $_smarty_tpl->getSubTemplate ("common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<link href="/public/js/umeditor/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
<style>
    #right .nav-tabs { margin-bottom:0;}
    #right .tab-content { border:1px solid #ddd; border-top:none; padding:20px 20px 0;}
    .article{display:none;}
    .img_left { position: relative; float: left; margin-right: 10px;}
    .img_left .order { margin-top: 5px; line-height: 30px;}
    .img_left .order span { margin-right: 5px;}
    .img_left a { position: absolute; top: 14px; right: 2px; display: block; width: 20px; height: 20px; background: #fff; color: #fff; text-align: center; line-height: 20px; font-size: 12px;  border-radius: 999px; opacity: .8;}
</style>
<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("common/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


    <div id="right">
        <!--面包屑导航-->
        <ol class="breadcrumb">
            <li><a href="/article/index">产品管理 </a></li>
            <li class="active">文章管理</li>
        </ol>

        <div class="right_con">

            <form class="form-horizontal" id="form-save" action="/article/save/">
                <div class="tab-pane active" id="basic_right">
                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['n_id'];?>
" />
                    <div class="form-group">
                        <label class="col-sm-2 control-label">所在分类</label>
                        <div class="col-sm-4">
                            <select datatype="*"  nullmsg="请选择所在分类" id="c_id" name="c_id">
                                <?php echo $_smarty_tpl->tpl_vars['categoryOption']->value;?>

                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">标题中文</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="n_title_cn" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['n_title_cn'];?>
" placeholder="标题中文" datatype="*" nullmsg="请填写标题中文" style="width: 500px;"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">标题英文</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="n_title_en" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['n_title_en'];?>
" placeholder="标题英文" datatype="*" nullmsg="请填写标题英文" style="width: 500px;"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">产品详情中文</label>
                        <div class="col-sm-4">
                            <textarea name="n_content_cn" id="n_content_cn" style="width:800px; height:250px;" ><?php echo $_smarty_tpl->tpl_vars['row']->value['n_content_cn'];?>
</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">产品详情英文</label>
                        <div class="col-sm-4">
                            <textarea name="n_content_en" id="n_content_en" style="width:800px; height:250px;" ><?php echo $_smarty_tpl->tpl_vars['row']->value['n_content_en'];?>
</textarea>
                        </div>
                    </div>
                         <div class="form-group">
                        <label class="col-sm-2 control-label">封面图片</label>
                        <div class="col-sm-4">
                            <input type="file" name="upload" id="upload" onchange="return ajaxFileUpload2();" />
                            <?php if ($_smarty_tpl->tpl_vars['row']->value['n_img']) {?>
                            <div style="padding-top:10px;"><img src="<?php echo @constant('IMAGE_URL');
echo $_smarty_tpl->tpl_vars['row']->value['n_img'];?>
" id="upload-img" style="max-width:200px;"/></div>
                            <input type="hidden" name="n_img" id="file"  value="<?php echo $_smarty_tpl->tpl_vars['row']->value['n_img'];?>
" datatype="*" nullmsg="请上传封面图片"/>
                            <?php } else { ?>
                            <input type="hidden" name="n_img" id="file" datatype="*" nullmsg="请上传封面图片" />
                            <div style="padding-top:10px;"><img src="" id="upload-img" style="max-width:200px; display:none"/></div>
                            <?php }?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">状态</label>
                        <div class="col-sm-4">
                            <select name="n_status" datatype="*" null="请选择状态">
                                <?php echo $_smarty_tpl->tpl_vars['statusOption']->value;?>

                            </select>
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

        <!--&lt;!&ndash;弹窗&ndash;&gt;-->
        <!--<form class="form-horizontal" action="/ajax/article/save/" method="post">-->
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
        editor = UM.getEditor('n_content_cn');
        UM.getEditor('n_content_en');


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

    var processing = false;
    function ajaxFileUpload2() {
        if ( processing == true ) {
            return false;
        }

        var dialog = $.dialog.loading('上传中，请稍等！').show();
        processing = true;
        $.ajaxFileUpload({
            url:'/article/upload/',
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
                }else{
                    alert(data.info.msg);
                }

                return false;
            },
            error: function (data, status, e){
                $.dialog.error(e);
            }
        });
    }



<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ("common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>