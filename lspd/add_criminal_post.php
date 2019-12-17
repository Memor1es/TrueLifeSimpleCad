<?php
include( "config.php" );

$req = $bdd->prepare('INSERT INTO lspd (nombre, crimen, sancion) VALUES(?, ?, ?)');
$req->execute(array($_POST['nombre'], $_POST['crimen'], $_POST['sancion']));

header('Location: add_criminal.php');

?>
