<?php
$caja_cont=2;
$acumulado=0;
?>

<div class="top_nav">
  <div class="nav_menu">
    <nav>
      <div class="nav toggle">
        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
      </div>
      
      <ul class="nav navbar-nav navbar-right">
        <li class=""> <!-- USER -->
          <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <!-- DESPLEGABLE -->
            <i class="fa fa-user" aria-hidden="true"></i>
            <span class=" fa fa-angle-down"></span>
          </a>

          <ul class="dropdown-menu dropdown-usermenu pull-right">
            <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Cerrar sesion</a></li>
          </ul>
        </li>                         
      </ul>
    </nav>
  </div>
</div>

