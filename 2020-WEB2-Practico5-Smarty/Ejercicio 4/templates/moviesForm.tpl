{include file="header.tpl"}
<div>
    <a href="showMovies">Mostrar todas</a> 

    <form action="showByStudio" method="GET"> 
    <label for="studio">Nombre del estudio: </label> <input type="text" name="studio">
    <button type="submit">Buscar películas</button>
    </form> 
    
    <form action="showByGenero" method="GET"> 
    <label for="genre">Nombre del género: </label> <input type="text" name="genre">
    <button type="submit">Buscar películas</button>
    </form> 

    <form action="searchGenre" method="GET"> 
    <label for="searchGenre">Nombre del género: </label> <input type="text" name="searchGenre">
    <button type="submit">Buscar género</button>
    </form> 

    <form action="insertMovie" method="POST">
    <label for="id">Id película: </label> <input type="number" name="id">
    <label for="title">Título: </label> <input type="text" name="title">
    <label for="genre">Género: </label> <input type="text" name="genre">
    <label for="studio">Estudio: </label> <input type="text" name="studio">
    <label for="audience_score">Audiencia: </label> <input type="number" name="audience_score">
    <label for="profitability">Rentabilidad: </label> <input type="numer" name="profitability">
    <label for="year">Año: </label> <input type="numer" name="year">
    <input type="submit" name="enviar" id="" value="Agregar película">
    </form>

    <a href="count">Contar por genero </a>
</div>
{include file="footerInicio.tpl"}
