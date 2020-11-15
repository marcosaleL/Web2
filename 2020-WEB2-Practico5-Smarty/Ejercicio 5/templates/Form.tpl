{include 'templates/header.tpl'}
    <form class="form-group" method= "POST" action="validarForm" >
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" name="nombre" id="nombre" value="{$nombre}">
        </div>
        <div class="form-group">
            <label for="mail">Mail:</label>
            <input type="text" class="form-control" name="mail" id="mail" value="{$mail}">
        </div>
        <div>
            <label for="contraseña">Contraseña</label>
            <input type="password" class="form-control" name="contraseña" id="contraseña" value="">
        </div>
        <div>
            <label for="contraseña">Repetir contraseña:</label>
            <input type="password" class="form-control" name="repeticionContraseña" id="repeticionContraseña" value="">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>         
    </form>
{include 'templates/footer.tpl'}