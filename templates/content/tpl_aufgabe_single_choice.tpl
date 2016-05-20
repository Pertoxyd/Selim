{* Header einbinden *}
{include file="header.tpl"}

<h2>{$module_headline}</h2>
<div class="row">
	<div class="col-md-12">
		<p class="bg-primary padding {$beispielVerstecken}">{$beispiel}</p>
		<p>{$text}</p>
		{$single_choice}
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<br />
		<p id="alertBox"></p>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<button type="button" class="btn btn-default pull-right" onClick="{$ValidateFunction}">Abschicken</button>
	</div>
</div>
{* Footer einbinden *}
{include file="footer.tpl"}