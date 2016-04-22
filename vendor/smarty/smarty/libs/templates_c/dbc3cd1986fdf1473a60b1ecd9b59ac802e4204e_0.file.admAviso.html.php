<?php
/* Smarty version 3.1.29, created on 2016-03-08 17:44:20
  from "C:\xampp\htdocs\condominio\App\Modulos\Views\adm\admAviso.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56df0164bcafd5_61840543',
  'file_dependency' => 
  array (
    'dbc3cd1986fdf1473a60b1ecd9b59ac802e4204e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\condominio\\App\\Modulos\\Views\\adm\\admAviso.html',
      1 => 1457027683,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56df0164bcafd5_61840543 ($_smarty_tpl) {
?>
<link type="text/css" rel="stylesheet" href="../css/adm.css" />

<div class="avisos ">
    <form action="" method="post" name="form_avisos">
        <div id='avisos' class='cadastros'>
            <h3>Cadastro de avisos</h3>
            <p><b>Titulo</b><input type="text" class="form-control" id='aviso_titulo'></p>
            <p><b>Data</b><input type="text" class="form-control" id='aviso_data' id='aviso_data'></p>
            <p><b>Descrição</b><textarea id="editor_aviso_novo" id="aviso_descricao" ></textarea></p>
            <input type="hidden" name="act" value='setAviso'>
            <p><input type="button" class="btn btn-success act-salvar-aviso" value='Salvar' /></p>
        </div>
    </form>
</div>
<table class="table table-striped" data-caminho="<?php echo @constant('_CAMINHO_');?>
/adm/aviso">
    <tr>
        <td style="width: 50%;"><b>Titulo</b></td>
        <td style="width: 50%;"><b>Data</b></td>
        <td><b>Visualizar</b></td>
        <td><b>Editar</b></td>
        <td><b>Excluir</b></td>
    </tr>
    <?php
$_from = $_smarty_tpl->tpl_vars['avisos']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_aviso_0_saved_item = isset($_smarty_tpl->tpl_vars['aviso']) ? $_smarty_tpl->tpl_vars['aviso'] : false;
$_smarty_tpl->tpl_vars['aviso'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['aviso']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['aviso']->value) {
$_smarty_tpl->tpl_vars['aviso']->_loop = true;
$__foreach_aviso_0_saved_local_item = $_smarty_tpl->tpl_vars['aviso'];
?>
        <tr data-aviso-id="<?php echo $_smarty_tpl->tpl_vars['aviso']->value['aviso_id'];?>
">
            <td><?php echo $_smarty_tpl->tpl_vars['aviso']->value['titulo'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['aviso']->value['data_evento'];?>
</td>
            <td  align="center"><button class="btn btn-info act-visualizar-aviso"><span class="glyphicon glyphicon-eye-open"></span></button></td>
            <td  align="center"><button class="btn btn-primary act-editar-aviso"><span class="glyphicon glyphicon-pencil primary"></span></button></td>
            <td  align="center"><button class="btn btn-danger act-excluir-aviso"><span class="glyphicon glyphicon-trash primary"></span></button></td>
        </tr>
    <?php
$_smarty_tpl->tpl_vars['aviso'] = $__foreach_aviso_0_saved_local_item;
}
if ($__foreach_aviso_0_saved_item) {
$_smarty_tpl->tpl_vars['aviso'] = $__foreach_aviso_0_saved_item;
}
?>
</table>

<!--MODAL VISUALIZAR-->
<div class="modal fade" id='modal_visualizar_aviso'>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h2>Dados</h2>
                <label>Titulo: &nbsp;</label><span id="titulo_visualizar"></span><br>
                <label>Data: &nbsp;</label><span id="data_visualizar"></span><br>
                <label>Descrição: &nbsp;</label><span id="descicao_visualizar"></span>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!--MODAL EDITAR-->
<div class="modal fade" id='modal_editar_aviso'>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h2>Dados</h2>
                <label>Titulo: &nbsp;</label><input class="form-control" name="titulo_editar" id="titulo_editar" /><br>
                <label>Data: &nbsp;</label><input class="form-control" name="data_editar" id="data_editar" /><br>
                <label>Descrição: &nbsp;<textarea class="form-control" id="editor_aviso_editar" name="descricao_editar" ></textarea>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-success act-salvar-edicao" data-dismiss="modal">Salvar</button>
            </div>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
 type="text/javascript" src="../libs/ckeditor_standard/ckeditor.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="../js/adm/aviso.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
    $('#aviso_data').mask('99/99/9999 99:99');
    CKEDITOR.replace("editor_aviso_novo").config.width = 800;
    CKEDITOR.replace("editor_aviso_editar").config.width = 550;
<?php echo '</script'; ?>
><?php }
}
