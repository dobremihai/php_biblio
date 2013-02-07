<head>
	<link type="text/css" rel="stylesheet" href="stil.css">
</head>
<?php
header("Content-Type: text/html; charset=utf-8");
$db_conn = mysql_connect('localhost', 'a4592933_biblio', 'biblio2');
if (!$db_conn) {
    die('Could not connect: ' . mysql_error());
}
mysql_select_db("a4592933_biblio", $db_conn);
?>
