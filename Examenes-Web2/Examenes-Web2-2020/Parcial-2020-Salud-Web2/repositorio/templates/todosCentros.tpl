{include 'header.tpl'}

<h2>Estos son todos los centros de salud de la tabla centro  </h2>

    {foreach $centros item= centro}          
           <ul>
                 
                <li style='color:blue'><b><h1> Nombre del Centro: {$centro->nombre_centro}</h1></b></li>  
                <li style='color:blue'><b><h1> Cantidad de camas : {$centro->cant_camas}</h1></b></li>  
                <li style='color:blue'><b><h1>Porcentaje ocupado : {$centro->ocupacion}%</h1></b></li>  
                
                 
                <li style='color:grey'><b><h1>---------------------------------</b></li> 
            </ul>                        
    {/foreach}
