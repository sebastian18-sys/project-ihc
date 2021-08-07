<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;
$num_pedido=$_GET['num_pedido'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
  

  <title>COMPROBANTE</title>


  <link rel='stylesheet' type='text/css' href='../css/style.css' />
  <link rel='stylesheet' type='text/css' href='../css/print.css' media="print" />
  <script type='text/javascript' src='../js/jquery-1.3.2.min.js'></script>
  <script type='text/javascript' src='../js/example.js'></script>


<style>

.left{
    float: left;

}
.right{
    float: right;

}
.center{

   display:inline-block
}
@media print {
    .btn-print {
      display:none !important;
    size:30px;
    }

}
hr {
  height: 3px;
  width: 100%;
  background-color: black;
}
#abajo{
    height: 3px;
  width: 30%;
  background-color: black;
}
tr{
  font-family:'Helvetica','Verdana','Monaco',sans-serif;
  border:none; font-size: 15px;

}
#terminos{
    border:none; font-size: 8px;
}
</style>
</style>
</head>

<body>
 <?php include '../layout/dbcon.php';?>

  <?php
  

$total_todos=0;

    $query3=mysqli_query($con,"select * from clientes AS u INNER JOIN ventas_servicios AS p
      ON u.id_cliente = p.id_cliente where id_pedido='$num_pedido' ")or die(mysqli_error($con));

   while($row3=mysqli_fetch_array($query3)){

         $nombre_cliente=$row3['nombre'];
     $telefono_cliente=$row3['telefono'];
          $fecha=$row3['fecha'];
            $id_vendedor=$row3['id_sesion'];
          
      }

       
    $query2=mysqli_query($con,"select * from usuario  where id='$id_vendedor' ")or die(mysqli_error($con));

   while($row2=mysqli_fetch_array($query2)){

         $nombre_vendedor=$row2['nombre'];
     $telefono_vendedor=$row2['telefono'];
     
      }

       

$sum=0;
      

    $query5=mysqli_query($con,"select * from detalles_ventas_servicios  where id_pedido='$num_pedido' ")or die(mysqli_error($con));

   while($row5=mysqli_fetch_array($query5)){
        $sum=$sum+$row5['monto'];
        


      }




    $query11=mysqli_query($con,"select * from empresa where id_empresa='1' ")or die(mysqli_error($con));

   while($row11=mysqli_fetch_array($query11)){
        $empresa=$row11['empresa'];
        $nit=$row11['ruc'];
    $moneda=$row11['moneda'];
   $simbolo_moneda=$row11['simbolo_moneda'];
      }
  ?>


  <div id="page-wrap">

    <div class="container">

   <div class="right">

     <div id="customer">

     </div>

       </div>



         <div class="left">
<table class="table table-bordered table-striped"  style="border:none;">
        <tbody>
          <tr style="border:none; " >
            <td style="border:none;" > </td>
            <td style="border:none;" ></td>
            <td style="border:none;" ></td>
            <td style="border:none;" ></td>
            <td style="border:none;" ></td>
            <td style="border:none;" > </td>
            <td style="border:none; " ></td>
              <td style="border:none; " ></td>
                <td style="border:none; " ></td>
       
         
       
            <td style="border:none;">
                        <h3><?php echo $empresa;?></h3>
                          <h3><?php echo $nit;?></h3>
                       
                          <h3>Cliente: <?php echo $nombre_cliente;?></h3>
                          <h3>Telefono: <?php echo $telefono_cliente;?></h3>
                 
                      
                          
            </td>
            <td style="border:none;">&nbsp;</td>
            <td style="border:none;">&nbsp;</td>
          </tr>
          <tr style="border:none; ">
            <td style="border:none;"></td>
            <td style="border:none;"></td>
            <td style="border:none;"></td>
            <td style="border:none;"></td>
            <td style="border:none;"></td>
            <td style="border:none;"> </td>
            <td style="border:none;"></td>
            <td style="border:none;"></td>
            <td style="border:none;">&nbsp;</td>
            <td style="border:none; ">&nbsp;</td>
          </tr>
  
               
  </tbody>
      </table>


       </div>
          <div class="right">

     <div id="customer">
          <table class="table table-bordered table-striped"  >
                    <thead>
                      <tr>


                        <th><h3>Nun: <?php echo $num_pedido;?></h3>
                         <h3> Fecha: <?php echo $fecha;?></h3>
                        </th>
                  
                        
                      
                      </tr>
                    </thead>
                    <tbody>

                 
              
                   </tbody>

                  </table>    
<br>
                       <table class="table table-bordered table-striped"  >
                    <thead>
                      <tr>



                        </th>
                  
                        
                      
                      </tr>
                    </thead>
                    <tbody>

                 
              
                   </tbody>

                  </table>  
<br>




     </div>

       </div>
       <br><br><br><br><br><br><br><br><br><br><br><br><br>    <br>
<table class="table table-bordered table-striped"  style="border:none;">
        <tbody>
          <tr style="border:none; " >
            <td style="border:none;" > </td>
            <td style="border:none;" ></td>
            <td style="border:none;" ></td>
            <td style="border:none;" ></td>
            <td style="border:none;" ></td>
            <td style="border:none;" > </td>
            <td style="border:none; " ></td>
              <td style="border:none; " ></td>
                <td style="border:none; " ></td>
                  <td style="border:none; " ></td>
                    <td style="border:none; " ></td>
                      <td style="border:none; " ></td>
                        <td style="border:none; " ></td>
                                      <td style="border:none; " ></td>
                <td style="border:none; " ></td>
                  <td style="border:none; " ></td>
                    <td style="border:none; " ></td>
                      <td style="border:none; " ></td>
                        <td style="border:none; " ></td>
                                      <td style="border:none; " ></td>
                <td style="border:none; " ></td>
                  <td style="border:none; " ></td>
                    <td style="border:none; " ></td>
                      <td style="border:none; " ></td>
                        <td style="border:none; " ></td>
                                      <td style="border:none; " ></td>
                <td style="border:none; " ></td>
                  <td style="border:none; " ></td>
                    <td style="border:none; " ></td>
                      <td style="border:none; " ></td>
                        <td style="border:none; " ></td>
      
              <h4></h4>

            </td>
            <td style="border:none;">&nbsp;</td>
            <td style="border:none;">&nbsp;</td>
          </tr>
          <tr style="border:none; ">
            <td style="border:none;"></td>
            <td style="border:none;"></td>
            <td style="border:none;"></td>
            <td style="border:none;"></td>
            <td style="border:none;"></td>
            <td style="border:none;"> </td>
            <td style="border:none;"></td>
            <td style="border:none;"></td>
            <td style="border:none;">&nbsp;</td>
            <td style="border:none; ">&nbsp;</td>
          </tr>
  
               
  </tbody>
      </table>

<center>
       <h1><?php echo $empresa;?></h1>
</center>

<table class="table table-bordered table-striped"  style="border:none;">
        <tbody>
          <tr style="border:none; " >
            <td style="border:none;" > </td>
            <td style="border:none;" ></td>
            <td style="border:none;" ></td>
            <td style="border:none;" ></td>
            <td style="border:none;" ></td>
            <td style="border:none;" > </td>
            <td style="border:none; " ></td>
              <td style="border:none; " ></td>
                <td style="border:none; " ></td>
       
         
       
            <td style="border:none;">
                        <h5>Concepto venta veterinaria</h5>
                            <br>
   <br>
      <br>
         <a class = "btn btn-success btn-print" style="    text-decoration: none;
    padding: 10px;
    font-weight: 600;
    font-size: 20px;
    color: #ffffff;
    background-color: #1883ba;
    border-radius: 6px;
    border: 2px solid #0016b0; " href = "" onclick = "window.print()"><i class ="glyphicon glyphicon-print"></i> Impresión </a>
    <br>
   <br>
      <br>





    <a class = "btn btn-success btn-print" style="    text-decoration: none;
    padding: 10px;
    font-weight: 600;
    font-size: 20px;
    color: #ffffff;
    background-color: #1883ba;
    border-radius: 6px;
    border: 2px solid #0016b0; " href = "ventas_servicios_totales.php" ><i class ="glyphicon glyphicon-print"></i>Regresar</a>

          
 
            </td>
            <td style="border:none;">&nbsp;</td>
            <td style="border:none;">&nbsp;</td>
          </tr>

  
               
  </tbody>
      </table>



                 
                  


<br>

                  

            <table class="table table-bordered table-striped"  >
                    <thead>
                      <tr>

            <td style="border:none;" > </td>
            <td style="border:none;" ></td>
            <td style="border:none;" ></td>
            <td style="border:none;" ></td>
            <td style="border:none;" ></td>
            <td style="border:none;" > </td>
            <td style="border:none; " ></td>
              <td style="border:none; " ></td>
                <td style="border:none; " ></td>
       
         
       
            <td style="border:none;">
                        <th style="border:none;">Descripcion</th>
                        <th style="border:none;">Monto</th>

                        
                               <th style="border:none;">Sub Total</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php

                      $total=0;
                                     $query4=mysqli_query($con,"select * from detalles_ventas_servicios 
  where id_pedido='$num_pedido'")or die(mysqli_error($con));
                    while ($row4=mysqli_fetch_array($query4)){
                     $total= $row4['monto'];

                      ?>
                      <tr style="border:none;  ">
                                    <td style="border:none;" > </td>
            <td style="border:none;" ></td>
            <td style="border:none;" ></td>
            <td style="border:none;" ></td>
            <td style="border:none;" ></td>
            <td style="border:none;" > </td>
            <td style="border:none; " ></td>
              <td style="border:none; " ></td>
                <td style="border:none; " ></td>
       
         

            <td style="border:none;">
              <td style="width: 300px;"><?php echo $row4['descripcion'];?></td> 
                <td style="width: 300px;"><?php echo $simbolo_moneda;?><?php echo number_format($row4['monto'],2);?></td> 
            
          
                  <td><?php echo $simbolo_moneda;?><?php echo number_format($row4['monto'],2);?></td>
              </tr>
         <?php
            }
              ?>
                 
              
                   </tbody>

                  </table>    



         <div class="left">

            <table class="table table-bordered table-striped"  >
                    <thead>
                      <tr>
  <th style="border:none;"></th>

               
                        <th style="border:none;"></th>
                        <th style="border:none;"></th>
                        
                      
                      </tr>
                    </thead>
                    <tbody>
                          <tr >
             <tr style="border:none;  ">
             <tr style="border:none; " >
            <td style="border:none;" > </td>
            <td style="border:none;" ></td>
            <td style="border:none;" ></td>
            <td style="border:none;" ></td>
            <td style="border:none;" ></td>
            <td style="border:none;" > </td>
            <td style="border:none; " ></td>
              <td style="border:none; " ></td>
                <td style="border:none; " ></td>
       
         
       
            <td style="border:none;">

               
      
              </tr>

                   
                 
                  
                 </tr> 
                   </tbody>

                  </table>   

      
       </div>


          
          <div class="right">

     <div id="customer">
    




                            <table class="table table-bordered table-striped"  >
                    <thead>
                      <tr>


                         <td ><h4>TOTAL  </h4></td>
       <td ><h4><?php echo $simbolo_moneda;?> <?php echo number_format($sum,2);?>  </h4><br> </td>
                        </th>
                  
                        
                      
                      </tr>
                    </thead>
                    <tbody>

                 
              
                   </tbody>

                  </table> 
     </div>

       </div>

   
   

                
<br>
<br>

<br><br><br><br><br>
<p id="terminos"> 


</p>

                    <CENTER>

            <table class="table table-bordered table-striped"  style="border:none;">
                    <thead>
                      <tr>


                        <th style="border:none;"></th>
                        <th style="border:none;"></th>
                       
                        
                      
                      </tr>
                    </thead>
                    <tbody>
                          <tr >

    <tr style="border:none;  width: 70px">
          <tr style="border:none; width: 70px ">
             <tr style="border:none;  ">
              <td style="border:none;"></td> 
                <td style="border:none; "></td>    
<td style="border:none;">------------------------------------------------</td> 
<td style="border:none;"></td> 
<td style="border:none;"></td> 
                    <td style="border:none;"> </td> 
                <td style="border:none; "></td>  

                <td style="border:none;">------------------------------------------------</td> 
                    <td style="border:none;"> </td>   
                <td style="border:none; "></td> 
              </tr>
                 <tr style="border:none; ">
                      <tr style="border:none;  ">
                            <tr style="border:none;  ">
              <td style="border:none; width: 70px"></td> 
                <td style="border:none; width: 70px"> </td> 
                <td style="border:none;"> <?php echo $nombre_vendedor;?>:</td> 
<td style="border:none;"></td> 
<td style="border:none;"></td> 
                    <td style="border:none;"> </td> 
                <td style="border:none; "></td>  

                <td style="border:none;">ENTREGUE CONFORME</td> 
                    <td style="border:none;"> </td> 
                <td style="border:none; "></td>     
              </tr>
       
                  
                 </tr> 
                   </tbody>

                  </table>
                  </CENTER>


       
</body>

</html>
