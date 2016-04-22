<?php
/* Smarty version 3.1.29, created on 2016-02-25 18:57:49
  from "C:\xampp\htdocs\condominio_new\App\Modulos\Views\achados_perdidos.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56cf409d39a0a7_56998575',
  'file_dependency' => 
  array (
    'be98d6521c029200f9d8d00cbca96f05b7e844ca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\condominio_new\\App\\Modulos\\Views\\achados_perdidos.html',
      1 => 1456101462,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56cf409d39a0a7_56998575 ($_smarty_tpl) {
?>
<div align="center">
    <h1>Achados e perdidos</h1>
</div>

<table class="table table-striped">
    <tr>
        <td><b>Data</b></td>
        <td><b>Objeto</b></td>
        <td><b>Observação</b></td>
        <td><b>Status</b></td>
    </tr>
    <tr>
        <td>01/01/2016</td>
        <td>Chave xxxx</td>
        <td>falar com fulano de tal</td>
        <td><span class="text-danger"><b>Pendente</b></span></td>
    </tr>
    <tr>
        <td>25/01/2016</td>
        <td>Boneca yyyyy</td>
        <td>falar com fulano de tal</td>
        <td><span class="text-success"><b>Devolvido</b></span></td>
    </tr>
</table>
<?php }
}
