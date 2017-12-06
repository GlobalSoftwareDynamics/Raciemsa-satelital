<?php
ob_start();
session_start();
// remove all session variables
session_unset();
// destroy the session
session_destroy();
include('login.php'); // Includes Login Script
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Master - Raciemsa</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<section class="login-block">
    <div class="container col-xl-8 col-lg-4 col-md-8 col-11">
        <div class="row">
            <div class="col-12 col-xl-4 login-sec">
                <div id="logo">
                    <img src="" width="200" class="centered">
                </div>
                <h2 class="text-center"></h2>
                <form class="login-form" method="post" action="#">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Usuario</label>
                        <input type="text" class="form-control" placeholder="Usuario" name="username">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Contraseña</label>
                        <input type="password" class="form-control" placeholder="Contraseña" autocomplete="new-password" name="password">
                    </div>

                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input">
                            <small>Recordarme</small>
                        </label>
                        <input type="submit" class="btn btn-login float-right" name="submit" value="Iniciar Sesión">
                    </div>
                </form>
            </div>
            <div class="col-12 col-xl-8 d-none d-sm-none d-md-none d-lg-none d-xl-block banner-sec">

            </div>
        </div>
</section>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>