<!-- links -->

<?php ?>
<span id="links" class="anchor"></span>
<span class="hr-shadow-top"></span>
<h2 class="page-heading">links <small>href</small></h2>
<span class="hr-shadow-bottom"></span>
<br>
<p class="lead">Test navigation with the href Attribute</p>

<br>
<p>Simple links</p>
<div class="row-fluid">
	<div class="span4">
		<a href="#" class="btn btn-large btn-block"><span class="icon-resize-vertical"></span>&nbsp;Anchor link</a>
	</div>
	<div class="span4">
	<a id="testid" href="internal.php" class="btn btn-large btn-block"><span class="icon-arrow-right"></span>&nbsp;Internal site link</a>
		 
	</div>
	<div class="span4">
		<a href="https://github.com/vnmc" class="btn btn-large btn-block"><span class="icon-globe"></span>&nbsp;External link</a>
	</div>
</div>
<br>

<p>Scripted links</p>
<div class="row-fluid">
	<div class="span4" id="link4">
		<a href="javascript:$('#link4').fadeTo('slow', 0.1).fadeTo('slow', 1);" class="btn btn-large btn-block">
			<span class="icon-asterisk"></span>&nbsp;javascript: link<br>
		</a>
		<code>&lt;a href=&quot;javascript:foo()&quot;&gt;</code>
	</div>
	
	<div class="span4" id="link5">
		<a href="javascript:void(0)" class="btn btn-large btn-block" onclick="$('#link5').fadeTo('slow', 0.1).fadeTo('slow', 1);">
			<span class="icon-hand-up"></span>&nbsp;onclick link<br>
		</a>
		<code>&lt;a href=&quot;javascript:void(0)&quot; onclick=&quot;foo()&quot;&gt;</code>
	</div>
	<div class="span4" id="link6">
		<a class="btn btn-large btn-block" onclick="$('#link6').fadeTo('slow', 0.1).fadeTo('slow', 1);">
			<span class="icon-ban-circle"></span>&nbsp;No-href link<br>
		</a>
		<code>&lt;a onclick=&quot;foo()&quot;&gt;</code>
	</div>
</div>

<br>
<br>