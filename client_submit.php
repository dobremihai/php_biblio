<?php
include 'config.php';

if ($_GET['id']) {
	$q = "UPDATE `clienti` SET `nume`='" . $_GET['nume'] . "', `prenume`='" . $_GET['prenume'] . "', `serie`='" . $_GET['serie'] . "', `numar`='" . $_GET['numar'] . "', `telefon`='" . $_GET['telefon'] . "', `email`='" . $_GET['email'] . "' WHERE `id`='" . $_GET['id'] . "'";
	echo $q;
	header('Location: /clienti.php');
}
else {
	$q = "INSERT INTO `clienti` (`id`, `nume`, `prenume`, `serie`, `numar`, `telefon`, `email`) VALUES (NULL, '" . $_GET['nume'] . "', '" . $_GET['prenume'] . "', '" . $_GET['serie'] . "', '" . $_GET['numar'] . "', '" . $_GET['telefon'] . "', '" . $_GET['email'] . "');";
	echo $q;
	header('Location: /input_clienti.php');
}

mysql_query($q);
#echo mysql_error($db_conn);
mysql_close($db_conn);
?>
