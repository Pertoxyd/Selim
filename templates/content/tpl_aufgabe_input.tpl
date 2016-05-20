{* Header einbinden *}
{include file="header.tpl"}

<h2>{$module_headline}</h2>
<div class="row">
	<div class="col-md-12">
		<p>{$text}</p>
		<p class="bg-primary padding">{$beispiel}</p>
	</div>
</div>
<div class="row">
	<div class="col-md-6" >
		<div class="input-group">
			<input type="text" class="form-control" placeholder="Gib hier deine Lösung ein">
			<span class="input-group-btn">
				<button class="btn btn-default" type="button" onClick="{$ValidateFunction}">Abschicken</button>
			</span>
		</div><!-- /input-group -->
	</div>
</div>
{* Footer einbinden *}
{include file="footer.tpl"}