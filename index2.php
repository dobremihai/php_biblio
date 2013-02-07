<?php include "config.php" ?>
<div id="sidebar">
<a href="index2.php">Home</a><br />
<a href="imprumuturi.php">Listare Imprumuturi</a><br />
<a href="input_clienti.php">Iserare Clienti</a><br />
<a href="clienti.php">Lista Clienti</a><br />
<a href="carte_edit.php">Insert carte</a><br />

<form id="carti" name="carti" action="carti.php" method="GET">
Liste carti:<br />
<select name="tip_carte" onchange="document.carti.submit()">
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
</form>
</div>
