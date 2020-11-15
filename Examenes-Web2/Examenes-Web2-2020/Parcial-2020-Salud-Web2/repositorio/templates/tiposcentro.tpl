{include 'header.tpl'}

<h2>Estos son centros tipo {$tipo} </h2>

   
       <table  class="table table-hover table-dark" style='width:900px'>
 <tr style='color:orange'><th scope='col'>Nombre</th><th scope='col'>Cant-camas</th><th scope='col'>Ocupación</th></tr>
    {foreach $centros item= centro}            
        <tr>
            <td> <b> {strtoupper($centro->nombre_centro)}</b> </td>
            <td> <b> {strtoupper($centro->cant_camas)}</b> </td>
            <td> <b> {strtoupper($centro->ocupacion)} %</b> </td>      
        </tr>
                
    {/foreach}
    </table>
