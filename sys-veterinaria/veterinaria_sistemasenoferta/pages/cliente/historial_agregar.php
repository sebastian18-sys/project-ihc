
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
  <?php
     if(isset($_REQUEST['id_cliente']))
            {
              $id_cliente=$_REQUEST['id_cliente'];
            }
            else
            {
            $id_cliente=$_POST['id_cliente'];
          }


?>

                 <div class="panel-heading">


        </div>
 
 <!--end of modal-->


                  <div class="box-header">
                  <h3 class="box-title"> REGISTRAR HISTORIAL </h3>

                </div><!-- /.box-header -->
                  <a class="btn btn-danger btn-print" href="<?php  echo "historial.php?id_cliente=$id_cliente";?>"  role="button">Retroceder</a>









                <div class="box-body">
                
         

                        
            

          
      
       <?php
            $fecha_registro = date('Y-m-d');
            ?>


<?php
$session_id=$_SESSION['id'];
$cont=0;
$codigo="";
            $query3=mysqli_query($con,"select * from historial ")or die(mysqli_error());

                      while($row3=mysqli_fetch_array($query3)){
   $cont=$row3['id_historial'];
}
  $cont=$cont+1;
  $codigo=$cont.$session_id;

?>



        <form class="form-horizontal" method="post" action="historial_add.php" enctype='multipart/form-data'>



     
<div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                                                  <label >NUMERO DE HISTORIAL</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">
  <input type="text" class="form-control pull-right"  value="<?php echo $codigo;?>" id="date"   disabled required>
                          <input type="hidden" class="form-control pull-right" name="codigo" value="<?php echo $codigo;?>" id="codigo"    required>
                <input type="hidden" class="form-control pull-right" name="id_cliente" value="<?php echo $id_cliente;?>" id="id_cliente"    required>

             <input type="hidden" class="form-control pull-right" name="tipo_historial" value="historial" id="tipo_historial"    required>   
                        <input type="hidden" class="form-control pull-right" name="fecha_registro" value="<?php echo $fecha_registro;?>" id="fecha_registro"    required> 
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>

                   <div class="row">
                    <div class="col-md-3 btn-print">
                      <div class="form-group">
                        <label for="date" >Descripcion</label>
                 
                      </div><!-- /.form group -->
                    </div>
                       <div class="col-md-4 btn-print">
                      <div class="form-group">
<textarea class="form-control" id="descripcion" name="descripcion" required></textarea>

                        
                      </div>
                    </div>
                           <div class="col-md-4 btn-print">
                
                    </div>
                    </div>
       
                   
    <button type="submit" class="btn btn-primary">Guardar cambios</button>
              


              <div class="modal-footer">


              </div>
        </form>

 



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





    <!-- /gauge.js -->
  </body>
</html>
