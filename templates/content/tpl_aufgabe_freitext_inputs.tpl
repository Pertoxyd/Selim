{* Header einbinden *}
{include file="header.tpl"}

<h2>{$module_headline}</h2>
<div class="row">
	<div class="col-md-12">
		<p class="bg-primary padding {$noExample}">{$beispiel}</p>
		<p>{$text}</p>
	</div>
</div>
<form name="a1" action="">
	<div class="row">
		<div class="col-md-3">
			<input class="form-control answer {$input1}" type="text" name="tf1" value="" />
		</div>
		<div class="col-md-3">
			<input class="form-control answer {$input2}" type="text" name="tf2" value="" />
		</div>
		<div class="col-md-3">
			<input class="form-control answer {$input3}" type="text" name="tf3" value="" />
		</div>
		<div class="col-md-3">
			<input class="form-control answer {$input4}" type="text" name="tf4" value="" />
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<br />
			<p id="alertBox"></p>
		</div>
	</div>
	<div class="row hidden">
		<div class="col-md-12">
			<input class="form-control correctAnswers" type="text" name="ca1" value="{$loesungen}" />
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<button type="button" class="btn btn-default pull-right" onClick="{$ValidateFunction}">Abschicken</button>
		</div>
	</div>
</form>

{* Footer einbinden *}
{include file="footer.tpl"}