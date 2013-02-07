<h1>Lista Imprumuturi</h1>
<?php
header('Content-Type: text/html; charset=utf-8');
include 'config.php';

if($_GET['id']){
	$q = "DELETE FROM imprumuturi WHERE id=" . $_GET['id'] . ";";
	mysql_query($q);
}

$clienti = "SELECT * FROM `imprumuturi`";
$client = mysql_query($clienti);
echo '<table width="600">
		<th>id</th>
		<th>cnp</th>
		<th>tip carte</th>
		<th>id carte</th>
		<th>cod de bare</th>
		<th>data retur</th>';
while($row = mysql_fetch_array($client)) {
	echo '<tr><td>' . 
	$row['id'] . '</td><td>' . 
	$row['cnp'] . '</td><td>' . 
	$row['tip_carte'] . '</td><td>' . 
	$row['id_carte'] . '</td><td>' . 
	$row['cod_bare_carte'] . '</td><td>' . 
	$row['data_returnare'] . '</td><td>
	<a href="imprumuturi.php?id=' . $row['id'] . '">Delete</a></td></tr>';
};
echo '</table>';
mysql_close($db_conn);
?>
