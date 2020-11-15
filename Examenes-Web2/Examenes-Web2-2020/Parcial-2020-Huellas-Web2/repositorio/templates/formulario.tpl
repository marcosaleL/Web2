{include 'header.tpl'}


<form action="agregarciudad" method="post" >     
            
    <div class="form-group">
        <label>Nombre Ciudad</label>
        <input name="ciudad" type="text" class="form-control">
    </div>
    <div class="form-group">
        <label>Sede</label>
        <select name="sede" type="number" class="form-control">
                    <option value=1 selected>Si</option>
                     <option value=0 >No</option>
                    </select>
    </div>     
    <button type="submit" class="btn btn-dark">Guardar</button>
</form>