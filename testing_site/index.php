<?php
   include("assets/_inc.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Ghostlab Testing Page</title>
		<?php include "assets/_head.php"; ?>
		<?php include "assets/_scripts.php"; ?>
	</head>

	<body>
		<!--
		         _              _       _    _            _          _            _             _                   _        
		        /\ \           / /\    / /\ /\ \         / /\       /\ \         _\ \          / /\                / /\      
		       /  \ \         / / /   / / //  \ \       / /  \      \_\ \       /\__ \        / /  \              / /  \     
		      / /\ \_\       / /_/   / / // /\ \ \     / / /\ \__   /\__ \     / /_ \_\      / / /\ \            / / /\ \    
		     / / /\/_/      / /\ \__/ / // / /\ \ \   / / /\ \___\ / /_ \ \   / / /\/_/     / / /\ \ \          / / /\ \ \   
		    / / / ______   / /\ \___\/ // / /  \ \_\  \ \ \ \/___// / /\ \ \ / / /         / / /  \ \ \        / / /\ \_\ \  
		   / / / /\_____\ / / /\/___/ // / /   / / /   \ \ \     / / /  \/_// / /         / / /___/ /\ \      / / /\ \ \___\ 
		  / / /  \/____ // / /   / / // / /   / / /_    \ \ \   / / /      / / / ____    / / /_____/ /\ \    / / /  \ \ \__/ 
		 / / /_____/ / // / /   / / // / /___/ / //_/\__/ / /  / / /      / /_/_/ ___/\ / /_________/\ \ \  / / /____\_\ \   
		/ / /______\/ // / /   / / // / /____\/ / \ \/___/ /  /_/ /      /_______/\__\// / /_       __\ \_\/ / /__________\  
		\/___________/ \/_/    \/_/ \/_________/   \_____\/   \_\/       \_______\/    \_\___\     /____/_/\/_____________/  
		                                                                                                                     
		-->

		<!--
		Credits 

		Made possible by the the fantastic: 

		mqtest by Viljami Salminen | http://mqtest.io/
		@media features by Jordan Moore | http://www.jordanm.co.uk/palmreader
		Color base by http://html-color-codes.info
		gPop plugin by Vanamco | https://github.com/vnmc/jquery.gpop 
    Icons glyphicons | http://glyphicons.com
		Framework Bootstrap | http://getbootstrap.com
		
		-->
	
		<?php include "assets/_nav.php"; ?>
		<div class="container-fluid content">
			<div class="row">
				<div class="col-md-12">
					<?php include "assets/_noscript.php"; ?>
					<br>

					<?php
						foreach ($assets as $id => $asset)
						{
							include("assets/{$asset["file"]}");
							echo("<a href=\"#\" class=\"visible-xs pull-right\">back to top &uarr;</a><br/>");
						}
					?>
				</div>
			</div>
			<div id="push"></div>
		</div>

		<?php include "assets/_footer.php"; ?>
	</body>
</html>
