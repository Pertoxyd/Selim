{* Header einbinden *}
{include file="header.tpl"}

<h2>{$module_headline}</h2>
<div class="row">
	<div class="col-md-12">
		<p>{$text}</p>
	</div>
</div>
<form name="a1" action="">
	<div class="row">
		<div class="col-md-3">
			<input class="form-control {$input1}" type="text" name="tf1" value="" placeholder="{$placeholder1}" />
		</div>
		<div class="col-md-3">
			<input class="form-control {$input2}" type="text" name="tf2" value="" placeholder="{$placeholder2}" />
		</div>
		<div class="col-md-3">
			<input class="form-control {$input3}" type="text" name="tf3" value="" placeholder="{$placeholder3}"  />
		</div>
		<div class="col-md-3">
			<input class="form-control {$input4}" type="text" name="tf4" value="" placeholder="{$placeholder4}" />
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
			<input class="form-control" type="text" name="ca1" value="{$loesung1}" />
			<input class="form-control" type="text" name="ca2" value="{$loesung2}" />
			<input class="form-control" type="text" name="ca3" value="{$loesung3}" />
			<input class="form-control" type="text" name="ca4" value="{$loesung4}" />
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