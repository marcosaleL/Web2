<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-21 03:41:45
  from 'C:\xampp\htdocs\Proyectos\Web 2\Prácticos 2020\MVC - Tipo Parcial 2\templates\Juegos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8f91d9010899_20185889',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98ed93e21aed025c8d868d3c9318d3b41778f44b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\Web 2\\Prácticos 2020\\MVC - Tipo Parcial 2\\templates\\Juegos.tpl',
      1 => 1603072641,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8f91d9010899_20185889 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['titulo']->value;?>

<table>
        <thead>
            <tr>
                <th>Número del juego</th>
                <th>Cantidad de jugadores</th>
                <th>Juego de Cartas</th>
                <th>Eliminar</th>
            </tr>
        <thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['juegos']->value, 'juego');
$_smarty_tpl->tpl_vars['juego']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['juego']->value) {
$_smarty_tpl->tpl_vars['juego']->do_else = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['juego']->value->nombre;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['juego']->value->cantidad_jugadores;?>
</td>
                    <?php if ($_smarty_tpl->tpl_vars['juego']->value->juego_de_cartas == 1) {?>
                        <td>Sí</td>
                    <?php } else { ?>
                        <td>No</td>
                    <?php }?>
                    <td><a href="deleteJuego/<?php echo $_smarty_tpl->tpl_vars['juego']->value->id;?>
">Eliminar juego</a>
                <tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>    
</table>
<?php }
}
