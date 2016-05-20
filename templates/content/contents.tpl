{* Header einbinden *}
{include file="header.tpl"}

<h2>{$module_headline}</h2>
<div class="row">
	<div class="col-md-12">
		<p>{$text}</p>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<table class="table table-striped">
			<thead>
				<th>Abschnitt</th>
				<th>Link zur Seite</th>
			</thead>
			<tbody>
				{$inhaltsverzeichnis}
			</tbody>
		</table>
	</div>
</div>
{* Footer einbinden *}
{include file="footer.tpl"}