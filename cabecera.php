<?php

  session_start();  
  if(isset ($_SESSION['usuario'])!="Jamava"){
    header("location:login.php");

  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio</title>

    <!-- LINK DE LA PAGINA BOOTSTRAP CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>

<!--bs5-grid-container:luego se incluye el menu dentro del container-->
<div class="container">

    <a href="index.php">Inicio</a> |
    <a href="portafolio.php">Portafolio</a> |
    <a href="cerrar.php">Cerrar</a> |
    <br/>




