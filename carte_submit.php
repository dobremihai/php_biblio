<?php
include 'config.php';

if ($_GET['id']) {
	$q = "UPDATE `" . $_GET['tip_carte'] . "` SET `titlu`='" . $_GET['titlu'] . "', `autor`='" . $_GET['autor'] . "', `editura`='" . $_GET['editura'] . "', `cantitate`='" . $_GET['cant'] . "', `Cantitate Disponibila`='" . $_GET['disp'] . "', `anaparitie`='" . $_GET['an'] . "',`ISBN`='" . $_GET['isbn'] . "',`Cod Bare`='" . $_GET['codbare'] . "',`cr`='" . $_GET['cr'] . "' WHERE `id`='" . $_GET['id'] . "'";
	mysql_query($q);
	mysql_close($db_conn);
	header('Location: /carti.php?tip_carte=' . $_GET['tip_carte']);
} else {
	$q = "INSERT INTO `" . $_GET['tip_carte'] . "` (`id`, `titlu`, `autor`, `editura`, `cantitate`, `Cantitate Disponibila`, `anaparitie`,`ISBN`,`Cod Bare`,`cr`) VALUES (NULL, '" . $_GET['titlu'] . "', '" . $_GET['autor'] . "', '" . $_GET['editura'] . "', '" . $_GET['cant'] . "', '" . $_GET['disp'] . "', '" . $_GET['an'] . "','" . $_GET['isbn'] . "','" . $_GET['codbare'] . "','" . $_GET['cr'] . "');";
	mysql_query($q);
	mysql_close($db_conn);
	header('Location: /carte_edit.php');
}
?>
