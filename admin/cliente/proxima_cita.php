<?php include 'header.php'; 
    
    session_start();
    error_reporting(0);
    $varsesion=$_SESSION['var_user'];
    $dni=$_SESSION['Dni'];
    include '../../base_datos/db.php'
?>

<!-- Font Awesome -->
<link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
<link rel="stylesheet" href="dist/css/AdminLTE.css">
<link rel="stylesheet" href="plugins/select2/select2.min.css">

<link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

<html>
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
                    <h3 class="box-title">Próximas Citas</h3>
                </div>
                <!-- /.box-header -->
                
                <div class="box-body">
                    <!-- /.box-header -->
                    <div class="box-body">
                                 
                        <div class="box-body">
                            <div class="table-responsive">
                            <table ID="example22" class="table table-bordered table-striped shadow-sm dataTable no-footer">
                                <thead style="font-size: 20px">
                                    
                                        <tr>
                                            <th>Fecha</th>
                                            <th>Hora</th>
                                            <th>DNI</th>
                                            <th>Especialidad</th>
                                            <th>Responsable</th>
                                            <!-- <th>Estado</th> -->
                                        </tr>
                                    
                                </thead>
                                
                                <tbody style="font-size: 18px">
                              
                                    <?php

                                    $query = "SELECT * FROM cita WHERE dni = '$dni'";
                                    $result_tasks = mysqli_query($conn, $query); 
                                    while($row = mysqli_fetch_assoc($result_tasks)) { 

                                    ?>
                                
                                    <tr >
                                        <td><?php echo $row['fecha'];?></td>
                                        <td><?php echo $row['hora'];?></td>
                                        <td><?php echo $row['dni'];?></td>
                                        <td><?php echo $row['especialidad'];?></td>                     
                                        <td><?php echo $row['responsable'];?></td> 
                                        
                                    </tr>

                                    <?php } ?>

                                    <!--end of modal-->
                                </tbody>
                            </table>
                            </div>
                            <div class="cabecera-tabla"></div>
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
    <!-- <script>
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
    </script> -->
    <!-- /gauge.js -->
</body>
</html>