{include file="header.tpl"}
        <table>
        <thead>
            <tr>
                <th>Título</th>
                <th>Año</th>
                <th>Estudio</th>              
            </tr>
        <thead>
        <tbody>
        {foreach from=$movies item=movie}
            <tr>
            <td>{$movie->title}</td>
            <td>{$movie->year}</td>
            <td>{$movie->studio}</td>         
        {/foreach}
        </tbody>    
        </table>
{include file="footer.tpl"}