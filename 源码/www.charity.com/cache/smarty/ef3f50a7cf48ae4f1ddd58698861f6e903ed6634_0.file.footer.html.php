<?php /* Smarty version 3.1.27, created on 2016-07-03 20:28:57
         compiled from "C:\xampp\htdocs\charity\www.charity.com\application\views\common\footer.html" */ ?>
<?php
/*%%SmartyHeaderCode:114425779050925f257_54109657%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef3f50a7cf48ae4f1ddd58698861f6e903ed6634' => 
    array (
      0 => 'C:\\xampp\\htdocs\\charity\\www.charity.com\\application\\views\\common\\footer.html',
      1 => 1467513216,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114425779050925f257_54109657',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_577905092665a3_04267947',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_577905092665a3_04267947')) {
function content_577905092665a3_04267947 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '114425779050925f257_54109657';
?>
<div class="wx_menu clearafter">
    <div class="menu_left">
        <a href="/member/index">
            <img src="<?php echo @constant('M_AVATAR');?>
">
            <div class="menu_info">
                <p><?php echo @constant('M_NAME');?>
</p><p class="color_blue">个人中心</p></div>
        </a>
    </div>
    <div class="menu_right"><a href='/company/register'>机构注册</a></div>
</div><?php }
}
?>