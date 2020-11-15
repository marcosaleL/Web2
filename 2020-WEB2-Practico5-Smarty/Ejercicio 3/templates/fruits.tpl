<div class="container">
    <ul class="list-group">
        {foreach from=$frutas item=tarea}
            {if $tarea == 'bananas'}
                <li class="amarillo">{$tarea}</li>
            {else}
                <li class="normal">{$tarea|capitalize}</li>  
                {*<li class="normal">{$tarea|upper}</li>*}
            {/if}
        {/foreach}
    </ul>
</div>