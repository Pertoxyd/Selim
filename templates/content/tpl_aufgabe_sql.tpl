{* Header einbinden *}
{include file="header.tpl"}

<h2>{$module_headline}</h2>
<p>{$text}</p>
<div class="row well well-default">
    <div class="col-md-12">
        <textarea id="loesung1" class="form-control"></textarea>
        <br/>
        <button id="btnloesung1" type="button" class="btn btn-default pull-right disabled" onClick="checkSQL()">Überprüfen</button>
    </div>
</div>
{* Footer einbinden *}
{include file="footer.tpl"}