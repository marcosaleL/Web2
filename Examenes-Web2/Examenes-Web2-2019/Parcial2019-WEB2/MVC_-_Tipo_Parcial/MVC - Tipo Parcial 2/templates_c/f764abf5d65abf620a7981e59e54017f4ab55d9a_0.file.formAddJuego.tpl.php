<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-21 03:41:14
  from 'C:\xampp\htdocs\Proyectos\Web 2\Prácticos 2020\MVC - Tipo Parcial 2\templates\formAddJuego.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8f91ba56b6e2_65408081',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f764abf5d65abf620a7981e59e54017f4ab55d9a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\Web 2\\Prácticos 2020\\MVC - Tipo Parcial 2\\templates\\formAddJuego.tpl',
      1 => 1603243441,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8f91ba56b6e2_65408081 (Smarty_Internal_Template $_smarty_tpl) {
?><h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
<?php if ($_smarty_tpl->tpl_vars['error']->value != '') {?>
        <p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
<?php }?>
<form action="insertJuego" method="POST">
            <label for="nombreJuego">Nombre del juego: </label> <input type="text" name="nombreJuego">
            <label for="cantJugadores">Cantidad de jugadores: </label> <input type="number" name="cantJugadores">
            <select name="juegoDeCartas" id="juegoDeCartas">
            <option value="" selected>Elegir...</option>
                    <option value="Sí">Es juego de cartas</option>
                    <option value="No">No es juego de cartas</option>          
            </select>
            <input type="submit" name="enviar" id="" value="Agregar juego">
</form>
<?php }
}
