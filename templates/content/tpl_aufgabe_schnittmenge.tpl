{* Header einbinden *}
{include file="header.tpl"}

<h2>{$module_headline}</h2>
<div class="row">
	<div class="col-md-12">
		<p>{$text}</p>
	</div>
</div>
<form name="a1" action="">
<div class="row padding VenContainer">
	<div class="col-xs-4 col-sm-4 col-md-4 vennDiagramm1 text-right">
		<div class="padding">
			<input type="text" name="tf1" value="" class="form-control pull-right" style="width: 70px;">
			<span>selektiert</span>
			<br />
			<br />
		</div>
	</div>
	<div class="col-xs-4 col-sm-4 col-md-4 vennDiagramm2 text-center" >
		<div class="padding">
			<input type="text" name="tf2" value="" class="form-control text-center" style="width: 70px;">
			<span>schnitt</span>
			<br />
			<br />
		</div>
	</div>
	<div class="col-xs-4 col-sm-4 col-md-4 vennDiagramm3 text-left" >
		<div class="padding">
			<input class="form-control" type="text" name="tf3" value="" style="width: 70px;">
			<span>relevant</span>
			<br />
			<br />
		</div>
	</div>
</div>
<div class="row VenContainer padding">
	<div class="col-xs-12 col-sm-12 col-md-12" >
		<input class="form-control" type="text" name="tf4" value="" style="width: 70px;">
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
		<button type="button" class="btn btn-default" onClick="{$ValidateFunction}">Abschicken</button>
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
</form>
{* Footer einbinden *}
{include file="footer.tpl"}