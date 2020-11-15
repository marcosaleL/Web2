{include 'header.tpl'}
<form action="verCentrosCiudades" method="post" >     
            
            
            
            <div class="form-group">
                <label>Ciudad</label>
               <select name="idciudad" type="number" class="form-control" >
                {foreach from=$listaciudades item=ciudad} 
                    <option value={$ciudad->nombre}>{$ciudad->nombre}</option>
                {/foreach}
            </select>
            </div>
            

            <button type="submit" class="btn btn-dark">Buscar Centros</button>
</form>