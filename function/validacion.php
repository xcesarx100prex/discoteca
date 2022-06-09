<?php
include('/xampp/htdocs/proyecto/class/usuario.php');

$usuri=new usuario;
$usur=$_POST['correo'];
$cont=$_POST['contra'];
$usuri->iniciarseccion($usur,$cont);
 ?>