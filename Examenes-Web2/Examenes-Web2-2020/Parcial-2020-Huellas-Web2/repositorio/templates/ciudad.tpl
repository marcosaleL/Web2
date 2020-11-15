{include 'header.tpl'}
<h1>Las ciudades con sede son :</h1>
  
   <table  class="table table-hover table-dark" style='width:900px'>
    <tr style='color:orange'><th scope='col'>Ciudad</th></tr>
     {foreach $ciudades item= ciudad}         
        <tr> 
         <td> <b> {strtoupper($ciudad->nombre_ciudad)}</b> </td>
        </tr>
                
    {/foreach}
    </table>