{include file="header.tpl"}
        {if $movies != null}
            <p>El género {$genre} existe.</p>          
        {else}
            <p>El género {$genre} no existe.</p>  
        {/if}
{include file="footer.tpl"}