<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <!-- <link rel="stylesheet" href="../sys-veterinaria/veterinaria_sistemasenoferta/bootstrap/css/bootstrap.min.css"> -->
    
    <!-- Font Awesome -->
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="sys-veterinaria/dist/css/skins/_all-skins.min.css">
    <title>Sistema Hospitalario</title>
    <!-- meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="keywords" content="sistema de parqueamiento, parqueo,codigo fuente parqueo, sistema de parqueamiento con codigo fuente"
    />
    <!-- /meta tags -->
    <!-- custom style sheet -->
    <link href="./css/style.css" rel="stylesheet" />
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
        <h2>Bienvenidos al Sistema Hospitalario</h2>
    </div>
    <div class=" w3l-login-form">
        <h2>Portal del paciente</h2>
        <form action="validar_inicio_sesion.php" method="POST">

            <div class=" w3l-form-group input-filled">
                <label>DNI</label>
                <div class="group">
                    <i class="fas fa-id-card"></i>
                    <input type="text" class="form-control"   name="Dni"  required="required"/>
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Contraseña</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="password" class="form-control"  name="Password"  required="required"/>
                </div>
            </div>
            <div class="forgot">
                <!-- <p>No tienes cuenta? <strong><a href="./register.php">Registrese aquí</a></strong> </p> -->
                <p><input type="checkbox">Recordar password</p>
            </div>
            <Input  class="btn btn-success" name= "iniciar_sesion" Type = "submit" value = "Iniciar Sesión">
            <a href="./register.php"><input class="button" Type="button" value="Si no tienes una cuenta regístrate"></a> 
    
        </form>
 
    </div>
       <!-- <footer>
          <div class="pull-right">
                             <a href="https://sistemasenoferta.blogspot.com/">veterinariaACSDASCDAD</a>
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
    <script src="./js/main.js"></script>
</body>

</html>

<?php session_destroy(); ?>