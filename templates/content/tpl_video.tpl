{* Header einbinden *}
{include file="header.tpl"}

<h2>{$module_headline}</h2>
<div class="row">
	<div class="col-md-12">
		<p>{$text}</p>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		<video controls class="img-responsive embed-responsive-item" style="width: 100%">
			<source src="{$videoSource}" type="video/mp4">
			Hier wurde ein Video mit HTML 5 Technologie eingebaut - leider kann es in deinem Browser nicht dargestellt werden. Dies tut uns leid... :(
		</video>
	</div>
	<div class="col-md-6">
		<p>{$text2}</p>
	</div>
</div>

{* Footer einbinden *}
{include file="footer.tpl"}