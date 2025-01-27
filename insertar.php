<?php
    include("conexion.php");

    // Obtener los datos enviados por POST
    $nombre = $_POST["nombre"];
    $apellido1 = $_POST["apellido1"];
    $apellido2 = $_POST["apellido2"];
    $direccion = $_POST["direccion"];
    $telefono = $_POST["telefono"];
    $dni = $_POST["dni"];
    $preferencias = $_POST["preferencias"];
    $contraseña = password_hash($_POST["contraseña"], PASSWORD_DEFAULT);

    // Crear la consulta de inserción
    $insertar = "INSERT INTO usuarios(nombre, apellido1, apellido2, direccion, telefono, dni, preferencias,contraseña)
                VALUES('$nombre' ,'$apellido1', '$apellido2', '$direccion', '$telefono', '$dni', '$preferencias','$contraseña')";

    // Ejecutar la consulta
    $resultado = mysqli_query($conexion, $insertar);

    // Comprobar si la inserción fue exitosa
    if ($resultado) {
        echo "<script>
                alert('Usuario registrado con éxito');
                window.location='/bibliotecaMDR/es/socios.html';
              </script>";
    } else {
        echo "<script>
                alert('Error al registrar usuario: " . mysqli_error($conexion) . "');
                window.history.go(-1);
              </script>";
    }

    // Cerrar la conexión después de terminar todas las operaciones
    mysqli_close($conexion);
?>