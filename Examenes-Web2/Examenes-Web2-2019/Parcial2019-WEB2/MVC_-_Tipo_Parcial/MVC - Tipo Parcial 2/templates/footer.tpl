<footer>
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
</html>