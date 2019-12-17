<?php
$usuario = "dbuser"; // Usuario de la Base de Datos
$password = "dbpassword"; // Contraseña de la Base de Datos
$hostname = "localhost"; // Host de la Base de Datos
$namebase = "dbname"; // Nombre de la Base de Datos


try
 {
  $bdd = new PDO('mysql:host='.$hostname.';dbname='.$namebase.'', $usuario, $password);
 }
  catch (Exception $e)
 {
  die('Error: ' . $e->getMessage());
 }
 ?>
