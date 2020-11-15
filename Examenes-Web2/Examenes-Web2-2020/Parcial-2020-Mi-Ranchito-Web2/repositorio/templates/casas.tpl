{include 'header.tpl'}

<h2>Estas son las  5 últimas casas de la tabla casas  </h2>

   
<table  class="table table-hover table-dark" style='width:900px'>
 <tr style='color:orange'><th scope='col'>Estado</th><th scope='col'>Direccion</th><th scope='col'>Habitaciones</th><th scope='col'>Dimensión Terreno</th><th scope='col'>Precio</th><th scope='col'>Barrio</th></tr>
     {foreach $casas item= casa}         
        <tr>
         <td> <b> {strtoupper($casa->estado)}</b> </td>
         <td> <b> {strtoupper($casa->direccion)}</b> </td>
         <td> <b> {strtoupper($casa->cantidad_habitaciones)}</b> </td>
         <td> <b> {strtoupper($casa->dimension_terreno)}</b> </td>
         <td> <b> {strtoupper($casa->precio)}</b> </td>
         <td> <b> {strtoupper($casa->nombre)}</b> </td>
        </tr>
                
    {/foreach}
    </table>