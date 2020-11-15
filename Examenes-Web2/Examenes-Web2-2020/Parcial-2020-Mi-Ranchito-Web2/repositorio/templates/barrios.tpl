{include 'header.tpl'}

<h2>Estas son los barrios residenciales de la tabla barrio  </h2>

    
    <table  class="table table-hover table-dark" style='width:900px'>
     <tr style='color:orange'><th scope='col'>Barrio</th></tr>
     {foreach $barrios item= barrio}         
        <tr> 
         <td> <b> {strtoupper($barrio->nombre)}</b> </td>
        </tr>
                
    {/foreach}
    </table>