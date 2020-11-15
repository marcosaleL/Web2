{include 'header.tpl'}

<h2>Estos son los centros de salud con MAS de 50 camas ocupadas  </h2>

    
<table  class="table table-hover table-dark" style='width:900px'>
 <tr style='color:orange'><th scope='col'>Ciudad</th><th scope='col'>Tipo</th><th scope='col'>Nombre</th><th scope='col'>Camas</th><th scope='col'>Camas Ocupadas</th></tr>
     {foreach $centros item= centro}         
        <tr>
         <td> <b> {strtoupper($centro->nombre)}</b> </td>
          <td> <b> {strtoupper($centro->tipo)}</b> </td>
         <td> <b> {strtoupper($centro->nombre_centro)}</b> </td>
         <td> <b> {strtoupper($centro->cant_camas)}</b> </td>
         <td> <b> {strtoupper($centro->cant_camas_ocupadas)} </b> </td>
         
        </tr>
                
    {/foreach}
    </table>