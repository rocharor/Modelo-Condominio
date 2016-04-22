<?php
/* Smarty version 3.1.29, created on 2016-03-02 13:24:22
  from "C:\xampp\htdocs\condominio\App\Modulos\Views\adm\adm.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56d6db76ac9443_60668559',
  'file_dependency' => 
  array (
    '5f9ec498e5cc5e148e59ae647493acbfccec613d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\condominio\\App\\Modulos\\Views\\adm\\adm.html',
      1 => 1456862508,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56d6db76ac9443_60668559 ($_smarty_tpl) {
?>
<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
Public/css/adm.css" />
<div>
    <center><h1>Área Administratíva <a href="<?php echo @constant('_CAMINHO_');?>
/adm/logoff"><span class="glyphicon glyphicon-off text-danger"></span></a></h1></center>

    <ul class="nav nav-tabs">
        <li role="presentation" ><a href="<?php echo @constant('_CAMINHO_');?>
/adm/aviso">Avisos</a></li>
        <li role="presentation"><a href="#">Achados e perdidos</a></li>
        <li role="presentation"><a href="#">Classificados</a></li>
        <li role="presentation"><a href="#">Obras</a></li>
    </ul>

    <div class="achados hide">
        <form action="" method="post" name="form_achados">
            <div id='achadosPerdidos' class='cadastros'>
                <h3>Cadastro de achados e perdidos</h3>
                <p><b>Data</b><input type="text" class="form-control" name='achado_data'></p>
                <p><b>Objeto</b><input type="text" class="form-control" name='achado_objeto'></p>
                <p><b>Observação</b><textarea class="form-control" name='achado_obs'></textarea></p>
                <p><input type="submit" class="btn btn-success" value='Salvar' /></p>
            </div>
        </form>
    </div>

    <div class="obras hide">
        <form action="" method="post" name="form_obras">
            <div id='obras' class='cadastros'>
                <h3>Cadastro de obras</h3>
                <p><b>Titulo</b><input type="text" class="form-control" name='obra_titulo'></p>
                <p><b>Data inicio</b><input type="text" class="form-control" name='obra_dtInicio'></p>
                <p><b>Data término</b><input type="text" class="form-control" name='obra_dtFim'></p>
                <p><b>Descrição</b><textarea class="form-control" name='obra_descricao'></textarea></p>
                <p><input type="submit" class="btn btn-success" value='Salvar' /></p>
            </div>
        </form>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['msg']->value != '') {?>
        <span class='text-success'><b><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</b></span>;
    <?php }?>

</div>

<?php echo '<script'; ?>
 type="text/javascript">
    $('#opcoes_cadastro').on('change',function(){
        var opcao = $('#opcoes_cadastro').val();

        $('.cadastros').css('display','none');
        $('#'+opcao).css('display','block');
    })
<?php echo '</script'; ?>
>
<?php }
}
