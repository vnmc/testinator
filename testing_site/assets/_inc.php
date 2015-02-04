<?php
	define("DEVICE_INFO", "mqtest");
	define("MEDIA_QUERIES", "media");
	define("GRID", "grid");
	define("LINKS", "links");
	define("COLORS", "color");
	define("FORMS", "forms");
	define("IMAGES", "images");
	define("LIGHTBOX", "lightbox2");
	define("TABS", "tabs");
	define("JQUERYUI", "jqueryui");
	define("CREDITS", "credits");


	$assets = array(
		DEVICE_INFO => array(
		 	"name" => "Device Info",
		 	"file" => "_mqtest.php"
		),
		MEDIA_QUERIES => array(
			"name" => "Media Queries",
			"file" => "_media_features.php"
		),
		/*GRID => array(
			"name" => "Fluid Grid",
			"file" => "_grid.php"
		),*/
		LINKS => array(
			"name" => "Links",
			"file" => "_links.php"
		),
		COLORS => array(
			"name" => "Colors",
			"file" => "_colors.php"
		),
		FORMS => array(
			"name" => "Form",
			"file" => "_forms.php"
		),
		IMAGES => array(
			"name" => "Images",
			"file" => "_images.php"
		),
		LIGHTBOX => array(
			"name" => "Lightbox2",
			"file" => "_lightbox.php"
		),
		TABS => array(
			"shortname" => "Tabs",
			"name" => "Tabs &amp; Accordion",
			"file" => "_tabs.php"
		),
		JQUERYUI => array(
			"name" => "jQuery UI Components",
			"file" => "_jqueryui.php"
		)
	);


	function writeHeading($id, $addHeadingText = "")
	{
		global $assets;

		echo("<span id=\"$id\" class=\"anchor\"></span>");
		echo("<span class=\"hr-shadow-top\"></span>");
		echo("<h2 class=\"page-heading\">{$assets[$id]["name"]} <small>$addHeadingText</small></h2>");
		echo("<span class=\"hr-shadow-bottom\"></span><br/>");
	}
?>
