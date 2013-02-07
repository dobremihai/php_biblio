<?php
include 'config.php';
$q = "DELETE FROM clienti WHERE id=" . $_GET['id'] . ";";
mysql_query($q);
#echo mysql_error($db_conn);
mysql_close($db_conn);
header('Location: /clienti.php');
?>
