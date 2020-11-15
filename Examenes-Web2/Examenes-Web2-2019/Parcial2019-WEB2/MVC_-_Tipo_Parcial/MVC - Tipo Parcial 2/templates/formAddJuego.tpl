<h1>{$titulo}</h1>
{if $error != ''}
        <p>{$error}</p>
{/if}
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
