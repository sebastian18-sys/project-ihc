
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
                         
             //         if ($guardar=="si") {
                    
                      ?>
 <button type="button" class="btn btn-primary btn-lg btn-print" data-toggle="modal" data-target="#miModal">
  NUEVO
</button>
                  <?php
               //       }
                      ?>
<div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
                        <div class="box-body">
                  <!-- Date range -->
                  <form method="post" action="usuario_add.php" enctype="multipart/form-data" class="form-horizontal">
                  <input type="hidden" class="form-control" id="ir_aqui" name="ir_aqui" value="usuario_admin" required>
                  <input type="hidden" class="form-control" id="tipo" name="tipo" value="admin" required>
                  <input type="hidden" class="form-control" id="telefono" name="telefono"  value="">
                  <input type="hidden" class="form-control" id="id_provincia" name="id_provincia"  value="0">
                  <input type="hidden" class="form-control" id="id_municipio" name="id_municipio"  value="0">
                  <input type="hidden" class="form-control" id="dm_sector" name="dm_sector"  value="">
                  <input type="hidden" class="form-control" id="calle" name="calle"  value="">
                  <input type="hidden" class="form-control" id="id_bloque" name="id_bloque"  value="0">
                  <input type="hidden" class="form-control" id="centro_voto" name="centro_voto"  value="">
                  <input type="hidden" class="form-control" id="mesa" name="mesa"  value="">                
            <div class="col-md-6 btn-print">
               <div class="form-group">
          <label class="control-label col-lg-3" for="name">Foto </label>
          <div class="col-lg-9">
            <input type="file" class="form-control" id="imagen" name="imagen"  >
          </div>
        </div>
 </div>
                    <div class="col-md-12 btn-print">
                      <div class="form-group">
                        <label for="date" class="col-sm-3 control-label">Nombre</label>
                        <div class="input-group col-sm-8">
                          <input type="text" class="form-control pull-right" id="date" name="nombre" required >
                        </div><!-- /.input group -->
                      </div><!-- /.form group -->
                    </div>
                                        <div class="col-md-12 btn-print">
                      <div class="form-group">
                        <label for="date" class="col-sm-3 control-label">Apellido</label>
                        <div class="input-group col-sm-8">
                          <input type="text" class="form-control pull-right" id="date" name="apellido" required >
                        </div><!-- /.input group -->
                      </div><!-- /.form group -->
                    </div>
   <div class="col-md-12 btn-print">
                      <div class="form-group">
                        <label for="date" class="col-sm-3 control-label">Cedula</label>
                        <div class="input-group col-md-8">
                          <input type="text" class="form-control pull-right" id="cedula" name="cedula" onkeyup="Principal();" placeholder="cedula" required>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12 btn-print">
                      <div class="form-group">
                        <label for="date" class="col-sm-3 control-label">Contraseña</label>
                        <div class="input-group col-md-8">
                          <input type="password" class="form-control pull-right" id="password" name="password" placeholder="password " required>
                        </div><!-- /.input group -->
                      </div><!-- /.form group -->
                    </div>
                    <div class="col-md-12 btn-print">
                      <div class="form-group">
                        <label for="date" class="col-sm-3 control-label">Repita contraseña</label>
                        <div class="input-group col-md-8">
                          <input type="password" class="form-control pull-right" id="password2" name="password2" placeholder="password " required>
                        </div><!-- /.input group -->
                      </div><!-- /.form group -->
                    </div>
                 
         <?php
            $fechaactual = date('Y-m-d');
            ?>
                        <div class="col-md-12 btn-print">
                      <div class="form-group">
                        <label for="date" class="col-sm-3 control-label">Fecha</label>
                        <div class="input-group col-sm-8">
                          <input type="date" class="form-control pull-right" id="fecha" name="fecha" value="<?php echo $fechaactual;?>"  readonly="readonly" >
                        </div><!-- /.input group -->
                      </div><!-- /.form group -->
                    </div>

       

                    <div class="col-md-12">
                       <div class="col-md-12">
                        <button class="btn btn-lg btn-primary btn-print" id="daterange-btn"  name="">GUARDAR</button>
                          <button type="button" class="btn btn-danger" data-dismiss="modal">CERRAR</button>
                         </div>

                    </div>

          </form>

          </div>
      </div>
   
    </div>
  </div>
</div>
 <!--end of modal-->


                  <div class="box-header">
                  <h3 class="box-title"> LISTA USUARIOS ADMIN</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                
                  <table id="example2" class="table table-bordered table-striped">
                    <thead>
                      <tr>


                        <th>Foto</th>
                        <th>Id</th>
                        <th>Nombre y apellidos</th>
                        <th>Cedula</th>

                           <th> Fecha </th>
     
                       <th class="btn-print"> Accion </th>

                      </tr>
                    </thead>
                    <tbody>
<?php
   // $branch=$_SESSION['branch'];
    $query=mysqli_query($con,"select * from usuario  where tipo='admin' ")or die(mysqli_error());
    $i=1;
    while($row=mysqli_fetch_array($query)){
    $cid=$row['id'];
 
?>
                      <tr >


 <td><IMG src="subir_us/<?php echo $row['imagen'];?>" style="height:50PX" /></td>
  <td><?php echo $row['cedula'];?></td>
              <td><?php echo $row['nombre'].'  '.$row['apellido'];?></td>

                        <td><?php echo $row['cedula'];?></td>
                        <td><?php echo $row['fecha'];?></td>      

                        <td>
                          <td>
                                 <?php
                 //     if ($eliminar=="si") {
                    
                      ?>
   <a class="small-box-footer btn-print"  href="<?php  echo "eliminar_usuario.php?cid=$cid";?>"><i class="glyphicon glyphicon-remove"></i></a>
         <?php
             //         }
                      ?>

         <?php
                 //     if ($editar=="si") {
                    
                      ?>
                      <a class="btn btn-danger btn-print" href="<?php  echo "editar_usuario_admin.php?cid=$cid";?>"  role="button">Editar</a>
        
             <?php
            //          }
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