{* Header einbinden *}
{include file="header.tpl"}

<h2>{$module_headline}</h2>
<div class="row">
	<div class="col-md-12">
		<p>{$text}</p>
		<br />
		<br />
		<p>Du hast Anmerkungen, Fragen oder Anregungen? Schreib uns dein Feedback!</p>
		<div class="btn-group">
			<a href="mailto:{$emailadress}" type="button" class="btn btn-primary btn-lg">
				<span class="glyphicon glyphicon-envelope"></span>
			</a>
			<a href="mailto:{$emailadress}" type="button" class="btn btn-primary btn-lg">Mailprogramm öffnen</a>
		</div>
	</div>
</div>
{* Footer einbinden *}
{include file="footer.tpl"}