<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-19 12:30:03
  from 'C:\xampp\htdocs\Proyectos\Web 2\Prácticos 2020\MVC - Tipo Parcial 2\templates\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8d6aab761c80_25351107',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad4fa379228fa744795b1732a8b8e549610de75e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Proyectos\\Web 2\\Prácticos 2020\\MVC - Tipo Parcial 2\\templates\\footer.tpl',
      1 => 1603072937,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f8d6aab761c80_25351107 (Smarty_Internal_Template $_smarty_tpl) {
?><footer>
<h3>Ejercicio Tipo Parcial 2</h3>

<p>Nuestro cliente De Chiripa SA necesita un sistema de control de apuestas para su casino online. La empresa nos provee la siguiente base de datos:

Apuesta: (id: int, fecha: datetime, monto: int,  id_juego: int,)
Juego: (id: int, nombre: varchar(45), cantidad_jugadores: int, juego_de_cartas: boolean)
</p>
<p>Implemente una solución MVC para generar la siguiente funcionalidad. Además dibuje el diagrama de componentes MVC desarrollado.
</p>


<p>A) Obtener y mostrar todos los juegos disponibles..</p>

<p>B) Agregar o eliminar un juego.</p>

<p>C) Obtener y mostrar la lista de apuestas con su juego.</p>

<p>D) Agregar una apuesta a un juego.</p>

Responda las siguientes preguntas:
¿Qué cambios realizaría para ordenar los listados por diferentes criterios?

<p>Order by CRITERIO</p>

¿En qué lugar del sistema verificaría que las apuestas estén dentro de dos valores mínimo y máximo permitidos? ¿Como haria para que estos valores fuesen modificables por un usuario administrador?

<p>Lo verificaría en el controller de apuestas. Aunque también podría hacerlo en SQL pero todavía no vimos eso (¿lo vemos en BDD?).</p>

</footer>

</body>
</html><?php }
}
