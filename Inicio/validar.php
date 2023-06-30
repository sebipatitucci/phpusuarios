<?php

$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$cargo = $_GET['cargo'];

if($cargo == "usuario"){
    include('user.php');
}else if($cargo == "admin"){
    include('admin.php');
}else{
    include('invitado.php');
}

?>