
<?php include '../layout/header.php';


?>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../layout/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="../layout/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../layout/plugins/select2/select2.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../layout/dist/css/skins/_all-skins.min.css">
  <body class="nav-md">
                                            <?php
                      if ($tipo=="administrador") {
                    
                      ?>
    <div class="container body">
      <div class="main_container">
        <?php include '../layout/main_sidebar.php';?>

        <!-- top navigation -->
       <?php include '../layout/top_nav.php';?>      <!-- /top navigation -->
       <style>
label{

color: black;
}
li {
  color: white;
}
ul {
  color: white;
}
#buscar{
  text-align: right;
}
       </style>

        <!-- page content -->
        <div class="right_col" role="main">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class = "x-panel">

            </div>

        </div><!--end of modal-dialog-->
 </div>
 <!--end of modal-->


                  <div class="box-header">
                  <h3 class="box-title"> Datos del empresa</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                
          
<?php
   // $branch=$_SESSION['branch'];
    $query=mysqli_query($con,"select * from configuracion ")or die(mysqli_error());
    $i=1;
    while($row=mysqli_fetch_array($query)){
    $id_configuracion=$row['id_configuracion'];
?>
 

          

    
        <form class="form-horizontal" method="post" action="empresa_actualizar.php" enctype='multipart/form-data'>

        <div class="form-group">
          <label class="control-label col-lg-3" for="name">titulo</label>
          <div class="col-lg-9">

       
                           <textarea class="form-control" id="titulo" name="titulo" required><?php echo $row['titulo'];?></textarea>
          </div>
        </div>
               <div class="form-group">
          <label class="control-label col-lg-3" for="price">mision</label><br>
          <div class="col-lg-9">
                      <textarea class="form-control" id="mision" name="mision" required><?php echo $row['mision'];?></textarea>

          </div>
        </div>
        <br>
        <br>
                       <div class="form-group">
          <label class="control-label col-lg-3" for="price">vision</label><br>
          <div class="col-lg-9">
              <textarea class="form-control" id="vision" name="vision" required><?php echo $row['vision'];?></textarea>

          </div>
        </div>
        <br>
        <br>
                               <div class="form-group">
          <label class="control-label col-lg-3" for="price">direccion</label><br>
          <div class="col-lg-9">
            <input type="text" class="form-control" id="direccion" name="direccion" value="<?php echo $row['direccion'];?>" required>
          </div>
        </div>
        <br>
        <br>
             <div class="form-group">
          <label class="control-label col-lg-3" for="name">codigo  google maps </label>
          <div class="col-lg-9">

              <textarea class="form-control" id="name" name="google_maps" required><?php echo $row['google_maps'];?></textarea>
          </div>
        </div>

           <div class="form-group">
          <label class="control-label col-lg-3" for="price">facebook</label><br>
          <div class="col-lg-9">
            <input type="text" class="form-control" id="facebook" name="facebook" value="<?php echo $row['facebook'];?>" required>
          </div>
        </div>
        <br>
        <br>



     
        <div class="form-group">
                <label class="control-label col-lg-3" for="price">twitter</label><br>
          <div class="col-lg-9">
            <input type="text" class="form-control" id="twitter" name="twitter" value="<?php echo $row['twitter'];?>" required>
          </div>
        </div>
        <br>
        <br>
     

   
   <div class="form-group">
                <label class="control-label col-lg-3" for="price">Servicios descripcion 1</label><br>
          <div class="col-lg-9">
            <input type="text" class="form-control" id="servicios1" name="servicios1" value="<?php echo $row['servicios1'];?>" required>
          </div>
        </div>
        <br>
        <br>
   <div class="form-group">
                <label class="control-label col-lg-3" for="price">Servicios descripcion 2</label><br>
          <div class="col-lg-9">
            <input type="text" class="form-control" id="servicios2" name="servicios2" value="<?php echo $row['servicios2'];?>" required>
          </div>
        </div>
        <br>
        <br>
  
<div class="form-group">
                <label class="control-label col-lg-3" for="price">Servicios descripcion 3</label><br>
          <div class="col-lg-9">
            <input type="text" class="form-control" id="servicios3" name="servicios3" value="<?php echo $row['servicios3'];?>" required>
          </div>
        </div>
        <br>
        <br>


              

                      <div class="form-group">
          <label class="control-label col-lg-3" for="name">Actualizar</label>
          <div class="col-lg-9">
   
                <button type="submit" class="btn btn-primary">Guardar cambios</button>
              
          </div>


        </div>

          
        </form>


<?php 
}?>
          
                </div><!-- /.box-body -->

            </div><!-- /.col -->


          </div><!-- /.row -->




                </div><!-- /.box-body -->

            </div>
        </div>
      </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
    <footer>
          <div class="pull-right">
                             <a href="https://ventadecodigofuente.com/">veterinaria tusulutionweb Sys</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

  <?php include '../layout/datatable_script.php';?>



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


        <?php
                      }
                      ?>
    <!-- /gauge.js -->
  </body>
</html>
