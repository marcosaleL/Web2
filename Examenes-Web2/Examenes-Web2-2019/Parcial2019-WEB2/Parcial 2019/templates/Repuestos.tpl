{$titulo}
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
            {foreach from=$repuestos item=$repuesto}
                <tr>
                    <td>{$repuesto->id_repuesto}</td>
                    <td>{$repuesto->proovedor}</td>
                    <td>{$repuesto->descripcion}</td>
                    <td>{$repuesto->precio}</td>
                    <td>{$repuesto->nombre}</td>
                    {if $repuesto->tipo =='opticas'}
                        <td><img src="images/optica.png" alt="opticas"</td>
                    {else}
                        <td>No es optica</td>
                    {/if}
                <tr>
            {/foreach}
        </tbody>    
</table>
