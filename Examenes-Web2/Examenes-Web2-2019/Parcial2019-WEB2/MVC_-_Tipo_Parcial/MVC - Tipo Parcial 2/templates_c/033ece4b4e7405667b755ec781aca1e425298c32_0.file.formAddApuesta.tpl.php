<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-19 03:41:15
  from 'C:\xampp\htdocs\Proyectos\Web 2\Prácticos 2020\MVC - Tipo Parcial 2\templates\formAddApuesta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8ceebbe89642_25452529',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '033ece4b4e7405667b755ec781aca1e425298c32' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\Web 2\\Prácticos 2020\\MVC - Tipo Parcial 2\\templates\\formAddApuesta.tpl',
      1 => 1603071672,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8ceebbe89642_25452529 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
<form action="insertApuesta" method="POST">
            <label for="fecha">Fecha: </label> <input type="text" name="fecha">
            <label for="monto">Monto </label> <input type="number" name="monto">
            <select name="id_juego" id="id_juego">
            <option value="" selected>Elegir juego <option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['juegos']->value, 'juego');
$_smarty_tpl->tpl_vars['juego']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['juego']->value) {
$_smarty_tpl->tpl_vars['juego']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['juego']->value->id;?>
"> <?php echo $_smarty_tpl->tpl_vars['juego']->value->nombre;?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>            
            </select>
            <input type="submit" name="enviar" id="" value="Agregar apuesta">
</form><?php }
}
