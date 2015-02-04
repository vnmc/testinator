<!-- links -->
<?php writeHeading(LINKS); ?>

<p class="lead">Simple Links</p>
<div class="row">
	<div class="col-sm-4">
		<a href="#" class="btn btn-default btn-lg btn-block"><span class="icon-resize-vertical"></span>&nbsp;Anchor link</a>
	</div>
	<div class="col-sm-4">
		<a id="testid" href="internal.php" class="btn btn-default btn-lg btn-block"><span class="icon-arrow-right"></span>&nbsp;Internal site link</a> 
	</div>
	<div class="col-sm-4">
		<a href="https://github.com/vnmc" class="btn btn-default btn-lg btn-block"><span class="icon-globe"></span>&nbsp;External link</a>
	</div>
</div>
<br>

<p class="lead">Scripted Links</p>
<script>
	function logClick(event)
	{
		if (event.preventDefault)
			event.preventDefault();

		event.cancelBubble = true;
		if (event.stopPropagation)
			event.stopPropagation();

		$('.console').append('<p>' + event.target.id + ' clicked</p>');

		return false;
	}
</script>

<h5>Static HTML</h5>
<div class="row">
	<div class="col-sm-4">
		<a id="link4" onclick="logClick(event)" class="btn btn-default btn-lg btn-block">#link4</a>
	</div>	
	<div class="col-sm-4">
		<a id="link5" class="btn btn-default btn-lg btn-block">#link5</a>
	</div>
	<div class="col-sm-4">
		<a id="link6" class="btn btn-default btn-lg btn-block">#link6</a>
	</div>
</div>
<br>

<h5>Dynamically Created Links</h5>
<div class="row" id="dynamic-links"></div>
<br>

<h5>JavaScript event handler code for the links:</h5>
<div class="row">
	<div class="col-sm-4">
		<code>
			// #link4, #link7:<br/>
			&lt;a onclick=&quot;logClick(event)&quot;&gt;
		</code>
	</div>	
	<div class="col-sm-4">
		<code>
			// #link5, #link8:<br/>
			document.getElementById('link5') .onclick = logClick;
		</code>
	</div>
	<div class="col-sm-4">
		<code>
			// #link6, #link9:<br/>
			jQuery('#link6').click(logClick);
		</code>
	</div>
</div>
<code>
	// clicking the links invokes the following function:<br/>
	function logClick(event) {<br/>
	&nbsp;&nbsp;event.preventDefault();<br/>
	&nbsp;&nbsp;<b>event.stopPropagation();</b><br/>
	&nbsp;&nbsp;console.log(event.target.id + ' clicked');<br/>
	}
</code>

<div class="row">
	<div class="col-md-12">
		<div class="console"></div>
	</div>
</div>
<br/>

<div class="row warning">
	<div class="col-md-12">
		<p>* Click won't propagate if element was created by setting innerHTML of an ancestor element and the event handler stops propagation.</p>
	</div>
</div>

<script>
	document.getElementById('link5').onclick = logClick;
	$('#link6').click(logClick);

	setTimeout(function()
	{
		$('#dynamic-links').append(
			'<div class="col-sm-4"><a id="link7" class="btn btn-warning btn-lg btn-block" onclick="logClick(event)">#link7*</a></div>' +
			'<div class="col-sm-4"><a id="link8" class="btn btn-warning btn-lg btn-block">#link8*</div>' +
			'<div class="col-sm-4"><a id="link9" class="btn btn-default btn-lg btn-block">#link9</a></div>'
		);

		document.getElementById('link8').onclick = logClick;
		$('#link9').click(logClick);			
	}, 2000);
</script>

<br>
<br>