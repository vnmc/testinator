<html>
<body>
<?php
phpinfo();

	echo("<h1>GET</h1><pre>");
	var_dump($_GET);
	echo("</pre>");

	echo("<h1>POST</h1><pre>");
	var_dump($_POST);
	echo("</pre>");

	echo("<h1>FILES</h1><pre>");
	var_dump($_FILES);
	echo("</pre>");

	echo("<h1>COOKIE</h1><pre>");
	var_dump($_COOKIE);
	echo("</pre>");

	echo("<h1>getallheaders()</h1><pre>");
	var_dump(getallheaders());
	echo("</pre>");

	echo("<h1>SERVER</h1><pre>");
	var_dump($_SERVER);
	echo("</pre>");
?>
</body>
</html>