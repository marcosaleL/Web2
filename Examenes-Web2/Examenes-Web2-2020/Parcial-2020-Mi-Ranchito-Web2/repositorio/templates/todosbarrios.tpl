{include 'header.tpl'}

<h2>Estos son los barrios  de la tabla barrio  </h2>
 
  
<table  class="table table-hover table-dark" style='width:900px'>
    <tr style='color:orange'><th scope='col'>Barrio</th></tr>
        {foreach $barrios item= barrio}         
            <tr> 
            <td> <b> {strtoupper($barrio->nombre)}</b> </td>
            <td> <b> {strtoupper($barrio->residencial)}</b> </td>
            </tr>
                    
        {/foreach}
</table>