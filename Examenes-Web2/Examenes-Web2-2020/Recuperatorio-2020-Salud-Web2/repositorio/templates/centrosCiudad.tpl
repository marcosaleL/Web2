{include 'header.tpl'}

<h2>Estos son los centros de salud de  {$centroCiudad}  </h2>

    
<table  class="table table-hover table-dark" style='width:900px'>
 <tr style='color:orange'><th scope='col'>Tipo</th><th scope='col'>Nombre</th></tr>
     {foreach $centros item= centro}         
        <tr>        
          <td> <b> {strtoupper($centro->tipo)}</b> </td>
          <td> <b> {strtoupper($centro->nombre_centro)}</b> </td>       
        </tr>                
    {/foreach}
</table>