{* Header einbinden *}
{include file="header.tpl"}

<h2>{$module_headline}</h2>
<div class="row">
	<div class="col-md-12">
		<p>{$text}</p>
		<form action="" method="post">
			<p>{$lueckentext}</p>
		<button type="button" class="btn btn-default {$buttonVisibility} pull-right" onClick="{$btn-loesungAnzeigen}">Lösung anzeigen</button>
		<button type="button" class="btn btn-default {$buttonVisibility} pull-right" onClick="{$btn-allesLoeschen}">Alles löschen</button>
		</form>
		
	</div>
</div>
{* Footer einbinden *}
{include file="footer.tpl"}