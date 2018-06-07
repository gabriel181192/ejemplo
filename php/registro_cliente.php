<?php


require('conexion_bd.php');


extract($_POST);



$sql = "INSERT into clientes (nombre,correo,direccion,referencia,telefono) VALUES('" . $nombre . "','" . $correo . "','" . $direccion . "','" . $referencia . "'," . $telefono . ")";



$success = $mysqli->query($sql);


if (!$success) {
    die("Couldn't enter data: ".$mysqli->error);
}





?>