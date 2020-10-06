
<?php
/* Si los datos de usuario son correctos, redirige al dashboard principal*/
session_start();
if (isset($_SESSION['S_ID_USER'])) {

  header('Location:../Vista/index.php');
  # code...
}

?>

<!doctype html>

<html lang="en">


  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100&family=Oswald&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/icon.ico" type="image/x-icon">
    <!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
  <!--===============================================================================================-->
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
  <!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
  <!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
  <!--===============================================================================================-->
  <!--===============================================================================================-->
    <title>ATHENA - Iniciar Sesion</title>

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <form class="form-signin">
      <img class="mb-4" src="img/icon.png" alt="" width="200" height="200">
  <p>SISTEMA GESTION DE PRACTICAS</p>
  
  <label for="inputEmail" class="sr-only">Usuario</label>
  <input type="email" id="inputUser" class="form-control" placeholder="Usuario" >
<!--required autofocus-->
  <label for="inputPassword" class="sr-only">Contraseña</label>
  <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" ><!--required-->
  <a  style="color:#CBC1B9;"href="">¿Olvido su contraseña?</a>
  <br><br>
  <button type="button" class="btn btn-primary btn-lg btn-block" onclick="VerificarUsuario()">Ingresar</button><!-- Llama la funcion para verificar los datos del usuario-->
</form>
</body>

<!--===============================================================================================-->
  <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/bootstrap/js/popper.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="vendor/daterangepicker/moment.min.js"></script>
  <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="vendor/countdowntime/countdowntime.js"></script>
  <!--==============================================SWEETALERT=====================================-->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
  <script src="../JS/usuario.js"></script>

</html>
