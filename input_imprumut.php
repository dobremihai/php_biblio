<?php
include 'config.php';
if($_GET['cnp']) {
	$q = "INSERT INTO `imprumuturi` (`id`, `cnp`, `tip_carte`, `id_carte`, `cod_bare_carte`, `data_returnare`) VALUES (NULL, '" . $_GET['cnp'] . "','" . $_GET['tip_carte'] . "','" . $_GET['id_carte'] . "','" . $_GET['cod_bare_carte'] . "','" . $_GET['data_returnare'] . "');";
	mysql_query($q);
	echo mysql_error($db_conn);
	#echo $q;
	header('Location: /carti.php?tip_carte=' . $_GET['tip_carte']);
}
else {?>
	<h1>Insert imprumut</h1>
	<form id="imprumut" action="input_imprumut.php" method="GET">
	<input type="hidden" name="tip_carte" value="<?php echo $_GET['tip_carte']; ?>" />
	<input type="hidden" name="id_carte" value="<?php echo $_GET['id_carte']; ?>" />
	CNP: <input type="text" name="cnp" /> *<br />
	Cod bare carte: <input type="text" name="cod_bare_carte" /><br />
	Data retur: <input type="text" name="data_returnare" id="datepicker" /> * (yyyy-mm-dd)<br />
	<input type="submit" />
	</form>
<?}
mysql_close($db_conn);
?>
