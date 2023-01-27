<?php include("cabecera.php"); ?>
<?php include("conexion.php"); ?>
<?php
     $objConexion= new conexion();
     $proyectos=$objConexion->consultar("SELECT * FROM `proyectos`");
?>

<!--bs5-jumbotron-default-->

<div class="row align-items-md-stretch">
    <div class="col-md-6">
        <div
            class="h-100 p-5 text-white bg-primary border rounded-3">
            <h1>Bienvenid@s</h1>
            <p>Este es el Portafolio de Imagenes de la Escuela Ing. Producción </p>
            <p>Más Información </p>
           
        </div>
    </div>

</div>
<br/>


<!--https://getbootstrap.com/docs/5.3/components/card/ -->

<div class="row row-cols-1 row-cols-md-3 g-4">

    <?php foreach($proyectos as $proyecto) {  ?>

        <div class="col">
        <div class="card">
        <img src="imagenes/<?php echo $proyecto['imagen']; ?>" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title"><?php echo $proyecto['nombre']; ?></h5>
        <p class="card-text"><?php echo $proyecto['descripcion']; ?></p>
      </div>
    </div>
  </div>

<?php } ?>
 


</div>

<?php include("pie.php"); ?>