<?php
  $caja_cont=2;
  $acumulado=0;

//     $caja_query=mysqli_query($con,"select * from caja where estado='abierto' ")or die(mysqli_error());
//     $i=0;
//     while($row_caja=mysqli_fetch_array($caja_query)){
//       $caja_cont++;
//       $acumulado=$row_caja['monto'];
//     }
// if ($caja_cont==0) {

// }
?>

<div class="top_nav">
  <div class="nav_menu">
    <nav>
      <div class="nav toggle">  <!-- MENU -->
        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
      </div>

      <ul class="nav navbar-nav navbar-right">  <!-- LISTA USER, CAJA, POS-->

        <li class=""> <!-- USER -->
          <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <!-- DESPLEGABLE -->
            <!-- <img src="usuario/subir_us/5.jpg" alt=""> -->
            <p class="user-system">sebastian99_19@hotmail.com</p> <!-- USUARIO PHP CON SESSION -->
            <i class="fa fa-user" aria-hidden="true"></i>
            <span class=" fa fa-angle-down"></span>
          </a>

          <ul class="dropdown-menu dropdown-usermenu pull-right">
            <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Cerrar sesion</a></li>
          </ul>
        </li>   

         <!-- CAJA -->
        <!-- <?php if ($tipo=="administrador" or $tipo=="empleado") { ?>
        <li class="">
          <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <img src="images/caja.png" alt="">CAJA<?php echo "<h2>Peroo</h2>"; ?>
            <span class=" fa fa-angle-down"></span>
          </a>

          <ul class="dropdown-menu dropdown-usermenu pull-right">
            <?php if ($caja_cont==0) { ?>
            <li>
              <a href="../layout/caja.php"><i class="fa fa-money"></i> Abrir  caja</a>
            </li>
            <?php } if ($caja_cont>0) { ?>   
            <li><a href="caja_close.php"><i class="fa fa-money"></i> Cerrar caja</a></li>
            <?php } ?>  
          </ul>
        </li>  
        <?php } ?> -->


        <!-- POS -->
        <!-- <?php if ($tipo=="administrador" or $tipo=="empleado") { ?>
        <li class=""> 
          <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <img src="../layout/img/pos.png" alt="">POS
            <span class=" fa fa-angle-down"></span>
          </a>

          <ul class="dropdown-menu dropdown-usermenu pull-right">
            <li><a href="../ventas/pos.php"><i class="fa fa-money"></i> POS </a></li>           
          </ul>
        </li>  
        <?php } ?> -->

      </ul>
    </nav>
  </div>
</div>

