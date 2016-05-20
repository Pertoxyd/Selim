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
		<div class="col-xs-2 col-md-1 ">
			<p>{$linksVonDerFormel}</p>
		</div>
		<div class="col-xs-10 col-md-4 ">
			<div class="row padding" style="border-bottom: 1px solid #333333;">
				<div class="col-md-12" >
					<input class="form-control input1" type="text" name="{$loesung1}" value="">
				</div>
			</div>
			<div class="row padding">
				<div class="col-xs-5 col-md-5"><input class="form-control input2" type="text" name="{$loesung2}" value=""></div>
				<div class="col-xs-2 col-md-2 text-center"><p>+</p></div>
				<div class="col-xs-5 col-md-5"><input class="form-control input3" type="text" name="{$loesung3}" value=""></div>
			</div>
		</div>
		<div class="col-md-7 hidden-xs">
		</div>
	</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-md-12">
			<br />
			<p id="alertBox"></p>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-md-12">
			<button type="button" class="btn btn-default pull-right" onClick="{$ValidateFunction}">Abschicken</button>
		</div>
	</div>
</form>
{* Footer einbinden *}
{include file="footer.tpl"}