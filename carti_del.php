<?php
include 'config.php';
$q = "DELETE FROM " . $_GET['tip_carte'] . " WHERE id=" . $_GET['id'] . ";";
mysql_query($q);
#echo mysql_error($db_conn);
mysql_close($db_conn);
header('Location: /carti.php?tip_carte='. $_GET['tip_carte'] .'');
?>
