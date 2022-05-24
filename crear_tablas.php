<?php 
include "variables.inc";
$mysqli = new mysqli($host, $user, $pass, $base);

$mysqli->query("drop table if exists clientes");
$registro = $mysqli->query("create table if not exists clientes (
	apellido	    varchar(60),
	nombre		    varchar(60),
	user-name       varchar(60),
	email           text,
	contrasena      text,
	contrasenack    text,
	cuando	    	timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP(),
	orden		    int not null primary key auto_increment
)");

?>