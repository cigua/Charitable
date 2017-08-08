<?php /* Smarty version 3.1.27, created on 2016-07-13 12:20:06
         compiled from "C:\xampp\htdocs\charity\charity\application\views\common\menu.html" */ ?>
<?php
/*%%SmartyHeaderCode:2245785c176b00ad4_55109576%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afe4365fd221e72ac8d7fe4f226a030dba9b628c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\charity\\charity\\application\\views\\common\\menu.html',
      1 => 1468288991,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2245785c176b00ad4_55109576',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5785c176b51ba8_95751669',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5785c176b51ba8_95751669')) {
function content_5785c176b51ba8_95751669 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2245785c176b00ad4_55109576';
?>
<div id="left">
    <div class="btn-group-vertical" id="km_ment" role="group" aria-label="...">
        <?php if (@constant('A_ROLE') == 0) {?>
        <div class="btn-group" role="group">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>后台用户管理
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="/admin/index/">管理员管理</a></li>
                <li><a href="/share/index/">分享配置管理</a></li>
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
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>机构动态管理
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="/article/index/">动态列表</a></li>
            </ul>
        </div>
        <div class="btn-group" role="group">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>慈善商品管理
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="/donation/index/">慈善项目列表</a></li>
                <li><a href="/product/index/">机构商品列表</a></li>
            </ul>
        </div>
        <div class="btn-group" role="group">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>用户管理
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="/member/index/">用户列表</a></li>
            </ul>
        </div>

        <div class="btn-group" role="group">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>日志管理
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="/DonationLog/index/">慈善分享记录</a></li>
            </ul>
        </div>
        <div class="btn-group" role="group">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>留言管理
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="/message/index/">留言列表</a></li>
            </ul>
        </div>
        <div class="btn-group" role="group">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>提现管理
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="/funds/index/">提现审核列表</a></li>
                <li><a href="/BankLog/index/">提现记录</a></li>
            </ul>
        </div>
        <?php } else { ?>
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
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>机构动态管理
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="/article/index/">动态列表</a></li>
            </ul>
        </div>
        <div class="btn-group" role="group">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>慈善商品管理
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="/donation/index/">慈善项目列表</a></li>
                <li><a href="/product/index/">机构商品列表</a></li>
            </ul>
        </div>
        <div class="btn-group" role="group">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>提现管理
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="/BankLog/index/">提现记录</a></li>
            </ul>
        </div>
        <?php }?>
    </div>

</div><?php }
}
?>