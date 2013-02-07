<?php
include 'config.php';
if ($_GET['tip_carte']) {
	$tip_carte = '<input type="hidden" name="tip_carte" value="' . $_GET['tip_carte'] . '">';
	$h1 = '<h1>Edit carte</h1>';
} else {
	$h1 = '<h1>Insert carte</h1>';
	$tip_carte = 'Tip carte: 
	<select name="tip_carte">
		<option value="">--Selectati tipul cartii--</option>
		<option value="carti_arte">Arte</option>
		<option value="carti_drept">Drept</option>
		<option value="carti_electronica, automatica">Electronica, automatica</option>
		<option value="carti_fizica">Fizica</option>
		<option value="carti_geografie">Geografie</option>
		<option value="carti_istorie">Istorie</option>
		<option value="carti_jurnalism">Jurnalism</option>
		<option value="carti_litere si limbi straine">Litere si limbi straine</option>
		<option value="carti_matematica">Matematica</option>
		<option value="carti_psihologie">Psihologie</option>
		<option value="carti_sociologie">Sociologie</option>
		<option value="carti_stiinte economice">Stiinte economice</option>
		<option value="carti_stiinte politice">Stiinte politie</option>
		<option value="old_arte">old_arte</option>
		<option value="carti">Alta categorie</option>
	</select>
	';
}

echo $h1;
echo '<form id="' . $_GET['id'] . '" name="' . $_GET['id'] . '" action="carte_submit.php" method="GET">
<input type="hidden" class="id" name="id" value="' . $_GET['id'] . '">' . 
'<table><tr><td>titlu:</td><td><input type="text" class="titlu" name="titlu" value="' . $_GET['titlu'] . '"></td></tr>
<tr><td>autor:</td><td><input type="text" class="autor" name="autor" value="' . $_GET['autor'] . '"></td></tr>
<tr><td>editura:</td><td><input type="text" class="editura" name="editura" value="' . $_GET['editura'] . '"></td></tr>
<tr><td>cantitate:</td><td><input type="text" class="cantitate" name="cant" value="' . $_GET['cant'] . '"></td></tr>
<input type="hidden" class="disp" name="disp" value="' . $_GET['disp'] . '">
<tr><td>anaparitie:</td><td><input type="text" class="anaparitie" name="an" value="' . $_GET['an'] . '"></td></tr>
<tr><td>ISBN:</td><td><input type="text" class="isbn" name="isbn" value="' . $_GET['isbn'] . '"></td></tr>
<tr><td>Cod Bare:</td><td><input type="text" class="codbare" name="codbare" value="' . $_GET['codbare'] . '"></td></tr>
<tr><td>cr:</td><td><input type="text" class="cr" name="cr" value="' . $_GET['cr']. '"></td></tr></table>' . $tip_carte . 
'<br /><input type="submit" value="Submit">';
?>
