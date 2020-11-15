{include 'header.tpl'}
<form action="agregarcentro" method="post" >     
            
            <div class="form-group">
                <label>Tipo de centro</label>
                    <input name="tipo" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Nombre del centro</label>
                    <input name="nombre" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Cantidad de camas</label>
                <input name="cantidad" type="number" class="form-control">
            </div>
            <div class="form-group">
                <label>Ocupacion</label>
                <input name="ocupacion" type="text" class="form-control">
            </div>
            
            <div class="form-group">
                <label>Ciudad</label>
               <select name="idciudad" type="number" class="form-control" >
                {foreach from=$listaciudades item=ciudad} 
                    <option value={$ciudad->id}>{$ciudad->nombre}</option>
                {/foreach}
            </select>
            </div>
            

            <button type="submit" class="btn btn-dark">Guardar</button>
</form>