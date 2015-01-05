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
		 	"name" => "device info",
		 	"file" => "_mqtest.php"
		),
		MEDIA_QUERIES => array(
			"name" => "media queries",
			"file" => "_media_features.php"
		),
		GRID => array(
			"name" => "fluid grid",
			"file" => "_grid.php"
		),
		LINKS => array(
			"name" => "links",
			"file" => "_links.php"
		),
		COLORS => array(
			"name" => "colors",
			"file" => "_colors.php"
		),
		FORMS => array(
			"name" => "form",
			"file" => "_forms.php"
		),
		IMAGES => array(
			"name" => "images",
			"file" => "_images.php"
		),
		LIGHTBOX => array(
			"name" => "lightbox2",
			"file" => "_lightbox.php"
		),
		TABS => array(
			"shortname" => "tabs",
			"name" => "tabs &amp; accordion",
			"file" => "_tabs.php"
		),
		JQUERYUI => array(
			"name" => "jQuery UI",
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
