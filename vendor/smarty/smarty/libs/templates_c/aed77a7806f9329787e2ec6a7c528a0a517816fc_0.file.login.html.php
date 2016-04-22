<?php
/* Smarty version 3.1.29, created on 2016-03-01 17:31:49
  from "C:\xampp\htdocs\condominio\App\Modulos\Views\adm\login.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56d5c3f54e80c7_42823631',
  'file_dependency' => 
  array (
    'aed77a7806f9329787e2ec6a7c528a0a517816fc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\condominio\\App\\Modulos\\Views\\adm\\login.html',
      1 => 1456794710,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56d5c3f54e80c7_42823631 ($_smarty_tpl) {
?>
<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
/css/adm.css" />

<div align="center">
    <h2 class="text-danger">Acesso restrito</h2>
    <?php if ($_smarty_tpl->tpl_vars['msg']->value != '') {?>
            <span class='text-danger'><b><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</b></span>;
    <?php }?>
    <form action="/condominio/Public/adm/login" method="post" name="form">
        <p><b>Login:</b> <input type="text" class="form-control login" name='user_login' /></p>
        <p><b>Senha:</b> <input type="password" class="form-control login" name='senha_login' /></p>
        <p><button type="submit" class="btn btn-primary">Logar</button></p>
    </form>
</div>
<?php }
}
