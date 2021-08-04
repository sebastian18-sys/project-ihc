<?php include '../layout/dbcon.php';?>

<?php 
 @session_start();





//$idusuario=$_SESSION["idusuario"];
   $fechaactual = date('Y-m-d');

$porcentaje_impuesto=0;
$simbolo_moneda="";
       $query=mysqli_query($con,"select * from empresa  ")or die(mysqli_error());
    $i=1;
    while($row=mysqli_fetch_array($query)){
 //   $porcentaje_impuesto=$row['impuesto'];
      $simbolo_moneda=$row['simbolo_moneda'];
}

?>

  <?php


    $id_sesion=$_SESSION['id']; 
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="../ventas_servicios/css/styles.css">

    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      <script>
$(document).ready(function() {
    $('#key').on('keyup', function() {
        var key = $(this).val();        
        var dataString = 'key='+key;
    $.ajax({
            type: "POST",
            url: "ajax.php",
            data: dataString,
            success: function(data) {
                //Escribimos las sugerencias que nos manda la consulta
                $('#suggestions').fadeIn(1000).html(data);
                //Al hacer click en algua de las sugerencias
                $('.suggest-element').on('click', function(){
                        //Obtenemos la id unica de la sugerencia pulsada
                        var id = $(this).attr('id');
                     
                           var idlcliente      = $(this).attr('id').substring(7,10).match(/\d+/); 
                        //Editamos el valor del input con data de la sugerencia pulsada
                        $('#key').val($('#'+id).attr('data'));
                        //Hacemos desaparecer el resto de sugerencias
                        $('#suggestions').fadeOut(1000);
                        alert('Has seleccionado a '+' '+$('#'+id).attr('data'));
 document.f1.cliente.value = idlcliente;
                 
 document.f1.clientenombre.value = $('#'+id).attr('data');
                        return false;
                });
            }
        });
    });
}); 



</script>        

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ventas servicios </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="../ventas_servicios/public/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../ventas_servicios/public/css/font-awesome.css">
   
    <!-- Theme style -->
    <link rel="stylesheet" href="../ventas_servicios/public/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../ventas_servicios/public/css/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
      #myInput {
  background-image: url('../ventas_servicios/css/buscador.png'); /* Add a search icon to input */
  background-position: 10px 12px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 100%; /* Full-width */
  font-size: 16px; /* Increase font-size */
  padding: 12px 20px 12px 40px; /* Add some padding */
  border: 1px solid #ddd; /* Add a grey border */
  margin-bottom: 12px; /* Add some space below the input */
}

#myUL {
  /* Remove default list styling */
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myUL li a {
  border: 1px solid #ddd; /* Add a border to all links */
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6; /* Grey background color */
  padding: 12px; /* Add some padding */
  text-decoration: none; /* Remove default text underline */
  font-size: 18px; /* Increase the font-size */
  color: black; /* Add a black text color */
  display: block; /* Make it into a block element to fill the whole list */
}

#myUL li a:hover:not(.header) {
  background-color: #eee; /* Add a hover effect to all links, except for headers */
}

    </style>
  </head>
  <body class="hold-transition login-page">
           <?php    
if(!isset($_SESSION["carrito_servicios"])) $_SESSION["carrito_servicios"] = [];
$granTotal = 0;
$impuTotal = 0;
?>
  <div class="col-xs-12">
    <h4>Preescripcion medica</h4>
    <?php
      if(isset($_GET["status"])){
        if($_GET["status"] === "1"){
          ?>
            <div class="alert alert-success">
              <strong>¡Correcto!</strong> Venta realizada correctamente
            </div>
          <?php
        }else if($_GET["status"] === "2"){
          ?>
          <div class="alert alert-info">
              <strong>Venta cancelada</strong>
            </div>
          <?php
        }else if($_GET["status"] === "3"){
          ?>
          <div class="alert alert-info">
              <strong>Ok</strong> Producto quitado de la lista
            </div>
          <?php
        }else if($_GET["status"] === "4"){
          ?>
          <div class="alert alert-warning">
              <strong>Error:</strong> El producto que buscas no existe
            </div>
          <?php
        }else if($_GET["status"] === "5"){
          ?>
          <div class="alert alert-danger">
              <strong>Error: </strong>El producto está agotado
            </div>
          <?php
        }else{
          ?>
          <div class="alert alert-danger">
              <strong>Error:</strong> Algo salió mal mientras se realizaba la venta
            </div>
          <?php
        }
      }
    ?>
    <br>


  <br>
  <section class="content">
          <div class="row">
            <!-- left column -->
            <div class="col-md-4">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
           
                </div><!-- /.box-header -->
                <!-- form start -->
                 <form role="form" id="frmAcceder" name="frmAcceder">
                  <div class="box-body">
                  <div class="row">
                    <div class="col-xs-12">
                   <br><br>
    <table class="table table-bordered">
      <thead>
        <tr>

 
          <th>descripcion</th>
          <th>monto</th>
       
 
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($_SESSION["carrito_servicios"] as $indice => $servicios){ 



          ?>
        <tr>

          <td><?php echo $servicios->descripcion ?></td>
          <td><?php echo $servicios->monto ?></td>
    
 
          <td><a class="btn btn-danger" href="../ventas_servicios/<?php  echo "quitarDelCarrito.php?indice=$indice";?>"><i class="fa fa-trash"></i></a>
     
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>








                    </div>
                  </div> 
                  </div><!-- /.box-body -->

                  <div class="box-footer">

                    <a type="button" href="../layout/<?php  echo "inicio.php";?>" class="btn btn-danger">Regresar</a>
                  </div>
                </form>
              </div><!-- /.box -->

              

              

              
            </div><!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-8">
              <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">POS SERVICIOS</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                
                  <div class="box-body">
                  <div class="box">
                
                <div class="box-body no-padding">
        <div class="row">
        <div id="content" class="col-lg-12">
<form class="form-inline" method="post" action="#">

</form>
<div id="suggestions"></div>
        </div>
    </div>
   <br>   <br> 

   
      <form  class="form-inline" name="f1" action="../ventas_servicios/terminarVenta.php" method="POST">


 <input name="id_sesion" type="hidden" value="<?php echo $id_sesion;?>">

      <h3>Seleccione mascota</h3>
    <div class="input-group input-group-sm">
        <input class="search_query form-control" type="text" name="key" id="key" placeholder="Buscar..." required>
        <span class="input-group-btn">
            <button type="submit" class="btn btn-info btn-flat"><i class="fa fa-search"></i></button>
        </span>
    </div>
<br>

   


 







        


             







        






     <input name="cliente" id="cliente" type="hidden"  required>
<br>
      <button type="submit" class="btn btn-success">Terminar venta</button>


    </form>

<?php

  # code...

?>
<br>
<br>
 <button type="button" class="btn btn-primary btn-lg btn-print" data-toggle="modal" data-target="#miModal">
  AGREGAR SERVICIO
</button>
     <?php
                 //     }
                      ?>
<div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
                        <div class="box-body">
                  <!-- Date range -->
                  <form method="post" action="agregar_carrito.php" enctype="multipart/form-data" class="form-horizontal">
         

  
   
                  




   <div class="col-md-12 btn-print">
                      <div class="form-group">
                        <label for="date" class="col-sm-3 control-label">Descripcion</label>
                        <div class="input-group col-sm-8">
                     <textarea class="form-control" id="descripcion" name="descripcion"></textarea>
                        </div><!-- /.input group -->
                      </div><!-- /.form group -->
                    </div>

   <div class="col-md-12 btn-print">
                      <div class="form-group">
                        <label for="date" class="col-sm-3 control-label">Monto</label>
                        <div class="input-group col-sm-8">
                          <input type="text" class="form-control pull-right" id="monto" name="monto" placeholder="precio" required >
                        </div><!-- /.input group -->
                      </div><!-- /.form group -->
                    </div>



  
   

                    <div class="col-md-12">
                       <div class="col-md-12">
                        <button class="btn btn-lg btn-primary btn-print" id="daterange-btn"  name="">Agregar</button>
                          <button type="button" class="btn btn-danger" data-dismiss="modal">CERRAR</button>
                         </div>

                    </div>

          </form>

          </div>
      </div>
   
    </div>
  </div>
</div>

                  <div class="row">
                        

                   <div class="box-body">
                
         

 

             <div class="col-lg-4 col-xs-6">
                        <!-- small box -->
               
    

 <?php

 ?>


          
      






      












             

                  
                          </div>
                        
                   
                        </div>
                      </div><!-- ./col -->








       

                   

                                        <?php
                      
                     
                      ?>

   


          








                  </div><!--row-->

                  <?php

 ?>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

                  
              </div><!-- /.box -->
              <!-- general form elements disabled -->
                          </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
<script>
function myFunction() {
  // Declare variables
  var input, filter, ul, li, a, i, txtValue;
  input = document.getElementById('myInput');
  filter = input.value.toUpperCase();
  ul = document.getElementById("myUL");
  li = ul.getElementsByTagName('li');

  // Loop through all list items, and hide those who don't match the search query
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    txtValue = a.textContent || a.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}



/* Sumar dos números. */
function sumar (valor) {
 var impuTotal  = '<?php echo $impuTotal; ?>';
          var granTotal  = '<?php echo $granTotal; ?>';
        //  $granTotal=$granTotal*$porcentaje_impuesto/100+$granTotal;
    var total = 0;  
    valor = parseInt(valor); // Convertir el valor a un entero (número).
  
    total = document.getElementById('spTotal').innerHTML;
  
    // Aquí valido si hay un valor previo, si no hay datos, le pongo un cero "0".
    total = (total == null || total == undefined || total == "") ? 0 : total;
  
    /* Esta es la suma. */
    total = ( (valor) -(granTotal)-impuTotal);
  
    // Colocar el resultado de la suma en el control "span".
    document.getElementById('spTotal').innerHTML = total;
}
</script>
    <!-- jQuery 2.1.4 -->
    <script src="../ventas_servicios/public/js/jquery.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../ventas_servicios/public/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="../ventas_servicios/public/js/icheck.min.js"></script>
    

  </body>
</html>
<?php


  
?>