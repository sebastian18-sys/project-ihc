<?php 
include 'header.php';
include '../../base_datos/db.php'
?>


<link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
<link rel="stylesheet" href="plugins/select2/select2.min.css">
<link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <?php 
      include 'main_sidebar.php';
      ?>
      <?php include 'top_nav.php';
      ?>

<style>
label {
  color: black;
}
li {
  color: white;
}
ul {
  color: white;
}
#buscar {
  text-align: right;
}

</style>
      <!-- page content -->
      <div class="right_col" role="main">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class = "x-panel"></div>
          </div>
        </div>
        
        <div class="box-body"></div>
        
        <div class="box-header">
          <h3 class="box-title"> MENU</h3>
        </div>
        
        <div class="box-body">
          <div class="box-header with-border">
            <h3 class="box-title"></h3>
          </div><!-- /.box-header -->
          
          <div class="box-body">
            <div class="row"> 
              
              <!-- CONTEO DE PACIENTES -->
              <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-aqua">
                  <div class="inner">
                    <h1>
<?php
$query = "SELECT * FROM pacientes where dni != '123'";
$select = mysqli_query($conn,$query);
$num = mysqli_num_rows($select);
echo $num;
?>
                    </h1>
                    <h4>Pacientes</h4>
                  </div>
                  
                  <!-- <div class="icon"><img height="80" width="80" src="img/cajero.png"></div> -->
                 
                  <a href="pacientes.php" class="small-box-footer">Ver <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- FIN CONTEO DE PACIENTES -->
            

              <!-- CONTEO ASEGURADOS -->
              <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-blue">
                  <div class="inner">
                    <h1>
<?php
$query = "SELECT * FROM pacientes where dni != '123'and asegurado = true";
$select = mysqli_query($conn,$query);
$num = mysqli_num_rows($select);
echo $num;
?>
                    </h1>
                    <h4>Asegurados</h4>
                  </div>
                  <!-- <div class="icon"><img height="80" width="80" src="img/comittee.png">
                    <i class=""></i>
                  </div> -->
                  <a href="asegurados.php" class="small-box-footer">Ver <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- FIN CONTEO DE ASEGURADOS -->


              <!-- CONTEO DE PACIENTES UCI -->
              <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-orange">
                  <div class="inner">
                    <h1>
<?php
$query = "SELECT * FROM camas_uci where reservado = true";
$select = mysqli_query($conn, $query); 
$num = mysqli_num_rows($select);
echo $num;
?>
                    </h1>
                    <h4>Pacientes UCI</h4>
                  </div>
                  <!-- <div class="icon"><img height="80" width="80" src="img/setting.png">
                    <i class=""></i>
                  </div> -->
                  <a href="pacientes_uci.php" class="small-box-footer">Ver <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- FIN CONTEO DE PACIENTES UCI -->
        


              <!-- CONTEO DE CAMAS UCI -->
              <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-green">
                  <div class="inner">
                    <h1>
<?php
$query = "SELECT * FROM camas_uci where reservado = false";
$select = mysqli_query($conn, $query); 
$num = mysqli_num_rows($select);
echo $num;
?>
                    </h1>
                    <h4>Camas UCI</h4>
                  </div>
                  <!-- <div class="icon"><img height="80" width="80" src="img/setting.png">
                    <i class=""></i>
                  </div> -->
                  <a href="agregar_p_uci.php" class="small-box-footer">Ver <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>
              <!-- FIN CONTEO DE CAMAS UCI -->
        
     

            </div>


                </div><!-- /.box-body -->

            </div>


          </div>




                </div><

            </div>
        </div>
      </div>
        </div>

      </div>
    </div>

  <?php include 'datatable_script.php';?>



        <script>
        $(document).ready( function() {
                $('#example2').dataTable( {
                 "language": {
                   "paginate": {
                      "previous": "anterior",
                      "next": "posterior"
                    },
                    "search": "Buscar:",


                  },

                  "info": false,
                  "lengthChange": false,
                  "searching": false,


  "searching": true,
                }

              );
              } );
    </script>


    <!-- /gauge.js -->
  </body>
</html>
