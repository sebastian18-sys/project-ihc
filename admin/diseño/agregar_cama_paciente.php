<?php 
include 'header.php';
include '../../base_datos/db.php';
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
            <h3 class="box-title"> Agregar paciente a cama UCI</h3>
          </div>
          <div class="box-body">
            <table ID="example22" class="table table-bordered table-striped">

              <!-- Cabecera de la tabla -->
              <thead>
                <tr>
                  <th>DNI</th>
                  <th>Nombres</th>
                  <th>Apellidos</th>
                  <th class = "text-center">Agregar a UCI</th>
                </tr>
              </thead>

              <tbody>

<?php

$query = "SELECT p.dni as dni, p.nombres, p.apellidos FROM pacientes as p
left join camas_uci as c
ON p.dni = c.dni 
WHERE c.reservado IS NULL and p.dni != '123'";

$result_tasks = mysqli_query($conn, $query); 
while($row = mysqli_fetch_assoc($result_tasks)) { 

?>

                <tr>
                  <td><?php echo $row['dni'];?></td>
                  <td><?php echo $row['nombres'];?></td>
                  <td><?php echo $row['apellidos'];?></td>

                  <td class  ="text-center">                    
                    <a href="validar_agregar_cama_paciente.php">
                    <i class="fa fa-bed" aria-hidden="true"></i>
                    <?php
                    $_SESSION['dni_p'] = $row['dni'];
                    $_SESSION['nombres_p'] = $row['nombres'];
                    $_SESSION['apellidos_p'] = $row['apellidos'];
                    ?>
                    </a>
                  </td> 

                </tr>
                <?php } ?>

              </tbody>
            </table>
            
            <script type="text/javascript">
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
                
                  for (var j = 0; j < cellsOfRow.length && !found; j++) { 
                    compareWith = cellsOfRow[j].innerHTML.toLowerCase();

                    if(busqueda.length == 0 || (compareWith.indexOf(busqueda) > -1)){
                      found = true;
                    }
                  }

                  if(found){
                    tabla.rows[i].style.display = '';
                  }else {
                    tabla.rows[i].style.display = 'none';
                  }
                }
              }
            </script>

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
