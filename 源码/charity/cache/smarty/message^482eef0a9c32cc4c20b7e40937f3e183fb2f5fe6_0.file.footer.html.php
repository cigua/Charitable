<?php /* Smarty version 3.1.27, created on 2016-07-05 23:27:40
         compiled from "C:\xampp\htdocs\charity\charity\application\views\common\footer.html" */ ?>
<?php
/*%%SmartyHeaderCode:27111577bd1eca6f773_20799552%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '482eef0a9c32cc4c20b7e40937f3e183fb2f5fe6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\charity\\charity\\application\\views\\common\\footer.html',
      1 => 1467512833,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27111577bd1eca6f773_20799552',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_577bd1eca724f9_82250032',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_577bd1eca724f9_82250032')) {
function content_577bd1eca724f9_82250032 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '27111577bd1eca6f773_20799552';
?>
<div class="bottom">Copyright © 2014-2015 xxx. All Rights Reserved</div>

<?php echo '<script'; ?>
>
    window.onload=function() {
        var Aleft=document.getElementById('left');
        var Aright=document.getElementById('right');

        Aleft.style.minHeight=window.innerHeight-130+"px";
        Aright.style.minHeight=window.innerHeight-130+"px";
        Aright.style.width=window.innerWidth-207+"px";

    };
    window.onresize=function() {
        var Aleft=document.getElementById('left');
        var Aright=document.getElementById('right');

        Aleft.style.minHeight=window.innerHeight-130+"px";
        Aright.style.minHeight=window.innerHeight-130+"px";
        Aright.style.width=window.innerWidth-207+"px";

    };

    $(function(){
        $.getJSON("/ajax/stat/data/", function( response ) {
            if ( response.code != 1 ) { return false;}

            $("#companyName").after(response.data.name);
        });
    });
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
?>