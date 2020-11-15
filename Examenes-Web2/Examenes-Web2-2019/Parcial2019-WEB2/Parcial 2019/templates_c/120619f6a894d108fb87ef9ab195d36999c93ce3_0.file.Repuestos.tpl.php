<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-21 03:47:24
  from 'C:\xampp\htdocs\Proyectos\Web 2\Prácticos 2020\Parcial 2019\templates\Repuestos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8f932c1bfb34_47835608',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '120619f6a894d108fb87ef9ab195d36999c93ce3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\Web 2\\Prácticos 2020\\Parcial 2019\\templates\\Repuestos.tpl',
      1 => 1603241760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8f932c1bfb34_47835608 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['titulo']->value;?>

<table>
        <thead>
            <tr>
                <th>Id Repuesto</th>
                <th>Proovedor</th>
                <th>Descripcion</th>
                <th>Precio</th>
                <th>Nombre</th>
                <th>Optica</th>
            </tr>
        <thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['repuestos']->value, 'repuesto');
$_smarty_tpl->tpl_vars['repuesto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['repuesto']->value) {
$_smarty_tpl->tpl_vars['repuesto']->do_else = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['repuesto']->value->id_repuesto;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['repuesto']->value->proovedor;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['repuesto']->value->descripcion;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['repuesto']->value->precio;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['repuesto']->value->nombre;?>
</td>
                    <?php if ($_smarty_tpl->tpl_vars['repuesto']->value->tipo == 'opticas') {?>
                        <td><img src="images/optica.png" alt="opticas"</td>
                    <?php } else { ?>
                        <td>No es optica</td>
                    <?php }?>
                <tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>    
</table>
<?php }
}
