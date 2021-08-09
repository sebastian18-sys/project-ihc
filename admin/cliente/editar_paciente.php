<?php include 'header.php'; 
    session_start();
    error_reporting(0);

    /* PACIENTE */
    // $varsesion=$_SESSION['var_user'];
    // $user=$_SESSION['nombre'];
    // $dni=$_SESSION['Dni'];
    // $lastname=$_SESSION['apellido'];
    // $phone=$_SESSION['telefono'];
    // $insurence=$_SESSION['seguro'];
 
    include '../../base_datos/db.php'
?>

<?php

  $dni=$_SESSION['Dni'];
  $query = "SELECT * FROM pacientes WHERE dni=$dni";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $dni = $row['dni'];
    $name = $row['nombres'];
    $lastname = $row['apellidos'];
    $email = $row['correo'];
    $phone = $row['celular'];
  }

?>


<?php 
    if (isset($_POST['editar_paciente'])) {
    $dni_p = $_POST['Dni'];
    $nombre_p= $_POST['Nombres'];
    $apellidos_p = $_POST['Apellidos'];
    $correo_p = $_POST['Correo'];
    $telefono_p = $_POST['Telefono'];


    $query = "UPDATE pacientes SET nombres = '$nombre_p', apellidos = '$apellidos_p', correo = '$correo_p', celular = '$telefono_p' WHERE dni=$dni_p";
    mysqli_query($conn, $query);
    $_SESSION['message'] = 'Task Updated Successfully';
    $_SESSION['message_type'] = 'warning';
    header('Location: familia.php');
    }
?>

<!-- Font Awesome -->
<link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
<link rel="stylesheet" href="dist/css/AdminLTE.css">
<link rel="stylesheet" href="plugins/select2/select2.min.css">
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous"> -->
<link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

<body class="nav-md">
    <div class="container body">
        <div class="main_container">

            <?php include 'main_sidebar.php';?>
            <!-- top navigation -->
             <?php include 'top_nav.php';?>     
            <!-- /top navigation -->
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
                        <div class = "x-panel"></div>
                    </div><!--end of modal-dialog-->
                </div>
                <!--end of modal-->
                <div class="box-body"><!-- Date range --></div>

                <div class="box-header">
                    <h3 class="box-title">Registrar Cita</h3>
                </div>
                <!-- /.box-header -->
                
                <div class="box-body">
                    <!-- /.box-header -->
                    <div class="box-body">
                                 
                        <div class="box-body">
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="section-shadow">
                                        <div class="dates-info">
                                            <i class="fas fa-user-md"></i>
                                            <h4>Información del paciente</h4>
                                        </div>
                                        <div class="card-body">
                                            <form action="./editar_paciente.php" method="POST">   

                                                

                                                <div class="col-sm-4">
                                                    <div class=" w3l-form-group input-register-date">
                                                        <label>DNI:</label>
                                                        <div class="group">
                                                            <!-- <i class="fas fa-id-card"></i> -->
                                                            <input type="text" class="form-control" placeholder="DNI"  name="Dni"  required="required" value="<?php echo $dni ?>"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class=" w3l-form-group input-register-date">
                                                        <label>Nombres:</label>
                                                        <div class="group">
                                                            <!-- <i class="fas fa-id-card"></i> -->
                                                            <input type="text" class="form-control" placeholder="Nombres"  name="Nombres"  required="required" value="<?php echo $name ?>"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class=" w3l-form-group input-register-date">
                                                        <label>Apellidos:</label>
                                                        <div class="group">
                                                            <!-- <i class="fas fa-id-card"></i> -->
                                                            <input type="text" class="form-control" placeholder="Apellidos"  name="Apellidos"  required="required" value="<?php echo $lastname ?>" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class=" w3l-form-group input-register-date">
                                                        <label>Correo:</label>
                                                        <div class="group">
                                                            <!-- <i class="fas fa-id-card"></i> -->
                                                            <input type="text" class="form-control" placeholder="Correo"  name="Correo"  required="required" value="<?php echo $email ?>"/>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-sm-4">
                                                    <div class=" w3l-form-group input-register-date">
                                                        <label>Teléfono:</label>
                                                        <div class="group">
                                                            <!-- <i class="fas fa-id-card"></i> -->
                                                            <input type="text" class="form-control" placeholder="Teléfono"  name="Telefono"  required="required" value="<?php echo $phone ?>"/>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <Input  class="btn btn-info mt-5" name= "editar_paciente" Type = "submit" value = "Actualizar"> 
                                                <a href="./familia.php"> <input class="btn btn-success mt-5" type="button" value="Regresar"> </a>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                 
                            </div>



                            <script type="text/javascript">// < ![CDATA[
                                function Eliminar (i) {
                                    document.getElementsByTagName("table")[0].setAttribute("id","tableid");
                                    document.getElementById("tableid").deleteRow(i);
                                }
                                function Buscar() {
                                            var tabla = document.getElementById('example22');
                                            var busqueda = document.getElementById('txtBusqueda').value.toLowerCase();
                                            var cellsOfRow="";
                                            var found=false;
                                            var compareWith="";
                                            for (var i = 1; i < tabla.rows.length; i++) {
                                                cellsOfRow = tabla.rows[i].getElementsByTagName('td');
                                                found = false;
                                                for (var j = 0; j < cellsOfRow.length && !found; j++) { compareWith = cellsOfRow[j].innerHTML.toLowerCase(); if (busqueda.length == 0 || (compareWith.indexOf(busqueda) > -1))
                                                    {
                                                        found = true;
                                                    }
                                                }
                                                if(found)
                                                {
                                                    tabla.rows[i].style.display = '';
                                                } else {
                                                    tabla.rows[i].style.display = 'none';
                                                }
                                            }
                                        }
                                // ]]>
                            </script>
                        </div>
                        <!-- /.box-body -->       
                    </div>
                    <!--row-->
                </div>
                <!-- /.col (right) -->
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    <!-- /.box-body -->               
    <!-- /page content -->
    <!-- footer content -->
    <footer>
        <!-- <div class="pull-right">
            <a href="https://ventadecodigofuente.com/">peluqueria tusulutionweb Sys</a>
        </div>
        <div class="clearfix"></div> -->
    </footer>
    <!-- /footer content -->
                                <!-- </div>
                                </div> -->

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