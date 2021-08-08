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

      <!-- SideBar Principal -->
      <?php include 'main_sidebar.php';?>

      <!-- Top Navegación -->
      <?php include 'top_nav.php';?>      
      
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

        <!-- Página Principal-->
        <div class="right_col" role="main">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class = "x-panel"></div>
            </div><!--end of modal-dialog-->
          </div>
        <!--end of modal-->
          <div class="box-body"></div>
          
          <div class="box-header">
            <h3 class="box-title"> Asegurados</h3>
          </div>
          <div class="box-body">
            <table ID="example22" class="table table-bordered table-striped">

              <!-- Cabecera de la tabla -->
              <thead>
                <tr>
                  <th>Código</th>
                  <th>DNI</th>
                  <th>Nombres</th>
                  <th>Apellidos</th>
                </tr>
              </thead>

              <tbody>

<?php

$query = "SELECT * FROM camas_uci where reservado = false";
$result_tasks = mysqli_query($conn, $query); 
while($row = mysqli_fetch_assoc($result_tasks)) { 

?>

<tr>
                  <td><?php echo $row['codigo'];?></td>
                  <td><?php echo $row['dni'];?></td>
                  <td><?php echo $row['nombres'];?></td>
                  <td><?php echo $row['apellidos'];?></td>      
                </tr>
                <?php } ?>

              </tbody>
            </table>
          </div><!-- /.box-body -->       
        </div><!--row-->
      </div><!-- /.col (right) -->
    </div><!-- /.box-body -->
  </div><!-- /.col -->
</div><!-- /.row -->
</div><!-- /.box-body -->


<?php include 'datatable_script.php';?>

  </body>
</html>
