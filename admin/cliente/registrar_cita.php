<?php include 'header.php'; 
    session_start();
    error_reporting(0);
    $varsesion=$_SESSION['var_user'];
    $user=$_SESSION['nombre'];
    $dni=$_SESSION['Dni'];
    $lastname=$_SESSION['apellido'];
    $phone=$_SESSION['telefono'];
    $insurence=$_SESSION['seguro'];
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
                                        <p>Paciente que recibirá la atención</p>
                                        <div class="card-body">
                                            <form action="" method="POST">   
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
                                                            <input type="text" class="form-control" placeholder="Nombres"  name="Nombres"  required="required" value="<?php echo $user ?>"/>
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
                                                            <input type="text" class="form-control" placeholder="Correo"  name="Correo"  required="required" value="<?php echo $_SESSION['var_user'] ?>"/>
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
                                                <div class="col-sm-4">
                                                    <div class=" w3l-form-group input-register-date">
                                                        <label>Seguro:</label>
                                                        <div class="group">
                                                            <!-- <i class="fas fa-id-card"></i> -->
                                                            <input type="text" class="form-control" placeholder="Seguro"  name="Seguro"  required="required" value="<?php echo $insurence ?>"/>
                                                        </div>
                                                    </div>
                                                </div>   
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="section-shadow">
                                        <div class="dates-info">
                                            <i class="fas fa-notes-medical"></i>
                                            <h4>Datos de la cita</h4>
                                        </div>
                                        <p>Ingrese la siguiente información</p>
                                        <div class="card-body">
                                            <form action="validar_registrar_cita.php" method="POST">
                                                <div class="col-sm-6">
                                                    <div class=" w3l-form-group input-register-date">
                                                        <label>Especialidad:</label>
                                                        <div class="group">
                                                            <!-- <i class="fas fa-id-card"></i> -->
                                                            <!-- <input type="text" class="form-control" placeholder="DNI"  name="Dni"  required="required"/> -->
                                                            <select class="form-control" name="especialidad" id="">
                                                                <option>Seleccionar especialidad</option>
                                                                <option>Cardiología</option>
                                                                <option>Endrocrinología</option>
                                                                <option>Neurología</option>
                                                                <option>Odontología</option>
                                                                <option>Neumonología</option>
                                                                <option>Psiquiatría</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class=" w3l-form-group input-register-date">
                                                        <label>Fecha:</label>
                                                        <div class="group">
                                                            <!-- <i class="fas fa-unlock"></i> -->
                                                            <input type="date" class="form-control" placeholder="Contraseña" name="fecha"  required="required"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class=" w3l-form-group input-register-date">
                                                        <label>Medico / Profesional:</label>
                                                        <div class="group">
                                                            <!-- <i class="fas fa-id-card"></i> -->
                                                            <!-- <input type="text" class="form-control" placeholder="DNI"  name="Dni"  required="required"/> -->
                                                            <select class="form-control" name="medico" id="">
                                                                <option>Seleccionar medico</option>
                                                                <option>Pedro Campos</option>
                                                                <option>Elena Ortiz</option>
                                                                <option>Carlos Fuentes</option>
                                                                <option>Mirella Vega</option>
                                                                <option>Ana Flores</option>
                                                                <option>Moises Vargas</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class=" w3l-form-group input-register-date">
                                                        <label>Hora:</label>
                                                        <div class="group">
                                                            <!-- <i class="fas fa-id-card"></i> -->
                                                            <!-- <input type="text" class="form-control" placeholder="DNI"  name="Dni"  required="required"/> -->
                                                            <select class="form-control" name="hora" id="">
                                                                <option>Seleccionar hora</option>
                                                                <option>09:15am</option>
                                                                <option>09:45am</option>
                                                                <option>10:00am</option>
                                                                <option>10:15am</option>
                                                                <option>10:30am</option>
                                                                <option>10:45am</option>
                                                                <option>11:00am</option>
                                                                <option>11:15am</option>
                                                                <option>11:30am</option>
                                                                <option>02:15pm</option>
                                                                <option>02:30pm</option>
                                                                <option>02:45pm</option>
                                                                <option>03:00pm</option>
                                                                <option>03:15pm</option>
                                                                <option>03:30pm</option>
                                                                <option>03:45pm</option>
                                                                <option>04:00pm</option>
                                                                <option>04:15pm</option>
                                                                <option>04:30pm</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <Input  class="btn btn-info mt-5" name= "Reservar_Cita" Type = "submit" value = "Reservar Cita">   
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