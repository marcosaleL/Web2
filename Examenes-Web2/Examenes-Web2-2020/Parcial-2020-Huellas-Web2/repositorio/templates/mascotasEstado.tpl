{include 'header.tpl'}
<h2>Estas son las  mascotas que estan en estado de : <label><h1 style='color:red'>{$estado}</h1> </label></h2>

    

<table  class="table table-hover table-dark" style='width:900px'>
 <tr style='color:orange'><th scope='col'>Nombre</th><th scope='col'>Edad</th><th scope='col'>Ciudad</th></tr>
     {foreach $mascotas item= mascota}         
        <tr>
           
            <td> <b> {strtoupper($mascota->nombre)}</b> </td>
            <td> <b> {strtoupper($mascota->edad)}</b> </td>
            <td> <b> {strtoupper($mascota->nombre_ciudad)}</b> </td>
            
        </tr>
                
    {/foreach}
    </table>