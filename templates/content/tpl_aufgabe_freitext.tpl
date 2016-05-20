{* Header einbinden *}
{include file="header.tpl"}

<h2>{$module_headline}</h2>
<p>{$infoText}</p>
<div class="row well well-default">
	<div class="col-md-4">
		<p>{$text}</p>
	</div>
	<div class="col-md-8">
		<textarea class="form-control"></textarea>
	</div>
	<div class="col-md-12">
		<button type="button" class="btn btn-default pull-right" onClick="toggleAnswer1()">Lösung anzeigen</button>
	</div>
	<div class="col-md-12">
		<p class="bg-info aufgabe1 padding" style="display: none;">{$loesung1}</p>
	</div>
</div>
<div class="row well well-default {$hideBlock}">
	<div class="col-md-4">
		<p>{$text2}</p>
	</div>
	<div class="col-md-8">
		<textarea class="form-control"></textarea>
	</div>
	<div class="col-md-12">
		<button type="button" class="btn btn-default pull-right" onClick="toggleAnswer2()">Lösung anzeigen</button>
	</div>
	<div class="col-md-12">
		<p class="bg-info aufgabe2 padding" style="display: none;">{$loesung2}</p>
	</div>
</div>
{* Footer einbinden *}
{include file="footer.tpl"}