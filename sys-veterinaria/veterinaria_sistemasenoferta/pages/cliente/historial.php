
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
                  <h3 class="box-title"> </h3>

                </div><!-- /.box-header -->
                 <a class = "btn btn-success btn-print" href = "" onclick = "window.print()"><i class ="glyphicon glyphicon-print"></i> Impresión</a>


                <a class="btn btn-danger btn-print" href="<?php  echo "historial_agregar.php?id_cliente=$id_cliente";?>"  role="button" >Registrar historial</a>
                  <a class="btn btn-info btn-print" href="<?php  echo "cita_agregar.php?id_cliente=$id_cliente";?>"  role="button"  target="_blank">Programar cita</a>

    <a class="btn btn-warning btn-print" href="<?php  echo "cliente_historial.php";?>"  role="button">Retroceder</a>
                









                <div class="box-body">
                
         

 
                        
            

          
      






      
 <!--end of modal-->











                  <div class="box-header">
                  <h3 class="box-title"> HISTORIAL</h3>
                </div><!-- /.box-header -->
              


                <div class="box-body">
                
                  <table id="example22" class="table table-bordered table-striped">
                    <thead>
                      <tr>

          
                        
                        <th>Descripcion</th>
                        <th>Fecha registro</th>
               
       

                          
     

 <th class="btn-print"> Accion </th>
                      </tr>
                    </thead>
                    <tbody>
<?php
   // $branch=$_SESSION['branch'];
    $query=mysqli_query($con,"select * from historial where id_cliente='$id_cliente' ORDER BY id_historial DESC;" )or die(mysqli_error());
    $i=0;
    while($row=mysqli_fetch_array($query)){
    $id_historial=$row['id_historial'];
      $codigo=$row['id_historial'];
                $tipo_historial=$row['tipo_historial'];

?>
                      <tr >




  <td><?php echo $row['descripcion'];?></td>  
<td><?php echo $row['fecha_registro'];?></td>
               

                          <td>


      
<a class="btn btn-danger btn-print" href="<?php  echo "editar_historial.php?id_historial=$id_historial&id_cliente=$id_cliente";?>"  role="button">Editar</a>
                                 <?php
                   if ($tipo_historial=="cita") {
        
                 
                    
                      ?>


<a class="btn btn-success btn-print" href="<?php  echo "ver_citas.php?codigo=$codigo&id_cliente=$id_cliente";?>"  role="button">Ver cita</a>
             <?php
                    }
                      ?>

            </td>
                      </tr>

 <!--end of modal-->

<?php }?>
                    </tbody>

                  </table>
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
           "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],


  "searching": true,
                }

              );
              } );
    </script>




    <!-- /gauge.js -->
  </body>
</html>
