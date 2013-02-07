<?php
header('Content-Type: text/html; charset=utf-8');
include 'config.php';

$clienti = "SELECT * FROM `clienti`";
$client = mysql_query($clienti);

echo '<h1>Lista Clienti</h1>
	<table width="600">
		<th>id</th>
		<th>nume</th>
		<th>prenume</th>
		<th>serie</th>
		<th>nr.</th>
		<th>tel.</th>
		<th>email</th>';
while($row = mysql_fetch_array($client)) {
	echo '<tr><form id="' . $row['id'] . '" name="' . $row['id'] . '" action="input_clienti.php" method="GET"><td>' . 
	$row['id'] . '<input type="hidden" class="id" name="id" value="' . $row['id'] . '"></td><td>' . 
	$row['nume'] . '<input type="hidden" class="nume" name="nume" value="' . $row['nume'] . '"></td><td>' . 
	$row['prenume'] . '<input type="hidden" class="prenume" name="prenume" value="' . $row['prenume'] . '"></td><td>' . 
	$row['serie'] . '<input type="hidden" class="serie" name="serie" value="' . $row['serie'] . '"></td><td>' . 
	$row['numar'] . '<input type="hidden" class="numar" name="numar" value="' . $row['numar'] . '"></td><td>' . 
	$row['telefon'] . '<input type="hidden" class="telefon" name="telefon" value="' . $row['telefon'] . '"></td><td>' . 
	$row['email'] . '<input type="hidden" class="email" name="email" value="' . $row['email'] . '"></td><td>' . 
	$row['Cod Bare'] . '<input type="hidden" class="codbare" name="codbare" value="' . $row['Cod Bare'] . '">
	<input type="submit" value="Edit"></td>
	</form><td>
	<a href="clienti_del.php?id=' . $row['id'] . '">Delete</a></td></tr>';
};
echo '</table>';
mysql_close($db_conn);
?>
