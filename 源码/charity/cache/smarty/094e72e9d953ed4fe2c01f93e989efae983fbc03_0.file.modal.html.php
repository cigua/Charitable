<?php /* Smarty version 3.1.27, created on 2016-07-04 10:35:46
         compiled from "C:\xampp\htdocs\charity\charity\application\views\index\modal.html" */ ?>
<?php
/*%%SmartyHeaderCode:36315779cb82302e94_69522016%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '094e72e9d953ed4fe2c01f93e989efae983fbc03' => 
    array (
      0 => 'C:\\xampp\\htdocs\\charity\\charity\\application\\views\\index\\modal.html',
      1 => 1467512833,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36315779cb82302e94_69522016',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5779cb8230c638_76124937',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5779cb8230c638_76124937')) {
function content_5779cb8230c638_76124937 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '36315779cb82302e94_69522016';
?>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">添加福利</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">福利选择</label>
                        <div class="col-sm-10">
                            <select class="form-control">
                                <option>请选择福利分类</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">作者</label>
                        <div class="col-sm-10">
                            <select class="form-control">
                                <option>请选择作者</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">福利名称</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="壁纸名称">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">图片上传</label>
                        <div class="col-sm-10">
                            <input type="file" id="exampleInputFile">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">文件上传</label>
                        <div class="col-sm-10">
                            <input type="file" id="exampleInputFile">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">是否启用</label>
                        <div class="col-sm-10">
                            <label class="radio-inline">
                                <input type="radio" id="inlineradio1" value="option1">显示</label>
                            <label class="radio-inline">
                                <input type="radio" id="inlineradio2" value="option2">关闭</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">是否推荐</label>
                        <div class="col-sm-10">
                            <label class="radio-inline">
                                <input type="radio" id="inlineradio1" value="option1">推荐</label>
                            <label class="radio-inline">
                                <input type="radio" id="inlineradio2" value="option2">不推荐</label>
                        </div>
                    </div>

                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                <button type="button" class="btn btn-primary">确认添加</button>
            </div>
        </div>
    </div>
</div><?php }
}
?>