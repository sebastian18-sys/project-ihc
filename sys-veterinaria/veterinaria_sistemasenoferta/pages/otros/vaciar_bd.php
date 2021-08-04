<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../../dist/includes/dbcon.php');






    mysqli_query($con,"delete from caja	 ")or die(mysqli_error());
    mysqli_query($con,"delete from citas")or die(mysqli_error());
       mysqli_query($con,"delete from clientes ")or die(mysqli_error());
       mysqli_query($con,"delete from detalles_pedido ")or die(mysqli_error());
              mysqli_query($con,"delete detalles_ventas_servicios  ")or die(mysqli_error());
  
                  mysqli_query($con,"delete historial	  ")or die(mysqli_error());        
    mysqli_query($con,"delete pedidos	")or die(mysqli_error());  
    mysqli_query($con,"delete producto")or die(mysqli_error());  
 
      mysqli_query($con,"delete ventas_servicios")or die(mysqli_error());       
 
  echo "<script>document.location='../layout/inicio.php'</script>";  
  
  
?>