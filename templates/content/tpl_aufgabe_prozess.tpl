{* Header einbinden *}
{include file="header.tpl"}

<h2>{$module_headline}</h2>
<div class="row">
	<div class="col-xs-12">
		<p>{$text}</p>
	</div>
</div>
<div class="row">
	<div class="col-md-3">
		<p>{$bereich1}</p>
	</div>
	<div class="col-md-1 text-center">
		<span class="glyphicon glyphicon-arrow-down btn-lg hidden-md hidden-lg {$hide1rstArrow}" aria-hidden="true"></span>
		<span class="glyphicon glyphicon-arrow-right btn-lg hidden-xs hidden-sm {$hide1rstArrow}" aria-hidden="true"></span>
	</div>
	<div class="col-md-3">
		<p>{$bereich2}</p>
	</div>
	<div class="col-md-1 text-center">
		<span class="glyphicon glyphicon-arrow-down btn-lg hidden-md hidden-lg {$hide2ndArrow}" aria-hidden="true"></span>
		<span class="glyphicon glyphicon-arrow-right btn-lg hidden-xs hidden-sm {$hide2ndArrow}" aria-hidden="true"></span>
	</div>
	<div class="col-md-3">
		<p>{$bereich3}</p>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<p>{$bereich4}</p>
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
		<button class="btn btn-default {$hideButton} pull-right" type="button" onClick="{$ValidateFunction}">Abschicken</button>
	</div>
</div>
{* Footer einbinden *}
{include file="footer.tpl"}