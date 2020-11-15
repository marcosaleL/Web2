{include 'header.tpl'}


<form action="agregarmascota" method="post" >     
            
            <div class="form-group">
                <label>Edad Mascota</label>
                    <input name="edad" type="number" class="form-control">
            </div>
            <div class="form-group">
                <label>Estado de la Mascota</label>
                    <input name="estado" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Nombre de la Mascota</label>
                <input name="mascota" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Ciudad</label>
               <select name="id_ciudad" type="text" class="form-control" >
                {foreach from=$listaciudad item=ciudad} 
                    <option value={$ciudad->id_ciudad}>{$ciudad->nombre_ciudad}</option>
                {/foreach}
            </select>
            </div>
            

            <button type="submit" class="btn btn-dark">Guardar</button>
</form>