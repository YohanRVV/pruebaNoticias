<?php
/* Smarty version 4.3.4, created on 2024-01-18 23:39:55
  from 'C:\laragon\www\prueba_noticias\templates\admin\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_65a9b6cba25432_11932581',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86d0a359cc04645bf64bf42d46abecc6301e2dd3' => 
    array (
      0 => 'C:\\laragon\\www\\prueba_noticias\\templates\\admin\\home.tpl',
      1 => 1705612483,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_65a9b6cba25432_11932581 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container mt-4">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['noticias']->value, 'noticia');
$_smarty_tpl->tpl_vars['noticia']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['noticia']->value) {
$_smarty_tpl->tpl_vars['noticia']->do_else = false;
?>
        <div class="row mb-4">
            <div class="col-md-10 mx-auto">
                <div class="card mb-4">
                    <img src="src/images/<?php echo $_smarty_tpl->tpl_vars['noticia']->value['imagen'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['noticia']->value['titulo'];?>
 Imagen" class="card-img-top">
                    <div class="card-body">
                        <h2 class="card-title text-center"><?php echo $_smarty_tpl->tpl_vars['noticia']->value['titulo'];?>
</h2>
                        <hr> <!-- Línea de separación -->
                        <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['noticia']->value['contenido'];?>
</p>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <span><strong>Fecha de Publicación:</strong> <?php echo $_smarty_tpl->tpl_vars['noticia']->value['fecha_publicacion_sin_hora'];?>
</span>
                        <span><strong>Periodista:</strong> <?php echo $_smarty_tpl->tpl_vars['noticia']->value['periodista_nombre'];?>

                            <?php echo $_smarty_tpl->tpl_vars['noticia']->value['periodista_apellido'];?>
</span>
                    </div>
                </div>
            </div>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<div class="video-container">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/B8VcOl4U_HQ?si=VW5SBZdWCgjml0qb"
        title="YouTube video player" frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        allowfullscreen></iframe>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
