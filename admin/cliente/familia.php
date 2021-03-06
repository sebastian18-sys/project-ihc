<?php include 'header.php'; 
    session_start();
    error_reporting(0);
    $varsesion=$_SESSION['var_user'];
    $user=$_SESSION['nombre'];
    $dni=$_SESSION['Dni'];
    $lastname=$_SESSION['apellido'];
    $phone=$_SESSION['telefono'];
    $insurence=$_SESSION['seguro'];
    include '../../base_datos/db.php'
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
                    <h3 class="box-title">Mi familia</h3>
                </div>
                <!-- /.box-header -->
                
                <div class="box-body">
                    <!-- /.box-header -->
                    <div class="box-body">
                         
                        <a href="./registrar_familia.php" class="btn btn-primary" ><span class="btn btn-transparent_blue blue_sf margin_0 f-bold border_radius_18px">
                            <span style="font-size: 18px">Agrega un familiar</span>
                            <i class="fas fa-plus-circle" style="font-size: 25px"></i>
                        </span></a> 
                        <div class="box-body">
                            <div class="row">

                                <!-- <div class="col-md-12"> -->
                                    
                                <div class="col-lg-3 col-sm-6 col-xs-12">
                                    <!-- small box -->
                                    <div class="small-box bg-aqua">
                                    <div class="inner">
                                        
                                        <i class="fas fa-user"></i>
                                        <h3>Tu cuenta</h3>
                                        <h4>Cliente</h4>
                                            
                                    </div>
                                        
                                        <!-- <div class="icon"><img height="80" width="80" src="img/cajero.png">
                                            <i class=""></i>
                                        </div> -->
                                    <a href="editar_paciente.php" class="small-box-footer">Editar <i class="fas fa-edit"></i></a>
                                    </div>
                                </div>
                                <!-- </div> -->

                                <?php
                                    $query = "SELECT * FROM familiares WHERE dni = '$dni'";
                                    $result_tasks = mysqli_query($conn, $query); 
                                    while($row = mysqli_fetch_assoc($result_tasks)) { 
                                ?>
                                
                                <div class="col-lg-3 col-sm-6 col-xs-12">
                                  
                                    <div class="small-box bg-aqua">
                                    <div class="inner">
                                        
                                        <i class="fas fa-user"></i>
                                        <h3>Familiar: <?php echo $row['nombre'] ?> </h3>
                                        <h4> <?php echo $row['parentesco'] ?>  </h4>
                                            
                                    </div>
                                        
                    
                                    <a href="editar_familiar.php" class="small-box-footer">Editar <i class="fas fa-edit"></i></a>
                                    </div>
                                </div>
                                
                                    

                                <?php  } ?>




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
