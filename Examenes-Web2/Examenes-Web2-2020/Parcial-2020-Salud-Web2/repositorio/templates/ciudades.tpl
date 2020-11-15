{include 'header.tpl'}

<h2>Estas son las ciudades en zona de riesgo  </h2>

    
<table  class="table table-hover table-dark" style='width:900px'>
    <tr style='color:orange'><th scope='col'>Ciudad</th></tr>
     {foreach $ciudades item= ciudad}          
        <tr> 
         <td> <b> {strtoupper($ciudad->nombre)}</b> </td>
        </tr>
                
    {/foreach}
    </table>