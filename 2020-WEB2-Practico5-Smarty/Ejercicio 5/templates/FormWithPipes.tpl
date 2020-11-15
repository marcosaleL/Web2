{include 'templates/header.tpl'}
    <form class="form-group" method= "POST" action="validarForm" >
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" name="nombre" id="nombre" value="{$nombre|upper}">
            {*Si no hay que mostrar el nombre con pipes dentro del form, a value le pongo " "*}
        </div>
        <div class="form-group">
            <label for="mail">Mail:</label>
            <input type="email" class="form-control" name="mail" id="mail" value="{$mail|truncate:7:" "}">
            {*Si no hay que mostrar el mail con pipes dentro del form, a value le pongo " "*}
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
    <div>
        <ul>
            <li>{$nombre|upper}</li>
            <li>{$mail|truncate:7:" "}</li>
        </ul>
    </div>
{include 'templates/footer.tpl'}