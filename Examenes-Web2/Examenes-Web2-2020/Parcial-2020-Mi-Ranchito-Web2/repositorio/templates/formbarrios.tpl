{include 'header.tpl'}


<form action="agregarbarrio" method="post" >     
            
            <div class="form-group">
                <label>Barrio </label>
                    <input name="nombre" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Residencial</label>
                    <select name="residencial" type="number" class="form-control">
                    <option value=1 selected>Si</option>
                     <option value=0 >No</option>
                    </select>
            </div>
            
            
            

            <button type="submit" class="btn btn-dark">Guardar</button>
</form>