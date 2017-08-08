<?php /* Smarty version 3.1.27, created on 2016-06-27 11:03:45
         compiled from "E:\xampp\htdocs\charity\charity\application\views\common\menu.html" */ ?>
<?php
/*%%SmartyHeaderCode:27084577097917901e7_38380710%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66a17b1fd899203f4b722f4ecd02cdd6073b8e44' => 
    array (
      0 => 'E:\\xampp\\htdocs\\charity\\charity\\application\\views\\common\\menu.html',
      1 => 1466996398,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27084577097917901e7_38380710',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_577097918016a5_87227515',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_577097918016a5_87227515')) {
function content_577097918016a5_87227515 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '27084577097917901e7_38380710';
?>
<div id="left">
    <div class="btn-group-vertical" id="km_ment" role="group" aria-label="...">

        <div class="btn-group" role="group">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>用户管理
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="/admin/index/">管理员管理</a></li>
            </ul>
        </div>

        <div class="btn-group" role="group">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>机构管理
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="/company/index/">机构管理</a></li>
            </ul>
        </div>
        <div class="btn-group" role="group">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>慈善管理
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="/article/index/">文章列表</a></li>
            </ul>
        </div>
        <div class="btn-group" role="group">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>慈善商品管理
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="/donation/index/">慈善商品列表</a></li>
                <li><a href="/product/index/">机构商品列表</a></li>
            </ul>
        </div>
    </div>
</div><?php }
}
?>