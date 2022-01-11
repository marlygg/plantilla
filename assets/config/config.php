<?php
$fecha = date("Y"); 

$enlace = mysqli_connect("localhost", "root", "") or die ("could not connect to mysql");
mysqli_select_db($enlace, "datos_web");
mysqli_set_charset($enlace, "utf8");

if (!$enlace) {
    exit;
}else {
	echo PHP_EOL;
}