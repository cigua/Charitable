<?php /* Smarty version 3.1.27, created on 2016-07-20 14:10:20
         compiled from "C:\xampp\htdocs\charity\charity\application\views\member\addlog.html" */ ?>
<?php
/*%%SmartyHeaderCode:27586578f15cc8b48b3_26774268%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62b90670b12858d306c1249c78e7186f8b8ce6f0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\charity\\charity\\application\\views\\member\\addlog.html',
      1 => 1468994963,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27586578f15cc8b48b3_26774268',
  'variables' => 
  array (
    'row' => 0,
    'typeOption' => 0,
    'companyOption' => 0,
    'anonymousOption' => 0,
    'count' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_578f15cc8fa2d9_55795179',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_578f15cc8fa2d9_55795179')) {
function content_578f15cc8fa2d9_55795179 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '27586578f15cc8b48b3_26774268';
echo $_smarty_tpl->getSubTemplate ("common/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<link href="/public/js/umeditor/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">

<div class="main">
    <?php echo $_smarty_tpl->getSubTemplate ("common/menu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


    <div id="right">
        <!--面包屑导航-->
        <ol class="breadcrumb">
            <li><a href="/member/index">用户列表管理 </a></li>
            <li class="active">添加捐赠</li>
        </ol>

        <div class="right_con">

            <form class="form-horizontal" id="form-save" action="/ajax/member/save/">
                <div class="tab-pane active" id="basic_right">
                    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['c_id'];?>
" />
                    <div class="form-group">
                        <label class="col-sm-2 control-label">捐赠人名称</label>
                        <div class="col-sm-4 controls">
                            <input type="text" class="form-control" name="c_name" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['c_name'];?>
" placeholder="名称" datatype="*" nullmsg="请填写捐赠人名称" style="width: 500px;"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">捐赠类型</label>
                        <div class="col-sm-4">
                            <select datatype="*"  nullmsg="请选择捐赠类型" id="c_type" name="c_type" class="form-control" style="width: 200px;">
                                <?php echo $_smarty_tpl->tpl_vars['typeOption']->value;?>

                            </select>
                        </div>
                    </div>
                    <div class="form-group controls">
                        <label class="col-sm-2 control-label">所在机构</label>
                        <div class="col-sm-4">
                            <select datatype="*"  nullmsg="请选择机构" id="c_cid" name="c_cid" class="form-control" style="width: 200px;">
                                <?php echo $_smarty_tpl->tpl_vars['companyOption']->value;?>

                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">捐赠金额</label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" name="c_price" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['c_price'];?>
" placeholder="金额" datatype="*" nullmsg="捐赠金额" style="width: 500px;"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">捐赠内容</label>
                        <div class="col-sm-4">
                            <textarea name="c_content" id="c_content" style="width:800px; height:250px;" ><?php echo $_smarty_tpl->tpl_vars['row']->value['c_content'];?>
</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">匿名状态</label>
                        <div class="col-sm-4">
                            <select datatype="*"  nullmsg="请选择匿名状态" id="c_anonymous" name="c_anonymous" class="form-control" style="width: 200px;">
                                <?php echo $_smarty_tpl->tpl_vars['anonymousOption']->value;?>

                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label"></label>
                        <div class="controls">
                            <button class="btn btn-primary" type="submit">保存</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <!--&lt;!&ndash;弹窗&ndash;&gt;-->
        <!--<form class="form-horizontal" action="/ajax/case/save/" method="post">-->
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
        UM.getEditor('c_content');
        $("#upload").customFileInput();
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
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->getSubTemplate ("common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>