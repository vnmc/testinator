<?php include("assets/_inc.php"); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Ghostlab Testing page</title>
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
		<?php include "assets/_nav.php"; ?>
		<div class="container-fluid content">
			<div class="row-fluid">
				<div class="span12">
					<?php include "assets/_noscript.php"; ?>
					<br>

					<?php
						foreach ($assets as $id => $asset)
						{
							include("assets/{$asset["file"]}");
							echo("<a href=\"#\" class=\"visible-phone pull-right\">back to top &uarr;</a><br/>");
						}
					?>
				</div>
			</div>
			<div id="push"></div>
		</div>

		<?php include "assets/_footer.php"; ?>
	</body>
</html>