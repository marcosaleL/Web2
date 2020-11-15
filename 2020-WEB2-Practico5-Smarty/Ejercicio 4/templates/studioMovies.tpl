{include file="header.tpl"}
        <table>
        <thead>
            <tr>
                <th>Título</th>
                <th>Año</th>
                <th>Estudio</th>
                <th>Rentabilidad</th>
                <th>Audiencia</th>                
            </tr>
        <thead>
        <tbody>
        {foreach from=$movies item=movie}
            <tr>
            <td>{$movie->title}</td>
            <td>{$movie->year}</td>
            <td>{$movie->genre}</td>
            <td>{$movie->profitability}</td>
            {if $movie->audience_score gt 60}
                    <td>{$movie->audience_score}{$estrella}</td>
                {else}
                    <td>{$movie->audience_score}</td>
                {/if}              
        {/foreach}
        </tbody>    
        </table>
{include file="footer.tpl"}