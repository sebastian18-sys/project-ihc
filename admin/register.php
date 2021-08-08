<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- <title>Login - <?php include('dist/includes/title.php');?></title> -->
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="../sys-veterinaria/veterinaria_sistemasenoferta/bootstrap/css/bootstrap.min.css"> -->
    
    <!-- Font Awesome -->
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <title>Sistema Hospitalario</title>
    <!-- meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="sistema de parqueamiento, parqueo,codigo fuente parqueo, sistema de parqueamiento con codigo fuente"
    />
    <!-- /meta tags -->
    <!-- custom style sheet -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <!-- /custom style sheet -->
    <!-- fontawesome css -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- /fontawesome css -->
    <!-- google fonts-->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- /google fonts-->

</head>
  <head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>

<body>
    <!-- https://sistemasenoferta.blogspot.com/ -->
    <div class="head-login">
    <h2>Crear cuenta</h2>
    </div>
    <div class=" w3l-login-form">
        <h2>Registro</h2>
    <form action="login.php" method="post">

            <div class=" w3l-form-group">
                <label>DNI:</label>
                <div class="group">
                    <i class="fas fa-id-card"></i>
                    <input type="text" class="form-control" placeholder="DNI"  name="dni"  required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Nombres:</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control" placeholder="Nombres"  name="nombres"  required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Apellidos:</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control" placeholder="Apellidos"  name="apellidos"  required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Correo:</label>
                <div class="group">
                    <i class="fas fa-envelope"></i>
                    <input type="email" class="form-control" placeholder="Correo" name="email"  required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Celular:</label>
                <div class="group">
                    <i class="fas fa-phone"></i>
                    <input type="text" class="form-control" placeholder="Celular" name="celular"  required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Constraseña:</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="password" class="form-control" placeholder="Contraseña" name="password"  required="required" />
                </div>
            </div>
            <div class="forgot">
                <!-- <p>No tienes cuenta? <strong><a href="">Registrese aquí</a></strong> </p> -->
                <p><input type="checkbox">Acepto los términos y condiciones</p>
            </div>
            <!-- <button type="submit" name="sign in">Crear cuenta</button> -->
            <input type="submit" name="sign in" class="button" value="Registrar">
    
        </form>
 
    </div>
       <!-- <footer>
          <div class="pull-right">
                             <a href="https://sistemasenoferta.blogspot.com/">veterinaria</a>
          </div>
          <div class="clearfix"></div>
        </footer> -->



    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
</body>

</html>