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
                    <h3 class="box-title">Seguro de salud al instante</h3>
                </div>
                <!-- /.box-header -->
                
                <div class="box-body">
                    <!-- /.box-header -->
                    <div class="box-body">
                                 
                        <div class="box-body">
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="section-shadow">

                                        <?php if($insurence == 1) { ?>
                                            <div class="dates-info">
                                                <i class="fas fa-user-md"></i>
                                                <h4>Ususario: <?php echo $varsesion ?> </h4>
                                            </div>
                                            <p> Estimado <strong> <?php echo $user ?> </strong>  actualmente usted cuenta con un seguro </p>
                                        <?php } else { ?>
                                            <div class="dates-info">
                                                <i class="fas fa-user-md"></i>
                                                <h4>Ususario: <?php echo $varsesion ?> </h4>
                                            </div>
                                            <p> Estimado <strong> <?php echo $user ?> </strong>  actualmente usted <strong>NO</strong> cuenta con un seguro </p>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="section-shadow">
                                        <div class="dates-info" style="justify-content: center;">
                                            <h4 style="font-size: 33px;">¿Qué cubren los Seguros de Salud?</h4>
                                        </div>
                                        <p style="font-size: 20px; text-align: center; margin-top: 20px;">Obtén la más completa atención en el cuidado de tu salud, con cobertura ambulatoria, hospitalaria, de emergencia,
                                            maternidad y oncología.
                                        </p>
                                        <div class="col-md-3">
                                            <div class=" w3l-form-group input-register-date">
                                                <!-- <label>DNI:</label> -->
                                                <div class="dates-info" style="flex-direction: column">
                                                    <i class="fas fa-ambulance"></i>
                                                        <!-- <input type="text" class="form-control" placeholder="DNI"  name="Dni" readonly="readonly" required="required" value="<?php //echo $dni ?>"/> -->
                                                    <p style="font-size: 17px">Atención de emergencia</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class=" w3l-form-group input-register-date">
                                                <!-- <label>DNI:</label> -->
                                                <div class="dates-info" style="flex-direction: column">
                                                    <i class="fas fa-hospital"></i>
                                                        <!-- <input type="text" class="form-control" placeholder="DNI"  name="Dni" readonly="readonly" required="required" value="<?php //echo $dni ?>"/> -->
                                                    <p style="font-size: 17px">Hospitalización</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class=" w3l-form-group input-register-date">
                                                <!-- <label>DNI:</label> -->
                                                <div class="dates-info" style="flex-direction: column">
                                                    <i class="fas fa-bell"></i>
                                                        <!-- <input type="text" class="form-control" placeholder="DNI"  name="Dni" readonly="readonly" required="required" value="<?php //echo $dni ?>"/> -->
                                                    <p style="font-size: 17px">Atención ambulatoria</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class=" w3l-form-group input-register-date">
                                                <!-- <label>DNI:</label> -->
                                                <div class="dates-info" style="flex-direction: column">
                                                    <i class="fas fa-ribbon"></i>
                                                        <!-- <input type="text" class="form-control" placeholder="DNI"  name="Dni" readonly="readonly" required="required" value="<?php //echo $dni ?>"/> -->
                                                    <p style="font-size: 17px">Cobertura oncológica</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class=" w3l-form-group input-register-date">
                                                <!-- <label>DNI:</label> -->
                                                <div class="dates-info" style="flex-direction: column">
                                                    <i class="fas fa-baby"></i>
                                                        <!-- <input type="text" class="form-control" placeholder="DNI"  name="Dni" readonly="readonly" required="required" value="<?php //echo $dni ?>"/> -->
                                                    <p style="font-size: 17px">Maternidad</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class=" w3l-form-group input-register-date">
                                                <!-- <label>DNI:</label> -->
                                                <div class="dates-info" style="flex-direction: column">
                                                    <i class="fas fa-people-carry"></i>
                                                        <!-- <input type="text" class="form-control" placeholder="DNI"  name="Dni" readonly="readonly" required="required" value="<?php //echo $dni ?>"/> -->
                                                    <p style="font-size: 17px">Médico a domicilio y por teléfono</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class=" w3l-form-group input-register-date">
                                                <!-- <label>DNI:</label> -->
                                                <div class="dates-info" style="flex-direction: column">
                                                    <i class="fas fa-stethoscope"></i>
                                                        <!-- <input type="text" class="form-control" placeholder="DNI"  name="Dni" readonly="readonly" required="required" value="<?php //echo $dni ?>"/> -->
                                                    <p style="font-size: 17px">Tratamientos</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class=" w3l-form-group input-register-date">
                                                <!-- <label>DNI:</label> -->
                                                <div class="dates-info" style="flex-direction: column">
                                                    <i class="fas fa-file-medical"></i>
                                                        <!-- <input type="text" class="form-control" placeholder="DNI"  name="Dni" readonly="readonly" required="required" value="<?php //echo $dni ?>"/> -->
                                                    <p style="font-size: 17px">Chequeo preventivo</p>
                                                </div>
                                            </div>
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
                            <!-- <script>
                                var elDate = document.getElementById('fecha');
                                var elForm = document.getElementById('elForm');
                                var elSubmit = document.getElementById('elSubmit');

                                function sinDomingos(){
                                    var day = new Date(elDate.value ).getUTCDay();
                                    // Días 0-6, 0 es Domingo 6 es Sábado
                                    elDate.setCustomValidity(''); // limpiarlo para evitar pisar el fecha inválida
                                    if( day == 0 ){
                                    elDate.setCustomValidity('Domingos no disponibles, por favor seleccione otro día');
                                    } else {
                                    elDate.setCustomValidity('');
                                    }
                                    if(!elForm.checkValidity()) {elSubmit.click()};
                                }

                                function obtenerfechafinf1(){
                                    sinDomingos();
                                }
                            </script> -->
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
    <!-- <script>
        $("#datepicker").datepicker();
    </script> -->
    
    <!-- /gauge.js -->
  </body>
</html>