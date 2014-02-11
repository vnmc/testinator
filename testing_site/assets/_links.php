<!-- links -->
<span id="links" class="anchor"></span>
<span class="hr-shadow-top"></span>
<h2 class="page-heading">links</h2>
<span class="hr-shadow-bottom"></span>
<br>

<p>simple links</p>
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

<p>scripted links</p>
<script>
	function logClick(event)
	{
		event.cancelBubble = true;
		if (event.stopPropagation)
			event.stopPropagation();

		$('.console').append('<p>' + event.target.id + ' clicked</p>');
	}
</script>

<p>static html</p>
<div class="row-fluid">
	<div class="span4">
		<a id="link4" onclick="logClick(event)" class="btn btn-large btn-block">#link4</a>
	</div>	
	<div class="span4">
		<a id="link5" class="btn btn-large btn-block">#link5</a>
	</div>
	<div class="span4">
		<a id="link6" class="btn btn-large btn-block">#link6</a>
	</div>
</div>
<br>

<p>dynamically created links</p>
<div class="row-fluid" id="dynamic-links"></div>
<br>

<p>JavaScript event handler code for the links:</p>
<div class="row-fluid">
	<div class="span4">
		<code>
			// #link4, #link7:<br/>
			&lt;a onclick=&quot;logClick(event)&quot;&gt;
		</code>
	</div>	
	<div class="span4">
		<code>
			// #link5, #link8:<br/>
			document.getElementById('link5') .onclick = logClick;
		</code>
	</div>
	<div class="span4">
		<code>
			// #link6, #link9:<br/>
			jQuery('#link6').click(logClick);
		</code>
	</div>
</div>
<code>
	// clicking the links invokes the following function:<br/>
	function logClick(event) {<br/>
	&nbsp;&nbsp;<b>event.preventDefault();</b><br/>
	&nbsp;&nbsp;console.log(event.target.id + ' clicked');<br/>
	}
</code>

<div class="row-fluid console"></div>

<script>
	document.getElementById('link5').onclick = logClick;
	$('#link6').click(logClick);

	setTimeout(function()
	{
		$('#dynamic-links').html(
			'<div class="span4"><a id="link7" class="btn btn-large btn-block" onclick="logClick(event)">#link7</a></div>' +
			'<div class="span4"><a id="link8" class="btn btn-large btn-block">#link8<br/><span class="warning">Click won\'t propagate. Avoid this!</span></a></div>' +
			'<div class="span4"><a id="link9" class="btn btn-large btn-block">#link9</a></div>'
		);

		document.getElementById('link8').onclick = logClick;
		$('#link9').click(logClick);
	}, 1000);
</script>

<br>
<br>