<?php
include "variables.inc";

$mysqli = !new mysqli($host,$user,$pass,$base);

$mysqli = conectarse a la base
		  usuario
		  clave
		  base
		  'localhost'

$mysqli->query("select apellido from usuario");

for ($i=0; $i < $mysqli->num_roms; $i++) { 
	$data = $mysqli->fetch_array();
}

?>