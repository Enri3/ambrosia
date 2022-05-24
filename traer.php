<?php
include "variables.inc";
$mysqli = new mysqli($host, $user, $pass, $base);

$res = $mysqli->query("select * from clientes");

$outp = array();
for($i=0; $i<$res->num_rows; $i++)
  $outp[$i] = $res->fetch_assoc();
echo json_encode($outp);

?>