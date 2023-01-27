<?php
//CERRAR SESION DE LOGIN

session_start();
session_destroy();
header("location:login.php");


?>