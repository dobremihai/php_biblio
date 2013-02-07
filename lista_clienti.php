<?php
include 'config.php';
$clienti = "SELECT * FROM `clienti`";
$client = mysql_query($clienti);

echo $clienti . "<br />";
while($row = mysql_fetch_array($client))
  {
  echo $row['id'] . ' ' . $row['nume'] . ' ' . $row['prenume'] . ' ' . $row['telefon'] . ' ' . $row['email'];
  echo '<br />';
  };
mysql_close($db_conn);
?>
