<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-19 03:26:32
  from 'C:\xampp\htdocs\Proyectos\Web 2\Prácticos 2020\MVC - Tipo Parcial 2\templates\Apuestas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8ceb482a1e12_66118556',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d839d97ec78940c5e7b392782b2644ffd4cdf7b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\Web 2\\Prácticos 2020\\MVC - Tipo Parcial 2\\templates\\Apuestas.tpl',
      1 => 1603070791,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f8ceb482a1e12_66118556 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['titulo']->value;?>

<table>
        <thead>
            <tr>
                <th>Apuesta</th>
                <th>Monto</th>
                <th>Fecha</th>
            </tr>
        <thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['apuestas']->value, 'apuesta');
$_smarty_tpl->tpl_vars['apuesta']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['apuesta']->value) {
$_smarty_tpl->tpl_vars['apuesta']->do_else = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['apuesta']->value->nombre;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['apuesta']->value->monto;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['apuesta']->value->fecha;?>
</td>
                <tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>    
</table>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
