{* Header einbinden *}
{include file="header.tpl"}

<h2>{$module_headline}</h2>
<p>{$infoText}</p>
<div class="row well well-default">
    <div class="col-md-12">
        <p id="cursor-change">{$taskText}</p>
    </div>
</div>
<button type="button" class="btn btn-default pull-right" onClick="{$controlMethod}">Überprüfen</button>
{* Footer einbinden *}
{include file="footer.tpl"}