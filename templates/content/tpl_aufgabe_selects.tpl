{* Header einbinden *}
{include file="header.tpl"}

<h2>{$module_headline}</h2>
<div class="row">
	<div class="col-md-12">
		<p>{$text}</p>
		<form action="" method="post" name="aufgabe3">
			<p>{$selects}</p>
		<button type="button" class="btn btn-default pull-right" name=Button2 value="Korrigieren" onClick="{$btn-check}">Korrigieren</button>
		<button type="button" class="btn btn-default pull-right" onClick="{$btn-allesLoeschen}">Alles löschen</button>
		</form>
		
	</div>
</div>
{* Footer einbinden *}
{include file="footer.tpl"}