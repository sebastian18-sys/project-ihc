<?php include 'veterinaria_sistemasenoferta/dist/includes/dbcon.php';?>
<?php
$titulo="";
$imagen_baner="imagen_baner";
$servicios1="servicios1";
$servicios2="servicios2";
$servicios3="servicios3";
$mision="mision";
$imagen_galeria1="imagen_galeria1";
$imagen_galeria2="imagen_galeria2";
$vision="vision";
$direccion="direccion";
$google_maps="google_maps";
//$facebook="facebook";
$twitter="twitter";

    $query=mysqli_query($con,"select * from configuracion ")or die(mysqli_error());
    $i=1;
    while($row=mysqli_fetch_array($query)){
        $titulo=$row['titulo'];

    $servicios1=$row['servicios1'];
    $servicios2=$row['servicios2'];
     $servicios3=$row['servicios3'];
      $mision=$row['mision'];
      $imagen_galeria1=$row['imagen_galeria1'];
       $imagen_galeria2=$row['imagen_galeria2'];
       $vision=$row['vision'];
        $direccion=$row['direccion'];
        $google_maps=$row['google_maps'];
         $facebook=$row['facebook'];
         $twitter=$row['twitter'];
}




?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo $titulo;?> </title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/agency.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top"><?php echo $titulo;?></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Mision </a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Vision</a>
          </li>
                <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#galeria">Galeria</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#team">Ubicacion</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contacto</a>
          </li>

            <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="veterinaria_sistemasenoferta/">admin</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in"><?php echo $direccion;?>
 </div>
        <div class="intro-heading text-uppercase"><?php echo $titulo;?></div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Servicios  a ofertar:</a>
      </div>
    </div>
  </header>

  <!-- Services -->
  <section class="page-section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Servicios</h2>
          <h3 class="section-subheading text-muted"></h3>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-home fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading"> <?php echo $servicios1;?></h4>
          <p class="text-muted"> .</p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-gavel fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading"><?php echo $servicios2;?></h4>
          <p class="text-muted"> </p>
        </div>
        <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-handshake fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading"><?php echo $servicios3;?></h4>
          <p class="text-muted"> </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio Grid -->
  <section class="bg-light page-section" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Mision empresarial</h2>
          <h3 class="section-subheading text-muted"><?php echo $mision;?></h3>
        </div>
      </div>

    </div>
  </section>



  <section class="bg-light page-section" id="galeria">
    <div class="container">
      <div class="row">

      </div>
      <div class="row">
        <div class="col-md-6 col-sm-4 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="veterinaria_sistemasenoferta/pages/layout/images/<?php echo $imagen_galeria1;?>" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Galerias</h4>
    
          </div>
        </div>
        <div class="col-md-6 col-sm-4 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
      <img class="img-fluid" src="veterinaria_sistemasenoferta/pages/layout/images/<?php echo $imagen_galeria2;?>"  alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Galerias</h4>
         
          </div>
        </div>




      </div>
    </div>
  </section>

  <!-- About -->
  <section class="page-section" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Vision empresarial</h2>
          <h3 class="section-subheading text-muted"><?php echo $vision;?></h3>
        </div>
      </div>

    </div>
  </section>

  <!-- Team -->
  <section class="bg-light page-section" id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Ubicacion google maps</h2>
           <p class="section-heading text-uppercase"><?php echo $direccion;?>
</p>
          <h3 class="section-subheading text-muted"><iframe src="<?php echo $google_maps;?>" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>.</h3>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-8 mx-auto text-center">

        </div>
      </div>
    </div>
  </section>

  <!-- Clients -->


  <!-- Contact -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Contactenos</h2>
          <h3 class="section-subheading text-muted">Envie sus consulta o cotizacion</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form id="contactForm" name="sentMessage" novalidate="novalidate">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" id="name" type="text" placeholder="Escriba nombre *" required="required" data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="email" type="email" placeholder="Escriba su email*" required="required" data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="phone" type="tel" placeholder="Escriba su telefono *" required="required" data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea class="form-control" id="message" placeholder="Escriba su cotizacion *" required="required" data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Enviar mensaje</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
          <span class="copyright">Copyright &copy;<?php echo $titulo;?>   2020</span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="<?php echo $twitter;?>">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="<?php echo $facebook;?>">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
       
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item">
    
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Portfolio Modals -->

  <!-- Modal 1 -->
  <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase"><?php echo $titulo;?>  </h2>
                <p class="item-intro text-muted"></p>
                <img class="img-fluid d-block mx-auto" src="img/ima1.jpg" alt="">
                <p><?php echo $direccion;?> 
</p>

                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Cerrar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 2 -->

  <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase"><?php echo $titulo;?> </h2>
  
                <img class="img-fluid d-block mx-auto" src="img/ima2.jpg" alt="">
                <p><?php echo $direccion;?> 
</p>
     
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Cerrar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>







  <!-- Modal 6 -->


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/agency.min.js"></script>

</body>

</html>
