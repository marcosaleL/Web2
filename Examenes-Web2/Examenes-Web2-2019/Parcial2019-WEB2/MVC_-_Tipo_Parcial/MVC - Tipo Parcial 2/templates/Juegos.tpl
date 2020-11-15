{$titulo}
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
            {foreach from=$juegos item=$juego}
                <tr>
                    <td>{$juego->nombre}</td>
                    <td>{$juego->cantidad_jugadores}</td>
                    {if $juego->juego_de_cartas eq 1}
                        <td>Sí</td>
                    {else}
                        <td>No</td>
                    {/if}
                    <td><a href="deleteJuego/{$juego->id}">Eliminar juego</a>
                <tr>
            {/foreach}
        </tbody>    
</table>
