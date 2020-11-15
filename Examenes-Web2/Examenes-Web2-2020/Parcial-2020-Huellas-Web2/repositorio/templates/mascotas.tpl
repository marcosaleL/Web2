{include 'header.tpl'}
<h1>Las últimas 3 mascotas de la lista son :</h1>

    
<table  class="table table-hover table-dark" style='width:900px'>
 <tr style='color:orange'><th scope='col'>Ciudad</th><th scope='col'>Nombre</th><th scope='col'>Años</th><th scope='col'>Estado</th></tr>
     {foreach $mascotas item= mascota}         
        <tr>
            <td> <b> {strtoupper($mascota->nombre_ciudad)}</b> </td>
            <td> <b> {strtoupper($mascota->nombre)}</b> </td>
            <td> <b> {strtoupper($mascota->edad)}</b> </td>
            <td> <b> {strtoupper($mascota->estado)}</b> </td>
        </tr>
                
    {/foreach}
    </table>