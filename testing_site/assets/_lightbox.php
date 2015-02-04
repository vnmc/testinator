<!-- lightbox -->
<?php writeHeading(LIGHTBOX, "<a href=\"http://lokeshdhakar.com/projects/lightbox2/\" target=\"_blank\">jQuery plugin</a>"); ?>

<div class="row images">
	<?php
		for ($i = 1; $i <= 12; $i++)
			echo("<a href=\"img/placeholder-image.jpg#$i\" data-lightbox=\"example\"><img src=\"img/placeholder-image.jpg\"/></a>");
	?>
</div>
