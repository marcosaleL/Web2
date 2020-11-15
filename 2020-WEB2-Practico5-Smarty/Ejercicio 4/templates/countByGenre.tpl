{include file="header.tpl"}
     <table>
        <thead>
            <tr>
                <th>Género</th>
                <th>Cantidad</th>              
            </tr>           
        <thead>
        <tbody>
        {foreach from=$movies item=movie}
            <tr>
            <td>{$movie->genre}</td>
            <td>{$movie->cantidad}</td>
            </tr>
        {/foreach}
        </tbody>    
    </table>
{include file="footer.tpl"}