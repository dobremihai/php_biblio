<?php
header('Content-Type: text/html; charset=utf-8');
include 'config.php';
$q = "SELECT `titlu`, `autor`, `editura` FROM " .$_GET['tip_carte']. " WHERE titlu LIKE '%" .$_GET['search']. "%' OR autor LIKE '%" .$_GET['search']. "%' OR editura LIKE '%" .$_GET['search']. "%'";
$result = mysql_query($q);
echo '<table>
		<th>id</th>
		<th>titlu</th>
		<th>autor</th>
		<th>editura</th>
		<th>cant</th>
		<th>disp</th>
		<th>an</th>
		<th>ISBN</th>
		<th>cod bare</th>
		<th>cr</th>
		<th>edit</th>';
while($row = mysql_fetch_array($result)) {
	echo '<tr><form id="' . $row['id'] . '" name="' . $row['id'] . '" action="carte_edit.php" method="GET"><td>' . 
	$row['id'] . '<input type="hidden" class="id" name="id" value="' . $row['id'] . '"></td><td>' . 
	$row['titlu'] . '<input type="hidden" class="titlu" name="titlu" value="' . $row['titlu'] . '"></td><td>' . 
	$row['autor'] . '<input type="hidden" class="autor" name="autor" value="' . $row['autor'] . '"></td><td>' . 
	$row['editura'] . '<input type="hidden" class="editura" name="editura" value="' . $row['editura'] . '"></td><td>' . 
	$row['cantitate'] . '<input type="hidden" class="cantitate" name="cantitate" value="' . $row['cantitate'] . '"></td><td>' . 
	$row['Cantitate Disponibila'] . '<input type="hidden" class="disp" name="disp" value="' . $row['Cantitate Disponibila'] . '"></td><td>' . 
	$row['anaparitie'] . '<input type="hidden" class="anaparitie" name="an" value="' . $row['anaparitie'] . '"></td><td>' . 
	$row['ISBN'] . '<input type="hidden" class="isbn" name="isbn" value="' . $row['ISBN'] . '"></td><td>' . 
	$row['Cod Bare'] . '<input type="hidden" class="codbare" name="codbare" value="' . $row['Cod Bare'] . '"></td><td>' . 
	$row['cr']. '<input type="hidden" class="cr" name="cr" value="' . $row['cr']. '"></td><td>
	<input type="hidden" name="tip_carte" value="' . $_GET['tip_carte'] . '">
	<input type="submit" value="Edit"></td>
	</form><td>
	<a href="carti_del.php?id=' . $row['id'] . '&tip_carte=' . $_GET['tip_carte'] . '">Del</a></td><td>
	<a href="input_imprumut.php?id_carte=' . $row['id'] . '&tip_carte=' . $_GET['tip_carte'] . '">Imprumuta</a></td></tr>';
};
echo '</table>';
mysql_close($db_conn);

?>
