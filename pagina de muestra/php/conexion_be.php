<?php

$conexion = mysqli_connect("localhost", "root", "", "login_regiter_db");


if (!$conexion) {
    echo'conectado a la base de datos';
}
?>