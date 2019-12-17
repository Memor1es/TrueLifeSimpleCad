<?php
include( "config.php" );

$req = $bdd->prepare('INSERT INTO ems (nombre, registromedico, seguro) VALUES(?, ?, ?)');
$req->execute(array($_POST['nombre'], $_POST['registromedico'], $_POST['seguro']));

header('Location: add_criminal.php');

?>
