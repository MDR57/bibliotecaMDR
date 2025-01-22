<?php
    include("conexion.php");
    $usuarios = "SELECT * FROM usuarios";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="GRUPO-2 MDR-SOLUTIONS"> 
        <meta name="fecha" content="16-10-2024">
        <meta name="reto1" content="Web-1">
        <meta name="keywords" content="biblioteca,municipal,ayuntamiento,libros">
        <title>Formulario Socio</title>
        <link rel="stylesheet" href="formulario.css">
        <link rel="icon" href="IMAGENES/pikaso_texttoimage_un-logo-de-una-empresa-de-informatica-llamada-MDR - copia.jpeg" type="image/x-icon">
    </head>
</head>
<body>
    <header>
        <h2>Rellena con tus datos para ser socio</h2>

    </header>
    <nav>
        <ul>
            <li><a href="index.html">inicio</a></li>
            <li><a href="quienessomos.html">Quienes somos</a></li>
            <li><a href="catalogo.html">Catálogo</a></li>
            <li>Mi cuenta</li>
            <li><a href="avisos.html">Avisos</a></li>
        </ul>
    </nav>
    
<form action="FORMULARIO REGISTRO SOCIOS">
    <p1>
    <label for="nombre">Nombre</label><br>
    <input type="text" id="nombre" name="nombre" value=""><br>
    </p1>
    <p2>
    <label for="apellido1">Primer apellido</label><br>
    <input type="text" id="primerapellido" name="primerapellido" value="" placeholder=""><br>
    </p2>
    <label for="apellido2">Segundo apellido</label><br>
    <input type="text" id="segundo apellido" name="Segundo Apellido" value=""><br>
    <label for="DNI">DNI</label><br>
    <input type="text" id="DNI" name="DNI" value=""placeholder="Ej:46787635J"><br>
    <label for="Direccion">Direccion</label><br>
    <input type="text" id="Direccion" name="Direccion" value=""placeholder=""><br>
    <label for="Telefono">Telefono</label><br>
    <input type="text" id=Telefono name="Telefono" value=""placeholder="Ej:690567342"><br>
    <label for="Preferencias">Preferencias</label><br>
    <input type="text" id=Preferencias name="Preferencias" value=""placeholder="Ej:Accion,Ficcion,Psicologia"><br><br>
    <button type="Registrarse" value="Registrarse">  <a href="socioexito.html">Crear Cuenta</a></button>
</form> 
    <footer>
        <a class="Etiquetas" href="https://www.instagram.com/muskizudala/" target="_blank"><img class="ubi" src="IMAGENES/insta.png" alt="ig"></a>
        <a class="Etiquetas" href="https://www.facebook.com/muskiz.bizkaia/?locale=es_LA" target="_blank"><img class="ubi" src="IMAGENES/Facebook_Logo_(2019).png" alt="gps"></a>
        <a class="Etiquetas" href="https://maps.app.goo.gl/vuhthBsoVppb65tg9" target="_blank"><img class="ubi" src="IMAGENES/500745.png" alt="gps"></a>
        <a class="Etiquetas" href="https://workspace.google.com/intl/es/gmail/" target="_blank">mdr_solutions@gmail.com</a>
    </footer>
</body>
