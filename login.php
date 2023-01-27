<?php
    session_start();  
    if($_POST){

        if(($_POST['usuario']=="Jamava") && ( $_POST['contrasenia']=="12345") ){ //VALIDAR USUARIO
            
            $_SESSION['usuario']="Jamava";

            header("location:index.php");

        }else{
            echo "<script> alert('Usuario o Contraseña Incorrecta'); </script>)";
        }

    }

?>







<!-- bs5-$  -->
<!doctype html>
<html lang="en">

<head>
  <title>Login</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

     <!-- bs5-grid-container -->
   
     <div class="container">


        <!-- bs5-grid-row: FILA -->
        <div class="row">
            <div class="col">

            </div>

            <div class="col">

                <!-- bs5-card-head-foot: para colocar el cuadro de inicio de sesión y pie   -->
                <br/>
                <div class="card">
                    
                    <div class="card-header">
                        Iniciar Sesión
                    </div>
                    <div class="card-body">
                    <form action="login.php" method="post">

                    Usuario: <input class="form-control" type="text" name="usuario" id="">
                    <br/>
                    Contraseña: <input class="form-control" type="password" name="contrasenia" id="">
                    <br/>
                    <button class="btn btn-success" type="submit">Entrar al Portafolio</button>

                    </form>

                    </div>
                    <div class="card-footer text-muted">
                        EIPR
                    </div>
                </div>
                
                </div>

            <div class="col">


            </div>
        </div>


 
        </div>


 
</body>

</html>