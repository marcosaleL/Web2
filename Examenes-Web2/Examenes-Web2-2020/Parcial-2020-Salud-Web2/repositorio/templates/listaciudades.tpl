{include 'header.tpl'}

<h2>Estas son las ciudades de la tabla ciudad  </h2>

   
    <table  class="table table-hover table-dark" style='width:900px'>
     {foreach $ciudades item= ciudad}          
        <tr> 
         <td> <b> {strtoupper($ciudad->nombre)}</b> </td>
        </tr>
                
    {/foreach}
    </table>
