<?php
/* Smarty version 3.1.29, created on 2016-03-08 21:45:54
  from "C:\xampp\htdocs\condominio\App\Modulos\Views\topo.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56df3a02b89781_68205658',
  'file_dependency' => 
  array (
    '55200d05068f6c4ffb203203e32f10960b64b6e9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\condominio\\App\\Modulos\\Views\\topo.html',
      1 => 1457469829,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56df3a02b89781_68205658 ($_smarty_tpl) {
?>
<div class="navbar">
    <div class="container" align="center">
        <span class="visible-sm-block visible-md-block visible-lg-block"><a href="<?php echo @constant('_CAMINHO_');?>
"><h3>Associação de moradores</h3></a></span>
        <span class="visible-xs-block"><a href="/condominio/"><h4>Associação de moradores</h4></a></span>

        <ul class="nav navbar-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo @constant('_CAMINHO_');?>
/AchadosPerdidos">Achados & Perdidos</a></li>
                    <li><a href="<?php echo @constant('_CAMINHO_');?>
/Classificados">Classificados</a></li>
                    <li><a href="<?php echo @constant('_CAMINHO_');?>
/Obras">Obras</a></li>
                    <li><a href="<?php echo @constant('_CAMINHO_');?>
/QuadroAvisos">Quadro de Avisos</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="<?php echo @constant('_CAMINHO_');?>
/adm/login"><b>Login</b></a></li>
                </ul>
            </li>
        </ul>

    </div>
</div>

<?php }
}
