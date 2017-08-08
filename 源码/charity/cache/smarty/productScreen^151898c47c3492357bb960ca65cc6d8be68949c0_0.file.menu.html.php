<?php /* Smarty version 3.1.27, created on 2016-06-14 15:10:37
         compiled from "E:\xampp\htdocs\runda\runda\application\views\common\menu.html" */ ?>
<?php
/*%%SmartyHeaderCode:31362575fadeddd4ca1_82176550%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '151898c47c3492357bb960ca65cc6d8be68949c0' => 
    array (
      0 => 'E:\\xampp\\htdocs\\runda\\runda\\application\\views\\common\\menu.html',
      1 => 1465887354,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31362575fadeddd4ca1_82176550',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_575fadedddc9a5_31198447',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_575fadedddc9a5_31198447')) {
function content_575fadedddc9a5_31198447 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '31362575fadeddd4ca1_82176550';
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
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>显示屏管理
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="/categoryscreen/index/">显示屏分类管理</a></li>
                <li><a href="/productScreen/index/">显示屏管理</a></li>
            </ul>
        </div>

        <div class="btn-group" role="group">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>照明管理
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="/categorylight/index/">照明分类管理</a></li>
                <li><a href="/productLight/index/">照明管理</a></li>
            </ul>
        </div>

        <div class="btn-group" role="group">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>项目案例管理
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="/categorycase/index/">项目案例分类管理</a></li>
                <li><a href="/case/index/">项目案例</a></li>
            </ul>
        </div>

        <div class="btn-group" role="group">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>新闻管理
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="/categorynews/index/">新闻分类管理</a></li>
                <li><a href="/news/index/">新闻管理</a></li>
            </ul>
        </div>

        <div class="btn-group" role="group">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>留言内容
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="/message/index/">留言内容</a></li>
            </ul>
        </div>
        <div class="btn-group" role="group">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>公司概况
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="/factory/index/">公司概况</a></li>
            </ul>
        </div>
        <div class="btn-group" role="group">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>文章管理
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="/article/index/">文章管理</a></li>
            </ul>
        </div>
        <div class="btn-group" role="group">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>seo管理
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="/seo/index/">seo管理</a></li>
            </ul>
        </div>
    </div>
</div><?php }
}
?>