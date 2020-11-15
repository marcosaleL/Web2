{include 'header.tpl'}
{$titulo}
<table>
        <thead>
            <tr>
                <th>Número de habitación</th>
                <th>Cantidad de camas</th>
                <th>Descripción</th>
            </tr>
        <thead>
        <tbody>
            {foreach from=$habitaciones item=habitacion}
                <tr>
                    {if $habitacion->ocupada eq 1}                 
                        <td class="ocupada">{$habitacion->nro_habitacion}</td>
                        <td class="ocupada">{$habitacion->cant_camas}</td>
                        <td class="ocupada">{$habitacion->descripcion}</td>
                    {else}
                        <td>{$habitacion->nro_habitacion}</td>
                        <td>{$habitacion->cant_camas}</td>
                        <td>{$habitacion->descripcion}</td>
                    {/if}
                <tr>
            {/foreach}
        </tbody>    
</table>
<a href="habitaciones">Ver todas las habitaciones del complejo</a>
<a href="habitacionesDisponibles">Ver habitaciones disponibles</a>
{include 'formAddHabitacion.tpl'}
{include 'footer.tpl'}