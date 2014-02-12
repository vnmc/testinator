<!-- Nav -->
<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<button data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
				<span class="icon-align-justify icon-white"></span>
			</button>

			<a class="brand" href="./index.html">&nbsp;&nbsp;Ghostlab <small>Testing Page</small></a>
	
			<div class="nav-collapse collapse">
				<ul class="nav pull-right">
					<?php
						foreach ($assets as $id => $asset)
						{
							$name = array_key_exists("shortname", $asset) ? $asset["shortname"] : $asset["name"];
							echo("<li><a href=\"#$id\">$name</a></li>");
						}
					?>
				</ul>
			</div>
		</div>
	</div>
</div>