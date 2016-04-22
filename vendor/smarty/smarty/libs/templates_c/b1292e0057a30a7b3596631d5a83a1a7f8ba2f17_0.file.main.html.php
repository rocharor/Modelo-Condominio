<?php
/* Smarty version 3.1.29, created on 2016-03-08 18:18:16
  from "C:\xampp\htdocs\condominio\App\Modulos\Views\main.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56df095883eb04_06502208',
  'file_dependency' => 
  array (
    'b1292e0057a30a7b3596631d5a83a1a7f8ba2f17' => 
    array (
      0 => 'C:\\xampp\\htdocs\\condominio\\App\\Modulos\\Views\\main.html',
      1 => 1457457495,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:topo.html' => 1,
    'file:anuncios.html' => 1,
    'file:rodape.html' => 1,
  ),
),false)) {
function content_56df095883eb04_06502208 ($_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Condomínio</title>
        <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
imagens/favicon.ico" type="image/x-icon">

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="author" content="Ricardo Rocha"/>
        <meta name="copyright" content="Ricardo Rocha"/>
        <meta name="e-mail" content="rocharor@gmail.com"/>
        <meta name="language" content="pt-br"/>
        <meta name="keywords" content="Condominio"/>

        <!-- Includes gerais-->
        <?php echo '<script'; ?>
 type="text/javascript" language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
libs/jquery/jquery-1.11.3.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
libs/jquery/jquery.maskedinput.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" language="javascript" src="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
libs/bootstrap/js/bootstrap.js"><?php echo '</script'; ?>
>
        <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
libs/bootstrap/css/bootstrap.css" />

        <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
css/topo.css" />
        <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
css/rodape.css" />
        <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
css/geral.css" />
    </head>
    <body>
        <div class="geral">
            <div><?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:topo.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>

            <div class="container" style="border: solid 0px; ">
                <div class="row">
                    <ol class="breadcrumb">
                        <li><a href="<?php echo @constant('_CAMINHO_');?>
"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                        <?php if ($_smarty_tpl->tpl_vars['pagina_main']->value != "index.html") {?>
                            <li><span style="color: #aeaeae;"><?php echo $_smarty_tpl->tpl_vars['navegacao']->value;?>
</span></li>
                        <?php }?>
                    </ol>

                    <?php if ($_smarty_tpl->tpl_vars['anuncio']->value == true) {?>
                        <div class="col-lg-9 col-sm-9 col-md-9 col-xs-12" style="border: solid 0px;">
                            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, $_smarty_tpl->tpl_vars['pagina_main']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

                        </div>

                        <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12" style="border: solid 0px;">
                            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:anuncios.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                        </div>
                    <?php } else { ?>
                        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12" style="border: solid 0px;">
                            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, $_smarty_tpl->tpl_vars['pagina_main']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

                        </div>
                    <?php }?>
                </div>
            </div>

            <br /><br /><br />
             <div><?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:rodape.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>
        </div>

    </body>
</html>
<?php }
}