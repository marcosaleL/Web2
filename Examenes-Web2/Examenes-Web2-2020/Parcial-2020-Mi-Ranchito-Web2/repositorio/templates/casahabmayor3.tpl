{include 'header.tpl'}

<h2>Estas son las casas con MAS de 3 habitaciones  </h2>

    
<table  class="table table-hover table-dark" style='width:900px'>
 <tr style='color:orange'><th scope='col'>Estado</th><th scope='col'>Direccion</th><th scope='col'>Habitaciones</th><th scope='col'>Dimensión Terreno</th><th scope='col'>Precio</th></tr>
     {foreach $casas item= casa}         
        <tr>
         <td> <b> {strtoupper($casa->estado)}</b> </td>
         <td> <b> {strtoupper($casa->direccion)}</b> </td>
         <td> <b> {strtoupper($casa->cantidad_habitaciones)}</b> </td>
         <td> <b> {strtoupper($casa->dimension_terreno)}</b> </td>
         <td> <b> {strtoupper($casa->precio)}</b> </td>
        </tr>
                
    {/foreach}
    </table>