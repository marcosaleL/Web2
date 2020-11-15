{include 'header.tpl'}


<form action="agregarcasa" method="post" >     
            
            <div class="form-group">
                <label>Estado </label>
                    <input name="estado" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Direccion</label>
                    <input name="direccion" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Cantidad de habitaciones</label>
                <input name="habitacion" type="number" class="form-control">
            </div>
            <div class="form-group">
                <label>Dimensión del terreno</label>
                <input name="dimension" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Precio</label>
                <input name="precio" type="number" class="form-control">
            </div>
            <div class="form-group">
                <label>Barrio</label>
               <select name="idbarrio" type="number" class="form-control" >
                {foreach from=$listabarrio item=barrio} 
                    <option value={$barrio->id}>{$barrio->nombre}</option>
                {/foreach}
            </select>
            </div>
            

            <button type="submit" class="btn btn-dark">Guardar</button>
</form>