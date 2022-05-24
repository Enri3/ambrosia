<?php 
include "variables.inc";
$mysqli = new mysqli($host, $user, $pass, $base);

$res = $mysqli->query("select orden from clientes where dni ='".$_POST['use-name']."'");
if($res->num_rows)
  echo -1;
else {
    $mysqli->query("insert into clientes (apellido, nombre, user-name, contrasena) values ('".$_POST['apellido']."','".$_POST['nombre']."','".$_POST['use-name']."','".$_POST['email']."','".$_POST['contrasena']."','".$_POST['contrasenack']."')");
    $o = $mysqli->insert_id;
}

?>