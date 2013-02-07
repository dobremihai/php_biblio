<?php 
	include "config.php";
	if ($_GET['id']) {
		$h1 = '<h1>Edit client</h1>';
	}
	else {
		$h1 = '<h1>Insert client</h1>';
	}
	echo $h1;
?>
<form id="clienti" action="client_submit.php" method="GET">
<?php if ($_GET['id']) { echo '<input type="hidden" name="id" value="' . $_GET['id'] . '" />'; };?>
<table>
<tr><td>Nume:</td><td><input type="text" name="nume" value="<?php echo $_GET['nume']; ?>" />*</td></tr>
<tr><td>Prenume:</td><td><input type="text" name="prenume" value="<?php echo $_GET['prenume']; ?>" />*</td></tr>
<tr><td>Serie:</td><td><input type="text" name="serie" value="<?php echo $_GET['serie']; ?>" />*</td></tr>
<tr><td>Nr.:</td><td><input type="text" name="numar" value="<?php echo $_GET['numar']; ?>" />*</td></tr>
<tr><td>Tel.:</td><td><input type="text" name="telefon" value="<?php echo $_GET['telefon']; ?>" /></td></tr>
<tr><td>email:</td><td><input type="text" name="email" value="<?php echo $_GET['email']; ?>" /></td></tr>
</table>
<input type="submit" value="submit" />
</form>
