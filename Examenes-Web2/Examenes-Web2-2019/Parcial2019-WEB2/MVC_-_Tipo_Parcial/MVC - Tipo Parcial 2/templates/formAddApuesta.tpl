{*Consultar si interpreté bien la consiga -> hago un select con los juegos disponibles.}*}

<h1>{$titulo}</h1>
<form action="insertApuesta" method="POST">
            <label for="fecha">Fecha: </label> <input type="text" name="fecha">
            <label for="monto">Monto </label> <input type="number" name="monto">
            <select name="id_juego" id="id_juego">
            <option value="" selected>Elegir juego <option>
                {foreach from=$juegos item=$juego}
                    <option value="{$juego->id}"> {$juego->nombre}</option>
                {/foreach}            
            </select>
            <input type="submit" name="enviar" id="" value="Agregar apuesta">
</form>