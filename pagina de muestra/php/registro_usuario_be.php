<?php

include'conexion_be.php';

$nombre_completo = $_POST('nombre_completo');
$correo = $_POST('correo');
$usuario = $_POST('usuario');
$contrasena = $_POST('contrasena');

$query = "INSERT INTO usuarios(nombre_ completo, correo, usuario, contrasena)
        VALUES('$nombre_completo, $correo, $usuario, $contrasena')";
$ejecutar = mysqli_query($connexion, $query);

if($ejecutar) {
echo '
<script>
    alert("Usuario almacendo exitosamenete");
    window. location = "../index.php"
</script>
';
}else {
        echo '
            alert("Intentalo de nuevo, usuario no registrado");
    window. location = "../index.php"
        ';
}

mysqli_close($connexion);

?>
